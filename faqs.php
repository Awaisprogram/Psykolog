<?php
/**
 * Template Name: FAQs
 */
get_header();

$s1 = get_field('section_1');
$s2 = get_field('section_2');
$s3 = get_field('section_3');
$s4 = get_field('section_4');
$s5 = get_field('section_5');
$s6 = get_field('section_6');
$s7 = get_field('section_7');

/**
 * Renders one FAQ accordion item. Kept as a single helper so every
 * accordion block on the page (and future pages) stays visually identical.
 */
function faqs_render_item( $item ) {
    ?>
    <div class="faq-item bg-white border border-[#E8DDD7] rounded-[20px] overflow-hidden shadow-sm transition-all duration-300">
      <button class="w-full flex items-center justify-between p-6 sm:p-7 bg-transparent border-0 cursor-pointer text-left group">
        <span class="font-serif font-bold text-lg sm:text-xl text-ink-900 group-hover:text-[#A93E28] transition-colors pr-4"><?php echo esc_html( $item['question'] ); ?></span>
        <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Open.webp" alt="Plus Icon" class="w-[20px] h-[20px] object-contain" />
      </button>
      <div class="faq-content hidden px-6 sm:px-7 pb-7 pt-0">
        <p class="text-[15px] md:text-[18px] leading-relaxed text-[#6B5F5A] m-0"><?php echo esc_html( $item['answer'] ); ?></p>
      </div>
    </div>
    <?php
}

/**
 * Renders one full FAQ block section (heading + sidebar + accordion list),
 * since sections 3-6 all share the same layout and only differ in content.
 */
function faqs_render_block( $section_id, $section_class, $data ) {
  $section_image = ! empty( $data['image'] ) && is_array( $data['image'] ) ? $data['image'] : array();
    ?>
    <section id="<?php echo esc_attr( $section_id ); ?>" class="<?php echo esc_attr( $section_class ); ?>" data-reveal>
      <div class="container max-w-[1360px]">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
          <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-8">
            <div>
              <h2 class="h2 mb-4">
                <?php echo esc_html( $data['heading'] ); ?>
                <?php if ( ! empty( $data['heading_emphasis'] ) ) : ?> <em><?php echo esc_html( $data['heading_emphasis'] ); ?></em><?php endif; ?>
              </h2>
              <p class="text-[15px] md:text-[20px] lg:leading-[32px] text-[#6B5F5A] m-0 mb-6 max-w-[550px]"><?php echo esc_html( $data['intro_text'] ); ?></p>
              <?php if ( ! empty( $section_image['url'] ) ) : ?>
                <img src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ?? '' ); ?>" class="w-full max-w-[550px] h-auto object-contain" />
              <?php endif; ?>
            </div>
          </div>

          <div class="lg:col-span-7 flex flex-col gap-4">
            <?php if ( ! empty( $data['faq_items'] ) ) : foreach ( $data['faq_items'] as $item ) : faqs_render_item( $item ); endforeach; endif; ?>
          </div>
        </div>
      </div>
    </section>
    <?php
}
?>

<main>

  <!-- HERO -->
  <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <img
        src="<?php echo esc_url( $s1['image'] ); ?>"
        alt="Anxiety"
        class="absolute inset-0 w-full h-full object-cover object-[100%_50%]"
      />
      <span class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
    </span>

    <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full lg:max-w-[640px]">
          <h1 class="font-serif italic font-bold text-brand-darkest mt-7 mb-0 text-[34px] leading-[1.25] lg:leading-[70px] md:text-[48px]">
            <?php echo esc_html( $s1['title_line1'] ); ?> <em><?php echo esc_html( $s1['title_emphasis'] ); ?></em>
          </h1>

          <p class="text-lg lg:text-[19px] leading-[1.6] lg:leading-[31px] text-[#33170F] mt-[22px] mb-0">
            <?php echo esc_html( $s1['description'] ); ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CATEGORY CARDS -->
  <section class="py-[48px]" data-reveal>
    <div class="container">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-2 lg:gap-[16px]">
        <?php
        $category_card_styles = array(
          'bg-[#FBFDE1] border-t-[4px] border-t-[#D6D30F]',
          'bg-[#E4EDF4] border-t-[4px] border-t-[#5C7355]',
          'bg-[#EDE7F3] border-t-[4px] border-t-[#6B568A]',
          'bg-[#F9EDEB] border-t-[4px] border-t-[#C24C33]',
          'bg-[#F5EBD6] border-t-[4px] border-t-[#96702B]',
        );
        if ( ! empty( $s2['cards'] ) ) : foreach ( $s2['cards'] as $card_index => $card ) :
          $card_style = $category_card_styles[ $card_index ] ?? $category_card_styles[0];
        ?>
        <a href="<?php echo esc_url( $card['link_url'] ); ?>" class="<?php echo esc_attr( $card_style ); ?> rounded-[20px] p-4 md:py-[32px] md:px-[28px] border border-[#F2E4DC] shadow-[0_2px_12px_rgba(0,0,0,0.02)] flex flex-col items-center text-center justify-between transition-transform hover:-translate-y-1">
          <div class="w-full flex flex-col items-center">
            <img src="<?php echo esc_url( $card['icon'] ); ?>" alt="Icon" class="h-[60px] w-[60px] object-contain" />
            <h3 class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold mb-[16px] leading-snug mt-[22px]"><?php echo esc_html( $card['title'] ); ?></h3>
          </div>
          <span class="text-[#F09367] text-[12px] font-bold tracking-[0.1em] uppercase"><?php echo esc_html( $card['question_count'] ); ?></span>
        </a>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <?php
  faqs_render_block( 'psych-faq',   'section bg-[#FFF7F3] ', $s3 );
  faqs_render_block( 'pricing-faq', 'section section--white',    $s4 );
  faqs_render_block( 'digital-faq', 'section bg-[#FEF0EA]',    $s5 );
  faqs_render_block( 'privacy-faq', 'section section--white',  $s6 );
  ?>

  <!-- CTA -->
  <section class="section" data-reveal>
    <div class="container">
      <div
        class="rounded-[32px] px-8 py-12 md:py-20 md:px-[56px] shadow-sm flex flex-col md:flex-row items-center justify-between gap-10"
        style="
          background: radial-gradient(46% 62% at 92% 88%, rgba(240, 147, 103, 0.14) 0%, rgba(240, 147, 103, 0) 70%),
          radial-gradient(46% 62% at 8% 84%, rgba(248, 216, 212, 0.55) 0%, rgba(248, 216, 212, 0) 70%),
          radial-gradient(58% 74% at 50% 0%, rgba(248, 235, 226, 0.9) 0%, rgba(248, 235, 226, 0) 72%);
      "
      >
        <div class="text-center md:text-left max-w-[665px]">
          <h2 class="font-serif text-[30px] md:text-[36px] text-[#241C19] mb-4 font-bold">
            <?php echo esc_html( $s7['heading_line1'] ); ?> <em class="italic text-[#C24C33]"><?php echo esc_html( $s7['heading_emphasis'] ); ?></em>
          </h2>

          <p class="text-[#6B5F5A] text-[15px] md:text-[16px] leading-[1.6] max-w-[620px] mx-auto md:mx-0 mb-8 font-normal">
            <?php echo esc_html( $s7['description'] ); ?>
          </p>

          <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
            <a
              href="<?php echo esc_url( $s7['cta_primary_url'] ); ?>"
              class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors no-underline"
            >
              <?php echo esc_html( $s7['cta_primary_text'] ); ?>
              <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/arrow.webp" alt="Right Arrow Icon" class="h-6 w-6 object-contain" />
            </a>

            <a
              href="<?php echo esc_url( $s7['cta_secondary_url'] ); ?>"
              class="inline-flex items-center justify-center gap-2 bg-white hover:bg-[#FBF3EF] text-[#C24C33] border border-[#C24C33] font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors no-underline"
            >
              <?php echo esc_html( $s7['cta_secondary_text'] ); ?>
            </a>
          </div>
        </div>

        <div class="shrink-0">
          <div class="w-[421px] h-[280px]">
            <img src="<?php echo esc_url( $s7['icon'] ); ?>" alt="Chat/Support Icon" class="object-contain" />
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>