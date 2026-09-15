 <?php
/**
 * Template Name: Article Main
 */

get_header();
?>

<main>
      <section
        class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[626px]"
      >
        <span
          class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden"
        >
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/hero.webp"
            alt="Anxiety"
            class="absolute inset-0 w-full h-full object-cover object-[100%_50%]"
          />
          <span
            class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"
          ></span>
        </span>

        <div
          class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]"
        >
          <div class="max-w-[1312px] mx-auto">
            <div class="max-w-full lg:max-w-[595px]">
              <div
                class="inline-flex items-center gap-[9px] bg-white/[.66] backdrop-blur-2xl backdrop-saturate-150 border border-white/[.82] rounded-full px-5 py-[9px]"
              >
                <span class="text-[#CE5A43] text-[13px] leading-[13px]">✳</span>
                <span
                  class="font-sans font-semibold text-xs leading-4 tracking-[2px] uppercase text-brand-brown whitespace-nowrap"
                  >The psykolog.no blog</span
                >
              </div>

              <h1
                class="font-serif font-bold text-brand-darkest mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]"
              >
                Mental Health Explained <span class="text-[#C24C33] italic">Simply</span>
              </h1>

              <p
                class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0"
              >
                Book an appointment with an authorised psychologist in Oslo in person at our clinic or by secure video from anywhere in Norway. No referral from your GP is needed. Typical waiting time is 1 to 3 working days.
              </p>
            </div>
          </div>
        </div>
      </section> 

      <!-- ============ Articles Grid ============ -->
      <section class="lg:pb-[90px] pb-[40px] pt-[40px]">
          <div class="container">
            
            <!-- Filters & Search -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-6 mb-8">
              
              <!-- Filter Chips -->
              <div class="flex flex-wrap items-center gap-3">
                <button class="inline-flex items-center gap-2 bg-[#5C2A20] text-white px-5 py-2.5 rounded-full text-[15px] font-bold border border-[#5C2A20] cursor-pointer transition-colors">
                  All <span class="text-[#F09367] px-2 py-0.5 rounded-md text-[12px] font-semibold">15</span>
                </button>
                <button class="inline-flex items-center gap-2 bg-transparent text-[#33170F] px-5 py-2.5 rounded-full text-[15px] font-medium border border-[#F2E4DC] hover:border-[#5A3825] cursor-pointer transition-colors">
                  Anxiety <span class="text-[#33170F]/50 text-[13px] font-semibold">3</span>
                </button>
                <button class="inline-flex items-center gap-2 bg-transparent text-[#33170F] px-5 py-2.5 rounded-full text-[15px] font-medium border border-[#F2E4DC] hover:border-[#5A3825] cursor-pointer transition-colors">
                  Depression <span class="text-[#33170F]/50 text-[13px] font-semibold">2</span>
                </button>
                <button class="inline-flex items-center gap-2 bg-transparent text-[#33170F] px-5 py-2.5 rounded-full text-[15px] font-medium border border-[#F2E4DC] hover:border-[#5A3825] cursor-pointer transition-colors">
                  ADHD <span class="text-[#33170F]/50 text-[13px] font-semibold">2</span>
                </button>
                <button class="inline-flex items-center gap-2 bg-transparent text-[#33170F] px-5 py-2.5 rounded-full text-[15px] font-medium border border-[#F2E4DC] hover:border-[#5A3825] cursor-pointer transition-colors">
                  Burnout <span class="text-[#33170F]/50 text-[13px] font-semibold">2</span>
                </button>
                <button class="inline-flex items-center gap-2 bg-transparent text-[#33170F] px-5 py-2.5 rounded-full text-[15px] font-medium border border-[#F2E4DC] hover:border-[#5A3825] cursor-pointer transition-colors">
                  Mental health <span class="text-[#33170F]/50 text-[13px] font-semibold">3</span>
                </button>
                <button class="inline-flex items-center gap-2 bg-transparent text-[#33170F] px-5 py-2.5 rounded-full text-[15px] font-medium border border-[#F2E4DC] hover:border-[#5A3825] cursor-pointer transition-colors">
                  Therapy <span class="text-[#33170F]/50 text-[13px] font-semibold">3</span>
                </button>
              </div>

              <!-- Search Bar -->
              <div class="relative w-full lg:w-auto flex-none">
                <svg class="absolute left-5 top-1/2 -translate-y-1/2 w-[18px] h-[18px] text-[#C24C33]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" placeholder="Search articles" class="pl-12 pr-6 py-[13px] bg-[#FFF7F3] border border-[#F2E4DC] rounded-full text-[15px] w-full lg:w-[320px] focus:outline-none focus:border-[#C24C33] focus:bg-white transition-all text-[#33170F] placeholder-[#33170F]/50 font-sans">
              </div>

            </div>

            <!-- Main Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[869px_418px] gap-8">
              
              <!-- Featured Article -->
              <div class="js-article-card  relative rounded-[32px] overflow-hidden group min-h-[540px] flex flex-col justify-between" data-category="Therapy" data-title="What actually happens in a first session with a psychologist">
                <!-- Background Image -->
                <img id="heroMainImage" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-1.webp" alt="Featured Article" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                <!-- Gradient Overlays -->
                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/30 transition-colors duration-500"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#1F1411]/90 via-[#1F1411]/40 to-transparent"></div>
                
                <!-- Top actions -->
                <div class="relative z-10 p-6 md:p-8 flex items-start justify-between w-full">
                  <div class="bg-white rounded-full pl-2.5 pr-4 py-2 flex items-center gap-2.5 shadow-sm">
                    <span class="w-6 h-6">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Featured.webp" alt="Star / Rating Icon" class="object-contain" />
                    </span>
                    <span class="text-[12px] font-bold tracking-[0.1em] text-[#241C19] uppercase mt-px">FEATURED</span>
                  </div>
                  <div class="flex gap-2.5">
                    <button id="heroPrevArrow" class="border-0 bg-transparent p-0 cursor-pointer hover:opacity-80 transition-opacity flex items-center justify-center">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Button%20-%20Previous%20featured%20article.webp" alt="Previous Article" class="w-11 h-11 object-contain block" />
                    </button>
                    <button id="heroNextArrow" class="border-0 bg-transparent p-0 cursor-pointer hover:opacity-80 transition-opacity flex items-center justify-center">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Button%20-%20Next%20featured%20article.webp" alt="Next Article" class="w-11 h-11 object-contain block" />
                    </button>
                  </div>
                </div>
                
                <!-- Content -->
                <div class="relative z-10 p-6 md:p-8 lg:p-10 w-full lg:max-w-[85%] mt-auto">
                  <div class="flex flex-wrap items-center gap-3 md:gap-4 text-white/90 text-[14px] font-bold mb-4 uppercase tracking-[0.1em]">
                    <span id="heroCategory" class="text-[#96702B]">THERAPY</span>
                    <span class="text-white/40">—</span>
                    <span id="heroTime">6 min read</span>
                    <span class="text-white/40">—</span>
                    <span id="heroDate">4 September 2026</span>
                  </div>
                  <h3 id="heroTitle" class="text-[28px] md:text-[32px] lg:text-[36px] leading-[1.2] font-serif text-white font-bold mb-4 transition-opacity duration-300">
                    What actually happens in a first session with a psychologist
                  </h3>
                  <p id="heroDesc" class="text-[#E4CFC4] text-[16px] md:text-[18px] mb-8 leading-[1.6] max-w-[560px] transition-opacity duration-300">
                    Most people arrive unsure what they are supposed to say. Here is how the first 45 minutes usually go, and what you never have to explain.
                  </p>
                  
                  <a href="#" class="inline-flex items-center gap-3 text-white font-bold text-lg hover:text-[#C24C33] transition-colors no-underline group/link">
                    Read article
                   <span class="w-9 h-9 ">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/read-more-arrow.webp" alt="Right Arrow Icon" class="object-contain" />
                  </span>
                  </a>
                  
                  <!-- Progress/Indicator lines -->
                  <div id="heroIndicators" class="flex items-center gap-2.5 mt-[30px] w-full max-w-[440px]">
                    <div class="h-[3px] flex-1 bg-[#F09367] rounded-full transition-colors duration-300"></div>
                    <div class="h-[3px] flex-1 bg-white/30 rounded-full transition-colors duration-300"></div>
                    <div class="h-[3px] flex-1 bg-white/30 rounded-full transition-colors duration-300"></div>
                  </div>
                </div>
              </div>
              
              <!-- Sidebar Articles -->
              <div class="flex flex-col gap-6">
                
                <!-- Sidebar Article 1 (Active) -->
                <a href="#" class="js-article-card js-hero-sidebar-article group block p-4 bg-white rounded-[24px] border border-[#C24C33] shadow-[0_4px_24px_rgba(194,76,51,0.08)] hover:shadow-[0_8px_32px_rgba(194,76,51,0.12)] transition-all relative overflow-hidden no-underline h-full flex flex-col justify-center" 
                   data-hero-index="0"
                   data-hero-category="THERAPY"
                   data-hero-category-color="#96702B"
                   data-hero-time="6 min read"
                   data-hero-date="4 September 2026"
                   data-hero-title="What actually happens in a first session with a psychologist"
                   data-hero-desc="Most people arrive unsure what they are supposed to say. Here is how the first 45 minutes usually go, and what you never have to explain."
                   data-hero-image-main="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-1.webp"
                   data-category="Therapy" data-title="What Actually Happens In A First Session With A Psychologist">
                  <div class="flex gap-4 md:gap-5">
                    <div class="w-[120px] md:w-[130px] h-[95px] md:h-[110px] rounded-[16px] overflow-hidden flex-none">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-2.webp" alt="Therapy session" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <div class="flex items-center gap-2 text-[11px] font-bold tracking-[0.1em] uppercase mb-2.5">
                        <span class="text-[#96702B]">THERAPY</span>
                        <span class="text-[#33170F]/20">—</span>
                        <span class="text-[#33170F]/50">6 min read</span>
                      </div>
                      <h4 class="font-serif font-bold text-[17px] md:text-[19px] text-[#33170F] leading-[1.3] group-hover:text-[#96702B] transition-colors m-0 pr-2">
                        What Actually Happens In A First Session With A Psychologist
                      </h4>
                    </div>
                  </div>
                </a>
                
                <!-- Sidebar Article 2 -->
                <a href="#" class="js-article-card js-hero-sidebar-article group block p-4 bg-[#FCF0EB]/60 rounded-[24px] border border-transparent hover:border-[#E8DDD7] hover:bg-[#FCF0EB] transition-all no-underline h-full flex flex-col justify-center" 
                   data-hero-index="1"
                   data-hero-category="MENTAL HEALTH"
                   data-hero-category-color="#4A5D46"
                   data-hero-time="4 min read"
                   data-hero-date="2 September 2026"
                   data-hero-title="Is It Stress, Or Is It Something More?"
                   data-hero-desc="Learn how to distinguish between everyday stress and signs that you might need professional support or a different approach to mental health."
                   data-hero-image-main="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-3.webp"
                   data-category="Mental health" data-title="Is It Stress, Or Is It Something More?">
                  <div class="flex gap-4 md:gap-5">
                    <div class="w-[120px] md:w-[130px] h-[95px] md:h-[110px] rounded-[16px] overflow-hidden flex-none">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-3.webp" alt="Mental Health" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <div class="flex items-center gap-2 text-[11px] font-bold tracking-[0.1em] uppercase mb-2.5">
                        <span class="text-[#4A5D46]">MENTAL HEALTH</span>
                        <span class="text-[#33170F]/20">—</span>
                        <span class="text-[#33170F]/50">4 min read</span>
                      </div>
                      <h4 class="font-serif font-bold text-[17px] md:text-[19px] text-[#33170F] leading-[1.3] group-hover:text-[#4A5D46] transition-colors m-0 pr-2">
                        Is It Stress, Or Is It Something More?
                      </h4>
                    </div>
                  </div>
                </a>
                
                <!-- Sidebar Article 3 -->
                <a href="#" class="js-article-card js-hero-sidebar-article group block p-4 bg-[#FCF0EB]/60 rounded-[24px] border border-transparent hover:border-[#E8DDD7] hover:bg-[#FCF0EB] transition-all no-underline h-full flex flex-col justify-center" 
                   data-hero-index="2"
                   data-hero-category="THERAPY"
                   data-hero-category-color="#6B568A"
                   data-hero-time="5 min read"
                   data-hero-date="28 August 2026"
                   data-hero-title="Waiting Lists, Referrals & What You Can Skip"
                   data-hero-desc="Navigating the mental health system can be confusing. Here is a guide to understanding the process and how to get help faster."
                   data-hero-image-main="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-4.webP"
                   data-category="Therapy" data-title="Waiting Lists, Referrals & What You Can Skip">
                  <div class="flex gap-4 md:gap-5">
                    <div class="w-[120px] md:w-[130px] h-[95px] md:h-[110px] rounded-[16px] overflow-hidden flex-none">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-4.webP" alt="Therapy Referrals" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <div class="flex items-center gap-2 text-[11px] font-bold tracking-[0.1em] uppercase mb-2.5">
                        <span class="text-[#6B568A]">THERAPY</span>
                        <span class="text-[#33170F]/20">—</span>
                        <span class="text-[#33170F]/50">5 min read</span>
                      </div>
                      <h4 class="font-serif font-bold text-[17px] md:text-[19px] text-[#33170F] leading-[1.3] group-hover:text-[#6B568A] transition-colors m-0 pr-2">
                        Waiting Lists, Referrals & What You Can Skip
                      </h4>
                    </div>
                  </div>
                </a>
                
              </div>

            </div>
        </div>
      </section>

      <!-- ============ Latest Articles (Fresh from our psychologists) ============ -->
      <section class="bg-[#F5EDE8] py-16 lg:py-24">
        <div class="px-4 md:px-12 lg:px-16">
          <div class="max-w-[1312px] mx-auto">
            
            <div class="mb-10">
              <span class="text-[#C24C33] text-[13px] font-bold tracking-[0.15em] uppercase mb-3 block">LATEST ARTICLES</span>
              <h2 class="text-[34px] md:text-[42px] lg:text-[48px] font-serif font-bold text-[#33170F] leading-tight m-0">Fresh from our psychologists</h2>
            </div>

            <!-- 3 Column Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
              
              <!-- Card 1 -->
              <a href="#" class="js-article-card js-latest-card block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-category="ADHD" data-title="Adult ADHD Often Looks Like Exhaustion">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article1.webp" alt="Adult ADHD" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
               </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-220px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#96702B] text-[11px] font-bold tracking-[0.15em] uppercase">ADHD</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 7 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#96702B] transition-colors">Adult ADHD Often Looks Like Exhaustion</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">Why so many adults are assessed for burnout before ADHD is identified.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#96702B] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

              <!-- Card 2 -->
              <a href="#" class="js-article-card js-latest-card block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-category="Burnout" data-title="Burnout Is Not The Same As Being Tired">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article2.webp" alt="Burnout" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-220px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#4A5D46] text-[11px] font-bold tracking-[0.15em] uppercase">BURNOUT</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 5 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#4A5D46] transition-colors">Burnout Is Not The Same As Being Tired</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">Three signs that separate ordinary tiredness from occupational burnout.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#4A5D46] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

              <!-- Card 3 -->
              <a href="#" class="js-article-card js-latest-card block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-category="Mental health" data-title="How To Support Someone Without Carrying It Alone">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article3.webp" alt="Mental Health Support" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-220px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#6B568A] text-[11px] font-bold tracking-[0.15em] uppercase">MENTAL HEALTH</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 6 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#6B568A] transition-colors">How To Support Someone Without Carrying It Alone</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">Practical boundaries for partners, parents and friends.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#6B568A] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

              <!-- Card 4 -->
              <a href="#" class="js-article-card js-latest-card block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-category="Depression" data-title="Bipolar Disorder: Signs & Treatment">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article4.webp" alt="Bipolar Disorder" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-220px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#96702B] text-[11px] font-bold tracking-[0.15em] uppercase">BIPOLAR DISORDER</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 7 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#96702B] transition-colors">Bipolar Disorder: Signs & Treatment</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">Why so many adults are assessed for burnout before ADHD is identified.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#96702B] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

              <!-- Card 5 -->
              <a href="#" class="js-article-card js-latest-card block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-category="Anxiety" data-title="Understanding PTSD: Causes, Symptoms & Recovery">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article5.webp" alt="PTSD & Trauma" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-220px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#4A5D46] text-[11px] font-bold tracking-[0.15em] uppercase">PTSD & TRAUMA</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 5 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#4A5D46] transition-colors">Understanding PTSD: Causes, Symptoms & Recovery</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">Three signs that separate ordinary tiredness from occupational burnout.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#4A5D46] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

              <!-- Card 6 -->
              <a href="#" class="js-article-card js-latest-card block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-category="Mental health" data-title="Mental Health: Signs, Challenges And Ways To Cope">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article6.webp" alt="Mental Health Signs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-220px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#6B568A] text-[11px] font-bold tracking-[0.15em] uppercase">MENTAL HEALTH</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 6 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#6B568A] transition-colors">Mental Health: Signs, Challenges And Ways To Cope</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">Practical boundaries for partners, parents and friends.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#6B568A] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

              <!-- Card 7 (Hidden initially) -->
              <a href="#" class="js-article-card js-latest-card hidden block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-hidden-by-default="true" data-category="Anxiety" data-title="Understanding And Managing Daily Anxiety">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article1.webp" alt="Anxiety" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-200px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#96702B] text-[11px] font-bold tracking-[0.15em] uppercase">ANXIETY</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 5 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#96702B] transition-colors">Understanding And Managing Daily Anxiety</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">Simple strategies to ground yourself when everything feels overwhelming.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#96702B] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

              <!-- Card 8 (Hidden initially) -->
              <a href="#" class="js-article-card js-latest-card hidden block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-hidden-by-default="true" data-category="Depression" data-title="Navigating The Lows Of Depression">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article2.webp" alt="Depression" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-200px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#4A5D46] text-[11px] font-bold tracking-[0.15em] uppercase">DEPRESSION</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 8 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#4A5D46] transition-colors">Navigating The Lows Of Depression</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">A guide to finding small moments of light in the darkest of times.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#4A5D46] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

              <!-- Card 9 (Hidden initially) -->
              <a href="#" class="js-article-card js-latest-card hidden block bg-white rounded-[24px] overflow-hidden border border-[#E8DDD7] hover:border-[#C24C33] hover:shadow-[0_8px_32px_rgba(194,76,51,0.08)] transition-all group no-underline" data-hidden-by-default="true" data-category="Therapy" data-title="Finding The Right Psychologist For You">
                <div class="h-[200px] rounded-[14px] overflow-hidden mx-4 mt-4">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/Article3.webp" alt="Therapy matching" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-between h-[calc(100%-200px)]">
                  <div>
                    <div class="flex items-center justify-between gap-4 mb-4">
                      <span class="text-[#6B568A] text-[11px] font-bold tracking-[0.15em] uppercase">THERAPY</span>
                      <span class="text-[#33170F]/50 text-xs flex items-center gap-2">
                        <span class="w-4 h-px bg-[#33170F]/20"></span> 4 min read
                      </span>
                    </div>
                    <h3 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] leading-[1.3] mb-4 group-hover:text-[#6B568A] transition-colors">Finding The Right Psychologist For You</h3>
                    <p class="text-[#33170F]/70 text-[15px] leading-[1.6] mb-6">Why the connection with your therapist matters more than their methodology.</p>
                  </div>
                  <div class="flex items-center gap-2 text-[#6B568A] font-bold text-[14px]">
                    Read <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                  </div>
                </div>
              </a>

            </div>

            <!-- View All Button -->
            <div class="mt-12 flex justify-start">
              <button type="button" id="viewAllArticlesBtn" class="inline-flex items-center gap-3 bg-transparent text-[#C24C33] font-bold text-[15px] border border-[#C24C33] rounded-full px-6 py-3 hover:bg-[#C24C33] hover:text-white transition-colors cursor-pointer">
                View All
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
              </button>
            </div>

          </div>
        </div>
      </section>

    

      <!-- ============ CTA ============ -->
        <section class="section" data-reveal="">
        <div class="container">
          <div
            class="rounded-[32px] px-8 py-12 md:py-20 md:px-[56px] shadow-sm flex flex-col md:flex-row items-center justify-between gap-10"
            style="
              background:
                radial-gradient(
                  46% 62% at 92% 88%,
                  rgba(240, 147, 103, 0.14) 0%,
                  rgba(240, 147, 103, 0) 70%
                ),
                radial-gradient(
                  46% 62% at 8% 84%,
                  rgba(248, 216, 212, 0.55) 0%,
                  rgba(248, 216, 212, 0) 70%
                ),
                radial-gradient(
                  58% 74% at 50% 0%,
                  rgba(248, 235, 226, 0.9) 0%,
                  rgba(248, 235, 226, 0) 72%
                );
            "
          >
            <div class="text-center md:text-left max-w-[665px]">

              <span class="text-[#A93E28] text-[13px] md:text-[14px] font-bold tracking-[0.15em] uppercase mb-[18px]">
                 Reading is a good first step
              </span>
              <h2
                class="font-serif text-[30px] md:text-[36px] text-[#241C19] mb-4 font-bold"
              >
               Talking To Specialist Is The Next Step
              </h2>

              <p
                class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6] max-w-[620px] mx-auto md:mx-0 mb-8 font-normal"
              >
                Contact us, or book an initial conversation with one of our
                psychologists, who can help you further.
              </p>

              <div
                class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4"
              >
                <a
                  href="#"
                  class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors"
                >
                 Find a Psychologist
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Faqs/arrow.webp"
                    alt="Right Arrow Icon"
                    class="h-6 w-6 object-contain"
                  />
                </a>

                <a
                  href="#"
                  class="inline-flex items-center justify-center gap-2 bg-white hover:bg-[#FBF3EF] text-[#C24C33] border border-[#C24C33] font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors"
                >
                 Online Session
                </a>
              </div>
            </div>

            <div class="shrink-0">
              <div class="w-[421px] h-[280px]">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/cta.webp"
                  alt="Chat/Support Icon"
                  class="object-contain"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>   