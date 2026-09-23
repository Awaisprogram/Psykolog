<?php
/**
 * Template Name: Privacy Policy
 */
if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_uri = get_template_directory_uri();
$book_url  = esc_url(home_url('/bestill-time/'));
$prices_url = esc_url(home_url('/priser/'));

$sections = [
    ['id' => 'safety',           'label' => 'Safety, security, responsibility'],
    ['id' => 'what-is-recorded', 'label' => 'What is recorded?'],
    ['id' => 'contact',          'label' => 'Contact information'],
    ['id' => 'what-data',        'label' => 'What personal data do we process?'],
    ['id' => 'disclosure',       'label' => 'Disclosure of personal data'],
    ['id' => 'secure-storage',   'label' => 'Secure storage of personal data'],
    ['id' => 'deletion',         'label' => 'Deletion of information'],
    ['id' => 'your-rights',      'label' => 'Your rights'],
    ['id' => 'cookies',          'label' => 'Cookies'],
    ['id' => 'security',         'label' => 'Security'],
    ['id' => 'external-links',   'label' => 'External links and IP addresses'],
    ['id' => 'questions',        'label' => 'Do you have questions?'],
];

$summary_links = [
    ['href' => '#what-is-recorded', 'label' => 'What is recorded?', 'icon' => 'file'],
    ['href' => '#contact',          'label' => 'Contact information', 'icon' => 'user'],
    ['href' => '#what-data',        'label' => 'What personal data do we process?', 'icon' => 'list'],
    ['href' => '#disclosure',       'label' => 'Disclosure of personal data', 'icon' => 'share'],
    ['href' => '#secure-storage',   'label' => 'Secure storage of personal data', 'icon' => 'box'],
    ['href' => '#deletion',        'label' => 'Deletion of information', 'icon' => 'trash'],
];

$rights_items = [
    'Right to request access to and receive a copy of your records.',
    'Right to request corrections to your data (with a 30-day response timeframe).',
    'Right to request deletion where we no longer have a legal basis to retain data.',
    'Right to restrict processing in certain circumstances.',
    'Right to data portability for information you have provided.',
    'Right to lodge a complaint with the State Administrator (Statsforvalteren) or the Norwegian Data Protection Authority (Datatilsynet).',
];

$cookie_rows = [
    ['Necessary',   'Required for the website to function securely and correctly.'],
    ['Preferences', 'Remember your settings and choices on the site.'],
    ['Statistics',  'Help us understand how visitors use the website (anonymous analytics).'],
    ['Marketing',   'Used only if you consent, to show relevant content or campaigns.'],
];

function privacy_icon($type)
{
    $common = 'viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="w-[18px] h-[18px]"';
    switch ($type) {
        case 'file':
            return '<svg ' . $common . '><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>';
        case 'user':
            return '<svg ' . $common . '><circle cx="12" cy="8" r="4"/><path d="M4 20a8 8 0 0 1 16 0"/></svg>';
        case 'list':
            return '<svg ' . $common . '><path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/></svg>';
        case 'share':
            return '<svg ' . $common . '><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="M8.59 13.51l6.83 3.98M15.41 6.51l-6.82 3.98"/></svg>';
        case 'box':
            return '<svg ' . $common . '><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="M3.3 7.7L12 12.5l8.7-4.8M12 22V12.5"/></svg>';
        case 'trash':
            return '<svg ' . $common . '><path d="M3 6h18M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg>';
        case 'lock':
            return '<svg ' . $common . '><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/></svg>';
        case 'mail':
            return '<svg ' . $common . '><path d="M4 4h16v16H4z"/><path d="M4 4l8 8 8-8"/></svg>';
        default:
            return '';
    }
}
?>

<main id="privacy-policy" class="privacy-policy">
    <!-- Hero -->
    <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[300px] lg:min-h-[400px]">
        <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[150px] lg:pb-[88px]">
            <div class="max-w-[1312px] mx-auto text-center">
                <h1 class="font-serif font-bold text-brand-darkest mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]">
                    Privacy Policies
                </h1>
                <p class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0 max-w-3xl mx-auto">
                    We are committed to protecting your personal data, maintaining strict confidentiality, and ensuring full compliance with GDPR and Norwegian data protection regulations.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
                    <a href="<?php echo $book_url; ?>" class="inline-flex items-center justify-center gap-2 bg-brand hover:bg-brand-hover text-white font-bold text-[15px] px-6 py-3 rounded-full transition-colors no-underline">
                        Book a time <span aria-hidden="true">→</span>
                    </a>
                    <a href="<?php echo $prices_url; ?>" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-[#FBF3EF] text-brand border border-brand font-bold text-[15px] px-6 py-3 rounded-full transition-colors no-underline">
                        See prices <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="py-12 lg:py-20 bg-white" data-reveal>
        <div class="container mx-auto px-4 md:px-12 lg:px-16 max-w-[1312px]">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 xl:gap-16 items-start">

                <aside class="lg:col-span-4 xl:col-span-3 lg:sticky lg:top-32 self-start">
                    <nav id="privacyNav" class="privacy-nav flex flex-col gap-1 text-[15px] font-medium text-ink-body" aria-label="On this page">
                        <?php foreach ($sections as $i => $sec) : ?>
                            <a
                                href="#<?php echo esc_attr($sec['id']); ?>"
                                data-privacy-section="<?php echo esc_attr($sec['id']); ?>"
                                class="privacy-nav__link py-2 px-3 -mx-3 rounded-[10px] transition-colors no-underline text-ink-body hover:text-brand<?php echo $i === 0 ? ' is-active' : ''; ?>"
                            ><?php echo esc_html($sec['label']); ?></a>
                        <?php endforeach; ?>
                    </nav>
                </aside>

                <div class="lg:col-span-8 xl:col-span-9 flex flex-col gap-12 lg:gap-14 text-[16px] md:text-[17px] leading-[1.75] text-[#33170F]">

                    <article id="safety" class="privacy-section scroll-mt-36" data-privacy-block="safety">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">Safety, security, responsibility</h2>
                        <p class="mb-4">Our online video consultation security standards meet the highest requirements. We maintain strict compliance with GDPR and statutory disclosure regulations to ensure your sessions remain private and secure.</p>
                        <p class="mb-8">Psykolog.no is the data controller for personal data processed through this website and our healthcare services. We process data lawfully, fairly, and transparently, and only for documented purposes related to your care.</p>

                        <p class="font-semibold text-ink-900 mb-4 text-[17px]">Summary</p>
                        <ul class="privacy-summary list-none p-0 m-0 flex flex-col gap-3">
                            <?php foreach ($summary_links as $link) : ?>
                                <li>
                                    <a href="<?php echo esc_attr($link['href']); ?>" class="privacy-summary__link inline-flex items-center gap-3 text-brand font-semibold text-[15px] md:text-[16px] hover:underline no-underline">
                                        <span class="privacy-summary__icon shrink-0 w-9 h-9 rounded-[10px] bg-[#FDE7E1] text-brand inline-flex items-center justify-center" aria-hidden="true">
                                            <?php echo privacy_icon($link['icon']); ?>
                                        </span>
                                        <?php echo esc_html($link['label']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </article>

                    <article id="what-is-recorded" class="privacy-section scroll-mt-36" data-privacy-block="what-is-recorded">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">What is recorded?</h2>
                        <p class="mb-4">We adhere to statutory record-keeping under the <em>Health Personnel Act</em> and the <em>Patient and User Rights Act</em>. All sensitive data is stored in encrypted systems protected with two-factor authentication.</p>
                        <div class="privacy-notice flex gap-4 items-start bg-[#FBF3EF] rounded-[16px] p-5 md:p-6 border border-[#F2E4DC] border-l-[4px] border-l-brand">
                            <span class="shrink-0 w-10 h-10 rounded-full bg-brand text-white inline-flex items-center justify-center" aria-hidden="true">
                                <?php echo privacy_icon('lock'); ?>
                            </span>
                            <div>
                                <strong class="text-ink-900 block mb-2 text-[16px] md:text-[17px]">Confidentiality notice</strong>
                                <p class="mb-0 text-[15px] md:text-[16px] text-ink-body leading-[1.65]">Confidentiality towards your GP, family members, and public authorities strictly applies unless explicit consent is given by you, or specific statutory danger thresholds are met.</p>
                            </div>
                        </div>
                    </article>

                    <article id="contact" class="privacy-section scroll-mt-36" data-privacy-block="contact">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">Contact information</h2>
                        <p class="mb-6 text-ink-body">Contact details for the data controller:</p>
                        <div class="privacy-contact-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 rounded-[16px] border border-[#E8DDD7] overflow-hidden bg-white">
                            <?php
                            $contact_cells = [
                                ['Legal name', 'Psykolog.no'],
                                ['Telephone', '92 84 4444'],
                                ['Email', 'hei@psykolog.no'],
                                ['Postal address', 'Veitvetveien 8, 0586 Oslo'],
                                ['General manager', 'Dr. Rehan Nawaz'],
                                ['Clinic', 'Asenveien 1, 1400 Ski'],
                            ];
                            foreach ($contact_cells as $cell) :
                            ?>
                                <div class="privacy-contact-grid__cell p-5 md:p-6 border border-[#E8DDD7] -mt-px -ml-px">
                                    <span class="block text-[11px] font-semibold tracking-[0.12em] uppercase text-ink-faint mb-2"><?php echo esc_html($cell[0]); ?></span>
                                    <span class="block font-bold text-[16px] md:text-[17px] text-ink-900 leading-snug"><?php echo esc_html($cell[1]); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </article>

                    <article id="what-data" class="privacy-section scroll-mt-36" data-privacy-block="what-data">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">What personal data do we process, and for what purpose?</h2>
                        <p class="mb-4"><strong class="text-ink-900">Categories collected:</strong> Name, national identity number, address, email, phone number, and medical record.</p>
                        <p class="mb-4"><strong class="text-ink-900">Purpose:</strong> Exclusively collected to provide high-quality psychological healthcare services.</p>
                        <p class="mb-0">For more legal references, please visit <a href="https://lovdata.no/" class="text-brand font-semibold hover:underline" target="_blank" rel="noopener noreferrer">lovdata.no</a>. Patients may also access parts of their health information through <a href="https://www.helsenorge.no/" class="text-brand font-semibold hover:underline" target="_blank" rel="noopener noreferrer">helsenorge.no</a> where applicable.</p>
                    </article>

                    <article id="disclosure" class="privacy-section scroll-mt-36" data-privacy-block="disclosure">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">Disclosure of personal data</h2>
                        <p class="m-0">We operate with a zero third-party sharing policy. Information is only disclosed where strictly required by law, such as situations involving danger to self or others, or child protection triggers for patients under the age of 18.</p>
                    </article>

                    <article id="secure-storage" class="privacy-section scroll-mt-36" data-privacy-block="secure-storage">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">Secure storage of personal data</h2>
                        <ul class="list-disc pl-6 space-y-3 marker:text-brand m-0">
                            <li><strong class="text-ink-900">Booking system:</strong> makeplans.com</li>
                            <li><strong class="text-ink-900">Journal system:</strong> <a href="https://www.aspit.no/" class="text-brand font-semibold hover:underline" target="_blank" rel="noopener noreferrer">Aspit.no</a> (Psykbase) with a formal Data Processor Agreement established with Aspit AS.</li>
                            <li><strong class="text-ink-900">Video consultations:</strong> Fully end-to-end encrypted; absolutely no audio, video, or image data is ever saved or stored during sessions.</li>
                        </ul>
                    </article>

                    <article id="deletion" class="privacy-section scroll-mt-36" data-privacy-block="deletion">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">Deletion of information</h2>
                        <p class="m-0">Patient records are securely retained for 10 years after the last entry per legal standards before permanent deletion. We follow strict procedures under Section 43 of the Health Personnel Act regarding any record amendments or deletions.</p>
                    </article>

                    <article id="your-rights" class="privacy-section scroll-mt-36" data-privacy-block="your-rights">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">Your rights</h2>
                        <ul class="privacy-rights list-none p-0 m-0 flex flex-col gap-3">
                            <?php foreach ($rights_items as $item) : ?>
                                <li class="privacy-rights__item flex items-start gap-3 bg-[#FBF3EF] rounded-[14px] px-4 py-4 md:px-5 md:py-[18px] border border-[#F2E4DC]">
                                    <span class="shrink-0 w-6 h-6 rounded-full bg-brand text-white inline-flex items-center justify-center mt-0.5" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="M5 13l4 4L19 7"/></svg>
                                    </span>
                                    <span class="text-[15px] md:text-[16px] text-ink-body leading-[1.6]"><?php echo esc_html($item); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </article>

                    <article id="cookies" class="privacy-section scroll-mt-36" data-privacy-block="cookies">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">Cookies</h2>
                        <p class="mb-6">We use cookies to improve your experience on our website. You can update your preferences or withdraw your consent at any time via our cookie consent manager.</p>
                        <div class="privacy-cookies overflow-hidden rounded-[16px] border border-[#E8DDD7]">
                            <table class="w-full border-collapse text-left text-[15px] md:text-[16px]">
                                <thead>
                                    <tr class="bg-brand text-white">
                                        <th class="font-bold px-5 py-4 md:px-6 md:py-[18px] w-[38%]">Category</th>
                                        <th class="font-bold px-5 py-4 md:px-6 md:py-[18px]">Purpose</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white text-ink-body">
                                    <?php foreach ($cookie_rows as $row) : ?>
                                        <tr class="border-t border-[#E8DDD7]">
                                            <td class="px-5 py-4 md:px-6 md:py-[18px] font-bold text-ink-900 align-top"><?php echo esc_html($row[0]); ?></td>
                                            <td class="px-5 py-4 md:px-6 md:py-[18px] align-top"><?php echo esc_html($row[1]); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </article>

                    <article id="security" class="privacy-section scroll-mt-36" data-privacy-block="security">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">Security</h2>
                        <p class="m-0">Our platforms are protected by rigorous system safeguards including robust password policies, two-factor authentication (2FA), and anti-misuse controls to prevent unauthorized access.</p>
                    </article>

                    <article id="external-links" class="privacy-section scroll-mt-36" data-privacy-block="external-links">
                        <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0">External links and IP addresses</h2>
                        <p class="m-0">We have a strict IP collection policy intended solely for site administration and security monitoring. IP data is never linked to individual user identities or marketing profiles.</p>
                    </article>

                    <article id="questions" class="privacy-section scroll-mt-36" data-privacy-block="questions">
                        <div class="privacy-cta rounded-[24px] bg-brand text-white px-6 py-10 md:px-12 md:py-14 text-center">
                            <h2 class="font-serif font-bold text-[26px] md:text-[32px] lg:text-[36px] text-white mb-4 mt-0 leading-[1.25]">Do you have questions about your privacy?</h2>
                            <p class="text-white/90 text-[16px] md:text-[18px] leading-[1.65] max-w-[640px] mx-auto mb-8">
                                You can contact us at any time regarding access, correction, or deletion of your personal data. We respond to privacy requests as quickly as possible.
                            </p>
                            <a href="mailto:hei@psykolog.no" class="privacy-cta__email inline-flex items-center justify-center gap-3 bg-white text-ink-900 font-bold text-[15px] md:text-[16px] px-8 py-4 rounded-full hover:bg-brand-cream transition-colors no-underline">
                                <span class="w-9 h-9 rounded-full bg-[#FDE7E1] text-brand inline-flex items-center justify-center shrink-0" aria-hidden="true">
                                    <?php echo privacy_icon('mail'); ?>
                                </span>
                                hei@psykolog.no
                            </a>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
