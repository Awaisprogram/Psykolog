 <?php
/**
 * Template Name: BlogDetail
 */

get_header();
?>
 
 <main>
      <section class="relative pt-28 md:pt-42 mt-[-100px] bg-[#FBEFE9]">
        <div class="container relative z-10 max-w-[1312px] mx-auto text-center px-4">
          <!-- Breadcrumbs -->
          <div class="flex items-center justify-center gap-2 text-[14px] font-medium text-[#33170F]/50 mb-6">
                <a href="index.html" class="hover:text-[#C24C33] transition-colors no-underline text-[#6F6259]">Home</a>
            <span>/</span>
            <a href="article.html" class="hover:text-[#C24C33] transition-colors no-underline text-[#6F6259]">Blog</a>
            <span>/</span>
            <span class="text-[#A93E28] font-bold">ADHD</span>
          </div>

          <!-- Tags -->
          <div class="flex flex-wrap items-center justify-center gap-3 mb-[24px]">
            <span class="inline-flex items-center justify-center bg-[#C24C33] text-white text-[10px] tracking-[1.6px] font-bold uppercase px-4 py-2 rounded-full">
              ADHD
            </span>
            <span class="inline-flex items-center justify-center bg-white text-[#6F6259] tracking-[1.6px] text-[10px] font-bold uppercase px-4 py-2 rounded-full">
              MENTAL HEALTH
            </span>
          </div>

          <!-- Title -->
          <h1 class="font-serif text-[28px] md:text-[38px] lg:text-[48px] lg:leading-[64.8px] leading-[1.2] text-[#241C19] font-bold mb-6 max-w-[1057px] mx-auto">
            Understanding ADHD in Adults: Signs, Symptoms and Treatment
          </h1>

          <!-- Subtitle -->
          <p class="text-[16px] md:text-[20px] leading-[1.6] text-[#5B5B5B] mb-0 max-w-[1057px] mx-auto">
            Adult ADHD is often recognised late, after years of being read as disorganisation or stress. This article explains how it can present in adult life, how an assessment works, and what support is available.
          </p>
        </div>
      </section>

      <!-- Image Section (Overlapping) -->
      <section class="relative bg-white pb-[24px] pt-[32px]">
        <!-- This absolute div creates the background split -->
        <div class="absolute top-0 left-0 right-0 h-[30%] bg-[#FBEFE9]"></div>
        <div class="container relative z-10  px-4">
          <div class="w-full rounded-[24px] overflow-hidden shadow-sm h-[366px]">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/hero.webp" alt="ADHD in Adults" class="w-full h-full object-cover" />
          </div>
        </div>
      </section>

      <!-- Main Blog Content & Sidebar -->
      <section class="pb-8 bg-white">
        <div class="container">
          
          <!-- Author / Reviewer Strip -->
          <div class="grid grid-cols-1 md:grid-cols-3 lg:gap-12 mb-[32px] border border-[#1E31381A] rounded-[24px] p-4 lg:p-6">
            <!-- Written by -->
            <div class="flex items-center gap-4 border-r-0 lg:border-r border-[#E8DDD7] pr-0 lg:pr-12 w-full lg:w-auto mb-6 lg:mb-0">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Written by.webp" alt="Author" class="w-12 h-12 rounded-full object-cover" />
              <div>
                <span class="block text-[#C24C33] text-[10px] font-bold uppercase tracking-[1.6px] mb-1">Written by</span>
                <span class="block text-[#241C19] font-serif font-bold text-[16px]">Dr. Rehan-Bin Nawaz</span>
              </div>
            </div>
            
            <!-- Published & updated -->
            <div class="flex items-center gap-4 border-r-0 lg:border-r border-[#E8DDD7] pr-0 lg:pr-12 w-full lg:w-auto mb-6 lg:mb-0">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Published & updated.webp" alt="Calendar" class="w-12 h-12 rounded-full object-cover" />
              <div>
                <span class="block text-[#C24C33] text-[10px] font-bold uppercase tracking-[1.6px] mb-1">Published & updated</span>
                <span class="block text-[#241C19] font-bold text-[16px]">Aug 12, 2026</span>
                <span class="block text-[#5B5B5B] text-[13px] mt-1">Updated Aug 12, 2026</span>
              </div>
            </div>
            
            <!-- Medically approved by -->
            <div class="flex items-center gap-4 w-full lg:w-auto">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Medically approved by.webp" alt="Reviewer" class="w-12 h-12 rounded-full object-cover" />
              <div>
                <span class="block text-[#C24C33] text-[10px] font-bold uppercase tracking-[1.6px] mb-1">Medically approved by</span>
                <span class="block text-[#241C19] font-serif font-bold text-[16px]">Dr. Hamad Khan</span>
                <span class="block text-[#5B5B5B] text-[13px] mt-1">Specialist in Psychiatry</span>
              </div>
            </div>
          </div>

          <!-- Main Grid (Left Content + Right Sticky Sidebar) -->
          <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[1017px_283px] gap-4 lg:gap-[25px] items-start">
            
            <!-- Left Column: Main Content -->
            <div class="flex flex-col gap-12">
              
              <!-- Key Points -->
              <div class="bg-[linear-gradient(180deg,#FFF7F3_0%,#F8EBE2_100%)] rounded-[24px] p-6 md:px-8 md:py-[56px] border border-[#C24C3333]">
                <div class="inline-flex items-center gap-2 bg-white text-[#C24C33] border border-[#F0936757] text-[14px] font-bold tracking-[1.6px] uppercase px-4 py-2 rounded-full mb-6">
                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/key-point.webp" alt="Clock / Time Icon" class="w-[22px] h-[22px] object-contain" />
                  Read this in 20 seconds
                </div>
                
                <h2 class="font-serif text-[28px] md:text-[32px] text-[#3A1811] font-bold mb-[24px]">Key points</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                  <div class="flex items-start gap-4">
                    <span class="w-[26px] h-[26px] rounded-[8px] bg-[#F09367] text-white flex items-center justify-center font-bold text-[12px] shrink-0">01</span>
                    <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">ADHD can affect adults in different ways, and often looks nothing like the childhood stereotype.</p>
                  </div>
                  <div class="flex items-start gap-4">
                    <span class="w-[26px] h-[26px] rounded-[8px] bg-[#F09367] text-white flex items-center justify-center font-bold text-[12px] shrink-0">02</span>
                    <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Symptoms can influence attention, organisation, impulsivity and daily functioning.</p>
                  </div>
                  <div class="flex items-start gap-4">
                    <span class="w-[26px] h-[26px] rounded-[8px] bg-[#F09367] text-white flex items-center justify-center font-bold text-[12px] shrink-0">03</span>
                    <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Adult ADHD frequently overlaps with anxiety, low mood or exhaustion.</p>
                  </div>
                  <div class="flex items-start gap-4">
                    <span class="w-[26px] h-[26px] rounded-[8px] bg-[#F09367] text-white flex items-center justify-center font-bold text-[12px] shrink-0">04</span>
                    <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Assessment should be carried out by a qualified professional, not a questionnaire alone.</p>
                  </div>
                  <div class="flex items-start gap-4 md:col-span-2">
                    <span class="w-[26px] h-[26px] rounded-[8px] bg-[#F09367] text-white flex items-center justify-center font-bold text-[12px] shrink-0">05</span>
                    <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Treatment may combine strategy work, psychological therapy and medication depending on the person.</p>
                  </div>
                </div>
              </div>

              <!-- Article Text Block -->
              <div>
                <div class="flex items-center justify-between mb-[16px]">
                  <div class="flex items-center gap-3 text-[#A93E28] text-[12px] md:text-[16px] font-bold tracking-[1.6px] uppercase">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Overview.webp" alt="Left Arrow / Back Icon" class="w-[32px] h-[32px] object-contain" />
                    01 — OVERVIEW
                  </div>
                  <button class="bg-[#FCF5F3] text-[#A93E28] border border-[#F5E6E1] hover:border-[#A93E28] rounded-full px-4 py-2 text-[11px] font-bold tracking-[1.6px] uppercase transition-colors inline-flex items-center gap-2 cursor-pointer">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/ask-ai.webp" alt="Microphone / Voice Icon" class="w-4 h-4 object-contain" />
                    Ask AI about this
                  </button>
                </div>
                
                <h2 class="font-serif text-[36px] md:text-[44px] text-[#241C19] font-bold mb-8">What Adult ADHD Actually Is</h2>
                
                <div class="rounded-[24px] overflow-hidden mb-8 h-[400px]">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/What adult ADHD actually is.webp" alt="Adult ADHD" class="w-full h-full object-cover" />
                </div>
                
                <p class="text-[#5B5B5B] text-[20px] leading-[1.8] mb-6">
                  ADHD is a neurodevelopmental condition that begins in childhood and continues into adult life for a large proportion of people. It affects attention, activity level and impulse control, and the way those three interact with the demands of ordinary adult life.
                </p>
                <p class="text-[#5B5B5B] text-[20px] leading-[1.8] mb-12">
                  In adults, the visible restlessness of childhood often settles into something quieter: an internal sense of being unable to stop, difficulty finishing what has been started, and a working day that takes far more effort than it appears to from the outside.
                </p>
                
                <!-- In Simple Terms -->
                <div class="bg-[#FFF7F3] border-l-[3px] border-[#C24C33] rounded-[24px] p-8 flex items-start gap-6 mb-12">
                 <div class="w-[54px] h-[54px]">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/simple-terms.webp" alt="Lightning / Flash Icon" class="object-contain" />
                </div>
                  <div>
                    <h4 class="text-[#A93E28] text-[12px] md:text-[18px] font-bold tracking-[1.6px] uppercase mb-2">IN SIMPLE TERMS</h4>
                    <p class="text-[#241C19] text-[16px] leading-[1.6] m-0">Adult ADHD affects how a person manages attention, time, tasks and impulses. It is not a matter of effort or intelligence.</p>
                  </div>
                </div>
                
                <!-- 3 Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[14px]">
                  <!-- Card 1 -->
                  <div class="bg-[#FDE7E1] rounded-[18px] p-6 h-full flex flex-col">
                    <div class="w-[54px] h-[54px]">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Often identified in adulthood.webp" alt="Clock / Time Icon" class="object-contain" />
                    </div>
                    <h4 class="font-serif font-bold text-[20px] text-[#241C19] my-3">Often identified in adulthood</h4>
                    <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Many people are assessed only after years of being read as disorganised or stressed.</p>
                  </div>
                  <!-- Card 2 -->
                  <div class="bg-[#EAF1F6] rounded-[18px] p-6 h-full flex flex-col">
                    <div class="w-[54px] h-[54px]">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Overlaps with other conditions.webp" alt="Clock / Time Icon" class="object-contain" />
                    </div>
                    <h4 class="font-serif font-bold text-[20px] text-[#241C19] my-3">Overlaps With Other Conditions</h4>
                    <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Anxiety, low mood and exhaustion frequently sit alongside it.</p>
                  </div>
                  <!-- Card 3 -->
                  <div class="bg-[#EBF2EA] rounded-[18px] p-6 h-full flex flex-col">
                    <div class="w-[54px] h-[54px]">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Responds well to support.webp" alt="Clock / Time Icon" class="object-contain" />
                    </div>
                    <h4 class="font-serif font-bold text-[20px] text-[#241C19] my-3">Responds well to support</h4>
                    <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Strategy work, therapy and, where appropriate, medication all help.</p>
                  </div>
                </div>
              </div>
              
              <!-- Section 02 -->
              <div class="mt-6 md:mt-[30px]">
                <div class="flex items-center justify-between mb-[16px]">
                  <div class="flex items-center gap-3 text-[#B0892D] text-[12px] md:text-[16px] font-bold tracking-[1.6px] uppercase">
                    <!-- Using text for 02 since it's simple -->
                    02 — SIGNS AND SYMPTOMS
                  </div>
                  <button class="bg-[#FCF5F3] text-[#A93E28] border border-[#F5E6E1] hover:border-[#A93E28] rounded-full px-4 py-2 text-[11px] font-bold tracking-[1.6px] uppercase transition-colors inline-flex items-center gap-2 cursor-pointer">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/ask-ai.webp" alt="Microphone / Voice Icon" class="w-4 h-4 object-contain" />
                    Ask AI about this
                  </button>
                </div>
                
                <h2 class="font-serif text-[36px] md:text-[44px] text-[#241C19] font-bold mb-6">How It Tends To Appear In Adult Life</h2>
                
                <p class="text-[#4E403B] text-[16px] md:text-[20px] leading-[1.8] mb-[16px]">
                  Adults rarely describe their difficulty as an attention problem. They describe the consequences: deadlines that arrive faster than expected, a home that never quite gets organised, and conversations they realise they have lost track of halfway through.
                </p>
                <p class="text-[#4E403B] text-[16px] md:text-[20px] leading-[1.8] mb-[24px]">
                  Most of these trace back to executive function rather than to lack of care or capability.
                </p>
                
                <div class="rounded-[24px] overflow-hidden">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/How it tends to appear in adult life.webp" alt="Woman stressed at desk" class="w-full h-auto object-cover" />
                </div>
              </div>
              
              <!-- Section 03 -->
              <div class="mt-6 md:mt-[20px]">
                <div class="flex items-center justify-between mb-[16px]">
                  <div class="flex items-center gap-3 text-[#A93E28] text-[12px] md:text-[16px] font-bold tracking-[1.6px] uppercase">
                    03 - SIX EVERYDAY AREAS
                  </div>
                  <button class="bg-[#FCF5F3] text-[#A93E28] border border-[#F5E6E1] hover:border-[#A93E28] rounded-full px-4 py-2 text-[11px] font-bold tracking-[1.6px] uppercase transition-colors inline-flex items-center gap-2 cursor-pointer">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/ask-ai.webp" alt="Microphone / Voice Icon" class="w-4 h-4 object-contain" />
                    Ask AI about this
                  </button>
                </div>
                
                <h2 class="font-serif text-[36px] md:text-[44px] text-[#241C19] font-bold mb-8">How It Tends To Appear In Adult Life</h2>
                
                <div class="border border-[#E8DDD7] rounded-[24px] overflow-hidden mb-[24px]  shadow-[0px_18px_44px_-34px_#5C2A204D]">
                  <!-- Header row -->
                  <div class="bg-[#C24C33] px-8 py-5 flex items-center justify-center">
                    <span class="text-white text-[12px] font-bold tracking-[1.6px] uppercase">PUBLIC PSYCHOLOGIST</span>
                  </div>
                  
                  <!-- List items -->
                  <div class="flex flex-col bg-white ">
                    <div class="flex flex-col md:flex-row md:items-center px-6 md:px-8 py-6 border-b border-[#E8DDD7] gap-4 md:gap-0 hover:bg-[#F9F5F0] transition-colors cursor-pointer group">
                      <div class="md:w-1/3 flex items-center gap-4">
                        <div class="w-10 h-10">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Attention.webp" alt="Attention" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[18px] text-[#241C19]">Attention</span>
                      </div>
                      <div class="md:w-2/3">
                        <p class="text-[#5B5B5B] text-[16px] m-0">Difficulty maintaining focus on tasks that are not immediately engaging</p>
                      </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row md:items-center px-6 md:px-8 py-6 border-b border-[#E8DDD7] gap-4 md:gap-0 hover:bg-[#F9F5F0] transition-colors cursor-pointer group">
                      <div class="md:w-1/3 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-[10px] bg-[#EBF2EA] flex items-center justify-center shrink-0">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Organization.webp" alt="Organization" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[18px] text-[#241C19]">Organization</span>
                      </div>
                      <div class="md:w-2/3">
                        <p class="text-[#5B5B5B] text-[16px] m-0">Trouble planning, prioritising or knowing where to begin</p>
                      </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row md:items-center px-6 md:px-8 py-6 border-b border-[#E8DDD7] gap-4 md:gap-0 hover:bg-[#F9F5F0] transition-colors cursor-pointer group">
                      <div class="md:w-1/3 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-[10px] bg-[#EAF1F6] flex items-center justify-center shrink-0">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Choice of Psychologist.webp" alt="Choice of Psychologist" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[18px] text-[#241C19]">Choice Of Psychologist</span>
                      </div>
                      <div class="md:w-2/3">
                        <p class="text-[#5B5B5B] text-[16px] m-0">Frequently underestimating how long tasks will take</p>
                      </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row md:items-center px-6 md:px-8 py-6 border-b border-[#E8DDD7] gap-4 md:gap-0 hover:bg-[#F9F5F0] transition-colors cursor-pointer group">
                      <div class="md:w-1/3 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-[10px] bg-[#FCF8EC] flex items-center justify-center shrink-0">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Evening Availability.webp" alt="Evening Availability" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[18px] text-[#241C19]">Evening Availability</span>
                      </div>
                      <div class="md:w-2/3">
                        <p class="text-[#5B5B5B] text-[16px] m-0">Acting or responding without sufficient pause</p>
                      </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row md:items-center px-6 md:px-8 py-6 border-b border-[#E8DDD7] gap-4 md:gap-0  hover:bg-[#F9F5F0] transition-colors cursor-pointer group">
                      <div class="md:w-1/3 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-[10px] bg-[#F2EBFA] flex items-center justify-center shrink-0">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Video Option.webp" alt="Video Option" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[18px] text-[#241C19]">Video Option</span>
                      </div>
                      <div class="md:w-2/3">
                        <p class="text-[#5B5B5B] text-[16px] m-0">An internal sense of being unable to settle, rather than visible fidgeting</p>
                      </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row md:items-center px-6 md:px-8 py-6 gap-4 md:gap-0 hover:bg-[#F9F5F0] transition-colors cursor-pointer group">
                      <div class="md:w-1/3 flex items-center gap-4">
                        <div class="w-10 h-10">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Ask This Article.webp" alt="Language Options" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[18px] text-[#241C19]">Language Options</span>
                      </div>
                      <div class="md:w-2/3">
                        <p class="text-[#5B5B5B] text-[16px] m-0">Strong reactions that pass quickly but feel difficult to hold back</p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <p class="text-[#5B5B5B] text-[18px] leading-[1.8] mb-12">
                  Any one of these can occur for many reasons. What matters clinically is whether they are persistent and whether they affect daily functioning.
                </p>
                
                <!-- CTA Box -->
                <div class="bg-[radial-gradient(46%_62%_at_92%_88%,rgba(240,147,103,0.14)_0%,rgba(240,147,103,0)_70%),radial-gradient(46%_62%_at_8%_84%,rgba(248,216,212,0.55)_0%,rgba(248,216,212,0)_70%),radial-gradient(58%_74%_at_50%_0%,rgba(248,235,226,0.9)_0%,rgba(248,235,226,0)_72%)] rounded-[24px] p-8 md:p-12 border border-[#C24C3333] flex flex-col md:flex-row items-center justify-between gap-8 ">
                  <div class="max-w-[613px]">
                    <h3 class="font-serif text-[32px] md:text-[36px] text-[#3A1811] font-bold leading-[1.2] mb-6">Wondering Whether These Patterns Are Affecting Your Daily Life?</h3>
                    <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] mb-8">An authorized psychologist can talk it through with you, without a referral.</p>
                    <button class="bg-[#C24C33] hover:bg-[#9A3825] text-white font-bold text-[15px] px-6 py-4 rounded-full transition-colors inline-flex items-center gap-3">
                      Talk To A Psychologist
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/arrow.webp" alt="Right Arrow Icon" class="w-4 h-4 object-contain filter invert brightness-0" />
                    </button>
                  </div>
                  <div class="shrink-0 flex justify-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/cta.webp" alt="ADHD Brain" class="w-full max-w-[280px] h-auto object-contain" />
                  </div>
                </div>
              </div>
              
            
            </div>

            <!-- Right Column: Sticky Sidebar -->
            <div class="lg:sticky lg:top-32 flex flex-col gap-[14px] self-start">
              
              <!-- About the medical reviewer -->
              <div class="border border-[#F9EDEB] rounded-[22px] p-4 md:p-6">
                <h3 class="font-serif font-bold text-[16px] text-[#3A1811] mb-6">About the medical reviewer</h3>
                <div class="flex items-center gap-4 mb-6">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Medically approved by.webp" alt="Reviewer" class="w-14 h-14 rounded-full object-cover" />
                  <div>
                    <span class="block text-[#3A1811] font-serif font-bold text-[16px]">Dr. Hamad Khan</span>
                    <span class="block text-[#5B5B5B] text-[16px] mt-1">Specialist in Psychiatry</span>
                  </div>
                </div>
                <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">
                  Dr. Khan is a board-certified psychiatrist with six years of experience in assessing anxiety, depression and stress-related disorders.
                </p>
              </div>

              <!-- References & sources -->
              <div class="border border-[#F9EDEB] rounded-[22px] p-4 md:p-6">
                <h3 class="font-albert font-bold text-[16px] text-[#3A1811] mb-6">References & sources</h3>
                <div class="flex flex-col gap-5">
                  <div class="flex items-start gap-4 pb-5 border-b border-[#E8DDD7]">
                    <span class="text-[#E3ADA1] font-bold text-[16px] shrink-0">1</span>
                    <div>
                      <span class="block text-[#3A1811] font-serif font-bold text-[14px] mb-1">Norwegian Institute of Public Health (FHI)</span>
                      <span class="block text-[#5B5B5B] text-[16px] leading-[1.5]">ADHD in Norway — prevalence and diagnosis</span>
                    </div>
                  </div>
                  <div class="flex items-start gap-4 pb-5 border-b border-[#E8DDD7]">
                    <span class="text-[#E3ADA1] font-bold text-[16px] shrink-0">2</span>
                    <div>
                      <span class="block text-[#3A1811] font-serif font-bold text-[14px] mb-1">Norwegian Directorate of Health</span>
                      <span class="block text-[#5B5B5B] text-[16px] leading-[1.5]">National guidance on ADHD assessment</span>
                    </div>
                  </div>
                  <div class="flex items-start gap-4 pb-5 border-b border-[#E8DDD7]">
                    <span class="text-[#E3ADA1] font-bold text-[16px] shrink-0">3</span>
                    <div>
                      <span class="block text-[#3A1811] font-serif font-bold text-[14px] mb-1">ICD-11</span>
                      <span class="block text-[#5B5B5B] text-[16px] leading-[1.5]">Code 6A05 — Attention Deficit Hyperactivity Disorder</span>
                    </div>
                  </div>
                  <div class="flex items-start gap-4">
                    <span class="text-[#E3ADA1] font-bold text-[16px] shrink-0">4</span>
                    <div>
                      <span class="block text-[#3A1811] font-serif font-bold text-[14px] mb-1">DPS Clinical Guidelines</span>
                      <span class="block text-[#5B5B5B] text-[16px] leading-[1.5]">Adult ADHD assessment protocol</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Related articles -->
              <div class="border border-[#F9EDEB] rounded-[22px] p-4 md:p-6">
                <h3 class="font-serif font-bold text-[16px] md:text-[20px] text-[#3A1811] mb-6">Related articles</h3>
                <div class="flex flex-col gap-6 mb-6">
                  <!-- Article 1 -->
                  <a href="#" class="flex items-start gap-4 group no-underline">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-2.webp" alt="Article" class="w-16 h-16 rounded-[12px] object-cover group-hover:opacity-80 transition-opacity shrink-0" />
                    <div>
                      <span class="block text-[#F09367] text-[10px] font-bold uppercase tracking-[1.6px] mb-1.5">MENTAL HEALTH</span>
                      <span class="block text-[#241C19] font-bold font-albert text-[16px] leading-[1.4] group-hover:text-[#1E31383] transition-colors">How to Reduce Stress Naturally</span>
                    </div>
                  </a>
                  <!-- Article 2 -->
                  <a href="#" class="flex items-start gap-4 group no-underline">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-3.webp" alt="Article" class="w-16 h-16 rounded-[12px] object-cover group-hover:opacity-80 transition-opacity shrink-0" />
                    <div>
                      <span class="block text-[#F09367] text-[10px] font-bold uppercase tracking-[1.6px] mb-1.5">ANXIETY</span>
                      <span class="block text-[#241C19] font-bold font-albert text-[16px] leading-[1.4] group-hover:text-[#1E31383] transition-colors">Breathing Exercises for Anxiety</span>
                    </div>
                  </a>
                  <!-- Article 3 -->
                  <a href="#" class="flex items-start gap-4 group no-underline">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article/blog-top-4.webP" alt="Article" class="w-16 h-16 rounded-[12px] object-cover group-hover:opacity-80 transition-opacity shrink-0" />
                    <div>
                      <span class="block text-[#F09367] text-[10px] font-bold uppercase tracking-[1.6px] mb-1.5">THERAPY</span>
                      <span class="block text-[#241C19] font-bold font-albert text-[16px] leading-[1.4] group-hover:text-[#1E31383] transition-colors">CBT Techniques That Really Work</span>
                    </div>
                  </a>
                </div>
                <a href="#" class="inline-flex items-center gap-2 text-[#C24C33] font-bold text-[14px] hover:text-[#9A3825] transition-colors no-underline">
                  Explore more articles <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/arrow.webp" alt="Right Arrow Icon" class="w-4 h-4 object-contain" />
                </a>
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <section class="lg:mb-[80px]">
        <div class="container">
             <!-- Self-Reflection Box -->
              <div class="mt-8 md:mt-12 bg-[#C24C33] rounded-[24px] p-6 md:p-12 relative overflow-hidden flex flex-col shadow-lg js-reflection-box">
                <!-- Large decorative circle on right -->
                <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full border-[40px] border-white/5 pointer-events-none"></div>
                
                <div class="flex items-start justify-between relative z-10 mb-8">
                  <div>
                    <div class="inline-flex items-center gap-2 bg-[#FFFFFF29] border border-[#FFFFFF4D] text-white text-[10px] font-bold tracking-[1.6px] uppercase px-4 py-2 rounded-full mb-6 backdrop-blur-sm">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Self-reflection.webp" alt="Check" class="w-[22px] h-[22px] object-contain" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIj48cGF0aCBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik01IDEzbDQgNGwxMC0xMCIgLz48L3N2Zz4='" />
                      SELF-REFLECTION, NOT A TEST
                    </div>
                    
                    <h2 class="font-serif text-[32px] md:text-[40px] text-white font-bold mb-3">How familiar does this feel?</h2>
                    <p class="text-white/80 text-[16px] md:text-[18px] leading-[1.6] max-w-[500px]">
                      Tap anything that sounds like you. Nothing is stored, nothing is scored, and no result is calculated.
                    </p>
                  </div>
                  
                  <!-- Counter Circle -->
                  <div class="hidden md:flex shrink-0 flex-col items-center justify-center w-[120px] h-[120px] rounded-full border border-white/30 bg-white/5 backdrop-blur-sm ml-6">
                    <span class="text-[36px] font-serif font-bold text-white leading-none js-reflection-counter">0</span>
                    <span class="text-[12px] text-white/80 mt-1">of 6</span>
                    <span class="text-[10px] text-white font-bold tracking-[1.6px] uppercase mt-2">SELECTED</span>
                  </div>
                </div>
                
                <!-- Grid of options -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 relative z-10 mb-8">
                  <!-- Option 1 -->
                  <button class="js-reflection-option flex items-center gap-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-[16px] p-4 text-left transition-colors cursor-pointer group">
                    <div class="w-6 h-6 rounded-[6px] border-[1.5px] border-white/40 flex items-center justify-center shrink-0 group-[.is-active]:bg-white group-[.is-active]:border-white transition-colors">
                      <svg class="w-4 h-4 text-[#C24C33] opacity-0 group-[.is-active]:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    </div>
                    <div class="w-[34px] h-[34px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Difficulty concentrating.webp" alt="Icon" class="object-contain" />
                    </div>
                    <span class="text-white text-[16px] font-medium">Difficulty concentrating</span>
                  </button>
                  
                  <!-- Option 2 -->
                  <button class="js-reflection-option flex items-center gap-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-[16px] p-4 text-left transition-colors cursor-pointer group">
                    <div class="w-6 h-6 rounded-[6px] border-[1.5px] border-white/40 flex items-center justify-center shrink-0 group-[.is-active]:bg-white group-[.is-active]:border-white transition-colors">
                      <svg class="w-4 h-4 text-[#C24C33] opacity-0 group-[.is-active]:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    </div>
                    <div class="w-[34px] h-[34px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Trouble managing time.webp" alt="Icon" class="object-contain" />
                    </div>
                    <span class="text-white text-[16px] font-medium">Trouble managing time</span>
                  </button>
                  
                  <!-- Option 3 -->
                  <button class="js-reflection-option flex items-center gap-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-[16px] p-4 text-left transition-colors cursor-pointer group">
                    <div class="w-6 h-6 rounded-[6px] border-[1.5px] border-white/40 flex items-center justify-center shrink-0 group-[.is-active]:bg-white group-[.is-active]:border-white transition-colors">
                      <svg class="w-4 h-4 text-[#C24C33] opacity-0 group-[.is-active]:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    </div>
                    <div class="w-[34px] h-[34px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Difficulty staying organised.webp" alt="Icon" class="object-contain" />
                    </div>
                    <span class="text-white text-[16px] font-medium">Difficulty staying organised</span>
                  </button>
                  
                  <!-- Option 4 -->
                  <button class="js-reflection-option flex items-center gap-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-[16px] p-4 text-left transition-colors cursor-pointer group">
                    <div class="w-6 h-6 rounded-[6px] border-[1.5px] border-white/40 flex items-center justify-center shrink-0 group-[.is-active]:bg-white group-[.is-active]:border-white transition-colors">
                      <svg class="w-4 h-4 text-[#C24C33] opacity-0 group-[.is-active]:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    </div>
                    <div class="w-[34px] h-[34px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Frequently losing track of tasks.webp" alt="Icon" class="object-contain" />
                    </div>
                    <span class="text-white text-[16px] font-medium">Frequently losing track of tasks</span>
                  </button>
                  
                  <!-- Option 5 -->
                  <button class="js-reflection-option flex items-center gap-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-[16px] p-4 text-left transition-colors cursor-pointer group">
                    <div class="w-6 h-6 rounded-[6px] border-[1.5px] border-white/40 flex items-center justify-center shrink-0 group-[.is-active]:bg-white group-[.is-active]:border-white transition-colors">
                      <svg class="w-4 h-4 text-[#C24C33] opacity-0 group-[.is-active]:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    </div>
                    <div class="w-[34px] h-[34px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Acting impulsively.webp" alt="Icon" class="object-contain" />
                    </div>
                    <span class="text-white text-[16px] font-medium">Acting impulsively</span>
                  </button>
                  
                  <!-- Option 6 (None of these) -->
                  <button class="js-reflection-none flex items-center gap-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-[16px] p-4 text-left transition-colors cursor-pointer group">
                    <div class="w-6 h-6 rounded-[6px] border-[1.5px] border-white/40 flex items-center justify-center shrink-0 group-[.is-active]:bg-white group-[.is-active]:border-white transition-colors">
                      <svg class="w-4 h-4 text-[#C24C33] opacity-0 group-[.is-active]:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    </div>
                    <div class="w-[34px] h-[34px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/None of these.webp" onerror="this.style.display='none';" alt="Icon" class="object-contain" />
                    </div>
                    <span class="text-white text-[16px] font-medium">None of these</span>
                  </button>
                </div>
                
                <!-- Bottom Banner -->
                <div class="bg-white rounded-[16px] p-4 md:p-6 flex flex-col md:flex-row items-center justify-between gap-6 relative z-10 shadow-sm">
                  <div class="flex items-start gap-4">
                    <div class="w-[48px] h-[48px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Where to Start.webp" alt="Cursor" class="object-contain" />
                    </div>
                    <div>
                      <h4 class="text-[#C24C33] text-[12px] md:text-[16px] font-bold tracking-[1.6px] uppercase mb-1">WHERE TO START</h4>
                      <p class="text-[#4E403B] text-[14px] md:text-[18px] m-0">Tap anything that sounds familiar. This is a reflection prompt, not a test, and no result is calculated.</p>
                    </div>
                  </div>
                  <button class="shrink-0 bg-[#C24C33] hover:bg-[#9A3825] text-white text-[14px] font-bold px-6 py-3 rounded-full transition-colors flex items-center gap-2">
                    Talk to a psychologist
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/arrow.webp" alt="Right Arrow" class="w-3.5 h-3.5 filter invert brightness-0" />
                  </button>
                </div>
              </div>

              <!-- Section 03 - Telling Them Apart -->
              <div class="mt-12 md:mt-16">
                <div class="flex items-center justify-between mb-[16px]">
                  <div class="flex items-center gap-3 text-[#3F5568] text-[12px] md:text-[16px] font-bold tracking-[1.6px] uppercase">
                    03 — TELLING THEM APART
                  </div>
                  <button class="bg-[#FCF5F3] text-[#A93E28] border border-[#F5E6E1] hover:border-[#A93E28] rounded-full px-4 py-2 text-[11px] font-bold tracking-[1.6px] uppercase transition-colors inline-flex items-center gap-2 cursor-pointer">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/ask-ai.webp" alt="Microphone / Voice Icon" class="w-4 h-4 object-contain" />
                    Ask AI about this
                  </button>
                </div>
                
                <h2 class="font-serif text-[36px] md:text-[44px] text-[#241C19] font-bold mb-[22px]">ADHD, Anxiety Or Burnout?</h2>
                
                <p class="text-[#4E403B] text-[18px] md:text-[20px] leading-[1.8] mb-10">
                  One reason adult ADHD is missed is that its everyday effects overlap with other, more familiar explanations. Part of a good assessment is telling them apart, since the right support differs for each.
                </p>
                
                <!-- Table -->
                <div class="border border-[#E8DDD7] rounded-[16px] overflow-x-auto shadow-sm">
                  <div class="min-w-[800px]">
                    <!-- Header -->
                    <div class="grid grid-cols-[1.5fr_1fr_1fr_1fr] bg-[#C24C33] p-6">
                      <div class="text-white text-[12px] font-bold tracking-[1.6px] uppercase">SHARED DIFFICULTY</div>
                      <div class="text-white text-[12px] font-bold tracking-[1.6px] uppercase">ADHD</div>
                      <div class="text-white text-[12px] font-bold tracking-[1.6px] uppercase">ANXIETY</div>
                      <div class="text-white text-[12px] font-bold tracking-[1.6px] uppercase">BURNOUT</div>
                    </div>
                    
                    <!-- Row 1 -->
                    <div class="grid grid-cols-[1.5fr_1fr_1fr_1fr] bg-white px-6 py-6 border-b border-[#E8DDD7] items-center">
                      <div class="flex items-center gap-3">
                        <div class="w-[38px] h-[38px] shrink-0">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Attention.webp" alt="Attention" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[16px] text-[#241C19]">Attention</span>
                      </div>
                      <div class="text-[#5B5B5B] text-[16px]">Lifelong, present since childhood</div>
                      <div class="text-[#5B5B5B] text-[16px]">Fluctuates with worry</div>
                      <div class="text-[#5B5B5B] text-[16px]">Declines with exhaustion</div>
                    </div>
                    
                    <!-- Row 2 -->
                    <div class="grid grid-cols-[1.5fr_1fr_1fr_1fr] bg-white px-6 py-6 border-b border-[#E8DDD7] items-center">
                      <div class="flex items-center gap-3">
                        <div class="w-[38px] h-[38px] shrink-0">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Protect one focused block.webp" alt="Energy" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[16px] text-[#241C19]">Energy</span>
                      </div>
                      <div class="text-[#5B5B5B] text-[16px]">Restless, hard to settle</div>
                      <div class="text-[#5B5B5B] text-[16px]">Tense, on edge</div>
                      <div class="text-[#5B5B5B] text-[16px]">Depleted, flat</div>
                    </div>
                    
                    <!-- Row 3 -->
                    <div class="grid grid-cols-[1.5fr_1fr_1fr_1fr] bg-white px-6 py-6 border-b border-[#E8DDD7] items-center">
                      <div class="flex items-center gap-3">
                        <div class="w-[38px] h-[38px] shrink-0">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Choice of Psychologist.webp" alt="Onset" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[16px] text-[#241C19]">Onset</span>
                      </div>
                      <div class="text-[#5B5B5B] text-[16px]">Early life</div>
                      <div class="text-[#5B5B5B] text-[16px]">Any age, often after stress</div>
                      <div class="text-[#5B5B5B] text-[16px]">After prolonged workload</div>
                    </div>
                    
                    <!-- Row 4 -->
                    <div class="grid grid-cols-[1.5fr_1fr_1fr_1fr] bg-white px-6 py-6 items-center">
                      <div class="flex items-center gap-3">
                        <div class="w-[38px] h-[38px] shrink-0">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Video Option.webp" alt="Improves when" class="object-contain" />
                        </div>
                        <span class="font-serif font-bold text-[16px] text-[#241C19]">Improves when</span>
                      </div>
                      <div class="text-[#5B5B5B] text-[16px]">Structure and stimulation fit</div>
                      <div class="text-[#5B5B5B] text-[16px]">Threat resolves</div>
                      <div class="text-[#5B5B5B] text-[16px]">Rest is possible</div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Section - Treatment -->
              <div class="mt-12 md:mt-24">
                <div class="flex items-center justify-between mb-[16px]">
                  <div class="flex items-center gap-3 text-[#3F5568] text-[12px] md:text-[16px] font-bold tracking-[1.6px] uppercase">
                    02 — TREATMENT
                  </div>
                  <button class="bg-[#FCF5F3] text-[#A93E28] border border-[#F5E6E1] hover:border-[#A93E28] rounded-full px-4 py-2 text-[11px] font-bold tracking-[1.6px] uppercase transition-colors inline-flex items-center gap-2 cursor-pointer">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/ask-ai.webp" alt="Microphone / Voice Icon" class="w-4 h-4 object-contain" />
                    Ask AI about this
                  </button>
                </div>
                
                <h2 class="font-serif text-[36px] md:text-[44px] text-[#241C19] font-bold mb-6">What Support Is Available</h2>
                
                <p class="text-[#4E403B] text-[18px] md:text-[20px] leading-[1.8] mb-10 max-w-[1000px]">
                  Treatment is rarely one thing. Most plans combine practical strategy work with psychological support, and for some people medication prescribed and monitored by a psychiatrist.
                </p>
                
                <div class="rounded-[24px] overflow-hidden mb-12 shadow-sm">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/What support is available.webp" alt="Therapy Session" class="w-full h-auto object-cover" />
                </div>
                
                <!-- 4 Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                  <!-- Card 1 -->
                  <div class="bg-white border border-[#E8DDD7] rounded-[16px] p-4 md:p-6 relative overflow-hidden flex flex-col justify-between group shadow-[0px_4px_12px_rgba(0,0,0,0.03)] hover:border-[#C24C33] transition-colors cursor-pointer">
                    <!-- Top right decoration -->
                    <div class="absolute -right-6 -top-6 w-32 h-32 rounded-full border-[12px] border-[#FCF5F3] pointer-events-none group-hover:border-[#F8EBE2] transition-colors"></div>
                    <div class="relative z-10">
                      <div class="w-10 h-10 mb-3">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Psychoeducation.webp" alt="Psychoeducation Icon" class="object-contain" />
                      </div>
                      <h4 class="font-serif font-bold text-[20px] md:text-[24px] text-[#241C19] mb-3">Psychoeducation</h4>
                      <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Understanding how ADHD affects you specifically is consistently one of the most useful early steps.</p>
                    </div>
                  </div>
                  
                  <!-- Card 2 -->
                  <div class="bg-white border border-[#E8DDD7] rounded-[16px] p-4 md:p-6 relative overflow-hidden flex flex-col justify-between group shadow-[0px_4px_12px_rgba(0,0,0,0.03)] hover:border-[#C24C33] transition-colors cursor-pointer">
                    <!-- Top right decoration -->
                    <div class="absolute -right-6 -top-6 w-32 h-32 rounded-full border-[12px] border-[#FCF5F3] pointer-events-none group-hover:border-[#F8EBE2] transition-colors"></div>
                    <div class="relative z-10">
                      <div class="w-10 h-10 mb-3">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Strategy and skills work.webp" alt="Strategy Icon" class="object-contain" />
                      </div>
                      <h4 class="font-serif font-bold text-[20px] md:text-[24px] text-[#241C19] mb-3">Strategy and skills work</h4>
                      <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Practical systems for planning, prioritising and starting tasks, built around how you actually work.</p>
                    </div>
                  </div>
                  
                  <!-- Card 3 -->
                  <div class="bg-white border border-[#E8DDD7] rounded-[16px] p-4 md:p-6 relative overflow-hidden flex flex-col justify-between group shadow-[0px_4px_12px_rgba(0,0,0,0.03)] hover:border-[#C24C33] transition-colors cursor-pointer">
                    <!-- Top right decoration -->
                    <div class="absolute -right-6 -top-6 w-32 h-32 rounded-full border-[12px] border-[#FCF5F3] pointer-events-none group-hover:border-[#F8EBE2] transition-colors"></div>
                    <div class="relative z-10">
                      <div class="w-10 h-10 mb-3">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Psychological therapy.webp" alt="Therapy Icon" class="object-contain" />
                      </div>
                      <h4 class="font-serif font-bold text-[20px] md:text-[24px] text-[#241C19] mb-3">Psychological therapy</h4>
                      <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">CBT and related approaches address the low self-esteem, avoidance and anxiety that often accumulate over years.</p>
                    </div>
                  </div>
                  
                  <!-- Card 4 -->
                  <div class="bg-white border border-[#E8DDD7] rounded-[16px] p-4 md:p-6 relative overflow-hidden flex flex-col justify-between group shadow-[0px_4px_12px_rgba(0,0,0,0.03)] hover:border-[#C24C33] transition-colors cursor-pointer">
                    <!-- Top right decoration -->
                    <div class="absolute -right-6 -top-6 w-32 h-32 rounded-full border-[12px] border-[#FCF5F3] pointer-events-none group-hover:border-[#F8EBE2] transition-colors"></div>
                    <div class="relative z-10">
                      <div class="w-10 h-10 mb-3">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Medication.webp" alt="Medication Icon" class="object-contain" />
                      </div>
                      <h4 class="font-serif font-bold text-[20px] md:text-[24px] text-[#241C19] mb-3">Medication</h4>
                      <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0">Prescribed and monitored by a psychiatrist. Through Psykiater.no you can be referred internally if that is appropriate.</p>
                    </div>
                  </div>
                </div>
                
                <!-- Ask This Article AI Box -->
                <div class="bg-[#5C2A20] rounded-[24px] p-8 md:p-12 mb-12 flex flex-col relative overflow-hidden">
                  <!-- Left Top Glow -->
                  <div class="absolute -left-[150px] -top-[150px] w-[420px] h-[420px] pointer-events-none" style="background: radial-gradient(70.71% 70.71% at 50% 50%, rgba(240, 147, 103, 0.42) 0%, rgba(240, 147, 103, 0) 70%);"></div>
                  <!-- Right Bottom Glow -->
                  <div class="absolute -right-[150px] -bottom-[150px] w-[380px] h-[380px] pointer-events-none" style="background: radial-gradient(70.71% 70.71% at 50% 50%, rgba(240, 147, 103, 0.42) 0%, rgba(240, 147, 103, 0) 70%);"></div>
                  
                  <div class="relative z-10 mb-8">
                    <div class="flex items-center gap-4 mb-2">
                      <div class="w-12 h-12 rounded-[12px] bg-white/10 flex items-center justify-center shrink-0">
                         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Ask This Article.webp" alt="AI Star / Sparkle Icon" class="object-contain" />
                      </div>
                      <div>
                        <h3 class="font-serif text-[28px] md:text-[32px] text-white font-bold mb-1">Ask this article</h3>
                        <p class="text-white/80 text-[15px] m-0">Answers drawn from this article only.</p>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Input Field -->
                  <div class="relative z-10 mb-6">
                    <input type="text" placeholder="Ask a question about this article..." class="w-full bg-white/10 border border-white/20 rounded-full py-5 pl-6 pr-16 text-white placeholder-white/50 text-[16px] focus:outline-none focus:border-[#F09367] transition-colors" />
                    <button class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-[#F09367] hover:bg-[#E5855A] flex items-center justify-center transition-colors">
                     <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Send question.webp" alt="Up Arrow / Upload Icon" class="w-[44px] h-[44px] object-contain" />
                    </button>
                  </div>
                  
                  <!-- Suggestions -->
                  <div class="relative z-10 flex flex-wrap items-center gap-3 mb-6">
                    <button class="bg-white/10 hover:bg-white/20 border border-white/20 rounded-full px-5 py-2.5 text-white/90 text-[13px] font-medium transition-colors cursor-pointer whitespace-nowrap">
                      Summarise this article
                    </button>
                    <button class="bg-white/10 hover:bg-white/20 border border-white/20 rounded-full px-5 py-2.5 text-white/90 text-[13px] font-medium transition-colors cursor-pointer whitespace-nowrap">
                      What are the key symptoms?
                    </button>
                    <button class="bg-white/10 hover:bg-white/20 border border-white/20 rounded-full px-5 py-2.5 text-white/90 text-[13px] font-medium transition-colors cursor-pointer whitespace-nowrap">
                      Explain this in simple terms
                    </button>
                    <button class="bg-white/10 hover:bg-white/20 border border-white/20 rounded-full px-5 py-2.5 text-white/90 text-[13px] font-medium transition-colors cursor-pointer whitespace-nowrap">
                      What treatments are discussed?
                    </button>
                    <button class="bg-white/10 hover:bg-white/20 border border-white/20 rounded-full px-5 py-2.5 text-white/90 text-[13px] font-medium transition-colors cursor-pointer whitespace-nowrap">
                      What should I discuss with a professional?
                    </button>
                  </div>
                  
                  <!-- Disclaimer -->
                  <p class="relative z-10 text-white/60 text-[13px] m-0">
                    This AI feature provides information based on this article and is not a substitute for professional medical advice, diagnosis, or treatment.
                  </p>
                </div>
              </div>
              
              <!-- Section - Everyday Strategies -->
              <div class="mt-12 md:mt-24 mb-12 md:mb-24">
                <div class="flex items-center justify-between mb-[16px]">
                  <div class="flex items-center gap-3 text-[#A93E28] text-[12px] md:text-[16px] font-bold tracking-[1.6px] uppercase">
                    02 — SIGNS AND SYMPTOMS
                  </div>
                  <button class="bg-[#FCF5F3] text-[#A93E28] border border-[#F5E6E1] hover:border-[#A93E28] rounded-full px-4 py-2 text-[11px] font-bold tracking-[1.6px] uppercase transition-colors inline-flex items-center gap-2 cursor-pointer">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/ask-ai.webp" alt="Microphone / Voice Icon" class="w-4 h-4 object-contain" />
                    Ask AI about this
                  </button>
                </div>
                
                <h2 class="font-serif text-[36px] md:text-[44px] text-[#241C19] font-bold mb-6">Everyday Strategies That Tend To Help</h2>
                
                <p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.8] mb-10 max-w-[1100px]">
                  Strategy work is not about trying harder. It is about arranging the day so that fewer things depend on remembering, and so the parts that require sustained attention happen when attention is most available.
                </p>
                
                <div class="rounded-[24px] overflow-hidden mb-12 shadow-sm">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Everyday strategies that tend to help.webp" alt="Man writing at desk" class="w-full h-auto object-cover" />
                </div>
                
                <!-- Quote Block -->
                <div class="bg-[#F4F2FF] rounded-[24px] p-6 md:p-8 mb-12 flex items-start gap-2 border-l-4 border-[#6B568A]">
                  <div class="text-[#6B568A] font-serif text-[48px] md:text-[64px] leading-none shrink-0">
                    “
                  </div>
                  <div>
                    <h3 class="font-serif text-[20px] md:text-[24px] text-[#241C19] font-bold italic leading-[1.4] mb-2">
                      The goal is not to become someone who never forgets. It is to build a day where forgetting costs less.
                    </h3>
                    <p class="text-[#6F6259] text-[14px] md:text-[16px] font-semibold m-0">Ingrid Halvorsen, Psychologist Specialist</p>
                  </div>
                </div>
                
                <!-- 4 Cards Grid (Strategies) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <!-- Card 1 -->
                  <div class="bg-[#FFF8F5] rounded-[16px] p-6 md:p-8 flex items-start gap-4">
                    <div class="w-[48px] h-[48px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Externalize the task list.webp" alt="Icon" class="object-contain" />
                    </div>
                    <div>
                      <h4 class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19] mb-2">Externalise the task list</h4>
                      <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6] m-0">If it lives only in your head, it competes with everything else there.</p>
                    </div>
                  </div>
                  <!-- Card 2 -->
                  <div class="bg-[#FFF8F5] rounded-[16px] p-6 md:p-8 flex items-start gap-4">
                    <div class="w-[48px] h-[48px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Protect one focused block.webp" alt="Icon" class="object-contain" />
                    </div>
                    <div>
                      <h4 class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19] mb-2">Protect one focused block</h4>
                      <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6] m-0">Schedule it at the time of day your attention is most reliable.</p>
                    </div>
                  </div>
                  <!-- Card 3 -->
                  <div class="bg-[#FFF8F5] rounded-[16px] p-6 md:p-8 flex items-start gap-4">
                    <div class="w-[48px] h-[48px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Break task into visible steps.webp" alt="Icon" class="object-contain" />
                    </div>
                    <div>
                      <h4 class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19] mb-2">Break tasks into visible steps</h4>
                      <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6] m-0">Starting is usually harder than continuing.</p>
                    </div>
                  </div>
                  <!-- Card 4 -->
                  <div class="bg-[#FFF8F5] rounded-[16px] p-6 md:p-8 flex items-start gap-4">
                    <div class="w-[48px] h-[48px]">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/Treat Sleep and Movement.webp" alt="Icon" class="object-contain" />
                    </div>
                    <div>
                      <h4 class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19] mb-2">Treat sleep and movement as treatment</h4>
                      <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6] m-0">Not as optional extras once everything else is done.</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Section - Talking to Someone -->
              <div class="mt-12 md:mt-24 mb-12">
                <div class="flex items-center justify-between mb-[16px]">
                  <div class="flex items-center gap-3 text-[#8A6524] text-[12px] md:text-[16px] font-bold tracking-[1.6px] uppercase">
                    02 — SIGNS AND SYMPTOMS
                  </div>
                  <button class="bg-[#FCF5F3] text-[#A93E28] border border-[#F5E6E1] hover:border-[#A93E28] rounded-full px-4 py-2 text-[11px] font-bold tracking-[1.6px] uppercase transition-colors inline-flex items-center gap-2 cursor-pointer">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/ask-ai.webp" alt="Microphone / Voice Icon" class="w-4 h-4 object-contain" />
                    Ask AI about this
                  </button>
                </div>
                
                <h2 class="font-serif text-[36px] md:text-[44px] text-[#241C19] font-bold mb-[16px]">When It Is Worth Talking To Someone</h2>
                
                <p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.8] mb-[50px] max-w-[1315px]">
                  If these patterns have been present since childhood, appear across more than one area of life, and are affecting work, study or relationships, an assessment is a reasonable next step. You do not need a referral to book with us.
                </p>
                
                <!-- 2x2 List -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10 mb-16">
                  <div class="flex items-start gap-4">
                    <div class="w-[36px] h-[36px] rounded-full shrink-0">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/list-check.webp" alt="Check" class="w-full h-full object-contain" />
                    </div>
                    <div>
                      <h4 class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19] mb-2">Build Consistent Routine</h4>
                      <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6] m-0">Simple daily routine create structure , reduce overwhelm and help you to stay on track</p>
                    </div>
                  </div>
                  <div class="flex items-start gap-4">
                    <div class="w-[36px] h-[36px] rounded-full shrink-0">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/list-check.webp" alt="Check" class="w-full h-full object-contain" />
                    </div>
                    <div>
                      <h4 class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19] mb-2">Manage Distraction</h4>
                      <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6] m-0">Learn practical strategies to focus reduce distraction and get more done with less effort</p>
                    </div>
                  </div>
                  <div class="flex items-start gap-4">
                    <div class="w-[36px] h-[36px] rounded-full shrink-0">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/list-check.webp" alt="Check" class="w-full h-full object-contain" />
                    </div>
                    <div>
                      <h4 class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19] mb-2">Break Task Into Smaller Steps</h4>
                      <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6] m-0">Small achievable steps makes big goals feels easier and more manageable.</p>
                    </div>
                  </div>
                  <div class="flex items-start gap-4">
                    <div class="w-[36px] h-[36px] rounded-full shrink-0">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/list-check.webp" alt="Check" class="w-full h-full object-contain" />
                    </div>
                    <div>
                      <h4 class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19] mb-2">Be Kind To Yourself</h4>
                      <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6] m-0">Progress takes time . Celebrate small wins and remember you're doing your best.</p>
                    </div>
                  </div>
                </div>
                
                <!-- Final Thought Box -->
                <div class="bg-[#FFF7F3] rounded-[24px] p-8 md:p-10 border-l-[3px] border-[#C24C33] flex flex-col md:flex-row items-center gap-6">
                  <div class="w-16 h-16 rounded-[16px] bg-[#FDE7E1] flex items-center justify-center shrink-0">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/article-detail/FINAL THOUGHT.webp" alt="AI Star / Sparkle Icon" class="w-8 h-8 object-contain" />
                  </div>
                  <div>
                    <h3 class="font-serif text-[20px] md:text-[24px] text-[#A93E28] font-bold tracking-[1.6px] uppercase mb-4">FINAL THOUGHT:</h3>
                    <p class="text-[#241C19] text-[14px] md:text-[16px] leading-[1.8] m-0">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

      </section>

       <section id="mh-faq" class="py-10 section--white pb-12" data-reveal>
        <div class="container">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left Column -->
            <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-6">
              <div>
                <span class="text-[#C24C33] text-[11px] font-bold tracking-widest uppercase mb-3 block">FAQS</span>
                <h2 id="faq" class="h2 mb-4">
                  Questions <em> & Answers</em>
                </h2>
                <p class="text-[16px] leading-[26px] text-[#6B5F5A] m-0 mb-6 max-w-[420px]">
                  Still unsure whether an appointment is the right next step? Speak to one of our psychologists.
                </p>
                <a href="#" class="inline-flex items-center justify-center px-6 py-2.5 bg-transparent border border-[#C24C33] text-[#C24C33] hover:bg-[#C24C33] hover:text-white text-[15px] font-bold rounded-full transition-colors duration-300 no-underline w-fit">
                  Book a time
                </a>
              </div>

              <!-- Separator -->
              <div class="w-full h-px bg-[#F2E8E3] my-3"></div>

              <div class="flex flex-col">
                <div class="flex items-center gap-3 mb-4">
                  <div class="flex -space-x-2">
                    <span class="w-8 h-8 rounded-full bg-[#E8DCC8] border-2 border-white shrink-0"></span>
                    <span class="w-8 h-8 rounded-full bg-[#DCE5DF] border-2 border-white shrink-0"></span>
                    <span class="w-8 h-8 rounded-full bg-[#EED8D3] border-2 border-white shrink-0"></span>
                    <span class="w-8 h-8 rounded-full bg-[#F3EFE9] border-2 border-white shrink-0"></span>
                  </div>
                  <span class="font-sans font-bold text-[14px] text-[#C24C33]">
                    Oslo Questions Asked By Our Patients
                  </span>
                </div>

                <p class="text-[14px] leading-[22px] text-[#6B5F5A] m-0 mb-5 max-w-[380px]">
                  These are the questions people ask us most often before booking their first consultation.
                </p>

                <button
                  type="button"
                  onclick="location.href = '#mh-book'"
                  class="bg-[#C24C33] hover:bg-[#B34A34] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer w-fit border-0"
                >
                  <span>Ask Your Own Question</span>
                  <span class="font-bold text-lg leading-none mb-[2px]">→</span>
                </button>
              </div>
            </div>

            <!-- Right Column -->
            <div class="lg:col-span-7 flex flex-col gap-4">
              <!-- Item 1 -->
              <div class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                <button class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                  <span class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4">
                    Do I need a referral to book a psychologist in Oslo?
                  </span>
                  <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                    <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                    <span class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                  </span>
                </button>
                <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0">
                  <p class="text-[15px] leading-[26px] text-[#6B5F5A] m-0">
                    No, you do not need a referral from a doctor to book an appointment with our psychologists in Oslo. You can easily book an appointment directly through our online booking system.
                  </p>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                <button class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                  <span class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4">
                    What is the difference between a psychologist and a therapist?
                  </span>
                  <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                    <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                    <span class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                  </span>
                </button>
                <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0">
                  <p class="text-[15px] leading-[26px] text-[#6B5F5A] m-0">
                    A psychologist has completed a 6-year professional degree in psychology and is a protected title. The title therapist is not protected, which means anyone can call themselves a therapist regardless of their background.
                  </p>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                <button class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                  <span class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4">
                    Can I have a video session with a psychologist from Oslo?
                  </span>
                  <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                    <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                    <span class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                  </span>
                </button>
                <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0">
                  <p class="text-[15px] leading-[26px] text-[#6B5F5A] m-0">
                    Yes, all our psychologists offer video sessions. You can choose whether you want to meet in person at our clinic in Oslo or have the session via secure video link.
                  </p>
                </div>
              </div>

              <!-- Item 4 -->
              <div class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                <button class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                  <span class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4">
                    Do you offer emergency or crisis appointments?
                  </span>
                  <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                    <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                    <span class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                  </span>
                </button>
                <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0">
                  <p class="text-[15px] leading-[26px] text-[#6B5F5A] m-0">
                    We can often offer appointments within 24 hours. For immediate medical emergencies or acute suicidal thoughts, please contact the emergency room (116 117) or call 113.
                  </p>
                </div>
              </div>

              <!-- Item 5 -->
              <div class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                <button class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                  <span class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4">
                    Can I switch between in-person and video appointments?
                  </span>
                  <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                    <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                    <span class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                  </span>
                </button>
                <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0">
                  <p class="text-[15px] leading-[26px] text-[#6B5F5A] m-0">
                    Yes, you are completely free to switch between meeting in person in Oslo and taking the session via video, depending on what suits you best that day.
                  </p>
                </div>
              </div>

              <!-- Item 6 -->
              <div class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                <button class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                  <span class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4">
                    Do you work with employers and HR departments?
                  </span>
                  <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                    <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                    <span class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                  </span>
                </button>
                <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0">
                  <p class="text-[15px] leading-[26px] text-[#6B5F5A] m-0">
                    Yes, we collaborate with several companies. We offer arrangements where the employer covers the cost of psychology sessions for employees.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============ ARTICLES ============ -->
  <section id="home-articles" class="section section--white">
  <div class="container">
    <div class="section-head section-head--center">
      <div class="eyebrow">
        <span class="eyebrow__dot">✳</span>
        <span>FROM OUR PSYCHOLOGISTS</span>
      </div>
      <h2 class="h2">Learn More About <em>Mental Health.</em></h2>
    </div>

    <div class="grid-3">
      <a href="#" class="article-card">
        <div class="article-card__media">
          <img src="https://images.unsplash.com/photo-1518098268026-4e89f1a2cd8e?auto=format&fit=crop&w=900&q=72" alt="A parent with a young child at home" loading="lazy">
        </div>
        <span class="article-chip">Depression</span>
        <h3>Depression and postpartum psychosis</h3>
        <p>What to look for, and when to ask for help early.</p>
      </a>

      <!-- Article Card 2 -->
      <a href="#" class="article-card">
        <div class="article-card__media">
          <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=900&q=72" alt="A notebook and pen in daylight" loading="lazy">
        </div>
        <span class="article-chip">Therapy</span>
        <h3>Cognitive behavioural therapy as self-help</h3>
        <p>Which CBT tools you can use between sessions.</p>
      </a>

      <!-- Article Card 3 -->
      <a href="#" class="article-card">
        <div class="article-card__media">
          <img src="https://images.unsplash.com/photo-1518241353330-0f7941c2d9b5?auto=format&fit=crop&w=900&q=72" alt="Quiet morning light in a bedroom" loading="lazy">
        </div>
        <span class="article-chip">Sleep</span>
        <h3>Sleep after trauma</h3>
        <p>Why sleep breaks down after difficult events, and what helps.</p>
      </a>
    </div>

    <!-- Centered Bottom Link -->
    <div class="articles__footer">
      <a href="#" class="link-arrow">View all articles →</a>
    </div>
  </div>
</section>
 <!-- ============ CTA ============ -->
        <section class="pb-12" data-reveal="">
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