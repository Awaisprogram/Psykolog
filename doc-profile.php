<?php
/**
 * Template Name: Dr Profile
 *
 * Doctor / psychologist profile page. Every section is an ACF group
 * (acf-json/group_dr_profile.json); helpers live in inc/dr-profile.php.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero      = get_field( 'hero' ) ?: [];
$trust     = get_field( 'trust' ) ?: [];
$mission   = get_field( 'mission' ) ?: [];
$services  = get_field( 'services' ) ?: [];
$languages = get_field( 'languages' ) ?: [];
$clinic    = get_field( 'clinic' ) ?: [];
$extra     = get_field( 'extra' ) ?: [];

$hero_name    = ! empty( $hero['name'] ) ? $hero['name'] : get_the_title();
$hero_primary = drp_link( $hero['primary_button'] ?? null );
$hero_second  = drp_link( $hero['secondary_button'] ?? null );
$hours        = $hero['hours_card'] ?? [];
$show_hours   = ! empty( $hours['show'] ) && ( ! empty( $hours['label'] ) || ! empty( $hours['value'] ) );

get_header();
?>
<main class="drp">

	<?php /* ============================== HERO ============================== */ ?>
	<section class="relative w-full overflow-hidden bg-[#FBEFE9] -mt-20 lg:-mt-[86px] pt-32 lg:pt-[150px] pb-10 lg:pb-[52px]">
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_440px] xl:grid-cols-[minmax(0,1fr)_520px] gap-12 lg:gap-12 xl:gap-[78px] items-center">

					<div class="max-w-[715px]">
						<?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
  		                  <?php yoast_breadcrumb( '<nav class="page-hero__crumb" aria-label="Breadcrumb">', '</nav>' ); ?>
	                   <?php endif; ?>

						<h1 class="font-serif font-bold text-[#241C19] text-[38px] md:text-[48px] lg:text-[56px] leading-[1.15] mb-0">
							<?php echo esc_html( $hero_name ); ?>
						</h1>

						<?php if ( ! empty( $hero['title'] ) ) : ?>
							<p class="text-[#C24C33] text-[18px] md:text-[22px] leading-[1.3] font-semibold mt-4 mb-0">
								<?php echo esc_html( $hero['title'] ); ?>
							</p>
						<?php endif; ?>

						<?php $paras = drp_paragraphs( $hero['intro'] ?? '' ); if ( $paras ) : ?>
							<div class="flex flex-col gap-3 text-[#5B5B5B] text-[17px] md:text-[20px] leading-[1.6] mt-6">
								<?php foreach ( $paras as $para ) : ?><p class="m-0"><?php echo $para; // escaped in drp_paragraphs ?></p><?php endforeach; ?>
							</div>
						<?php endif; ?>

						<?php if ( $hero_primary || $hero_second ) : ?>
							<div class="flex flex-col sm:flex-row sm:flex-wrap items-stretch sm:items-center gap-3 mt-7">
								<?php if ( $hero_primary ) : ?>
									<a href="<?php echo esc_url( $hero_primary['url'] ); ?>"<?php echo drp_target( $hero_primary ); ?>
										class="inline-flex items-center justify-center gap-2.5 bg-[#C24C33] hover:bg-[#A93E28] text-white text-[16px] leading-[21px] font-semibold rounded-full px-7 py-4 no-underline transition-colors">
										<?php echo esc_html( $hero_primary['title'] ); ?><?php echo drp_icon( 'arrow-right', 'w-4 h-4', '2.2' ); ?>
									</a>
								<?php endif; ?>
								<?php if ( $hero_second ) : ?>
									<a href="<?php echo esc_url( $hero_second['url'] ); ?>"<?php echo drp_target( $hero_second ); ?>
										class="inline-flex items-center justify-center gap-2.5 bg-transparent hover:bg-white border border-[#C24C33] text-[#A93E28] text-[16px] leading-[21px] font-semibold rounded-full px-7 py-[15px] no-underline transition-colors">
										<?php echo esc_html( $hero_second['title'] ); ?><?php echo drp_icon( $hero['secondary_icon'] ?? 'video', 'w-[18px] h-[18px]', '2' ); ?>
									</a>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="relative w-full max-w-[520px] mx-auto lg:mx-0 lg:justify-self-end <?php echo $show_hours ? 'mb-6 lg:mb-0' : ''; ?>">
						<div class="aspect-[520/563] rounded-[24px] overflow-hidden bg-[#E9E4E1]">
							<?php echo drp_image( $hero['photo'] ?? 0, 'dr-profile-photo', 'w-full h-full object-cover object-top', [ 'alt' => $hero_name, 'loading' => 'eager', 'fetchpriority' => 'high', 'sizes' => '(min-width: 1024px) 520px, 100vw' ] ); ?>
						</div>
						<?php if ( $show_hours ) : ?>
							<div class="absolute left-4 -bottom-6 lg:-left-6 xl:-left-16 lg:bottom-[61px] max-w-[calc(100%-2rem)] lg:max-w-none bg-white rounded-[16px] shadow-[0_14px_36px_rgba(58,24,17,0.12)] pl-4 pr-6 py-5 flex items-center gap-3.5">
								<span class="w-7 h-7 rounded-full bg-[#FDE7E1] flex items-center justify-center shrink-0" aria-hidden="true"><span class="w-3 h-3 rounded-full bg-[#C24C33]"></span></span>
								<div class="min-w-0">
									<?php if ( ! empty( $hours['label'] ) ) : ?>
										<span class="block text-[12px] leading-none font-semibold tracking-[2px] uppercase text-[#C24C33]"><?php echo esc_html( $hours['label'] ); ?></span>
									<?php endif; ?>
									<?php if ( ! empty( $hours['value'] ) ) : ?>
										<span class="block font-serif font-bold text-[18px] md:text-[20px] leading-[24px] text-[#241C19] mt-2"><?php echo drp_mark( $hours['value'] ); ?></span>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>

				</div>
			</div>
		</div>
	</section>

	<?php /* ============================ TRUST BAR ============================ */
	$trust_items = $trust['items'] ?? [];
	if ( $trust_items ) : ?>
	<section class="bg-white pt-12 pb-12" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<ul class="max-w-[1312px] mx-auto list-none m-0 p-0 flex flex-wrap justify-center gap-y-8 lg:gap-y-0 lg:divide-x divide-[#F7EFEB]">
				<?php foreach ( $trust_items as $item ) : $tint = drp_tint( $item['color'] ?? 'red' ); ?>
					<li class="w-1/2 md:w-1/3 lg:w-1/5 flex flex-col items-center text-center px-3 lg:px-4 pt-1.5 pb-3 m-0">
						<span class="w-[52px] h-[52px] rounded-[14px] <?php echo $tint['bg'] . ' ' . $tint['fg']; ?> flex items-center justify-center shrink-0">
							<?php echo drp_row_icon( $item, 'w-6 h-6', '1.8' ); ?>
						</span>
						<h3 class="font-serif font-bold text-[17px] md:text-[18px] leading-[23px] text-[#241C19] mt-[18px] mb-0"><?php echo esc_html( $item['title'] ?? '' ); ?></h3>
						<?php if ( ! empty( $item['text'] ) ) : ?>
							<p class="text-[14px] leading-[20px] text-[#6B5F5A] mt-1.5 mb-0"><?php echo esc_html( $item['text'] ); ?></p>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ============================= MISSION ============================= */
	if ( ! empty( $mission['quote'] ) ) : $tint = drp_tint( $mission['color'] ?? 'red' ); ?>
	<section class="bg-white pt-[20px] pb-[60px]" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<figure class="max-w-[1060px] mx-auto text-center m-0">
				<span class="w-[58px] h-[58px] rounded-full <?php echo $tint['bg'] . ' ' . $tint['fg']; ?> inline-flex items-center justify-center" aria-hidden="true">
					<?php echo drp_row_icon( $mission, 'w-6 h-6', '1.8' ); ?>
				</span>
				<blockquote class="font-serif font-bold text-[#393939] text-[26px] md:text-[32px] lg:text-[40px] leading-[1.225] mt-[30px] mb-0 mx-0">
					<?php echo drp_mark( $mission['quote'] ); ?>
				</blockquote>
				<?php if ( ! empty( $mission['author'] ) ) : ?>
					<figcaption class="flex items-center justify-center gap-3 text-[#6B5F5A] text-[18px] leading-[24px] font-medium tracking-[0.5px] mt-[22px]">
						<span class="w-6 h-px bg-[#C24C33]" aria-hidden="true"></span><?php echo esc_html( $mission['author'] ); ?>
					</figcaption>
				<?php endif; ?>
			</figure>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ====================== SERVICES & LANGUAGES ====================== */
	$service_items  = $services['items'] ?? [];
	$language_items = $languages['items'] ?? [];
	if ( $service_items || $language_items ) : ?>
	<section class="bg-[#FFF7F3] pt-[60px] pb-[60px] " data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto flex flex-col gap-7">

				<?php if ( $service_items ) : $tint = drp_tint( $services['color'] ?? 'red' ); ?>
					<div class="bg-white border border-[#F2E4DC] rounded-[24px] px-6 pt-6 pb-8 md:px-9 md:pt-9 md:pb-[52px]">
						<div class="flex items-center gap-4">
							<span class="w-[50px] h-[50px] rounded-[14px] <?php echo $tint['bg'] . ' ' . $tint['fg']; ?> flex items-center justify-center shrink-0" aria-hidden="true">
								<?php echo drp_icon( $services['icon'] ?? 'stethoscope', 'w-6 h-6', '1.8' ); ?>
							</span>
							<h2 class="font-serif font-bold text-[#241C19] text-[26px] md:text-[30px] leading-[1.2] m-0"><?php echo esc_html( $services['heading'] ?? '' ); ?></h2>
						</div>
						<ul class="list-none m-0 p-0 flex flex-wrap gap-3 mt-6">
							<?php foreach ( $service_items as $item ) :
								$pt   = drp_tint( $item['color'] ?? 'red' );
								$link = drp_link( $item['link'] ?? null );
								$tag  = $link ? 'a' : 'span';
								$attr = $link ? ' href="' . esc_url( $link['url'] ) . '"' . drp_target( $link ) : '';
								?>
								<li class="m-0">
									<<?php echo $tag . $attr; ?> class="inline-flex items-center gap-2.5 h-[46px] px-4 rounded-full bg-white border border-[#EAD3C9] text-[16px] leading-none font-medium text-[#241C19] no-underline <?php echo $link ? 'hover:border-[#C24C33] transition-colors' : ''; ?>">
										<?php if ( ! empty( $item['icon'] ) && $item['icon'] !== 'none' ) : ?>
											<span class="w-6 h-6 rounded-full <?php echo $pt['bg'] . ' ' . $pt['fg']; ?> flex items-center justify-center shrink-0" aria-hidden="true"><?php echo drp_icon( $item['icon'], 'w-3 h-3', '2.2' ); ?></span>
										<?php endif; ?>
										<?php echo esc_html( $item['label'] ?? '' ); ?>
										<?php if ( $link ) : ?><span class="text-[#C24C33]" aria-hidden="true"><?php echo drp_icon( 'arrow-up-right', 'w-3 h-3', '2.4' ); ?></span><?php endif; ?>
									</<?php echo $tag; ?>>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ( $language_items ) : $tint = drp_tint( $languages['color'] ?? 'purple' ); ?>
					<div class="bg-white border border-[#F2E4DC] rounded-[24px] px-6 pt-6 pb-8 md:px-9 md:pt-9 md:pb-[52px]">
						<div class="flex items-center gap-4">
							<span class="w-[50px] h-[50px] rounded-[14px] <?php echo $tint['bg'] . ' ' . $tint['fg']; ?> flex items-center justify-center shrink-0" aria-hidden="true">
								<?php echo drp_icon( $languages['icon'] ?? 'languages', 'w-6 h-6', '1.8' ); ?>
							</span>
							<h2 class="font-serif font-bold text-[#241C19] text-[26px] md:text-[30px] leading-[1.2] m-0"><?php echo esc_html( $languages['heading'] ?? '' ); ?></h2>
						</div>
						<ul class="list-none m-0 p-0 flex flex-wrap gap-3 mt-6">
							<?php foreach ( $language_items as $item ) : ?>
								<li class="inline-flex items-center h-[46px] px-7 rounded-full bg-white border border-[#F2E4DC] text-[16px] leading-none font-medium text-[#241C19] m-0"><?php echo esc_html( $item['label'] ?? '' ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ============================== CLINIC ============================== */
	$details      = $clinic['details'] ?? [];
	$digipost     = $clinic['digipost'] ?? [];
	$show_dp      = ! empty( $digipost['show'] ) && ! empty( $digipost['text'] );
	$clinic_prim  = drp_link( $clinic['primary_button'] ?? null );
	$clinic_video = drp_link( $clinic['video_button'] ?? null );
	$clinic_mail  = drp_link( $clinic['email_button'] ?? null );
	$has_card     = $details || $show_dp || $clinic_prim || $clinic_video || $clinic_mail;
	$has_map      = ! empty( $clinic['map'] );
	if ( ! empty( $clinic['heading'] ) || $has_card || $has_map ) : ?>
	<section class="bg-white pt-[40px] pb-[60px]" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">

				<?php if ( ! empty( $clinic['eyebrow'] ) ) : ?>
					<span class="block text-[13px] leading-none font-semibold tracking-[3px] uppercase text-[#C24C33]"><?php echo esc_html( $clinic['eyebrow'] ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $clinic['heading'] ) ) : ?>
					<h2 class="font-serif font-bold text-[#241C19] text-[30px] md:text-[40px] leading-[1.2] mt-4 mb-0"><?php echo drp_mark( $clinic['heading'] ); ?></h2>
				<?php endif; ?>

				<?php if ( $has_card || $has_map ) : ?>
				<div class="grid grid-cols-1 <?php echo ( $has_card && $has_map ) ? 'lg:grid-cols-[613fr_680fr]' : ''; ?> gap-5 mt-8">

					<?php if ( $has_card ) : ?>
						<div class="bg-[#C24C33] rounded-[24px] p-6 md:p-[34px] md:pb-7 text-white">
							<?php if ( $details ) : ?>
								<ul class="list-none m-0 p-0 divide-y divide-white/20">
									<?php foreach ( $details as $row ) : ?>
										<li class="flex items-center gap-4 py-[18px] first:pt-0 m-0">
											<span class="w-11 h-11 rounded-[12px] border border-white/40 flex items-center justify-center shrink-0" aria-hidden="true"><?php echo drp_icon( $row['icon'] ?? 'clock', 'w-5 h-5', '1.8' ); ?></span>
											<div class="min-w-0">
												<?php if ( ! empty( $row['label'] ) ) : ?>
													<span class="block text-[12px] leading-none font-semibold tracking-[2px] uppercase text-white/85"><?php echo esc_html( $row['label'] ); ?></span>
												<?php endif; ?>
												<?php if ( ! empty( $row['value'] ) ) : ?>
													<?php if ( ! empty( $row['link'] ) ) : ?>
														<a href="<?php echo esc_url( $row['link'] ); ?>" class="block font-serif font-bold text-[18px] md:text-[20px] leading-[24px] text-white mt-2 no-underline hover:underline"><?php echo drp_mark( $row['value'] ); ?></a>
													<?php else : ?>
														<span class="block font-serif font-bold text-[18px] md:text-[20px] leading-[24px] text-white mt-2"><?php echo drp_mark( $row['value'] ); ?></span>
													<?php endif; ?>
												<?php endif; ?>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

							<?php if ( $show_dp ) : ?>
								<div class="relative bg-[#F9E9E6] rounded-[14px] p-[22px] pr-[76px] mt-[22px] text-[#241C19]">
									<?php if ( ! empty( $digipost['label'] ) ) : ?>
										<span class="block text-[11px] leading-none font-semibold tracking-[2px] uppercase text-[#C24C33]"><?php echo esc_html( $digipost['label'] ); ?></span>
									<?php endif; ?>
									<p class="text-[16px] leading-[24px] text-[#404040] mt-2 mb-0"><?php echo esc_html( $digipost['text'] ); ?></p>
									<button type="button" class="group absolute right-[22px] top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white text-[#C24C33] flex items-center justify-center shadow-[0_4px_12px_rgba(58,24,17,0.08)] cursor-pointer border-0 p-0 hover:bg-[#FDE7E1] transition-colors"
										data-copy-text="<?php echo esc_attr( $digipost['text'] ); ?>" aria-label="<?php echo esc_attr( sprintf( '%s: %s', ! empty( $digipost['label'] ) ? $digipost['label'] : 'Copy', $digipost['text'] ) ); ?>">
										<span class="group-[.is-copied]:hidden"><?php echo drp_icon( 'copy', 'w-[18px] h-[18px]', '2' ); ?></span>
										<span class="hidden group-[.is-copied]:block"><?php echo drp_icon( 'check', 'w-[18px] h-[18px]', '2.4' ); ?></span>
									</button>
								</div>
							<?php endif; ?>

							<?php if ( $clinic_prim ) : ?>
								<a href="<?php echo esc_url( $clinic_prim['url'] ); ?>"<?php echo drp_target( $clinic_prim ); ?>
									class="flex w-full items-center justify-center gap-2.5 bg-white hover:bg-[#FFF7F3] text-[#C24C33] text-[16px] leading-none font-semibold rounded-full h-12 mt-[15px] no-underline transition-colors">
									<?php echo esc_html( $clinic_prim['title'] ); ?><?php echo drp_icon( 'arrow-right', 'w-4 h-4', '2.2' ); ?>
								</a>
							<?php endif; ?>

							<?php if ( $clinic_video || $clinic_mail ) : ?>
								<div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-3">
									<?php if ( $clinic_video ) : ?>
										<a href="<?php echo esc_url( $clinic_video['url'] ); ?>"<?php echo drp_target( $clinic_video ); ?>
											class="flex items-center justify-center gap-2.5 bg-[#F09367] hover:bg-[#EC8352] text-white text-[16px] leading-none font-semibold rounded-full h-[53px] px-5 no-underline transition-colors">
											<?php echo drp_icon( 'video', 'w-5 h-5', '2' ); ?><?php echo esc_html( $clinic_video['title'] ); ?>
										</a>
									<?php endif; ?>
									<?php if ( $clinic_mail ) : ?>
										<a href="<?php echo esc_url( $clinic_mail['url'] ); ?>"<?php echo drp_target( $clinic_mail ); ?>
											class="flex items-center justify-center gap-2.5 bg-transparent hover:bg-white/10 border border-white text-white text-[16px] leading-none font-semibold rounded-full h-[53px] px-5 no-underline transition-colors">
											<?php echo drp_icon( 'mail', 'w-5 h-5', '2' ); ?><?php echo esc_html( $clinic_mail['title'] ); ?>
										</a>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php if ( $has_map ) :
						$map_tag  = ! empty( $clinic['map_link'] ) ? 'a' : 'div';
						$map_attr = ! empty( $clinic['map_link'] ) ? ' href="' . esc_url( $clinic['map_link'] ) . '" target="_blank" rel="noopener"' : '';
						?>
						<<?php echo $map_tag . $map_attr; ?> class="relative block rounded-[24px] overflow-hidden bg-[#E9E4E1] min-h-[360px] md:min-h-[460px] lg:min-h-0">
							<?php echo drp_image( $clinic['map'], 'large', 'absolute inset-0 w-full h-full object-cover', [ 'alt' => $clinic['map_pill'] ?? '', 'sizes' => '(min-width: 1024px) 680px, 100vw' ] ); ?>
							<?php if ( ! empty( $clinic['map_pill'] ) ) : ?>
								<span class="absolute left-5 bottom-[18px] inline-flex items-center gap-2.5 bg-white rounded-full pl-2 pr-5 h-10 shadow-[0_8px_24px_rgba(0,0,0,0.12)] text-[15px] leading-none font-semibold text-[#241C19]">
									<span class="w-6 h-6 rounded-full bg-[#C24C33] text-white flex items-center justify-center shrink-0" aria-hidden="true"><?php echo drp_icon( 'map-pin', 'w-3 h-3', '2.2' ); ?></span>
									<?php echo esc_html( $clinic['map_pill'] ); ?>
								</span>
							<?php endif; ?>
						</<?php echo $map_tag; ?>>
					<?php endif; ?>

				</div>
				<?php endif; ?>

			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ========================= EXTRA CONTENT ========================= */
	if ( ! empty( $extra['extra_content'] ) ) : ?>
	<section class="bg-white pb-16 lg:pb-24" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[860px] mx-auto text-[#5B5B5B] text-[17px] md:text-[18px] leading-[1.7] [&_h2]:font-serif [&_h2]:font-bold [&_h2]:text-[#241C19] [&_h2]:text-[28px] [&_h2]:leading-[1.25] [&_h2]:mt-8 [&_h2]:mb-3 [&_h3]:font-serif [&_h3]:font-bold [&_h3]:text-[#241C19] [&_h3]:text-[22px] [&_h3]:mt-6 [&_h3]:mb-2 [&_p]:mb-4 [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:mb-4 [&_ol]:list-decimal [&_ol]:pl-6 [&_ol]:mb-4 [&_a]:text-[#C24C33] [&_a]:underline">
				<?php echo wp_kses_post( $extra['extra_content'] ); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

</main>
<?php get_footer(); ?>
