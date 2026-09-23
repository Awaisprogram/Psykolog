<?php
/**
 * Template Name: Bipolar Disorder
 */

get_header();

$post_id = get_the_ID();

$s1 = get_field('section_1', $post_id);
$s2 = get_field('section_2', $post_id);
$s3 = get_field('section_3', $post_id);
$s4 = get_field('section_4', $post_id);
$s5 = get_field('section_5', $post_id);
$s6 = get_field('section_6', $post_id);
$s7 = get_field('section_7', $post_id);
$s8 = get_field('section_8', $post_id);
$s9 = get_field('section_9', $post_id);
$s10 = get_field('section_10', $post_id);
$s11 = get_field('section_11', $post_id);
$s12 = get_field('section_12', $post_id);
$s13 = get_field('section_13', $post_id);
$s14 = get_field('section_14', $post_id);
$s15 = get_field('section_15', $post_id);
$s16 = get_field('section_16', $post_id);

function bp_text($val)
{
	echo nl2br(esc_html($val));
}

function bp_wysiwyg($val, $classes = 'space-y-4 [&>p]:mb-0')
{
	if (empty($val)) {
		return;
	}
	echo '<div class="' . esc_attr($classes) . '">' . wp_kses_post($val) . '</div>';
}
?>

<main>

	<!-- ================= SECTION 1: HERO ================= -->
	<section
		class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[626px]">
		<span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
			<?php if (!empty($s1['hero_image'])): ?>
				<img src="<?php echo esc_url($s1['hero_image']); ?>" alt="<?php echo esc_attr($s1['title']); ?>"
					class="absolute inset-0 w-full h-full object-cover object-[25%_50%] lg:object-[100%_50%]" />
			<?php endif; ?>
			<span
				class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
		</span>

		<div
			class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
			<div class="max-w-[1312px] mx-auto">
				<div class="max-w-full lg:max-w-[710px]">
					<div class="ml-2">
					 <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
  						<?php yoast_breadcrumb( '<nav class="page-hero__crumb" aria-label="Breadcrumb">', '</nav>' ); ?>
	 				<?php endif; ?>
		  				</div>

					<h1
						class="font-serif font-bold text-brand-darkest mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]">
						<?php echo esc_html($s1['title']); ?>
					</h1>

					<p class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0">
						<?php bp_text($s1['lede']); ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= JUMP NAV ================= -->
	<?php $nav_items = !empty($s1['nav_items']) ? $s1['nav_items'] : array(); ?>
	<div class="bg-white pt-10">
		<div class="container">
			<nav
				class="ps-jump flex items-center justify-center gap-0.5 bg-[#FDF6F2] rounded-full px-3.5 py-2 overflow-x-auto w-fit mx-auto">
				<?php foreach ($nav_items as $i => $item):
					$active = ($i === 0); ?>
					<a href="<?php echo esc_attr($item['url']); ?>"
						class="font-sans <?php echo $active ? 'font-bold text-brand-hover bg-brand-active' : 'font-medium text-brand-taupe bg-transparent'; ?> text-[15px] leading-5 whitespace-nowrap rounded-full px-[18px] py-2.5">
						<?php echo esc_html($item['label']); ?>
					</a>
				<?php endforeach; ?>
			</nav>
		</div>
	</div>

	<!-- ================= SECTION 2: WHAT IS BIPOLAR ================= -->
	<?php $paragraphs2 = !empty($s2['paragraphs']) ? $s2['paragraphs'] : array(); ?>
	<section id="mh-what" class="section section--white" data-reveal>
		<div class="container max-w-[1360px] mx-auto px-4 md:px-8">
			<div class="flex flex-col lg:flex-row gap-12 lg:gap-[46px] items-stretch">

				<div class="flex-1">
					<h2 class="h2 mb-4"><?php echo esc_html($s2['heading']); ?>
						<em><?php echo esc_html($s2['heading_highlight']); ?></em>
					</h2>
					<?php foreach ($paragraphs2 as $p): ?>
						<p class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php bp_text($p['text']); ?>
						</p>
					<?php endforeach; ?>
				</div>

				<div class="lg:sticky lg:top-[148px] lg:w-[340px] flex flex-col gap-6 lg:self-start">
					<div class="bg-[#FFF7F3] border border-[#F2E4DC] rounded-[20px] p-6 md:p-8 flex-1">
						<?php if (!empty($s2['mania_card_icon'])): ?>
							<div class="mb-4 w-10 h-10">
								<img src="<?php echo esc_url($s2['mania_card_icon']); ?>"
									alt="<?php echo esc_attr($s2['mania_card_heading']); ?> Icon" class="object-contain" />
							</div>
						<?php endif; ?>
						<h3 class="font-serif font-bold text-[20px] md:text-[24px] text-[#241C19] m-0 mb-4">
							<?php echo esc_html($s2['mania_card_heading']); ?>
						</h3>
						<p class="text-[12px] md:text-[15px] leading-[1.6] text-[#6B5F5A] m-0">
							<?php bp_text($s2['mania_card_text']); ?>
						</p>
					</div>

					<div class="relative overflow-hidden bg-[#B1412A] rounded-3xl p-6 md:p-8 flex-1">
						<p
							class="relative text-[15px] md:text-[18px] font-extrabold tracking-[2px] uppercase text-white m-0 mb-4">
							<?php echo esc_html($s2['comparison_kicker']); ?>
						</p>
						<p class="text-white text-[15px] md:text-[16px] leading-[1.5] m-0">
							<?php bp_text($s2['comparison_text']); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ================= SECTION 3: SYMPTOMS ================= -->
	<?php $tabs3 = !empty($s3['tabs']) ? $s3['tabs'] : array();
	$contacts3 = !empty($s3['emergency_contacts']) ? $s3['emergency_contacts'] : array(); ?>
	<section id="mh-conditions" class="section bg-[#FFF7F3]">
		<div class="container" data-reveal>
			<div class="text-center mb-[32px]">
				<h2 class="h2 mb-4"><?php echo esc_html($s3['heading']); ?></h2>
				<?php bp_wysiwyg($s3['paragraph_1'], 'text-[#6B6B6B] text-[16px] md:text-[18px] max-w-[938px] mx-auto mb-4 [&>p]:mb-0'); ?>
				<?php bp_wysiwyg($s3['paragraph_2'], 'text-[#6B6B6B] text-[16px] md:text-[18px] max-w-[938px] mx-auto [&>p]:mb-0'); ?>
			</div>

			<div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-8" role="tablist"
				aria-label="Hypomania symptoms">
				<?php foreach ($tabs3 as $i => $tab):
					$slug = sanitize_title($tab['tab_label']);
					$active = ($i === 0); ?>
					<button type="button" id="tab-<?php echo esc_attr($slug); ?>"
						class="stress-tab px-6 py-2 rounded-full border text-[14px] md:text-[16px] font-medium transition-colors cursor-pointer <?php echo $active ? 'border-[#E8B8AC] text-[#C24C33] bg-transparent' : 'border-[#F2E4DC] text-[#333333] bg-white hover:bg-gray-50'; ?>"
						role="tab" aria-selected="<?php echo $active ? 'true' : 'false'; ?>"
						aria-controls="panel-<?php echo esc_attr($slug); ?>"
						data-bipolar-tab="<?php echo esc_attr($slug); ?>">
						<?php echo esc_html($tab['tab_label']); ?>
					</button>
				<?php endforeach; ?>
			</div>

			<div class="bg-white rounded-[1.5rem] p-4 md:p-6 border border-[#F0F0F0] shadow-sm mb-8">
				<?php foreach ($tabs3 as $i => $tab):
					$slug = sanitize_title($tab['tab_label']);
					$active = ($i === 0);
					$items = !empty($tab['items']) ? $tab['items'] : array(); ?>
					<div id="panel-<?php echo esc_attr($slug); ?>"
						class="stress-panel <?php echo $active ? 'flex' : 'hidden'; ?> flex-col lg:flex-row items-center gap-8 lg:gap-12"
						role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($slug); ?>"
						data-bipolar-panel="<?php echo esc_attr($slug); ?>" <?php echo $active ? '' : 'hidden'; ?>>
						<?php if (!empty($tab['image'])): ?>
							<img src="<?php echo esc_url($tab['image']); ?>" alt="<?php echo esc_attr($tab['tab_label']); ?>"
								class="w-full lg:w-[400px] h-[330px] shrink-0 object-contain" />
						<?php endif; ?>

						<div class="flex-1 py-2 lg:py-6">
							<p class="text-[#555555] text-[16px] md:text-[18px] m-0 mb-6">
								<?php echo esc_html($tab['intro_text']); ?>
							</p>
							<div class="flex flex-wrap gap-3 md:gap-4">
								<?php foreach ($items as $item): ?>
									<div
										class="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-[#FFF7F3] border border-[#F2E4DC]">
										<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/check-icon.webp"
											alt="check" class="w-[24px] h-[24px] object-contain" />
										<span
											class="text-[#4E403B] text-[13px] md:text-[15px] font-medium"><?php echo esc_html($item['text']); ?></span>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="bg-[#C24C33] rounded-[1.5rem] p-6 md:p-8 text-white w-full">
				<div
					class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 md:mb-8 border-b border-white/20 pb-4 md:border-none md:pb-0 gap-4">
					<h3 class="font-serif text-white text-[18px] md:text-[24px] font-bold m-0">
						<?php echo esc_html($s3['emergency_heading']); ?>
					</h3>
					<p class="text-[16px] md:text-[18px] m-0 shrink-0">
						<?php echo esc_html($s3['emergency_subtext']); ?>
					</p>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
					<?php foreach ($contacts3 as $contact): ?>
						<div
							class="bg-white/10 hover:bg-[#FFFFFF1A] transition-colors rounded-[20px] px-4 py-8 flex items-center gap-4 border border-[#FFFFFF29]">
							<div class="shrink-0">
								<?php if (!empty($contact['icon'])): ?>
									<img src="<?php echo esc_url($contact['icon']); ?>" alt="Phone Icon"
										class="h-12 w-12 object-contain" />
								<?php endif; ?>
							</div>
							<div>
								<p
									class="text-[11px] md:text-[12px] uppercase tracking-wider text-white/80 m-0 font-medium mb-1">
									<?php echo esc_html($contact['label']); ?>
								</p>
								<p class="text-[20px] md:text-[24px] font-bold m-0 leading-none text-white">
									<?php echo esc_html($contact['number']); ?>
								</p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 4: TYPES OF BIPOLAR ================= -->
	<?php $types4 = !empty($s4['types']) ? $s4['types'] : array(); ?>
	<section id="mh-activity" class="section">
		<div class="container">
			<div class="mb-8 md:mb-10">
				<h2 class="h2 mb-4"><?php echo esc_html($s4['heading']); ?></h2>
				<p class="text-[15px] md:text-[20px] text-[#6B5F5A] m-0"><?php bp_text($s4['lede']); ?></p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
				<?php foreach ($types4 as $type):
					$paras = !empty($type['paragraphs']) ? $type['paragraphs'] : array();
					$features = !empty($type['features']) ? $type['features'] : array(); ?>
					<div
						class="group flex flex-col bg-white border border-[#B04229] rounded-[26px] px-4 pt-4 pb-8 transition-colors duration-300 hover:bg-[#B04229] cursor-pointer">
						<?php if (!empty($type['image'])): ?>
							<div class="w-full h-[343px] overflow-hidden rounded-2xl mb-6 shrink-0 bg-gray-100">
								<img src="<?php echo esc_url($type['image']); ?>" alt="<?php echo esc_attr($type['title']); ?>"
									class="w-full h-full object-cover aspect-[1.55]" />
							</div>
						<?php endif; ?>

						<div class="flex flex-col flex-1">
							<h3
								class="text-[28px] md:text-[36px] font-bold font-serif text-[#241C19] group-hover:text-white mb-4 transition-colors duration-300">
								<?php echo esc_html($type['title']); ?>
							</h3>

							<div
								class="text-[14px] md:text-[18px] leading-[1.6] text-[#5B5B5B] group-hover:text-white/95 mb-8 space-y-4 transition-colors duration-300">
								<?php foreach ($paras as $p): ?>
									<p><?php bp_text($p['text']); ?></p>
								<?php endforeach; ?>
							</div>

							<div class="grid grid-cols-2 gap-x-4 gap-y-6 mt-auto">
								<?php foreach ($features as $feature): ?>
									<div class="flex items-start gap-3">
										<?php if (!empty($feature['icon'])): ?>
											<img src="<?php echo esc_url($feature['icon']); ?>" alt="Feature Icon"
												class="w-10 h-10 object-contain" />
										<?php endif; ?>
										<span
											class="text-[13px] md:text-[18px] leading-[1.3] text-[#6B5F5A] group-hover:text-white font-medium transition-colors duration-300"><?php echo esc_html($feature['text']); ?></span>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 5: COMPARISON TABLE ================= -->
	<?php $rows5 = !empty($s5['rows']) ? $s5['rows'] : array(); ?>
	<section class="pb-[60px]">
		<div class="container">
			<div class="text-center mb-8 md:mb-12">
				<h2 class="h2 mb-4"><?php echo esc_html($s5['heading']); ?>
					<em><?php echo esc_html($s5['heading_highlight']); ?></em>
				</h2>
				<p class="text-[15px] md:text-[20px] text-[#5B5B5B]"><?php bp_text($s5['lede']); ?></p>
			</div>

			<div class="bg-white rounded-[1.5rem] border border-[#F5E6E0] shadow-sm overflow-hidden">
				<div class="overflow-x-auto">
					<table class="w-full text-left border-collapse min-w-[700px]">
						<thead>
							<tr class="border-b border-[#F5E6E0]">
								<th class="w-[30%] p-5 md:p-6 bg-[#FDF6F1]"><?php echo esc_html($s5['col1_label']); ?>
								</th>
								<th
									class="w-[35%] p-5 md:p-6 bg-[#FFF8F6] text-[#A93E28] text-[15px] md:text-[16px] font-bold">
									<?php echo esc_html($s5['col2_label']); ?>
								</th>
								<th
									class="w-[35%] p-5 md:p-6 bg-[#FFF8F6] text-[#A93E28] text-[15px] md:text-[16px] font-bold">
									<?php echo esc_html($s5['col3_label']); ?>
								</th>
							</tr>
						</thead>
						<tbody
							class="divide-y divide-[#F5E6E0] text-[14px] md:text-[15px] border-[#EBD8CE] text-[#555555] shadow-[0px_18px_44px_-28px_#5A2A2047]">
							<?php foreach ($rows5 as $row): ?>
								<tr>
									<td class="p-5 md:p-6 bg-white text-[16px] text-[#5B5B5B]">
										<div class="flex items-center gap-3">
											<?php if (!empty($row['icon'])): ?>
												<img src="<?php echo esc_url($row['icon']); ?>"
													alt="<?php echo esc_attr($row['label']); ?> Icon"
													class="w-9 h-9 object-contain" />
											<?php endif; ?>
											<span
												class="font-semibold font-[14px] text-[#5B5B5B]"><?php echo esc_html($row['label']); ?></span>
										</div>
									</td>
									<td class="p-5 md:p-6 bg-white text-[16px] text-[#5B5B5B]">
										<?php echo esc_html($row['type1_text']); ?>
									</td>
									<td class="p-5 md:p-6 bg-white text-[16px] text-[#5B5B5B]">
										<?php echo esc_html($row['type2_text']); ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 6: CHILDREN AND ADOLESCENTS ================= -->
	<?php $paragraphs6 = !empty($s6['paragraphs']) ? $s6['paragraphs'] : array();
	$signs6 = !empty($s6['signs']) ? $s6['signs'] : array(); ?>
	<section class="pb-[60px]">
		<div class="container">
			<div class="bg-[#FEF0EA] rounded-[2rem] p-6 md:p-10 lg:p-12 border border-[#F2E4DC]">
				<div class="mb-8 md:mb-10">
					<span
						class="block text-[11px] md:text-[14px] font-bold tracking-[0.15em] text-[#A93E28] uppercase mb-3"><?php echo esc_html($s6['eyebrow']); ?></span>
					<h2 class="h2 mb-4"><?php echo esc_html($s6['heading']); ?></h2>
					<div class="text-[14px] md:text-[20px] leading-[1.65] text-[#5B5B5B] space-y-3">
						<?php foreach ($paragraphs6 as $p): ?>
							<p><?php bp_text($p['text']); ?></p>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 items-stretch">
					<div
						class="bg-white rounded-[1.5rem] p-6 md:p-8 flex flex-col justify-center border border-[#F2E4DC] shadow-sm">
						<h3 class="text-[20px] md:text-[24px] font-bold font-serif text-[#241C19] mb-6">
							<?php echo esc_html($s6['signs_heading']); ?>
						</h3>
						<ul class="space-y-4 text-[13px] md:text-[14px] text-[#555555]">
							<?php foreach ($signs6 as $sign): ?>
								<li class="flex items-start gap-3">
									<span class="w-2 h-2 rounded-full bg-[#C24C33] shrink-0 mt-1.5"></span>
									<span class="text-[#4E403B] text-[16px]"><?php echo esc_html($sign['text']); ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<?php if (!empty($s6['image'])): ?>
						<div class="w-full h-full min-h-[300px] rounded-[1.5rem] overflow-hidden">
							<img src="<?php echo esc_url($s6['image']); ?>" alt="Bipolar disorder in children illustration"
								class="w-full h-full object-cover rounded-[1.5rem]" />
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 7: CAUSES ================= -->
	<?php $causes7 = !empty($s7['causes']) ? $s7['causes'] : array();
	$causes7_count = count($causes7); ?>
	<section id="mh-causes" class="pb-[60px]" data-reveal>
		<div class="container">
			<div class="text-center mb-12 md:mb-16">
				<h2 class="h2 mb-4"><?php echo esc_html($s7['heading']); ?></h2>
				<p class="text-[#6B5F5A] text-[15px] md:text-[20px] leading-[1.6] m-0"><?php bp_text($s7['lede']); ?>
				</p>
			</div>

			<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[550px_710px] gap-8 items-center mb-12">
				<?php if (!empty($s7['image'])): ?>
					<div>
						<img src="<?php echo esc_url($s7['image']); ?>"
							alt="Woman thinking about causes of bipolar disorder"
							class="w-full h-auto object-cover rounded-[24px]" />
					</div>
				<?php endif; ?>

				<div>
					<?php foreach ($causes7 as $i => $cause):
						$is_last = ($i === $causes7_count - 1); ?>
						<div
							class="flex items-center gap-5 py-6 <?php echo $is_last ? '' : 'border-b border-[#F2E4DC]'; ?>">
							<?php if (!empty($cause['icon'])): ?>
								<img src="<?php echo esc_url($cause['icon']); ?>"
									alt="<?php echo esc_attr($cause['title']); ?> Icon" class="w-10 h-10 object-contain" />
							<?php endif; ?>
							<div class="flex flex-col justify-center min-h-[40px]">
								<h3 class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold m-0 mb-1">
									<?php echo esc_html($cause['title']); ?>
								</h3>
								<p class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.4] m-0">
									<?php bp_text($cause['description']); ?>
								</p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div
				class="bg-[#FFF7F3] border-l-4 border-[#C24C33] rounded-l-[12px] rounded-r-lg p-6 flex items-start gap-4">
				<div class="text-[#C24C33] mt-0.5 shrink-0">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
					</svg>
				</div>
				<div>
					<h4 class="text-[13px] md:text-[20px] font-bold text-[#A93E28] uppercase mb-1">
						<?php echo esc_html($s7['callout_heading']); ?>
					</h4>
					<p class="text-[#4E403B] text-[14px] md:text-[18px] m-0 leading-relaxed">
						<?php bp_text($s7['callout_text']); ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 8: ASSESSMENT ================= -->
	<?php $left8 = !empty($s8['left_items']) ? $s8['left_items'] : array();
	$right8 = !empty($s8['right_items']) ? $s8['right_items'] : array(); ?>
	<section id="mh-youth" class="section bg-[#FFF7F3]">
		<div class="container">
			<div class="text-center mb-8">
				<h2 class="h2 mb-4"><?php echo esc_html($s8['heading']); ?></h2>
				<p class="text-[14px] md:text-[20px] text-[#5B5B5B] leading-[1.6] m-0 mb-6 max-w-[1144px] mx-auto">
					<?php bp_text($s8['lede']); ?>
				</p>
				<h3 class="text-[18px] md:text-[24px] font-serif text-[#C24C33] font-bold m-0">
					<?php echo esc_html($s8['subheading']); ?>
				</h3>
			</div>

			<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch mb-8">
				<div
					class="bg-white rounded-[1.5rem] p-6 pt-[32px] border border-[#F2E4DC] shadow-sm flex flex-col space-y-8">
					<?php foreach ($left8 as $item): ?>
						<div class="flex items-center gap-4">
							<?php if (!empty($item['icon'])): ?>
								<img src="<?php echo esc_url($item['icon']); ?>" alt="Icon"
									class="w-[40px] h-[40px] object-contain" />
							<?php endif; ?>
							<p class="text-[13px] md:text-[18px] text-[#4E403B] leading-snug m-0">
								<?php bp_text($item['text']); ?>
							</p>
						</div>
					<?php endforeach; ?>
				</div>

				<?php if (!empty($s8['center_image'])): ?>
					<div class="w-full h-full min-h-[380px] rounded-[1.5rem] overflow-hidden">
						<img src="<?php echo esc_url($s8['center_image']); ?>" alt="Clinician conducting assessment"
							class="w-full h-full object-cover rounded-[1.5rem]" />
					</div>
				<?php endif; ?>

				<div
					class="bg-white rounded-[1.5rem] p-6 pt-[32px] border border-[#F2E4DC] shadow-sm flex flex-col space-y-8">
					<?php foreach ($right8 as $item): ?>
						<div class="flex items-center gap-4">
							<?php if (!empty($item['icon'])): ?>
								<img src="<?php echo esc_url($item['icon']); ?>" alt="Icon"
									class="w-[40px] h-[40px] object-contain" />
							<?php endif; ?>
							<p class="text-[13px] md:text-[18px] text-[#4E403B] leading-snug m-0">
								<?php bp_text($item['text']); ?>
							</p>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<p class="text-[13px] md:text-[20px] text-[#5B5B5B] leading-[1.6] m-0">
				<?php bp_text($s8['footer_text']); ?>
			</p>
		</div>
	</section>

	<!-- ================= SECTION 9: ADHD VS BIPOLAR ================= -->
	<?php $paragraphs9 = !empty($s9['paragraphs']) ? $s9['paragraphs'] : array(); ?>
	<section class="section">
		<div class="container">
			<div
				class="relative bg-[#5C2A20] rounded-[24px] p-6 md:p-10 lg:p-12 flex flex-col md:flex-row items-center gap-8 md:gap-12 overflow-hidden shadow-md">
				<div
					class="absolute -top-16 -right-16 w-64 h-64 rounded-full border-[20px] border-white/5 pointer-events-none">
				</div>
				<div
					class="absolute bottom-6 left-12 w-24 h-6 rounded-full bg-white/5 pointer-events-none hidden md:block">
				</div>
				<div
					class="absolute top-10 left-4 w-12 h-12 rounded-full border-[8px] border-white/5 pointer-events-none hidden md:block">
				</div>

				<?php if (!empty($s9['image'])): ?>
					<div class="w-full md:w-[45%] lg:w-[42%] shrink-0 z-10">
						<img src="<?php echo esc_url($s9['image']); ?>"
							alt="Illustration showing the contrast of moods and minds"
							class="w-full h-auto rounded-[1.25rem] object-cover shadow-sm" />
					</div>
				<?php endif; ?>

				<div class="w-full md:w-[55%] lg:w-[58%] z-10 flex flex-col">
					<h2
						class="font-serif italic font-bold text-white text-[36px] md:text-[48px] lg:text-[40px] leading-[1.2] mb-6">
						<?php echo esc_html($s9['heading']); ?>
					</h2>
					<div class="space-y-5 text-white/95 text-[14px] md:text-[20px] leading-[1.65]">
						<?php foreach ($paragraphs9 as $p): ?>
							<p><?php bp_text($p['text']); ?></p>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 10: INVESTIGATION CTA ================= -->
	<section class="pb-[60px]" data-reveal>
		<div class="container">
			<div class="rounded-[24px] p-8 md:p-12 lg:px-16 lg:py-10 flex flex-col-reverse md:flex-row items-center justify-between gap-8 md:gap-12 relative overflow-hidden"
				style="background-color: #FFFFFF; background: radial-gradient(circle at 0% 50%, rgba(252, 237, 234, 0.8) 0%, rgba(255, 255, 255, 0) 50%), radial-gradient(circle at 100% 50%, rgba(240, 147, 103, 0.15) 0%, rgba(255, 255, 255, 0) 50%);">
				<div class="w-full md:w-[60%] z-10 flex flex-col items-center md:items-start text-center md:text-left">
					<h2 class="h2 mb-4"><?php echo esc_html($s10['heading']); ?></h2>
					<p
						class="text-[#6B5F5A] text-[15px] md:text-[20px] leading-[1.6] max-w-[745px] mb-8 font-normal m-0">
						<?php bp_text($s10['text']); ?>
					</p>
					<a href="<?php echo esc_url($s10['button_link']); ?>"
						class="inline-flex items-center justify-center gap-3 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] md:text-[18px] px-[24px] py-[12px] md:py-[14px] rounded-full transition-colors w-fit m-0">
						<?php echo esc_html($s10['button_text']); ?>
						<?php if (!empty($s10['button_icon'])): ?>
							<img src="<?php echo esc_url($s10['button_icon']); ?>" alt="Arrow Right Icon"
								class="w-[24px] h-[24px] object-contain" />
						<?php endif; ?>
					</a>
				</div>

				<?php if (!empty($s10['image'])): ?>
					<div class="w-full md:w-[40%] flex justify-center md:justify-end z-10 shrink-0">
						<img src="<?php echo esc_url($s10['image']); ?>" alt="Illustration"
							class="w-full max-w-[280px] lg:max-w-[340px] h-auto object-contain" />
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 11: CO-OCCURRING CONDITIONS ================= -->
	<?php
	$items11 = !empty($s11['items']) ? $s11['items'] : array();
	// Fallback inline SVGs, used only if a condition's 'icon' field is empty
	// (matches the original design's per-topic glyphs).
	$fallback_svgs = array(
		'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
		'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>',
		'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>',
		'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
		'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>',
		'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>',
	);
	?>
	<section class="section bg-[#FFF9F6]">
		<div class="container" data-reveal>
			<div class="mb-10 lg:mb-14 text-center">
				<h2 class="h2"><?php echo esc_html($s11['heading']); ?></h2>
			</div>

			<div class="flex flex-col gap-6">
				<?php foreach ($items11 as $i => $item): ?>
					<div
						class="bg-white rounded-[24px] p-6 md:p-8 border border-[#F2E8E3] shadow-sm flex flex-col md:flex-row items-center justify-between gap-6 lg:gap-12">
						<div class="flex-1">
							<div class="flex items-center gap-4 mb-4">
								<div
									class="w-10 h-10 rounded-full bg-[#FFF0EB] flex items-center justify-center shrink-0 text-[#C24C33]">
									<?php if (!empty($item['icon'])): ?>
										<img src="<?php echo esc_url($item['icon']); ?>"
											alt="<?php echo esc_attr($item['title']); ?> Icon" class="w-5 h-5 object-contain" />
									<?php else: ?>
										<svg class="w-5 h-5" fill="none" stroke="currentColor"
											viewBox="0 0 24 24"><?php echo $fallback_svgs[$i % count($fallback_svgs)]; ?></svg>
									<?php endif; ?>
								</div>
								<h3 class="font-serif text-[20px] md:text-[24px] text-[#241C19] font-bold m-0">
									<?php echo esc_html($item['title']); ?>
								</h3>
							</div>
							<p class="text-[#5B5B5B] text-[14px] md:text-[18px] leading-[1.7] m-0 mb-4">
								<?php bp_text($item['description']); ?>
							</p>
							<?php if (!empty($item['link_text'])): ?>
								<a href="<?php echo esc_url($item['link_url']); ?>"
									class="inline-flex items-center gap-1.5 text-[#A93E28] text-[16px] font-bold hover:underline">
									<?php echo esc_html($item['link_text']); ?>
									<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
										</path>
									</svg>
								</a>
							<?php endif; ?>
						</div>
						<?php if (!empty($item['image'])): ?>
							<div class="w-full md:w-[260px] lg:w-[320px] shrink-0 flex justify-center">
								<img src="<?php echo esc_url($item['image']); ?>"
									alt="<?php echo esc_attr($item['title']); ?> Illustration"
									class="w-full h-auto object-contain" />
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 12: TREATMENT OPTIONS ================= -->
	<?php $treatments12 = !empty($s12['treatments']) ? $s12['treatments'] : array(); ?>
	<section id="bipolar-treatments" class="section bg-[#FEF0EA]" data-reveal>
		<div class="container">
			<div class="text-center mb-12 lg:mb-16">
				<h2 class="h2 mb-4"><?php echo esc_html($s12['heading']); ?></h2>
				<p class="text-[#6B6B6B] text-[16px] md:text-[20px] leading-[1.6] m-0"><?php bp_text($s12['lede']); ?>
				</p>
			</div>

			<div id="bipolarTreatTabs" class="flex flex-col lg:flex-row gap-6 lg:gap-8">
				<div class="w-full lg:w-[42%] flex flex-col gap-4">
					<?php foreach ($treatments12 as $i => $t):
						$active = ($i === 0); ?>
						<div class="bipolar-tab <?php echo $active ? 'is-active bg-[#FAF0EC] border-[#F2E4DC]' : 'bg-white border-[#F2E8E3] hover:bg-[#FAF0EC]'; ?> flex items-center justify-between p-4 rounded-[20px] cursor-pointer transition-colors border"
							data-bipolar-treatment-tab="<?php echo (int) $i; ?>">
							<div class="flex items-center gap-4 cursor-pointer">
								<div class="w-12 h-12 shrink-0">
									<?php if (!empty($t['icon'])): ?>
										<img src="<?php echo esc_url($t['icon']); ?>"
											alt="<?php echo esc_attr($t['title']); ?> Icon" class="object-contain" />
									<?php endif; ?>
								</div>
								<h3 class="font-serif text-[18px] md:text-[20px] text-[#241C19] font-bold m-0">
									<?php echo esc_html($t['title']); ?>
								</h3>
							</div>
							<div class="bipolar-arrow w-8 h-8 shrink-0">
								<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Arrow-right.webp"
									alt="Arrow Icon" class="object-contain" />
							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<div
					class="w-full lg:w-[58%] bg-white border border-[#F2E8E3] rounded-[24px] p-8 md:p-10 flex flex-col justify-between min-h-[420px]">
					<?php foreach ($treatments12 as $i => $t):
						$active = ($i === 0); ?>
						<div class="bipolar-panel <?php echo $active ? 'flex' : 'hidden'; ?> flex-col flex-grow justify-between"
							data-bipolar-treatment-panel="<?php echo (int) $i; ?>">
							<div>
								<div class="flex items-center gap-4 mb-6">
									<div class="w-12 h-12 shrink-0">
										<?php if (!empty($t['icon'])): ?>
											<img src="<?php echo esc_url($t['icon']); ?>"
												alt="<?php echo esc_attr($t['title']); ?> Icon" class="object-contain" />
										<?php endif; ?>
									</div>
									<h3 class="font-serif text-[22px] md:text-[26px] text-[#241C19] font-bold m-0">
										<?php echo esc_html($t['title']); ?>
									</h3>
								</div>
								<p class="text-[#5B5B5B] text-[16px] md:text-[18px] leading-[1.7] m-0">
									<?php bp_text($t['description']); ?>
								</p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 13: THERAPY EXPECTATIONS ================= -->
	<?php $items13 = !empty($s13['items']) ? $s13['items'] : array(); ?>
	<section class="section" data-reveal>
		<div class="container">
			<div class="text-center max-w-[900px] mx-auto mb-12 lg:mb-16">
				<h2 class="h2 mb-4"><?php echo esc_html($s13['heading']); ?></h2>
			</div>

			<div class="habit-card-group grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
				<div class="lg:col-span-7 flex flex-col gap-4">
					<?php foreach ($items13 as $i => $item): ?>
						<button type="button"
							class="habit-card text-left w-full relative p-5 md:p-8 rounded-[18px] bg-white border border-[#E8B8AC] transition-all duration-200 cursor-pointer shadow-sm hover:border-l-[#C24C33] hover:border-l-3"
							data-title="<?php echo esc_attr($item['text']); ?>"
							data-desc="<?php echo esc_attr($item['text']); ?>"
							data-img="<?php echo esc_attr($item['image']); ?>">
							<div class="flex items-center gap-5">
								<span
									class="font-serif text-[28px] md:text-[32px] font-bold text-[#D86653] shrink-0 w-10 text-center"><?php echo esc_html($item['number']); ?></span>
								<p class="text-[#5B5B5B] text-[14px] md:text-[15px] leading-relaxed m-0">
									<?php bp_text($item['text']); ?>
								</p>
							</div>
						</button>
					<?php endforeach; ?>
				</div>

				<div class="lg:col-span-5 lg:sticky lg:top-24 self-start">
					<div class="relative overflow-hidden rounded-[28px] h-[380px] lg:h-[500px] w-full bg-[#FAEEEB]">
						<img class="habit-preview-img w-full h-full object-cover transition-opacity duration-300"
							src="<?php echo esc_attr(!empty($items13[0]['image']) ? $items13[0]['image'] : ''); ?>"
							alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 14: WHEN TO SEEK HELP ================= -->
	<?php $items14 = !empty($s14['items']) ? $s14['items'] : array(); ?>
	<section data-reveal>
		<div class="container">
			<div class="relative overflow-hidden rounded-[32px] p-8 md:p-12 lg:p-16"
				style="background: linear-gradient(352.44deg, rgba(253, 231, 225, 0.25) 28.13%, rgba(240, 147, 103, 0.04) 136.14%); box-shadow: 0px 4px 24px 0px rgba(169, 62, 40, 0.08);">
				<div
					class="absolute -top-[120px] -right-[120px] w-[340px] h-[340px] rounded-full border-[36px] border-[#FCECE8] opacity-60 pointer-events-none">
				</div>
				<div
					class="absolute -bottom-[120px] -left-[120px] w-[340px] h-[340px] rounded-full border-[36px] border-[#FCECE8] opacity-60 pointer-events-none">
				</div>

				<div class="relative z-10 text-center max-w-[886px] mx-auto mb-12">
					<h2 class="h2 m-0 mb-4"><?php echo esc_html($s14['heading']); ?></h2>
					<p class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6] m-0">
						<?php bp_text($s14['lede']); ?>
					</p>
				</div>

				<div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
					<?php foreach ($items14 as $item): ?>
						<div class="group relative rounded-[20px] p-6 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1"
							style="background: rgba(255,255,255,0.75); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(235, 230, 224, 0.8); box-shadow: 0px 2px 8px rgba(169, 62, 40, 0.06), 0px 8px 24px rgba(169, 62, 40, 0.08);">

							<!-- subtle inner overlay on hover -->
							<div class="absolute inset-0 rounded-[20px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"
								style="background: linear-gradient(135deg, rgba(255,255,255,0.6) 0%, rgba(253, 231, 225, 0.3) 100%);">
							</div>

							<div class="relative z-10">
								<div class="w-[48px] h-[48px] mb-4">
									<?php if (!empty($item['icon'])): ?>
										<img src="<?php echo esc_url($item['icon']); ?>" alt="Icon" class="object-contain" />
									<?php endif; ?>
								</div>
								<p class="text-[#5B5B5B] text-[16px] md:text-[17px] leading-[1.5] m-0">
									<?php bp_text($item['text']); ?>
								</p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 15: FIND PSYCHOLOGIST CTA ================= -->
	<?php $paragraphs15 = !empty($s15['paragraphs']) ? $s15['paragraphs'] : array(); ?>
	<section id="mh-relatives" class="section" data-reveal>
		<div class="container">
			<div class="rounded-[24px] p-8 md:p-12 lg:px-16 lg:py-10 relative overflow-hidden"
				style="background-color: #FFFFFF; background-image: <?php echo !empty($s15['background_image']) ? "url('" . esc_url($s15['background_image']) . "')," : ''; ?> radial-gradient(circle at 0% 50%, rgba(252, 237, 234, 0.8) 0%, rgba(255, 255, 255, 0) 50%), radial-gradient(circle at 100% 50%, rgba(240, 147, 103, 0.15) 0%, rgba(255, 255, 255, 0) 50%); background-position: bottom right, 0% 50%, 100% 50%; background-repeat: no-repeat, no-repeat, no-repeat; background-size: 410px auto, auto, auto;">
				<div
					class="w-full max-w-[900px] z-10 flex flex-col items-center md:items-start text-center md:text-left">
					<h2 class="h2 mb-4"><?php echo esc_html($s15['heading']); ?>
						<em><?php echo esc_html($s15['heading_highlight']); ?></em>
					</h2>
					<?php foreach ($paragraphs15 as $p): ?>
						<p class="text-[#6B5F5A] text-[15px] md:text-[20px] leading-[1.6] mb-4 font-normal m-0">
							<?php bp_text($p['text']); ?>
						</p>
					<?php endforeach; ?>
					<a href="<?php echo esc_url($s15['button_link']); ?>"
						class="inline-flex items-center justify-center gap-3 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] md:text-[18px] px-[24px] py-[12px] md:py-[14px] rounded-full transition-colors w-fit m-0 mt-4">
						<?php echo esc_html($s15['button_text']); ?>
						<?php if (!empty($s15['button_icon'])): ?>
							<img src="<?php echo esc_url($s15['button_icon']); ?>" alt="Arrow Right Icon"
								class="w-[24px] h-[24px] object-contain" />
						<?php endif; ?>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ================= SECTION 16: FAQ ================= -->
	<?php $faq_items16 = !empty($s16['faq_items']) ? $s16['faq_items'] : array(); ?>
	<section id="mh-faq" class="pb-[60px] section--white" data-reveal>
		<div class="container max-w-[1360px]">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
				<div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-8">
					<div>
						<h2 class="h2 mb-4"><?php echo esc_html($s16['heading']); ?>
							<em><?php echo esc_html($s16['heading_highlight']); ?></em>
						</h2>
						<p class="text-[15px] sm:text-[16px] leading-[26px] text-ink-muted m-0 mb-6 max-w-[420px]">
							<?php bp_text($s16['lede']); ?>
						</p>
					</div>

					<div class="bg-white/60 border border-[#E8DDD7] rounded-[24px] p-6 backdrop-blur-sm max-w-[460px]">
						<div class="flex items-center gap-3 mb-4">
							<div class="flex -space-x-2">
								<span class="w-8 h-8 rounded-full bg-[#E5D5C5] border-2 border-white"></span>
								<span class="w-8 h-8 rounded-full bg-[#E5E8C5] border-2 border-white"></span>
								<span class="w-8 h-8 rounded-full bg-[#E8C5C5] border-2 border-white"></span>
								<span class="w-8 h-8 rounded-full bg-[#F2E5D5] border-2 border-white"></span>
							</div>
							<span
								class="font-bold text-[16px] text-[#A93E28]"><?php echo esc_html($s16['testimonial_heading']); ?></span>
						</div>
						<p class="text-[14px] leading-[22px] text-ink-muted m-0 mb-5">
							<?php bp_text($s16['testimonial_text']); ?>
						</p>
						<button type="button"
							onclick="location.href='<?php echo esc_js($s16['testimonial_button_link']); ?>'"
							class="bg-[#C24C33] hover:bg-[#924A3D] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer shadow-sm">
							<span><?php echo esc_html($s16['testimonial_button_text']); ?></span>
							<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
								stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
								<path d="M5 12h14"></path>
								<path d="m12 5 7 7-7 7"></path>
							</svg>
						</button>
					</div>
				</div>

				<?php if (!empty($faq_items16)): ?>
					<div class="lg:col-span-7 flex flex-col gap-4">
						<?php foreach ($faq_items16 as $i => $faq):
							$open = ($i === 0); ?>

							<div
								class="faq-item <?php echo $open ? 'is-open' : ''; ?> border border-[#E8DDD7] rounded-[20px] overflow-hidden shadow-sm transition-all duration-300 [&.is-open]:bg-[#FFF8F5] bg-white">

								<button type="button"
									class="faq-item__trigger flex items-center justify-between w-full text-left p-6 sm:p-7 cursor-pointer group">
									<span
										class="font-serif font-bold text-lg sm:text-xl text-ink-900 group-hover:text-[#A85848] transition-colors pr-4">
										<?php echo esc_html($faq['question']); ?>
									</span>
									<span
										class="flex-shrink-0 w-8 h-8 rounded-full border border-black/10 flex items-center justify-center text-[#A85848] transition-transform duration-300 [.is-open_&]:rotate-180">
										<svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="1.5"
											fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path d="M6 9l6 6 6-6" />
										</svg>
									</span>
								</button>

								<div class="faq-item__panel faq-content px-6 sm:px-7 pb-6 <?php echo $open ? '' : 'hidden'; ?>">
									<div class="text-[15px] leading-[26px] text-ink-muted [&>p]:m-0">
										<?php echo wp_kses_post($faq['answer']); ?>
									</div>
								</div>

							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>