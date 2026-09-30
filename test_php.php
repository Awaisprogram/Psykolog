<?php
$what_to_send = get_field('what_to_send') ?: [];
$what_heading = $what_to_send['heading'] ?? '';
$what_text = $what_to_send['text'] ?? '';
$what_items = $what_to_send['items'] ?? [];
$alert_heading = $what_to_send['alert_heading'] ?? '';
$alert_text = $what_to_send['alert_text'] ?? '';

if ( $what_heading || $what_items ) : ?>
<section class="bg-white pt-10 pb-16" data-reveal>
    <div class="px-4 md:px-12 lg:px-16">
        <div class="max-w-[1312px] mx-auto">
            <?php if ( $what_heading ) : ?>
                <h2 class="font-serif font-bold capitalize text-[#241C19] text-[32px] md:text-[40px] lg:text-[48px] leading-[1.35] m-0">
                    <?php echo drp_mark( $what_heading ); ?>
                </h2>
            <?php endif; ?>
            
            <?php if ( $what_text ) : ?>
                <p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.65] mt-3.5 mb-0">
                    <?php echo esc_html( $what_text ); ?>
                </p>
            <?php endif; ?>

            <?php if ( $what_items ) : ?>
                <ul class="list-none m-0 p-0 grid grid-cols-1 md:grid-cols-2 gap-4 mt-10">
                    <?php foreach ( $what_items as $item ) : if ( empty( $item['text'] ) ) continue; ?>
                        <li class="flex items-center gap-4 bg-[#FFF7F3] rounded-[16px] px-5 py-4 m-0">
                            <span class="w-10 h-10 rounded-full bg-[#FDE7E1] text-[#C24C33] flex items-center justify-center shrink-0" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                            </span>
                            <span class="text-[#241C19] text-[16px] md:text-[17px] leading-[1.5] font-medium">
                                <?php echo esc_html( $item['text'] ); ?>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php if ( $alert_heading || $alert_text ) : ?>
                <div class="mt-12 flex items-stretch">
                    <div class="w-1 bg-[#C24C33] rounded-full shrink-0"></div>
                    <div class="pl-6 md:pl-8 py-2">
                        <div class="flex items-center gap-3">
                            <span class="w-[34px] h-[34px] rounded-[10px] bg-[#C24C33] text-white flex items-center justify-center shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            </span>
                            <?php if ( $alert_heading ) : ?>
                                <h3 class="font-serif font-bold text-[#241C19] text-[20px] md:text-[24px] leading-tight m-0">
                                    <?php echo esc_html( $alert_heading ); ?>
                                </h3>
                            <?php endif; ?>
                        </div>
                        <?php if ( $alert_text ) : ?>
                            <p class="text-[#5B5B5B] text-[16px] md:text-[17px] leading-[1.65] mt-3 mb-0">
                                <?php echo esc_html( $alert_text ); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
