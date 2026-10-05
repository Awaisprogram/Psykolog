from dotenv import load_dotenv
import os
from agents import AsyncOpenAI, OpenAIChatCompletionsModel, RunConfig, set_tracing_disabled

load_dotenv()
set_tracing_disabled(True)  # no OpenAI key, so skip trace export

configs = []

# ------------------------------ groq config ------------------------------

groq_key = os.getenv("GROQ_API_KEY")
groq_config = None

if groq_key:
    groq_client = AsyncOpenAI(
        api_key=groq_key,
        base_url="https://api.groq.com/openai/v1",
    )

    groq_model = OpenAIChatCompletionsModel(
     model="openai/gpt-oss-120b",   # or "openai/gpt-oss-120b" for better quality
        openai_client=groq_client,
    )

    groq_config = RunConfig(
        model=groq_model,
        tracing_disabled=True,
    )
    configs.append(groq_config)