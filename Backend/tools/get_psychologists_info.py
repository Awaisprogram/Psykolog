from agents import function_tool

@function_tool
async def get_psychologists_info():
    """Get information about the psychologists available at Psykolog.no."""
    return """
    **Our Psychologists:**
    All our psychologists are licensed professionals, legally bound by confidentiality.
    
    1. **Ingrid Halvorsen** - Specialist Psychologist (ADHD, ADHD women, Low Self-Esteem)
    2. **Mathias Bjørnstad** - Psychologist (Anxiety, Panic Anxiety, Agoraphobia, OCD, Sleep)
    3. **Sofie Lindqvist** - Psychologist (Relationships, Breakup / Jealousy, Children and Adolescents, Grief)
    4. **Anders Vik** - Specialist Psychologist (Depression, Bipolar Disorder, Guilt / Shame, Loneliness)
    5. **Nora Fjeldstad** - Psychologist (PTSD / Trauma, OCD, Specific Phobias, Eating disorders)
    6. **Henrik Aasen** - Psychologist (Burnout, Stress, Sleep Problems, Exhaustion, Work pressure)
    """
