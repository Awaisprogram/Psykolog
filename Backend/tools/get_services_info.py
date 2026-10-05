from agents import function_tool

@function_tool
async def get_services_info():
    """Get information about the psychological services, conditions treated, and pricing."""
    return """
    **Conditions Treated:**
    Anxiety, Depression, ADHD, Burnout, Stress, Sleep Problems, PTSD/Trauma, Relationship issues, Grief, Social anxiety, OCD, Eating disorders, Low self-esteem, Emotional exhaustion.

    **Services & Formats:**
    - Individual therapy
    - Couples therapy
    - Family therapy
    - Child and Adolescent psychology
    - In-Person Consultations (From 1,800 kr per 45 mins)
    - Video Consultations (From 1,500 kr per 45 mins)
    - Gift cards available (valid for 12 months, 1,750 kr)
    - Organisational Psychology (for businesses and healthcare professionals)

    **Key Benefits:**
    - No referral needed
    - Seen within 1 to 3 days (short waiting time)
    - Pay after the session
    - Sessions available during the day, evening, and weekends.
    - Partnership with 600+ major insurance providers.
    """
