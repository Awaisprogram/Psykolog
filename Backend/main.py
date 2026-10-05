from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware
from fastapi.responses import StreamingResponse
from pydantic import BaseModel
from agents import (
    Agent,
    Runner,
    InputGuardrailTripwireTriggered , OutputGuardrailTripwireTriggered
)
from openai.types.responses import ResponseTextDeltaEvent
from my_config import configs
from tools.get_services_info import get_services_info
from tools.get_clinic_info import get_clinic_info
from tools.get_psychologists_info import get_psychologists_info
from tools.get_faq_info import get_faq_info
import os
import json
from typing import List, Dict, Literal
from guardrails import (
    psykolog_input_checker,
    psykolog_output_checker,
)

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)


class ChatRequest(BaseModel):
    messages: List[Dict[Literal["role", "text"], str]]


@app.post("/chat")
async def chat(request: ChatRequest):
    print("📥 Received messages:", request.messages)

    async def generate_response():
        try:
            agent = Agent(
                name="Psykolog.no Assistant",
                instructions="""
                - Identity / Role
                You are the Psykolog.no Assistant, a professional and empathetic AI agent representing Psykolog.no, a private psychology clinic in Norway. Your purpose is to provide accurate, clear, and helpful information about the clinic's services, psychologists, pricing, and mental health conditions. You speak in a compassionate, professional, and welcoming tone, ensuring users feel heard and supported.

                - Background About Psykolog.no
                Psykolog.no offers private psychological support with no referral needed and short waiting times (1-3 days). Services include individual, couples, and family therapy, as well as child psychology and organisational psychology. Sessions are available in-person (Oslo and Ski clinics) or via video consultation anywhere in Norway. 

                - Tools Integration Guidelines:
                Services Tool: Call this when asked about what conditions are treated, types of therapies, or general benefits.
                Clinic Tool: Call this when asked about clinic locations, online sessions, or how to contact/book.
                Psychologists Tool: Call this when asked about who works at the clinic or looking for a specialist in a certain area.
                FAQ Tool: Call this when asked about pricing, referrals, confidentiality, or session length.

                - Rules for Tool Use:
                Always prefer actual tool data over default persona data.
                Never fabricate psychologists, prices, or services.
                Politely redirect if the user asks about topics outside mental health or the clinic.
                *Disclaimer*: Always remind users you are an AI assistant and not a substitute for medical advice or emergency services if they express severe distress.
                *Auto-Routing*: If the user explicitly asks for contact information, how to contact you, or asks for the contact page, you MUST append the exact string [ROUTE_CONTACT] at the very end of your response. This will tell the frontend to navigate the user to the contact page.
                When sharing contact methods, output the markdown links from the Clinic Tool EXACTLY as given (tel:, sms:, and wa.me links). Never convert them to plain text or alter the URLs.

                - Response Guidelines:
                Keep answers concise but informative.
                Use a warm, empathetic, and professional tone.
                Structure responses clearly, using bullet points when necessary.

                - Example Responses:
                Q: "How much does a session cost?"
                A: Calls FAQ Tool → shares pricing details clearly.

                Q: "Who can help me with ADHD?"
                A: Calls Psychologists Tool → suggests psychologists specializing in ADHD.
                """,
                tools=[get_services_info, get_clinic_info, get_psychologists_info, get_faq_info],
                input_guardrails=[psykolog_input_checker],
                output_guardrails=[psykolog_output_checker],
            )

            print("⚙️ Running agent...")

            # 🧩 Wrapped Runner.run_streamed inside try/except for Guardrail handling
            try:
                success = False
                last_error = None
                
                for config in configs:
                    try:
                        result = Runner.run_streamed(
                            agent,
                            input="\n".join(
                                [
                                    f"{message['role']}: {message['text']}"
                                    for message in request.messages
                                ]
                            ),
                            run_config=config,
                            
                        )

                        async for event in result.stream_events():
                            if (
                                event.type == "raw_response_event"
                                and isinstance(event.data, ResponseTextDeltaEvent)
                            ):
                                chunk_data = {"chunk": event.data.delta}
                                yield f"{json.dumps(chunk_data)}\n\n"
                                print({"chunk": chunk_data})
                            elif (
                                event.type == "run_item_stream_event"
                                and event.item.type == "tool_call_item"
                            ):
                                print(f"{event.item.raw_item.name} Tool was called")

                        success = True
                        break
                        
                    except InputGuardrailTripwireTriggered:
                        raise
                    except OutputGuardrailTripwireTriggered:
                        raise
                    except Exception as e:
                        print(f"❌ Model failed, trying fallback. Error: {str(e)}")
                        last_error = str(e)
                        continue
                
                if not success:
                    raise Exception(f"All models failed. Last error: {last_error}")

                yield json.dumps({"done": True}) + "\n\n"
                print("✅ Stream completed successfully")

            except InputGuardrailTripwireTriggered:
                alert_msg = "Alert: Guardrail input tripwire was triggered!"
                print(alert_msg)
                yield f"{json.dumps({'error': alert_msg})}\n\n"

            except OutputGuardrailTripwireTriggered:
                alert_msg = "Alert: Guardrail output tripwire was triggered!"
                print(alert_msg)
                yield f"{json.dumps({'error': alert_msg})}\n\n"

        except Exception as e:
            print("❌ Error:", str(e))
            yield f"{json.dumps({'error': str(e)})}\n\n"

    return StreamingResponse(
        generate_response(),
        media_type="text/plain",
        headers={
            "Cache-Control": "no-transform, no-cache",
            "Connection": "keep-alive",
        },
    )


@app.get("/")
async def health():
    guardrails = []
    if psykolog_input_checker:
        guardrails.append("psykolog_input_checker")
    if psykolog_output_checker:
        guardrails.append("psykolog_output_checker")
    tools = []
    if get_services_info:
        tools.append("get_services_info")
    if get_clinic_info:
        tools.append("get_clinic_info")
    if get_psychologists_info:
        tools.append("get_psychologists_info")
    if get_faq_info:
        tools.append("get_faq_info")
    return {
        "status": "healthy",
        "response": "api set" if len(configs) > 0 else "API key missing",
        "tools": tools,
        "guardrails": guardrails,
        "web_url": os.getenv("WEB_URL", "not set"),
    }
