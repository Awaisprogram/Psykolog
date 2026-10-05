from agents import function_tool

@function_tool
async def get_faq_info():
    """Get answers to frequently asked questions about Psykolog.no."""
    return """
    **Frequently Asked Questions:**

    - **How much does a psychologist cost?** A standard 45-minute individual session typically costs between 1,200 kr and 1,800 kr.
    - **Do I need a referral?** No, you can book directly without a referral from your GP.
    - **Are conversations confidential?** Yes, all psychologists are legally bound by confidentiality.
    - **How long does therapy last?** It depends on your situation. A treatment plan is discussed after the first session.
    - **How do I pay?** You will receive an SMS link to pay via Vipps or credit card within 48 hours, followed by an invoice.
    - **Can children get help?** Yes, we have psychologists specializing in children and adolescents.
    """
