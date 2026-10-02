<?php
/**
 * Template Name: Tell A Friend
 *
 * Referral / "tell a friend" page. Every section is an ACF group
 * (acf-json/group_tell_a_friend.json). Shared helpers live in inc/dr-profile.php,
 * page-specific ones in inc/tell-a-friend.php.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero    = get_field( 'hero' ) ?: [];
$share   = get_field( 'share' ) ?: [];
$social  = get_field( 'social' ) ?: [];
$why     = get_field( 'why' ) ?: [];
$options = get_field( 'options' ) ?: [];
$learn   = get_field( 'learn' ) ?: [];
$gift    = get_field( 'gift' ) ?: [];
$faq     = get_field( 'faq' ) ?: [];
$cta     = get_field( 'cta' ) ?: [];
$extra   = get_field( 'extra' ) ?: [];

$hero_primary = drp_link( $hero['primary_button'] ?? null );
$hero_second  = drp_link( $hero['secondary_button'] ?? null );

$share_url     = ! empty( $share['share_url'] ) ? $share['share_url'] : get_permalink();
$share_subject = $share['share_subject'] ?? '';
$message       = $share['message'] ?? [];
$message_text  = trim( (string) ( $message['text'] ?? '' ) );

$arrow_up = drp_icon( 'arrow-up-right', 'w-3 h-3', '2.4' );

get_header();
?>
<main class="taf">

	<?php /* ============================== HERO ============================== */ ?>
	<section class="relative w-full overflow-hidden bg-[#FBF4ED] -mt-20 lg:-mt-[86px] pt-32 lg:pt-[168px] pb-10 lg:pb-[50px]">
		<?php if ( ! empty( $hero['image'] ) ) : ?>
			<div class="absolute inset-0 w-full h-full object-cover object-[25%_50%] lg:object-[100%_50%]" aria-hidden="true">
				<span class="absolute inset-y-0 left-0 w-[180px] bg-gradient-to-r from-[#FBF4ED] to-transparent z-[1]"></span>
				<?php echo drp_image( $hero['image'], 'full', 'w-full h-full object-cover object-left', [ 'alt' => '', 'loading' => 'eager', 'fetchpriority' => 'high', 'sizes' => '(min-width: 1024px) 46vw, 100vw' ] ); ?>
			</div>
		<?php endif; ?>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<div class="relative max-w-[660px] lg:max-w-[52%] xl:max-w-[660px]">
					<?php if ( ! empty( $hero['badge'] ) ) : ?>
						<span class="inline-flex items-center gap-2 bg-white rounded-full shadow-[0_6px_18px_rgba(58,24,17,0.08)] px-5 py-3 text-[12px] leading-[13px] font-semibold tracking-[2.4px] uppercase text-[#3A1811]">
							<span class="text-[#C24C33]" aria-hidden="true"><?php echo drp_icon( $hero['badge_icon'] ?? 'asterisk', 'w-3 h-3', '2.4' ); ?></span><?php echo esc_html( $hero['badge'] ); ?>
						</span>
					<?php endif; ?>

					<h1 class="font-serif font-bold text-[#3A1811] text-[38px] md:text-[48px] lg:text-[56px] leading-[1.32] mt-8 mb-0">
						<?php echo drp_mark( ! empty( $hero['heading'] ) ? $hero['heading'] : get_the_title() ); ?>
					</h1>

					<?php if ( ! empty( $hero['text'] ) ) : ?>
						<p class="text-[#4E2F27] text-[18px] md:text-[20px] leading-[1.65] mt-5 mb-0 max-w-[650px]"><?php echo esc_html( $hero['text'] ); ?></p>
					<?php endif; ?>

					<?php if ( $hero_primary || $hero_second ) : ?>
						<div class="flex flex-col sm:flex-row sm:flex-wrap items-stretch sm:items-center gap-3 mt-7">
							<?php if ( $hero_primary ) : ?>
								<a href="<?php echo esc_url( $hero_primary['url'] ); ?>"<?php echo drp_target( $hero_primary ); ?>
									class="inline-flex items-center justify-center gap-2.5 h-[54px] px-7 bg-[#C24C33] hover:bg-[#A93E28] text-white text-[16px] font-semibold rounded-full no-underline transition-colors">
									<?php echo esc_html( $hero_primary['title'] ); ?><?php echo drp_icon( 'arrow-right', 'w-4 h-4', '2.2' ); ?>
								</a>
							<?php endif; ?>
							<?php if ( $hero_second ) : ?>
								<a href="<?php echo esc_url( $hero_second['url'] ); ?>"<?php echo drp_target( $hero_second ); ?>
									class="inline-flex items-center justify-center gap-2.5 h-[54px] px-7 bg-transparent hover:bg-white border border-[#C24C33] text-[#A93E28] text-[16px] font-semibold rounded-full no-underline transition-colors">
									<?php echo esc_html( $hero_second['title'] ); ?><?php echo drp_icon( 'arrow-right', 'w-4 h-4', '2.2' ); ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ( ! empty( $hero['image'] ) ) : ?>
					<div class="lg:hidden mt-10 -mx-4 md:-mx-12">
						<?php echo drp_image( $hero['image'], 'large', 'w-full h-[320px] md:h-[440px] object-cover object-right', [ 'alt' => '' ] ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php /* ========================== SHARE ACTIONS ========================== */
	$share_items = $share['items'] ?? [];
	if ( ! empty( $share['heading'] ) || $share_items || $message_text ) : 
		$text_img_id   = $message['text_image'] ?? '';
		$text_img_url  = $text_img_id ? wp_get_attachment_image_url( $text_img_id, 'large' ) : get_template_directory_uri() . '/assets/tell/your-msg.webp';
		
		$email_img_id  = $message['email_image'] ?? '';
		$email_img_url = $email_img_id ? wp_get_attachment_image_url( $email_img_id, 'large' ) : get_template_directory_uri() . '/assets/tell/Din e-post.webp';
	?>
	<section id="share" class="section" data-reveal>
		<div class="container">
			<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[450px_798px] gap-[28px] shadow-[0px_30px_60px_-28px_#24424A59] p-4 lg:py-[36px] lg:px-[48px] rounded-[28px] items-stretch bg-white">
				
				<!-- Left side image -->
				<div class="shrink-0 flex flex-col">
					<div class="w-full h-[300px] lg:h-full rounded-[20px] overflow-hidden relative flex-1">
						<img id="share-image" src="<?php echo esc_url( $text_img_url ); ?>" data-text-src="<?php echo esc_url( $text_img_url ); ?>" data-email-src="<?php echo esc_url( $email_img_url ); ?>" alt="<?php echo esc_attr( $message['heading'] ?? 'Your Message' ); ?>" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300">
					</div>
				</div>
				
				<!-- Right side content -->
				<div class="w-full lg:flex-1 lg:pr-8 xl:pr-12 flex flex-col">
					<h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[36px] leading-[1.2] m-0 flex flex-wrap items-baseline gap-x-2">
						<?php echo esc_html( $message['heading'] ?? 'Your Message' ); ?> 
						<span class="italic text-[#C24C33] font-semibold text-[26px] md:text-[32px]"><?php echo esc_html( $message['subheading'] ?? '(You Can Edit It)' ); ?></span>
					</h2>
					
					<div class="mt-6 md:mt-8 border border-[#F2E4DC] rounded-[24px] p-5 md:p-8">
						<!-- Header controls -->
						<div class="flex flex-wrap items-center justify-between gap-4">
							<div class="flex items-center p-1 bg-[#FFF9F6] border border-[#F2E4DC] rounded-full">
								<button type="button" id="toggle-text" class="flex items-center gap-2 px-5 py-2 bg-[#C24C33] text-white rounded-full text-[15px] font-semibold transition-colors cursor-pointer">
									<?php echo drp_icon( 'message-square', 'w-[18px] h-[18px]' ); ?> <?php echo esc_html( $message['tab_text_label'] ?? 'Text' ); ?>
								</button>
								<button type="button" id="toggle-email" class="flex items-center gap-2 px-5 py-2 bg-transparent text-[#C24C33] hover:bg-[#FDE7E1] rounded-full text-[15px] font-semibold transition-colors cursor-pointer">
									<?php echo drp_icon( 'mail', 'w-[18px] h-[18px]' ); ?> <?php echo esc_html( $message['tab_email_label'] ?? 'Email' ); ?>
								</button>
							</div>
							
							<div class="flex items-center gap-2.5 text-[#6B5F5A] text-[14px] font-medium">
								<div class="w-5 h-5 rounded-full border-[2px] border-[#C24C33] shrink-0"></div>
								<span id="char-count"><?php echo mb_strlen( $message_text ); ?> / 500</span>
							</div>
						</div>
						
						<!-- Email Inputs -->
						<div id="email-inputs" class="hidden mt-6 mb-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
							<div>
								<label class="block text-[14px] font-medium text-[#6B5F5A] mb-2"><?php echo esc_html( $message['your_email_label'] ?? 'Your email' ); ?></label>
								<div class="relative">
									<span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#C24C33]">
										<?php echo drp_icon( 'users', 'w-[18px] h-[18px]' ); ?>
									</span>
									<input type="email" placeholder="<?php echo esc_attr( $message['your_email_placeholder'] ?? 'you@example.com' ); ?>" class="w-full h-12 pl-11 pr-4 rounded-[12px] border border-[#F2E4DC] focus:outline-none focus:border-[#C24C33] text-[#4E2F27] placeholder:text-[#B3A6A1] text-[15px] bg-transparent transition-colors">
								</div>
							</div>
							<div>
								<label class="block text-[14px] font-medium text-[#6B5F5A] mb-2"><?php echo esc_html( $message['friend_email_label'] ?? "Friend's email" ); ?></label>
								<div class="relative">
									<span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#C24C33] font-medium text-[18px]">@</span>
									<input type="email" id="friend-email" placeholder="<?php echo esc_attr( $message['friend_email_placeholder'] ?? 'friend@example.com' ); ?>" class="w-full h-12 pl-11 pr-4 rounded-[12px] border border-[#F2E4DC] focus:outline-none focus:border-[#C24C33] text-[#4E2F27] placeholder:text-[#B3A6A1] text-[15px] bg-transparent transition-colors">
								</div>
							</div>
						</div>
						
						<!-- Message Box -->
						<div class="mt-5 md:mt-6 bg-[#FFF9F6] border border-[#F2E4DC] rounded-[16px] p-5 md:p-6 relative group">
							<div class="flex items-start gap-3">
								<span class="text-[#EBC0B5] text-[32px] font-serif leading-none pt-1">“</span>
								<p id="editable-message" class="text-[#4E2F27] text-[15px] md:text-[20px] leading-[1.7] m-0 flex-1 outline-none min-h-[70px] break-words break-all" contenteditable="true"><?php echo nl2br( esc_html( $message_text ) ); ?></p>
							</div>
							<!-- Edit icon -->
							<button type="button" class="absolute top-4 right-4 w-7 h-7 rounded-full bg-white border border-[#F2E4DC] text-[#C24C33] flex items-center justify-center transition-colors hover:bg-[#FBF4ED] cursor-pointer" aria-label="Edit message">
								<svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
							</button>
						</div>
						
						<!-- Actions -->
						<div id="text-actions" class="mt-6 flex flex-wrap items-center gap-3 md:gap-4">
							<button type="button" id="copy-btn" class="group flex items-center justify-center gap-2 h-11 px-6 rounded-full border border-[#EBC0B5] bg-transparent hover:bg-[#FFF9F6] text-[#C24C33] text-[15px] font-semibold transition-colors cursor-pointer" data-taf-copy="<?php echo esc_attr( $message_text ); ?>">
								<span class="group-[.is-done]:hidden flex items-center justify-center" aria-hidden="true"><?php echo drp_icon( 'copy', 'w-[18px] h-[18px]' ); ?></span>
								<span class="hidden group-[.is-done]:flex items-center justify-center" aria-hidden="true"><?php echo drp_icon( 'check', 'w-[18px] h-[18px]' ); ?></span>
								<span class="group-[.is-done]:hidden group-[.is-error]:hidden"><?php echo esc_html( $message['copy_label'] ?? 'Copy message' ); ?></span>
								<span class="hidden group-[.is-done]:inline"><?php echo esc_html( $message['copied_label'] ?? 'Copied!' ); ?></span>
								<span class="hidden group-[.is-error]:inline"><?php echo esc_html( $message['error_label'] ?? 'Copy failed' ); ?></span>
							</button>
							<a href="sms:?body=<?php echo rawurlencode( $message_text ); ?>" id="sms-btn" class="flex items-center justify-center gap-2 h-11 px-6 rounded-full bg-[#C24C33] hover:bg-[#A93E28] text-white text-[15px] font-semibold no-underline transition-colors">
								<?php echo esc_html( $message['send_text_label'] ?? 'Send by text' ); ?> <svg class="w-4 h-4 ml-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
							</a>
						</div>
						
						<div id="email-actions" class="mt-6 hidden flex-wrap items-center gap-3 md:gap-4">
							<button type="button" id="email-btn-submit" class="flex items-center justify-center gap-2 h-11 px-6 rounded-full bg-[#C24C33] hover:bg-[#A93E28] text-white text-[15px] font-semibold transition-colors  cursor-pointer" data-subject="<?php echo esc_attr( $share_subject ); ?>" data-alert="<?php echo esc_attr( $message['send_email_alert'] ?? 'Vennligst oppgi vennens e-postadresse først.' ); ?>">
								<?php echo esc_html( $message['send_email_label'] ?? 'Send by Email' ); ?> <svg class="w-4 h-4 ml-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
							</button>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<?php endif; ?>

	

	<?php /* =========================== WHY RECOMMEND =========================== */
	$benefits = $why['benefits'] ?? [];
	if ( ! empty( $why['heading'] ) || $benefits ) : ?>
	<section class="bg-white pt-16" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<div class="relative overflow-hidden bg-[#C24C33] rounded-[24px] px-6 py-10 md:px-10 lg:px-14 lg:pt-14 lg:pb-[52px] text-white text-center">
					<span class="absolute -top-[110px] -right-[90px] w-[340px] h-[340px] rounded-full border-[44px] border-white/[.06] pointer-events-none" aria-hidden="true"></span>
					<span class="absolute top-[60px] -right-[20px] w-[170px] h-[170px] rounded-full border-[28px] border-white/[.06] pointer-events-none" aria-hidden="true"></span>
					<div class="relative">
						<?php if ( ! empty( $why['heading'] ) ) : ?>
							<h2 class="font-serif font-bold text-white text-[30px] md:text-[40px] leading-[1.2] m-0"><?php echo esc_html( $why['heading'] ); ?></h2>
						<?php endif; ?>
						<?php if ( ! empty( $why['text'] ) ) : ?>
							<p class="text-white/95 text-[18px] md:text-[20px] leading-[1.65] mt-4 mb-0 max-w-[800px] mx-auto"><?php echo esc_html( $why['text'] ); ?></p>
						<?php endif; ?>
						<div class="grid grid-cols-1 <?php echo ( ! empty( $why['image'] ) && $benefits ) ? 'lg:grid-cols-[550fr_614fr]' : ''; ?> gap-6 lg:gap-20 mt-9 text-left items-stretch">
							<?php if ( ! empty( $why['image'] ) ) : ?>
								<div class="rounded-[16px] overflow-hidden aspect-[550/316] bg-white/10">
									<?php echo drp_image( $why['image'], 'large', 'w-full h-full object-cover', [ 'alt' => $why['heading'] ?? '', 'sizes' => '(min-width: 1024px) 550px, 100vw' ] ); ?>
								</div>
							<?php endif; ?>
							<?php if ( $benefits ) : ?>
								<ul class="list-none m-0 bg-white/[.08] border border-white/25 rounded-[16px] p-6 md:p-8 grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-6 md:gap-y-[38px] content-center">
									<?php foreach ( $benefits as $b ) : ?>
										<li class="flex items-start gap-4 m-0">
											<span class="w-[26px] h-[26px] rounded-full bg-white/20 flex items-center justify-center shrink-0 mt-0.5" aria-hidden="true"><?php echo drp_icon( 'check', 'w-3 h-3', '3' ); ?></span>
											<span class="text-[17px] md:text-[18px] leading-[28px]"><?php echo esc_html( $b['text'] ?? '' ); ?></span>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ========================= WHAT TO SHARE (TABLE) ========================= */
	$rows    = $options['rows'] ?? [];
	$privacy = $options['privacy'] ?? [];
	$show_pr = ! empty( $privacy['show'] ) && ! empty( $privacy['text'] );
	if ( ! empty( $options['heading'] ) || $rows || $show_pr ) : ?>
	<section class="bg-white pt-16 pb-20" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<?php if ( ! empty( $options['heading'] ) ) : ?>
					<h2 class="font-serif font-bold text-[#241C19] text-[30px] md:text-[40px] leading-[1.2] m-0"><?php echo drp_mark( $options['heading'] ); ?></h2>
				<?php endif; ?>
				<?php if ( ! empty( $options['text'] ) ) : ?>
					<p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.6] mt-4 mb-0"><?php echo esc_html( $options['text'] ); ?></p>
				<?php endif; ?>

				<?php if ( $rows ) : ?>
					<div class="border border-[#F2E4DC] rounded-[16px] overflow-hidden mt-6">
						<div class="grid grid-cols-1 md:grid-cols-[476fr_768fr] bg-[#C24C33] text-white text-[15px] leading-[19px] font-semibold tracking-[2px] uppercase px-6 md:px-[34px] py-[22px]">
							<span><?php echo esc_html( $options['col1_label'] ?? '' ); ?></span>
							<span class="hidden md:block"><?php echo esc_html( $options['col2_label'] ?? '' ); ?></span>
						</div>
						<?php foreach ( $rows as $i => $row ) :
							$tint = drp_tint( $row['color'] ?? 'red' );
							$link = drp_link( $row['link'] ?? null ); ?>
							<div class="grid grid-cols-1 md:grid-cols-[476fr_768fr] gap-4 md:gap-6 items-center px-6 md:px-[34px] py-7 <?php echo $i > 0 ? 'border-t border-[#F5EAE4]' : ''; ?>">
								<div class="flex items-center gap-[18px] md:pr-6">
									<span class="w-11 h-11 rounded-[12px] <?php echo $tint['bg'] . ' ' . $tint['fg']; ?> flex items-center justify-center shrink-0" aria-hidden="true"><?php echo drp_icon( $row['icon'] ?? 'building', 'w-5 h-5', '1.9' ); ?></span>
									<h3 class="font-serif font-semibold text-[#C24C33] text-[19px] md:text-[20px] leading-[1.4] m-0"><?php echo esc_html( $row['title'] ?? '' ); ?></h3>
								</div>
								<div>
									<?php if ( ! empty( $row['text'] ) ) : ?>
										<p class="text-[#5B5B5B] text-[16px] md:text-[17px] leading-[28px] m-0"><?php echo esc_html( $row['text'] ); ?></p>
									<?php endif; ?>
									<?php if ( $link ) : ?>
										<a href="<?php echo esc_url( $link['url'] ); ?>"<?php echo drp_target( $link ); ?> class="inline-flex items-center gap-2 text-[#A93E28] hover:text-[#C24C33] text-[15px] leading-[22px] font-semibold mt-3 no-underline transition-colors"><?php echo esc_html( $link['title'] ); ?><?php echo drp_icon( 'arrow-right', 'w-3.5 h-3.5', '2.2' ); ?></a>
									<?php endif; ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<?php if ( $show_pr ) : ?>
					<div class="flex flex-col sm:flex-row sm:items-center gap-5 sm:gap-8 border-l-[3px] border-[#C24C33] pl-5 sm:pl-7 py-4 sm:py-[30px] mt-8">
						<span class="w-[54px] h-[54px] rounded-[14px] bg-[#FDE7E1] text-[#C24C33] flex items-center justify-center shrink-0" aria-hidden="true"><?php echo drp_icon( $privacy['icon'] ?? 'sparkles', 'w-7 h-7', '1.8' ); ?></span>
						<div>
							<?php if ( ! empty( $privacy['heading'] ) ) : ?>
								<h3 class="font-serif font-bold uppercase tracking-[2px] text-[#A93E28] text-[18px] md:text-[20px] leading-[1.2] m-0"><?php echo esc_html( $privacy['heading'] ); ?></h3>
							<?php endif; ?>
							<p class="text-[#5B5B5B] text-[17px] md:text-[19px] leading-[32px] mt-3 mb-0"><?php echo esc_html( $privacy['text'] ); ?></p>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ============================ LEARN MORE ============================ */
	$cards = $learn['cards'] ?? [];
	if ( ! empty( $learn['heading'] ) || $cards ) : ?>
	<section class="bg-[#FFF7F3] pt-[68px] pb-16" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto">
				<?php if ( ! empty( $learn['heading'] ) ) : ?>
					<h2 class="font-serif font-bold text-[#241C19] text-[30px] md:text-[40px] leading-[1.2] m-0"><?php echo drp_mark( $learn['heading'] ); ?></h2>
				<?php endif; ?>
				<?php if ( ! empty( $learn['text'] ) ) : ?>
					<p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.6] mt-4 mb-0"><?php echo esc_html( $learn['text'] ); ?></p>
				<?php endif; ?>
				<?php if ( $cards ) : ?>
					<ul class="list-none m-0 p-0 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-9">
						<?php foreach ( $cards as $card ) :
							$link = drp_link( $card['link'] ?? null );
							if ( ! $link ) { continue; }
							$tint = drp_tint( $card['color'] ?? 'red' ); ?>
							<li class="m-0">
								<a href="<?php echo esc_url( $link['url'] ); ?>"<?php echo drp_target( $link ); ?> class="flex items-center gap-[17px] h-[90px] pl-6 pr-[30px] bg-white border border-[#F2E4DC] hover:border-[#C24C33] rounded-[16px] no-underline transition-colors">
									<span class="w-11 h-11 rounded-[12px] <?php echo $tint['bg'] . ' ' . $tint['fg']; ?> flex items-center justify-center shrink-0" aria-hidden="true"><?php echo drp_icon( $card['icon'] ?? 'users', 'w-5 h-5', '1.9' ); ?></span>
									<span class="flex-1 font-serif font-semibold text-[#241C19] text-[19px] md:text-[20px] leading-[1.3]"><?php echo esc_html( $card['label'] ?? '' ); ?></span>
									<span class="text-[#A93E28] shrink-0" aria-hidden="true"><?php echo $arrow_up; ?></span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ============================== GIFT CARD ============================== */
	$gift_button = drp_link( $gift['button'] ?? null );
	$checks      = $gift['checks'] ?? [];
	if ( ! empty( $gift['heading'] ) || ! empty( $gift['image'] ) ) : ?>
	<section class="bg-white pt-16 pb-16" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto grid grid-cols-1 lg:grid-cols-[592fr_647fr] gap-10 lg:gap-[73px] items-center">
				<div class="lg:pl-6">
					<?php if ( ! empty( $gift['image'] ) ) : ?>
						<?php echo drp_image( $gift['image'], 'large', 'block w-full max-w-[568px] h-auto mx-auto lg:mx-0', [ 'alt' => drp_plain( $gift['heading'] ?? '' ), 'sizes' => '(min-width: 1024px) 568px, 100vw' ] ); ?>
					<?php endif; ?>
					<?php if ( $checks ) : ?>
						<ul class="list-none m-0 p-0 flex flex-wrap justify-center lg:justify-start gap-x-9 gap-y-3 mt-8 lg:mt-10 lg:pl-6">
							<?php foreach ( $checks as $c ) : ?>
								<li class="flex items-center gap-2 text-[15px] leading-none text-[#5B5B5B] m-0">
									<span class="w-5 h-5 rounded-full bg-[#FDE7E1] text-[#B4533F] flex items-center justify-center shrink-0" aria-hidden="true"><?php echo drp_icon( 'check', 'w-2.5 h-2.5', '3' ); ?></span>
									<?php echo esc_html( $c['text'] ?? '' ); ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
				<div>
					<?php if ( ! empty( $gift['badge'] ) ) : ?>
						<span class="inline-flex items-center h-8 px-5 rounded-full border border-[#EBC9BE] text-[12px] leading-none font-semibold tracking-[2px] uppercase text-[#A93E28]"><?php echo esc_html( $gift['badge'] ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $gift['heading'] ) ) : ?>
						<h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[48px] leading-[1.15] mt-6 mb-0"><?php echo drp_mark( $gift['heading'] ); ?></h2>
					<?php endif; ?>
					<?php if ( ! empty( $gift['text'] ) ) : ?>
						<p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.6] mt-4 mb-0 max-w-[610px]"><?php echo esc_html( $gift['text'] ); ?></p>
					<?php endif; ?>
					<?php if ( $gift_button ) : ?>
						<a href="<?php echo esc_url( $gift_button['url'] ); ?>"<?php echo drp_target( $gift_button ); ?> class="inline-flex items-center justify-center h-[55px] px-9 bg-[#C24C33] hover:bg-[#A93E28] text-white text-[16px] font-semibold rounded-full mt-10 no-underline transition-colors"><?php echo esc_html( $gift_button['title'] ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ================================ FAQ ================================ */
	$faq_items  = $faq['items'] ?? [];
	$faq_button = drp_link( $faq['button'] ?? null );
	$faq_card   = $faq['card'] ?? [];
	$card_btn   = drp_link( $faq_card['button'] ?? null );
	if ( ! empty( $faq['heading'] ) || $faq_items ) : ?>
	<section class="bg-[#FFF7F3] py-16 lg:py-24" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
				<div>
					<?php if ( ! empty( $faq['heading'] ) ) : ?>
						<h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[48px] leading-[1.15] m-0"><?php echo drp_mark( $faq['heading'] ); ?></h2>
					<?php endif; ?>
					<?php if ( ! empty( $faq['text'] ) ) : ?>
						<p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.65] mt-4 mb-0 max-w-[590px]"><?php echo esc_html( $faq['text'] ); ?></p>
					<?php endif; ?>
					<?php if ( $faq_button ) : ?>
						<a href="<?php echo esc_url( $faq_button['url'] ); ?>"<?php echo drp_target( $faq_button ); ?> class="inline-flex items-center justify-center h-[53px] px-8 border-[1.5px] border-[#C24C33] bg-transparent hover:bg-white text-[#A93E28] text-[16px] font-semibold rounded-full mt-7 no-underline transition-colors"><?php echo esc_html( $faq_button['title'] ); ?></a>
					<?php endif; ?>

					<?php if ( ! empty( $faq_card['title'] ) || ! empty( $faq_card['text'] ) ) : ?>
						<div class="bg-white rounded-[16px] p-6 md:p-10 mt-5">
							<div class="flex flex-wrap items-center gap-5 md:gap-6">
								<div class="flex -space-x-3">
									<?php
									$avatars = $faq_card['avatars'] ?? [];
									$colors  = taf_avatar_colors();
									for ( $i = 0; $i < 4; $i++ ) :
										$img = $avatars[ $i ]['image'] ?? 0;
										if ( $img ) : ?>
											<span class="w-10 h-10 rounded-full ring-2 ring-white overflow-hidden bg-[#F8EBE2]"><?php echo drp_image( $img, 'thumbnail', 'w-full h-full object-cover', [ 'alt' => '' ] ); ?></span>
										<?php else : ?>
											<span class="w-10 h-10 rounded-full ring-2 ring-white <?php echo $colors[ $i % 4 ]; ?>" aria-hidden="true"></span>
										<?php endif;
									endfor; ?>
								</div>
								<?php if ( ! empty( $faq_card['title'] ) ) : ?>
									<h3 class="font-serif font-bold text-[#C24C33] text-[19px] md:text-[20px] leading-[1.3] m-0"><?php echo esc_html( $faq_card['title'] ); ?></h3>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $faq_card['text'] ) ) : ?>
								<p class="text-[#5B5B5B] text-[16px] md:text-[17px] leading-[28px] mt-6 mb-0"><?php echo esc_html( $faq_card['text'] ); ?></p>
							<?php endif; ?>
							<?php if ( $card_btn ) : ?>
								<a href="<?php echo esc_url( $card_btn['url'] ); ?>"<?php echo drp_target( $card_btn ); ?> class="inline-flex items-center gap-2.5 h-11 px-6 bg-[#C24C33] hover:bg-[#A93E28] text-white text-[16px] font-semibold rounded-full mt-5 underline underline-offset-4 transition-colors"><?php echo esc_html( $card_btn['title'] ); ?><?php echo drp_icon( 'arrow-right', 'w-4 h-4', '2.2' ); ?></a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>

				<?php if ( $faq_items ) : ?>
					<ul class="list-none m-0 p-0 flex flex-col gap-4" id="tafFaqList">
						<?php foreach ( $faq_items as $i => $item ) : $open = ! empty( $item['open'] ); ?>
							<li class="faq-item group m-0 bg-white border border-[#F2E4DC] rounded-[16px] overflow-hidden transition-colors [&.is-open]:bg-[#FFF7F3] [&.is-open]:border-[#EBC0B5] <?php echo $open ? 'is-open' : ''; ?>">
								<button type="button" class="w-full flex items-center justify-between gap-4 p-6 bg-transparent border-0 cursor-pointer text-left">
									<h3 class="font-serif font-semibold text-[#241C19] text-[18px] md:text-[20px] leading-[1.35] m-0"><?php echo esc_html( $item['question'] ?? '' ); ?></h3>
									<span class="text-[#A93E28] shrink-0" aria-hidden="true">
										<span class="block group-[.is-open]:hidden"><?php echo drp_icon( 'plus', 'w-5 h-5', '2' ); ?></span>
										<span class="hidden group-[.is-open]:block"><?php echo drp_icon( 'minus', 'w-5 h-5', '2' ); ?></span>
									</span>
								</button>
								<div class="faq-content <?php echo $open ? '' : 'hidden'; ?> px-6 pb-6 pt-0">
									<div class="text-[#5B5B5B] text-[16px] md:text-[17px] leading-[27px] [&_p]:m-0 [&_p+p]:mt-3 [&_a]:text-[#241C19] [&_a]:underline"><?php echo wp_kses_post( $item['answer'] ?? '' ); ?></div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* ================================ CTA ================================ */
	$cta_button = drp_link( $cta['button'] ?? null );
	if ( ! empty( $cta['heading'] ) ) : ?>
	<section class="bg-white py-16" data-reveal>
		<div class="px-4 md:px-12 lg:px-16">
			<div class="max-w-[1312px] mx-auto relative overflow-hidden rounded-[24px] px-6 py-10 md:px-[45px] md:py-[74px] grid grid-cols-1 <?php echo ! empty( $cta['image'] ) ? 'lg:grid-cols-[minmax(0,1fr)_390px]' : ''; ?> gap-10 items-center"
				style="background: radial-gradient(60% 80% at 100% 100%, rgba(240,147,103,0.12) 0%, rgba(240,147,103,0) 70%), radial-gradient(50% 70% at 0% 100%, rgba(248,216,212,0.6) 0%, rgba(248,216,212,0) 70%), #FEF8F5;">
				<div>
					<h2 class="font-serif font-bold text-[#241C19] text-[30px] md:text-[44px] leading-[1.2] m-0"><?php echo drp_mark( $cta['heading'] ); ?></h2>
					<?php if ( ! empty( $cta['text'] ) ) : ?>
						<p class="text-[#6B5F5A] text-[18px] md:text-[20px] leading-[1.6] mt-4 mb-0 max-w-[615px]"><?php echo esc_html( $cta['text'] ); ?></p>
					<?php endif; ?>
					<?php if ( $cta_button ) : ?>
						<a href="<?php echo esc_url( $cta_button['url'] ); ?>"<?php echo drp_target( $cta_button ); ?> class="inline-flex items-center justify-center gap-2.5 h-[52px] px-8 bg-[#C24C33] hover:bg-[#A93E28] text-white text-[16px] font-semibold rounded-full mt-8 no-underline transition-colors"><?php echo esc_html( $cta_button['title'] ); ?><?php echo drp_icon( 'arrow-right', 'w-4 h-4', '2.2' ); ?></a>
					<?php endif; ?>
				</div>
				<?php if ( ! empty( $cta['image'] ) ) : ?>
					<div class="justify-self-center lg:justify-self-end">
						<?php echo drp_image( $cta['image'], 'full', 'w-full max-w-[390px] h-auto', [ 'alt' => '' ] ); ?>
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
