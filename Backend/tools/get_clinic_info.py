from agents import function_tool

PHONE_DISPLAY = "96 04 44 44"
PHONE_INTL = "+4796044444"   # Norway country code (+47) + number
WA_NUMBER = "4796044444"     # wa.me needs digits only, no "+"
WA_MESSAGE = "Hei, jeg vil gjerne bestille time"  # pre-filled WhatsApp text (set to "" to disable)


def _wa_link() -> str:
    from urllib.parse import quote
    base = f"https://wa.me/{WA_NUMBER}"
    return f"{base}?text={quote(WA_MESSAGE)}" if WA_MESSAGE else base


@function_tool
async def get_clinic_info():
    """Get information about clinic locations, contact methods, and contact numbers."""
    return f"""
    **Contact Options (copy these three lines EXACTLY, character for character, including the markdown links; add no extra words like "Ring:" inside the brackets):**
    - Phone: [{PHONE_DISPLAY}](tel:{PHONE_INTL})
    - SMS: [{PHONE_DISPLAY}](sms:{PHONE_INTL})
    - WhatsApp: [{PHONE_DISPLAY}]({_wa_link()})

    Other ways to reach us:
    - Bestill time (Book an appointment)
    - Skriv til oss (Write to us)

    **Locations:**
    We offer both online (video) and in-person consultations.
    In-person clinics are located in:
    - Oslo: Street name 00, 0000 Oslo
    - Ski: Street name 00, 1400 Ski

    **Availability:**
    Sessions are available during the morning, day, evening, and weekends.
    Next available appointments are usually within 1 to 3 days.
    """