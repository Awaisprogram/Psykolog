from agents import Agent, Runner, input_guardrail, output_guardrail, GuardrailFunctionOutput, RunContextWrapper
from pydantic import BaseModel
from my_config import configs


class PsykologRelated(BaseModel):
    is_about_psykolog: bool
    reasoning: str


# 🧠 Improved classifier agent
checker_psykolog = Agent(
    name="Psykolog Classifier Agent",
    instructions="""
    Your task is to determine whether a user's message is related to the services, 
    operations, or psychological topics relevant to the "Psykolog.no" clinic.

    Consider a message as **relevant** if it asks about any of the following:
    - Booking a psychologist, waiting times, locations (Oslo, Ski), video consultations.
    - Conditions like anxiety, depression, ADHD, stress, burnout, trauma, grief, etc.
    - Pricing, referrals, insurance, gift cards, confidentiality.
    - Specific psychologists working at the clinic.
    - Mental health advice or questions related to therapy.

    A message is **not relevant** if it:
    - Is about unrelated topics (e.g., math, politics, weather, sports, coding).
    - Asks general or random questions that have no link to mental health or the clinic.

    Respond in JSON with:
    {
      "is_about_psykolog": true/false,
      "reasoning": "short explanation of why"
    }
    """,
    output_type=PsykologRelated,
)


@input_guardrail
async def psykolog_input_checker(ctx: RunContextWrapper, agent: Agent, input) -> GuardrailFunctionOutput:
    try:
        response = None
        for config in configs:
            try:
                response = await Runner.run(checker_psykolog, input, run_config=config)
                break
            except Exception as e:
                print(f"Guardrail model config failed, trying next. Error: {e}")
                continue
                
        if not response:
            raise Exception("All models failed in guardrail.")
            
        output = response.final_output

        # 🧩 If the model is uncertain or finds it somewhat relevant, treat as related.
        is_related = output.is_about_psykolog

        # Add soft matching — if query mentions psykolog keywords, don’t trigger.
        psykolog_keywords = [
            "psykolog", "psychologist", "therapy", "anxiety", "depression", "adhd",
            "stress", "burnout", "price", "cost", "book", "appointment", "clinic",
            "oslo", "ski", "video", "referral", "session", "help"
        ]
        lower_input = input.lower()
        if any(word in lower_input for word in psykolog_keywords):
            is_related = True

        return GuardrailFunctionOutput(
            output_info=output,
            tripwire_triggered=not is_related,
        )

    except Exception as e:
        # If the classifier fails, default to no tripwire
        return GuardrailFunctionOutput(
            output_info={"error": str(e)},
            tripwire_triggered=False,
        )


@output_guardrail
def psykolog_output_checker(ctx: RunContextWrapper, agent: Agent, output) -> GuardrailFunctionOutput:
    return GuardrailFunctionOutput(
        output_info="passed",
        tripwire_triggered=False,
    )
