<?php
/**
 * Template Name: Digipost
 *
 * Digipost addresses page: hero, introduction and one card per doctor with a
 * copyable Digipost address. Fields: acf-json/group_digipost.json.
 * Helpers: inc/digipost.php (design icons) and inc/dr-profile.php (shared).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero    = get_field( 'hero' ) ?: [];
$intro   = get_field( 'intro' ) ?: [];
$doctors = ( get_field( 'doctors' ) ?: [] )['items'] ?? [];
$labels  = get_field( 'labels' ) ?: [];
$what_to_send = get_field( 'what_to_send' ) ?: [];
$what_is = get_field( 'what_is_digipost' ) ?: [];
$extra   = get_field( 'extra' ) ?: [];

$hero_primary = drp_link( $hero['primary_button'] ?? null );
$hero_second  = drp_link( $hero['secondary_button'] ?? null );

get_header();
?>
<main class="dp">

	<?php /* ============================== HERO ============================== */ ?>
	<section class="relative w-full overflow-hidden bg-[#FCF6F5] -mt-20 lg:-mt-[86px] pt-32 pb-10 lg:min-h-[596px] lg:pt-[168px] lg:pb-[58px]">
		<?php if ( ! empty( $hero['image'] ) ) : ?>
			<div class="hidden lg:block absolute inset-0 pointer-events-none" aria-hidden="true">
				<?php echo drp_image( $hero['image'], 'full', 'w-full h-full object-cover object-center', [ 'alt' => '', 'loading' => 'eager', 'fetchpriority' => 'high', 'sizes' => '100vw' ] ); ?>
			</div>
		<?php endif; ?>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<div class="relative flex flex-col items-start gap-5 max-w-[559px]">
					<?php if ( ! empty( $hero['show_breadcrumb'] ) && function_exists( 'yoast_breadcrumb' ) ) : ?>
						<?php yoast_breadcrumb( '<nav class="flex flex-wrap items-center gap-2.5 text-[14px] leading-5 text-[#B08575] [&_a]:text-[#6F6259] [&_a]:no-underline [&_a:hover]:text-[#241C19] [&_.breadcrumb_last]:font-bold [&_.breadcrumb_last]:text-[#241C19]" aria-label="Breadcrumb">', '</nav>' ); ?>
					<?php endif; ?>

					<h1 class="font-serif font-bold capitalize text-[#3A1811] text-[38px] md:text-[48px] lg:text-[56px] leading-[1.35] pt-1.5 m-0">
						<?php echo drp_mark( ! empty( $hero['heading'] ) ? $hero['heading'] : get_the_title() ); ?>
					</h1>

					<?php if ( ! empty( $hero['text'] ) ) : ?>
						<p class="text-[#3A1811] text-[18px] md:text-[20px] leading-[1.65] m-0"><?php echo esc_html( $hero['text'] ); ?></p>
					<?php endif; ?>

					<?php if ( $hero_primary || $hero_second ) : ?>
						<div class="flex flex-wrap items-center gap-3 pt-2">
							<?php if ( $hero_primary ) : ?>
								<a href="<?php echo esc_url( $hero_primary['url'] ); ?>"<?php echo drp_target( $hero_primary ); ?>
									class="inline-flex items-center gap-2.5 bg-[#C24C33] hover:bg-[#A93E28] text-white text-[18px] leading-[28.8px] font-bold rounded-full px-[30px] py-4 no-underline transition-colors">
									<?php echo esc_html( $hero_primary['title'] ); ?><span class="text-[16px] leading-5" aria-hidden="true">&rarr;</span>
								</a>
							<?php endif; ?>
							<?php if ( $hero_second ) : ?>
								<a href="<?php echo esc_url( $hero_second['url'] ); ?>"<?php echo drp_target( $hero_second ); ?>
									class="inline-flex items-center gap-2.5 bg-white hover:bg-[#FFF7F3] border border-[#C24C33] text-[#A93E28] text-[18px] leading-[28.8px] font-bold rounded-full px-[30px] py-4 no-underline transition-colors">
									<?php echo esc_html( $hero_second['title'] ); ?><span class="text-[16px] leading-5" aria-hidden="true">&rarr;</span>
								</a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ( ! empty( $hero['image'] ) ) : ?>
					<div class="lg:hidden mt-8 -mx-4 md:-mx-12">
						<?php echo drp_image( $hero['image'], 'large', 'w-full h-[260px] md:h-[360px] object-cover object-right', [ 'alt' => '' ] ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php /* ===================== WHAT IS DIGIPOST ===================== */
	if ( ! empty( $what_is['heading'] ) ) : ?>
	<section class="bg-white pt-16 pb-4" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[755px_529px] gap-10 lg:gap-[28px] items-start">
					<div class="flex flex-col gap-3.5 pt-2">
						<?php if ( ! empty( $what_is['heading'] ) ) : ?>
							<h2 class="font-serif font-bold capitalize text-[#241C19] text-[32px] md:text-[40px] lg:text-[48px] leading-[1.35] m-0"><?php echo drp_mark( $what_is['heading'] ); ?></h2>
						<?php endif; ?>
						<?php if ( ! empty( $what_is['text'] ) ) : ?>
							<p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.65] m-0"><?php echo esc_html( $what_is['text'] ); ?></p>
						<?php endif; ?>
					</div>

					<?php if ( ! empty( $what_is['box_heading'] ) || ! empty( $what_is['box_text'] ) ) : ?>
					<div class="bg-[#A93E28] rounded-[16px] p-8 md:p-10 relative overflow-hidden">
						<div class="absolute -top-16 -right-16 w-56 h-56 bg-white/10 rounded-full blur-2xl"></div>
						<div class="relative z-10">
							<?php if ( ! empty( $what_is['box_heading'] ) ) : ?>
							<div class="flex items-center gap-3 mb-4">
								<span class="w-[30px] h-[30px] rounded-full bg-white flex items-center justify-center text-[#B3452D] shrink-0" aria-hidden="true">
									<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Icon-1.webp" alt="Info Icon" class="w-[18px] h-[18px] object-contain" onerror="this.outerHTML='<svg width=\'18\' height=\'18\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'><circle cx=\'12\' cy=\'12\' r=\'10\'/><path d=\'M12 16v-4\'/><path d=\'M12 8h.01\'/></svg>'" />
								</span>
								<h3 class="font-serif font-medium text-white text-[22px] md:text-[26px] leading-tight m-0">
									<?php echo esc_html( $what_is['box_heading'] ); ?>
								</h3>
							</div>
							<?php endif; ?>
							<?php if ( ! empty( $what_is['box_text'] ) ) : ?>
							<div class="text-white text-[16px] md:text-[17px] leading-[1.65] m-0 [&_a]:text-white [&_a]:underline [&_a]:underline-offset-2">
								<?php echo wp_kses_post( $what_is['box_text'] ); ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ===================== INTRODUCTION + DOCTOR CARDS ===================== */
	$worked_label  = ! empty( $labels['worked_at'] ) ? $labels['worked_at'] : '';
	$address_label = ! empty( $labels['address'] ) ? $labels['address'] : '';
	$copy_label    = ! empty( $labels['copy'] ) ? $labels['copy'] : '';
	$copied_label  = ! empty( $labels['copied'] ) ? $labels['copied'] : '';
	$empty_label   = ! empty( $labels['empty'] ) ? $labels['empty'] : '';
	if ( ! empty( $intro['heading'] ) || $doctors ) : ?>
	<section class="bg-white pt-8 pb-16" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<?php if ( ! empty( $intro['heading'] ) ) : ?>
					<h2 class="font-serif font-bold capitalize text-[#241C19] text-[32px] md:text-[40px] lg:text-[48px] leading-[1.35] m-0"><?php echo drp_mark( $intro['heading'] ); ?></h2>
				<?php endif; ?>
				<?php if ( ! empty( $intro['text'] ) ) : ?>
					<p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.65] mt-3.5 mb-0"><?php echo esc_html( $intro['text'] ); ?></p>
				<?php endif; ?>

				<?php if ( $doctors ) : ?>
					<ul class="list-none m-0 p-0 grid grid-cols-1 lg:grid-cols-2 gap-5 mt-12 items-stretch">
						<?php foreach ( $doctors as $i => $doc ) :
							$name      = $doc['name'] ?? '';
							$initials  = ! empty( $doc['initials'] ) ? mb_substr( $doc['initials'], 0, 2 ) : dp_initials( $name );
							$address   = trim( (string) ( $doc['digipost_address'] ?? '' ) );
							$hospitals = $doc['hospitals'] ?? [];
							$toast_id  = 'dp-copied-' . ( $i + 1 );
							?>
							<li class="group m-0 flex flex-col bg-white border border-[#F2E4DC] rounded-[26px] overflow-hidden" data-dp-card>
								<div class="flex items-center gap-5 bg-[#FBEFE9] px-6 md:px-[30px] py-7">
									<div class="w-[84px] h-[84px] rounded-full bg-white border-[3px] border-white shadow-[0_8px_18px_-10px_rgba(92,42,32,0.4)] overflow-hidden flex items-center justify-center shrink-0">
										<?php if ( ! empty( $doc['photo'] ) ) : ?>
											<?php echo drp_image( $doc['photo'], 'thumbnail', 'w-full h-full object-cover object-top', [ 'alt' => $name, 'sizes' => '84px' ] ); ?>
										<?php else : ?>
											<span class="font-serif font-bold text-[#C24C33] text-[28px] leading-none" aria-hidden="true"><?php echo esc_html( $initials ); ?></span>
										<?php endif; ?>
									</div>
									<div class="min-w-0 flex flex-col gap-1">
										<?php if ( ! empty( $doc['role'] ) ) : ?>
											<span class="text-[11px] leading-4 font-bold tracking-[1.8px] uppercase text-[#A93E28]"><?php echo esc_html( $doc['role'] ); ?></span>
										<?php endif; ?>
										<h3 class="font-serif font-bold text-[#241C19] text-[24px] md:text-[28px] leading-[36px] m-0"><?php echo esc_html( $name ); ?></h3>
									</div>
								</div>

								<div class="flex-1 flex flex-col px-6 md:px-[30px] pt-[26px] pb-[30px]">
									<?php if ( ! empty( $doc['title'] ) ) : ?>
										<p class="text-[#C24C33] text-[16px] leading-[21.6px] font-bold m-0"><?php echo esc_html( $doc['title'] ); ?></p>
									<?php endif; ?>
									<?php if ( ! empty( $doc['bio'] ) ) : ?>
										<p class="text-[#5B5B5B] text-[17px] md:text-[18px] leading-[1.6] mt-3 mb-0"><?php echo esc_html( $doc['bio'] ); ?></p>
									<?php endif; ?>

									<?php if ( $hospitals ) : ?>
										<?php if ( $worked_label ) : ?>
											<h4 class="text-[#241C19] text-[16px] leading-6 font-bold uppercase mt-[18px] mb-0"><?php echo esc_html( $worked_label ); ?></h4>
										<?php endif; ?>
										<ul class="list-none m-0 p-0 flex flex-wrap gap-2 mt-[10px]">
											<?php foreach ( $hospitals as $h ) : if ( empty( $h['name'] ) ) { continue; } ?>
												<li class="inline-flex items-center gap-2 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full pl-[10px] pr-[14px] py-2 text-[#241C19] text-[16px] leading-5 font-semibold m-0">
													<span class="text-[#C24C33] shrink-0"><?php echo dp_icon( 'hospital', 'block' ); ?></span><?php echo esc_html( $h['name'] ); ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<div class="mt-auto pt-6">
										<div class="flex flex-col sm:flex-row sm:items-center lg:flex-col lg:items-stretch xl:flex-row xl:items-center gap-4 bg-white border-[1.5px] border-dashed border-[#E0BFB2] rounded-[18px] pl-5 pr-[18px] py-[18px]">
											<span class="w-11 h-11 rounded-[13px] bg-[#FDE7E1] text-[#C24C33] flex items-center justify-center shrink-0" aria-hidden="true"><?php echo dp_icon( 'inbox', 'block' ); ?></span>
											<div class="flex-1 min-w-0 flex flex-col gap-1">
												<?php if ( $address_label ) : ?>
													<span class="text-[11px] leading-4 font-bold tracking-[2px] uppercase text-[#A93E28]"><?php echo esc_html( $address_label ); ?></span>
												<?php endif; ?>
												<?php if ( $address !== '' ) : ?>
													<span class="text-[#241C19] text-[15px] leading-[23px] break-words" data-dp-address><?php echo esc_html( $address ); ?></span>
												<?php else : ?>
													<span class="text-[#6F6259] text-[15px] leading-[23px]"><?php echo esc_html( $empty_label ); ?></span>
												<?php endif; ?>
											</div>
											<?php if ( $copy_label ) : ?>
												<?php if ( $address !== '' ) : ?>
													<button type="button" class="inline-flex items-center justify-center gap-2 min-h-[44px] px-[18px] py-3 rounded-full bg-[#C24C33] hover:bg-[#A93E28] text-white text-[14px] leading-5 font-bold cursor-pointer border-0 shrink-0 self-start sm:self-auto lg:self-start xl:self-auto transition-colors"
														data-dp-copy="<?php echo esc_attr( $address ); ?>" aria-describedby="<?php echo esc_attr( $toast_id ); ?>">
														<?php echo dp_icon( 'copy', 'block' ); ?><?php echo esc_html( $copy_label ); ?>
													</button>
												<?php else : ?>
													<button type="button" class="inline-flex items-center justify-center gap-2 min-h-[44px] px-[18px] py-3 rounded-full bg-[#F8D8D4] text-[#C24C33] text-[14px] leading-5 font-bold border-0 shrink-0 self-start sm:self-auto lg:self-start xl:self-auto cursor-not-allowed" disabled aria-disabled="true">
														<?php echo dp_icon( 'copy', 'block' ); ?><?php echo esc_html( $copy_label ); ?>
													</button>
												<?php endif; ?>
											<?php endif; ?>
										</div>
										<?php if ( $address !== '' && $copied_label ) : ?>
											<p id="<?php echo esc_attr( $toast_id ); ?>" class="hidden group-[.is-copied]:flex items-center gap-[7px] pt-[10px] m-0 text-[13px] leading-normal font-bold text-[#4A5D46]" role="status" aria-live="polite">
												<span class="shrink-0" aria-hidden="true"><?php echo dp_icon( 'check', 'block' ); ?></span><?php echo esc_html( $copied_label ); ?>
											</p>
										<?php endif; ?>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ========================= WHAT TO SEND ========================= */
	$what_heading = $what_to_send['heading'] ?? '';
	$what_text = $what_to_send['text'] ?? '';
	$what_items = $what_to_send['items'] ?? [];
	$alert_heading = $what_to_send['alert_heading'] ?? '';
	$alert_text = $what_to_send['alert_text'] ?? '';

	if ( $what_heading || $what_items ) : ?>
	<section class="bg-white pt-6 pb-16" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<?php if ( $what_heading ) : ?>
					<h2 class="font-serif font-bold capitalize text-[#241C19] text-[32px] md:text-[40px] lg:text-[48px] leading-[1.35] m-0"><?php echo drp_mark( $what_heading ); ?></h2>
				<?php endif; ?>
				
				<?php if ( $what_text ) : ?>
					<p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.65] mt-3.5 mb-0"><?php echo esc_html( $what_text ); ?></p>
				<?php endif; ?>

				<?php if ( $what_items ) : ?>
					<ul class="list-none m-0 p-0 grid grid-cols-1 lg:grid-cols-2 gap-4 mt-10">
						<?php foreach ( $what_items as $item ) : if ( empty( $item['text'] ) ) continue; ?>
							<li class="flex items-center gap-4 bg-[#FFF7F3] rounded-[16px] px-5 md:px-6 py-4 m-0">
								<span class="w-[38px] h-[38px] shrink-0" aria-hidden="true">
                                   <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Icon-1.webp" alt="Eye / View Icon" class="object-contain" />
                              </span>
								<span class="text-[#241C19] text-[15px] md:text-[16px] leading-[1.5] font-medium">
									<?php echo esc_html( $item['text'] ); ?>
								</span>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<?php if ( $alert_heading || $alert_text ) : ?>
					<div class="mt-12 flex items-stretch">
						
						<div class="pl-6 md:pl-8 py-2 border-l-2 border-l-[#F09367]">
							<div class="flex items-center gap-3">
								<span class="w-[34px] h-[34px] shrink-0" aria-hidden="true">
 									 <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Frame-1686559421.webp" alt="Warning / Alert Icon" class="object-contain" />
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

	<?php /* ========================= EXTRA CONTENT ========================= */
	if ( ! empty( $extra['extra_content'] ) ) : ?>
	<section class="bg-white pb-16" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[860px] mx-auto text-[#5B5B5B] text-[17px] md:text-[18px] leading-[1.7] [&_h2]:font-serif [&_h2]:font-bold [&_h2]:text-[#241C19] [&_h2]:text-[28px] [&_h2]:leading-[1.25] [&_h2]:mt-8 [&_h2]:mb-3 [&_h3]:font-serif [&_h3]:font-bold [&_h3]:text-[#241C19] [&_h3]:text-[22px] [&_h3]:mt-6 [&_h3]:mb-2 [&_p]:mb-4 [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:mb-4 [&_ol]:list-decimal [&_ol]:pl-6 [&_ol]:mb-4 [&_a]:text-[#C24C33] [&_a]:underline">
				<?php echo wp_kses_post( $extra['extra_content'] ); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

</main>
<?php get_footer(); ?>
