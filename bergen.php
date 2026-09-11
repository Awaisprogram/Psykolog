<?php
/**
 * Template Name: Bergen
 */

get_header();


?>

 <main>
      <section
        class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]"
      >
        <span
          class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden"
        >
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/hero.webp"
            alt="Anxiety"
            class="absolute inset-0 w-full h-full object-cover object-[100%_50%]"
          />
        </span>

        <div
          class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]"
        >
          <div class="max-w-[1312px] mx-auto">
            <div class="max-w-full lg:max-w-[600px]">
              <div
                class="inline-flex items-center gap-[9px] bg-white/[.66] backdrop-blur-2xl backdrop-saturate-150 border border-white/[.82] rounded-full px-5 py-[9px]"
              >
                <span class="text-[#CE5A43] text-[13px] leading-[13px]">✳</span>
                <span
                  class="font-sans font-semibold text-xs leading-4 tracking-[2px] uppercase text-brand-brown whitespace-nowrap"
                  >We reply within 1–3 days</span
                >
              </div>

              <h1
                class="font-serif font-bold mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[64px]"
              >
                Psychologist <em>Bergen</em>
              </h1>

              <p
                class="text-lg lg:text-xl text-[#3A1811] leading-[1.6] text-[#33170F] mt-[22px] mb-0"
              >
                Book an appointment with an authorised psychologist by secure
                video, wherever you are in Bergen. No referral from your GP is
                needed. Typical waiting time is 1 to 3 working days.
              </p>

              <div
                class="mt-8 flex flex-col sm:flex-row items-start sm:items-center gap-4 lg:gap-5"
              >
                <a
                  href="#"
                  class="inline-flex items-center justify-center px-8 py-4 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90"
                >
                  Book a time
                  <span class="ml-2 inline-flex items-center"
                    ><img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/white-arrow.webp"
                      alt="External Link Icon"
                      class="h-[20px] w-[12px] mt-0.5 object-contain"
                  /></span>
                </a>
                <a
                  href="#"
                  class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-[#A93E28] text-[#A93E28] rounded-full font-bold text-base transition hover:bg-gray-100"
                >
                  See prices
                  <span class="ml-2 inline-flex items-center"
                    ><img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Brown-arrow.webp"
                      alt="External Link Icon"
                      class="h-[20px] w-[12px] mt-0.5 object-contain"
                  /></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-[48px] pb-[64px]" data-reveal="">
        <div class="container mx-auto px-4">
          <!-- Cards Grid -->
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-[16px]"
          >
            <!-- Card 1: Authorised psychologist -->
            <div
              class="bg-[#FCEAE4] border-t-[4px] border-t-[#B84E38] rounded-[16px] p-6 md:py-[32px] md:px-[24px] flex flex-col items-center text-center justify-start transition-transform hover:-translate-y-1"
            >
              <!-- Icon -->
              <div class="w-[52px] h-[52px] mb-6">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/feature-1.webp"
                  alt="Verified Badge / Certification Icon"
                  class="object-contain"
                />
              </div>
              <!-- Title -->
              <h3
                class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold mb-[8px] leading-snug"
              >
                Authorised psychologist
              </h3>
              <!-- Subtitle -->
              <p class="text-[#5B5B5B] text-[14px]">
                Approved by Helsedirektoratet
              </p>
            </div>

            <!-- Card 2: No referral required -->
            <div
              class="bg-[#E9EFE6] border-t-[4px] border-t-[#687A5B] rounded-[16px] p-6 md:py-[32px] md:px-[24px] flex flex-col items-center text-center justify-start transition-transform hover:-translate-y-1"
            >
              <!-- Icon -->
              <div class="w-[52px] h-[52px] mb-6">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/feature-2.webp"
                  alt="Verified Badge / Certification Icon"
                  class="object-contain"
                />
              </div>
              <!-- Title -->
              <h3
                class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold mb-[8px] leading-snug"
              >
                No referral required
              </h3>
              <!-- Subtitle -->
              <p class="text-[#5B5B5B] text-[14px]">Book without your GP</p>
            </div>

            <!-- Card 3: 1-3 working days -->
            <div
              class="bg-[#E6EFF5] border-t-[4px] border-t-[#42637D] rounded-[16px] p-6 md:py-[32px] md:px-[24px] flex flex-col items-center text-center justify-start transition-transform hover:-translate-y-1"
            >
              <!-- Icon -->
              <div class="w-[52px] h-[52px] mb-6">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/feature-4.webp"
                  alt="Verified Badge / Certification Icon"
                  class="object-contain"
                />
              </div>
              <!-- Title -->
              <h3
                class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold mb-[8px] leading-snug"
              >
                1–3 working days
              </h3>
              <!-- Subtitle -->
              <p class="text-[#5B5B5B] text-[14px]">Typical waiting time</p>
            </div>

            <!-- Card 4: In-person + video -->
            <div
              class="bg-[#F6EEDC] border-t-[4px] border-t-[#987A36] rounded-[16px] p-6 md:py-[32px] md:px-[24px] flex flex-col items-center text-center justify-start transition-transform hover:-translate-y-1"
            >
              <!-- Icon -->
              <div class="w-[52px] h-[52px] mb-6">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/feature-3.webp"
                  alt="Verified Badge / Certification Icon"
                  class="object-contain"
                />
              </div>
              <!-- Title -->
              <h3
                class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold mb-[8px] leading-snug"
              >
                In-person + video
              </h3>
              <!-- Subtitle -->
              <p class="text-[#5B5B5B] text-[14px]">
                Oslo clinic or nationwide
              </p>
            </div>

            <!-- Card 5: Confidential & secure -->
            <div
              class="bg-[#EFE9F4] border-t-[4px] border-t-[#614B82] rounded-[16px] p-6 md:py-[32px] md:px-[24px] flex flex-col items-center text-center justify-start transition-transform hover:-translate-y-1"
            >
              <!-- Icon -->
              <div class="w-[52px] h-[52px] mb-6">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/feature-5.webp"
                  alt="Verified Badge / Certification Icon"
                  class="object-contain"
                />
              </div>
              <!-- Title -->
              <h3
                class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold mb-[8px] leading-snug"
              >
                Pay by Vipps or card
              </h3>
              <!-- Subtitle -->
              <p class="text-[#5B5B5B] text-[14px]">After the session</p>
            </div>
          </div>
        </div>
      </section>

      <section class="pb-[90px]">
        <div class="container">
          <div
            class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[727px_550px] items-center gap-10"
          >
            <!-- Text Content Area -->
            <div>
              <h2
                class="font-serif text-[36px] md:text-[48px] text-[#241C19] font-bold leading-[1.2] lg:leading-[64.8px] mb-8"
              >
                Do You Need a Psychologist in
                <br class="hidden md:block" />Bergen?
              </h2>

              <p
                class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.7] mb-[14px]"
              >
                Finding the right psychological help should not be complicated.
                At Psykolog.no, you can book directly without waiting for a GP
                referral and without joining a long public queue.
              </p>

              <p
                class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.7] mb-[14px]"
              >
                We offer psychological help for adults, children and
                adolescents, couples, family, working professionals, and
                students. All sessions are held via secure video, from your
                home, your office, or anywhere private. At Psykolog.no you
                choose your psychologist. Everything you discuss in your session
                is confidential. Our psychologists are bound by Norwegian
                healthcare law and by professional standards set by the
                Norwegian Psychological Association.
              </p>
            </div>

            <!-- Image Area -->
            <div>
              <!-- Replace the src with your actual image path -->
              <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Do_you_need.webp"
                alt="Psychologist session in Oslo"
                class="w-full h-auto rounded-[12px] shadow-sm object-cover"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="section bg-[#FCF8F5]" data-reveal="">
        <div class="container">
          <!-- Header Content -->
          <h2
            class="font-serif text-[32px] md:text-[44px] text-[#241C19] font-bold leading-[1.2] mb-4"
          >
            Private vs Public Psychologists in Bergen: What Are<br
              class="hidden md:block"
            />
            the Differences?
          </h2>
          <p
            class="text-[16px] md:text-[20px] text-[#5B5B5B] mt-4 mb-10 leading-[1.6]"
          >
            Many people are unsure whether to choose a private psychologist or
            try the public system first. The right answer depends on how quickly
            you need help and the flexibility you need. Here is an honest
            comparison.
          </p>

          <!-- Table Wrapper -->
          <div
            class="mt-8 bg-white rounded-[20px] overflow-x-auto shadow-[0_8px_30px_rgb(0,0,0,0.04)]"
          >
            <table class="w-full text-left border-collapse min-w-[800px]">
              <!-- Table Head -->
              <thead>
                <tr class="bg-[#C24C33]">
                  <th class="px-8 py-6 w-[35%]"></th>
                  <th
                    class="px-8 py-6 font-bold text-[13px] md:text-[16px] tracking-[1.5px] uppercase text-white w-[32%]"
                  >
                    PUBLIC PSYCHOLOGIST
                  </th>
                  <th
                    class="px-8 py-6 font-bold text-[13px] md:text-[16px] tracking-[1.5px] uppercase text-white w-[33%]"
                  >
                    PSYKOLOG.NO (PRIVATE)
                  </th>
                </tr>
              </thead>

              <!-- Table Body -->
              <tbody class="divide-y divide-[#F5EAE4]">
                <!-- Row 1: Referral required -->
                <tr class="hover:bg-[#FCF8F5] transition-colors">
                  <td class="p-4 lg:p-6">
                    <div class="flex items-center gap-4">
                      <span class="w-[36px] h-[36px]">
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Difference1.webp"
                          alt="Document / File Icon"
                          class="object-contain"
                        />
                      </span>
                      <span
                        class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"
                        >Referral required</span
                      >
                    </div>
                  </td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]">
                    Yes, from your GP
                  </td>
                  <td
                    class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold"
                  >
                    No
                  </td>
                </tr>

                <!-- Row 2: Typical waiting time -->
                <tr class="hover:bg-[#FCF8F5] transition-colors">
                  <td class="p-4 lg:p-6">
                    <div class="flex items-center gap-4">
                      <span class="w-[36px] h-[36px]">
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Difference2.webp"
                          alt="Document / File Icon"
                          class="object-contain"
                        />
                      </span>
                      <span
                        class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"
                        >Typical waiting time</span
                      >
                    </div>
                  </td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]">
                    6–20 weeks
                  </td>
                  <td
                    class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold"
                  >
                    1–3 working days
                  </td>
                </tr>

                <!-- Row 3: Choice of psychologist -->
                <tr class="hover:bg-[#FCF8F5] transition-colors">
                  <td class="p-4 lg:p-6">
                    <div class="flex items-center gap-4">
                      <span class="w-[36px] h-[36px]">
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Difference3.webp"
                          alt="Document / File Icon"
                          class="object-contain"
                        />
                      </span>
                      <span
                        class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"
                        >Choice of psychologist</span
                      >
                    </div>
                  </td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]">
                    Limited or assigned by the system
                  </td>
                  <td
                    class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold"
                  >
                    You choose
                  </td>
                </tr>

                <!-- Row 4: Evening availability -->
                <tr class="hover:bg-[#FCF8F5] transition-colors">
                  <td class="p-4 lg:p-6">
                    <div class="flex items-center gap-4">
                      <span class="w-[36px] h-[36px]">
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Difference4.webp"
                          alt="Document / File Icon"
                          class="object-contain"
                        />
                      </span>
                      <span
                        class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"
                        >Evening availability</span
                      >
                    </div>
                  </td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]">Rarely</td>
                  <td
                    class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold"
                  >
                    Yes (check current schedule).
                  </td>
                </tr>

                <!-- Row 5: Video option -->
                <tr class="hover:bg-[#FCF8F5] transition-colors">
                  <td class="p-4 lg:p-6">
                    <div class="flex items-center gap-4">
                      <span class="w-[36px] h-[36px]">
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Difference5.webp"
                          alt="Document / File Icon"
                          class="object-contain"
                        />
                      </span>
                      <span
                        class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"
                        >Video option</span
                      >
                    </div>
                  </td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]">Limited</td>
                  <td
                    class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold"
                  >
                    Yes, nationwide.
                  </td>
                </tr>

                <!-- Row 6: Online booking -->
                <tr class="hover:bg-[#FCF8F5] transition-colors">
                  <td class="p-4 lg:p-6">
                    <div class="flex items-center gap-4">
                      <span class="w-[36px] h-[36px]">
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Difference6.webp"
                          alt="Document / File Icon"
                          class="object-contain"
                        />
                      </span>
                      <span
                        class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"
                        >Online booking</span
                      >
                    </div>
                  </td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]">
                    Usually via your GP first
                  </td>
                  <td
                    class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold"
                  >
                    Direct, without any referral
                  </td>
                </tr>

                <!-- Row 7: Language options -->
                <tr class="hover:bg-[#FCF8F5] transition-colors">
                  <td class="p-4 lg:p-6">
                    <div class="flex items-center gap-4">
                      <span class="w-[36px] h-[36px]">
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Difference7.webp"
                          alt="Document / File Icon"
                          class="object-contain"
                        />
                      </span>
                      <span
                        class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"
                        >Language options</span
                      >
                    </div>
                  </td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]">
                    Norwegian only (typically)
                  </td>
                  <td
                    class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold"
                  >
                    Norwegian, English, Urdu + more
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <section class="section" data-reveal="">
        <div class="container">
          <div
            class="grid grid-cols1 lg:grid-cols-2 xl:grid-cols-[797px_462px] items-center gap-10 lg:gap-16"
          >
            <!-- Left Column: Content -->
            <div>
              <!-- Subtitle Label -->
              <span
                class="text-[#C24C33] text-[14px] font-bold tracking-[1.5px] uppercase block mb-3"
              >
                WHO WE WORK WITH
              </span>

              <!-- Main Heading -->
              <h2
                class="font-serif text-[36px] md:text-[48px] text-[#241C19] font-bold leading-[1.2] mb-6"
              >
                Who Do We Help in Bergen?
              </h2>

              <!-- Description Paragraph -->
              <p
                class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] mb-8"
              >
                You do not need a diagnosis, a referral, or a crisis to book.
                Our psychologists work with a wide range of people and
                situations.
              </p>

              <!-- Category Tags Grid -->
              <div class="flex flex-wrap gap-3">
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >Adults and young adults</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >People returning to work after sick leave</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >Working professionals and managers</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >People seeking a second opinion</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >Children and adolescents</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >Students</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >Couples</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >Parents and carers</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >People who want a short waiting time</span
                  >
                </div>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/help1.webp"
                    alt="Cap / Academic Graduation Icon"
                    class="w-[28px] h-[28px] object-contain text-[#C85237]"
                  />
                  <span class="text-[#4E403B] text-[16px] font-semibold"
                    >People referred by their employer or HR</span
                  >
                </div>
              </div>
            </div>

            <!-- Right Column: Image with Badge -->
            <div class="relative">
              <div class="relative rounded-[24px] overflow-hidden shadow-sm">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/who-we-help.webp"
                  alt="People sitting together in a group session at Oslo clinic"
                  class="w-full h-auto lg:h-[441px] object-cover rounded-[24px]"
                />
                <!-- Bottom-left Badge Overlay -->
                <div
                  class="absolute bottom-6 left-6 bg-white/20 backdrop-blur-md border border-white/30 rounded-full px-4 py-2 flex items-center gap-2"
                >
                  <span
                    class="w-6 h-6 rounded-full bg-[#C85237] flex items-center justify-center flex-none"
                  >
                    <svg
                      class="w-3.5 h-3.5 text-white"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                      ></path>
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                      ></path>
                    </svg>
                  </span>
                  <span
                    class="text-white text-[12px] font-bold tracking-[1.2px] uppercase pr-2"
                    >VIDEO CONSULTATION</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section" data-reveal="">
        <div class="container">
          <!-- Header -->
          <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="h2 mb-4">What Makes Psykolog.no <em>Different?</em></h2>
            <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6]">
              Choosing a psychologist is an important decision. At Psykolog.no,
              we make it easier to access qualified psychological care in a
              safe, confidential and flexible setting.
            </p>
          </div>

          <!-- 6-Card Flip Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- ── Card 01 ── Authorized Psychologist ─────────────────── -->
            <div
              class="flip-card-perspective h-[380px]"
              data-flip-card="card-01"
            >
              <div class="flip-card-inner" id="flip-inner-01">
                <!-- FRONT: photo -->
                <div class="flip-card-face">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/flip1.webp"
                    alt="Authorized Psychologist"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
                  ></div>
                  <div
                    class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end"
                  >
                    <div class="flex items-end justify-between w-full">
                      <div class="flex flex-col">
                        <span
                          class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"
                          >01</span
                        >
                        <h3
                          class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight"
                        >
                          Authorized Psychologist
                        </h3>
                      </div>
                      <button
                        class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer"
                        data-flip-btn="card-01"
                        aria-label="Flip card to read more"
                      >
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-img.webp"
                          alt="Flip"
                          class="w-[44px] h-[44px] object-contain"
                        />
                      </button>
                    </div>
                  </div>
                </div>

                <!-- BACK: terracotta -->
                <div
                  class="flip-card-face flip-card-back bg-[#C85237] p-8 flex flex-col justify-between"
                >
                  <div>
                    <div class="flex items-start justify-between mb-6">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/icon2.webp"
                        alt=""
                        class="w-10 h-10 object-contain"
                      />
                      <span class="text-white/60 font-serif text-[18px]"
                        >01</span
                      >
                    </div>
                    <h3
                      class="font-serif text-white text-[22px] font-bold mb-3 leading-snug"
                    >
                      Authorized Psychologist
                    </h3>
                    <p class="text-white/90 text-[15px] leading-[1.65]">
                      Every psychologist at our Bergen clinic holds full
                      Norwegian authorisation, meaning they have completed the
                      required training, supervision, and licensing. You are
                      always in qualified hands.
                    </p>
                  </div>
                  <button
                    class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer"
                    data-flip-btn="card-01"
                    aria-label="Flip back to photo"
                  >
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-text.webp"
                      alt=""
                      class="w-[34px] h-[34px] object-contain"
                    />
                    Back to photo
                  </button>
                </div>
              </div>
            </div>

            <!-- ── Card 02 ── No Referral ──────────────────────────────── -->
            <div
              class="flip-card-perspective h-[380px]"
              data-flip-card="card-02"
            >
              <div class="flip-card-inner" id="flip-inner-02">
                <!-- FRONT: terracotta (this card's "front" is the info panel) -->
                <div
                  class="flip-card-face bg-[#C85237] p-8 flex flex-col justify-between"
                >
                  <div>
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/icon2.webp"
                      alt=""
                      class="w-10 h-10 object-contain mb-6"
                    />
                    <h3
                      class="font-serif text-white text-[22px] font-bold mb-3 leading-snug"
                    >
                      No Referral, No Waiting List
                    </h3>
                    <p class="text-white text-[15px] leading-[1.65]">
                      The public mental health pathway in Bergen requires a GP
                      referral and then a wait of weeks or months. We have
                      removed both steps. You book directly, online or in
                      person.
                    </p>
                  </div>
                  <button
                    class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer"
                    data-flip-btn="card-02"
                    aria-label="Flip card to see photo"
                  >
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-text.webp"
                      alt=""
                      class="w-[34px] h-[34px] object-contain"
                    />
                    Back to photo
                  </button>
                </div>

                <!-- BACK: photo -->
                <div class="flip-card-face flip-card-back">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/flip1.webp"
                    alt="No Referral No Waiting List"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
                  ></div>
                  <div
                    class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end"
                  >
                    <div class="flex items-end justify-between w-full">
                      <div class="flex flex-col">
                        <span
                          class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"
                          >02</span
                        >
                        <h3
                          class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight"
                        >
                          No Referral Needed
                        </h3>
                      </div>
                      <button
                        class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer"
                        data-flip-btn="card-02"
                        aria-label="Flip back"
                      >
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-img.webp"
                          alt="Flip"
                          class="w-[44px] h-[44px] object-contain"
                        />
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ── Card 03 ── Integrated Network ──────────────────────── -->
            <div
              class="flip-card-perspective h-[380px]"
              data-flip-card="card-03"
            >
              <div class="flip-card-inner" id="flip-inner-03">
                <!-- FRONT: photo -->
                <div class="flip-card-face">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/flip2.webp"
                    alt="Integrated Network"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
                  ></div>
                  <div
                    class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end"
                  >
                    <div class="flex items-end justify-between w-full">
                      <div class="flex flex-col">
                        <span
                          class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"
                          >03</span
                        >
                        <h3
                          class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight"
                        >
                          Integrated Network
                        </h3>
                      </div>
                      <button
                        class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer"
                        data-flip-btn="card-03"
                        aria-label="Flip card to read more"
                      >
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-img.webp"
                          alt="Flip"
                          class="w-[44px] h-[44px] object-contain"
                        />
                      </button>
                    </div>
                  </div>
                </div>

                <!-- BACK: terracotta -->
                <div
                  class="flip-card-face flip-card-back bg-[#C85237] p-8 flex flex-col justify-between"
                >
                  <div>
                    <div class="flex items-start justify-between mb-6">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/icon4.webp"
                        alt=""
                        class="w-10 h-10 object-contain"
                      />
                      <span class="text-white/60 font-serif text-[18px]"
                        >03</span
                      >
                    </div>
                    <h3
                      class="font-serif text-white text-[22px] font-bold mb-3 leading-snug"
                    >
                      Integrated Network
                    </h3>
                    <p class="text-white/90 text-[15px] leading-[1.65]">
                      Our psychologists work closely with psychiatrists, GPs,
                      and other specialists across Bergen. If your situation
                      calls for a coordinated approach, we make sure all parts
                      of your care are connected.
                    </p>
                  </div>
                  <button
                    class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer"
                    data-flip-btn="card-03"
                    aria-label="Flip back to photo"
                  >
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-text.webp"
                      alt=""
                      class="w-[34px] h-[34px] object-contain"
                    />
                    Back to photo
                  </button>
                </div>
              </div>
            </div>

            <!-- ── Card 04 ── Evidence Based Methods ──────────────────── -->
            <div
              class="flip-card-perspective h-[380px]"
              data-flip-card="card-04"
            >
              <div class="flip-card-inner" id="flip-inner-04">
                <!-- FRONT: terracotta -->
                <div
                  class="flip-card-face bg-[#C85237] p-8 flex flex-col justify-between"
                >
                  <div>
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/icon4.webp"
                      alt=""
                      class="w-10 h-10 object-contain mb-6"
                    />
                    <h3
                      class="font-serif text-white text-[22px] font-bold mb-3 leading-snug"
                    >
                      Evidence Based Methods
                    </h3>
                    <p class="text-white/90 text-[15px] leading-[1.65]">
                      Cognitive Behavioral Therapy (CBT), Acceptance and
                      Commitment Therapy (ACT), EMDR for trauma, schema therapy,
                      and CBT-I for sleep problems. You will be told which
                      approach is being recommended for you.
                    </p>
                  </div>
                  <button
                    class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer"
                    data-flip-btn="card-04"
                    aria-label="Flip card to see photo"
                  >
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-text.webp"
                      alt=""
                      class="w-[34px] h-[34px] object-contain"
                    />
                    Back to photo
                  </button>
                </div>

                <!-- BACK: photo -->
                <div class="flip-card-face flip-card-back">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/flip2.webp"
                    alt="Evidence Based Methods"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
                  ></div>
                  <div
                    class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end"
                  >
                    <div class="flex items-end justify-between w-full">
                      <div class="flex flex-col">
                        <span
                          class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"
                          >04</span
                        >
                        <h3
                          class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight"
                        >
                          Evidence Based Methods
                        </h3>
                      </div>
                      <button
                        class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer"
                        data-flip-btn="card-04"
                        aria-label="Flip back"
                      >
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-img.webp"
                          alt="Flip"
                          class="w-[44px] h-[44px] object-contain"
                        />
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ── Card 05 ── Full Confidentiality ────────────────────── -->
            <div
              class="flip-card-perspective h-[380px]"
              data-flip-card="card-05"
            >
              <div class="flip-card-inner" id="flip-inner-05">
                <!-- FRONT: photo -->
                <div class="flip-card-face">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/flip3.webp"
                    alt="Full Confidentiality"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
                  ></div>
                  <div
                    class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end"
                  >
                    <div class="flex items-end justify-between w-full">
                      <div class="flex flex-col">
                        <span
                          class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"
                          >05</span
                        >
                        <h3
                          class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight"
                        >
                          Full Confidentiality
                        </h3>
                      </div>
                      <button
                        class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer"
                        data-flip-btn="card-05"
                        aria-label="Flip card to read more"
                      >
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-img.webp"
                          alt="Flip"
                          class="w-[44px] h-[44px] object-contain"
                        />
                      </button>
                    </div>
                  </div>
                </div>

                <!-- BACK: terracotta -->
                <div
                  class="flip-card-face flip-card-back bg-[#C85237] p-8 flex flex-col justify-between"
                >
                  <div>
                    <div class="flex items-start justify-between mb-6">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/icon6.webp"
                        alt=""
                        class="w-10 h-10 object-contain"
                      />
                      <span class="text-white/60 font-serif text-[18px]"
                        >05</span
                      >
                    </div>
                    <h3
                      class="font-serif text-white text-[22px] font-bold mb-3 leading-snug"
                    >
                      Full Confidentiality
                    </h3>
                    <p class="text-white/90 text-[15px] leading-[1.65]">
                      Everything discussed in your sessions is protected by
                      strict professional confidentiality under Norwegian law.
                      Your employer, GP, and family are not notified without
                      your explicit consent.
                    </p>
                  </div>
                  <button
                    class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer"
                    data-flip-btn="card-05"
                    aria-label="Flip back to photo"
                  >
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-text.webp"
                      alt=""
                      class="w-[34px] h-[34px] object-contain"
                    />
                    Back to photo
                  </button>
                </div>
              </div>
            </div>

            <!-- ── Card 06 ── Language Options ────────────────────────── -->
            <div
              class="flip-card-perspective h-[380px]"
              data-flip-card="card-06"
            >
              <div class="flip-card-inner" id="flip-inner-06">
                <!-- FRONT: terracotta -->
                <div
                  class="flip-card-face bg-[#C85237] p-8 flex flex-col justify-between"
                >
                  <div>
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/icon6.webp"
                      alt=""
                      class="w-10 h-10 object-contain mb-6"
                    />
                    <h3
                      class="font-serif text-white text-[22px] font-bold mb-3 leading-snug"
                    >
                      Language Options
                    </h3>
                    <p class="text-white text-[15px] leading-[1.65]">
                      Sessions are available in Norwegian, English, Swedish,
                      Danish, Polish and Urdu, as well as other languages at the
                      clinic. You will always be matched with a psychologist you
                      can speak to comfortably.
                    </p>
                  </div>
                  <button
                    class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer"
                    data-flip-btn="card-06"
                    aria-label="Flip card to see photo"
                  >
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-text.webp"
                      alt=""
                      class="w-[34px] h-[34px] object-contain"
                    />
                    Back to photo
                  </button>
                </div>

                <!-- BACK: photo -->
                <div class="flip-card-face flip-card-back">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/flip3.webp"
                    alt="Language Options"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"
                  ></div>
                  <div
                    class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end"
                  >
                    <div class="flex items-end justify-between w-full">
                      <div class="flex flex-col">
                        <span
                          class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"
                          >06</span
                        >
                        <h3
                          class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight"
                        >
                          Language Options
                        </h3>
                      </div>
                      <button
                        class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer"
                        data-flip-btn="card-06"
                        aria-label="Flip back"
                      >
                        <img
                          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/rotate-img.webp"
                          alt="Flip"
                          class="w-[44px] h-[44px] object-contain"
                        />
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section bg-[#FFF7F3]">
  <div class="container">
    
    <!-- Section Header -->
    <div class="mb-10 lg:mb-14">
      <h2 class="font-serif text-[32px] sm:text-[38px] lg:text-[44px] font-bold text-[#241C19] leading-[1.2] mb-4">
        Benefit Of Video Consultation At Psykolog.No
      </h2>
      <p class="text-[#5B5B5B] text-[14px] lg:text-[18px] leading-relaxed">
        For clients in Bergen, video consultation runs over a secure, encrypted video connection between you and your psychologist, wherever you are, and covers the same range of concerns as an in-person session including anxiety, depression, burnout, grief, and stress.
      </p>
    </div>

    <!-- 3-Column Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
      
      <!-- Left Column: Benefits Card 1 -->
      <div class="bg-white rounded-[28px] p-7 sm:p-8 lg:p-9 shadow-[0_4px_24px_rgba(0,0,0,0.02)] flex flex-col justify-between gap-8">
        
        <!-- Item 1 -->
        <div>
          <div class="flex items-center gap-3.5 mb-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Benefits1.webp" alt="Users / Team Icon" class="w-[48px] h-[48px] object-contain" />
            <h3 class="font-serif font-bold text-[18px] text-[#241C19]">
              Available Nationwide
            </h3>
          </div>
          <p class="text-[#6F6259] text-[13.5px] md:text-[18px] leading-[1.6] m-0">
            You get the same psychologists and specialists available to clients anywhere else in Norway
          </p>
        </div>

        <!-- Item 2 -->
        <div>
          <div class="flex items-center gap-3.5 mb-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Benefits2.webp" alt="Users / Team Icon" class="w-[48px] h-[48px] object-contain" />
            <h3 class="font-serif font-bold text-[18px] text-[#241C19]">
              No Travel Time
            </h3>
          </div>
          <p class="text-[#6F6259] text-[13.5px] md:text-[18px] leading-[1.6] m-0">
            Join from home, your office, or any private space; no commute, no parking, no waiting room
          </p>
        </div>

        <!-- Item 3 -->
        <div>
          <div class="flex items-center gap-3.5 mb-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Benefits3.webp" alt="Users / Team Icon" class="w-[48px] h-[48px] object-contain" />
            <h3 class="font-serif font-bold text-[18px] text-[#241C19]">
              Same Psychologist, Every Time
            </h3>
          </div>
          <p class="text-[#6F6259] text-[13.5px] md:text-[18px] leading-[1.6] m-0">
            You work with the same clinician session to session; continuity is maintained.
          </p>
        </div>

      </div>

      <!-- Center Column: Image -->
      <div class="relative rounded-[28px] overflow-hidden min-h-[360px] lg:min-h-[460px] shadow-[0_4px_24px_rgba(0,0,0,0.02)] bg-gray-100">
        <img
          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Benefits-of-video.webp"
          alt="Woman on video consultation with psychologist"
          class="absolute inset-0 w-full h-full object-cover object-center"
        />
      </div>

      <!-- Right Column: Benefits Card 2 -->
      <div class="bg-white rounded-[28px] p-7 sm:p-8 lg:p-9 shadow-[0_4px_24px_rgba(0,0,0,0.02)] flex flex-col justify-between gap-8">
        
        <!-- Item 4 -->
        <div>
          <div class="flex items-center gap-3.5 mb-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Benefits4.webp" alt="Users / Team Icon" class="w-[48px] h-[48px] object-contain" />
            <h3 class="font-serif font-bold text-[18px] text-[#241C19]">
              Equally Effective
            </h3>
          </div>
          <p class="text-[#6F6259] text-[13.5px] md:text-[18px] leading-[1.6] m-0">
            Evidence supports video therapy as equivalent to face-to-face for most conditions.
          </p>
        </div>

        <!-- Item 5 -->
        <div>
          <div class="flex items-center gap-3.5 mb-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Benefits5.webp" alt="Users / Team Icon" class="w-[48px] h-[48px] object-contain" />
            <h3 class="font-serif font-bold text-[18px] text-[#241C19]">
              Works Anywhere
            </h3>
          </div>
          <p class="text-[#6F6259] text-[13.5px] md:text-[18px] leading-[1.6] m-0">
            All you need is a smartphone, tablet, or computer with a camera and internet connection.
          </p>
        </div>

        <!-- Item 6 -->
        <div>
          <div class="flex items-center gap-3.5 mb-3">
             <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Benefits6.webp" alt="Users / Team Icon" class="w-[48px] h-[48px] object-contain" />
            <h3 class="font-serif font-bold text-[18px] text-[#241C19]">
              Flexible Scheduling
            </h3>
          </div>
          <p class="text-[#6F6259] text-[13.5px] md:text-[18px] leading-[1.6] m-0">
            Video sessions are available during daytime and evening hours
          </p>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="py-16 lg:py-24 bg-white">
  <div class="container mx-auto px-4 max-w-[1280px]">
    
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-[#C24C33] text-[13px] font-bold tracking-[0.15em] uppercase mb-4 block">
        Five Steps
      </span>
      <h2 class="h2 m-0">
        How to Join a <em>Video Session</em>
      </h2>
    </div>

    <!-- Timeline Grid -->
    <div class="relative grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-10 lg:gap-4">
      
      <!-- Connecting Line (Desktop) -->
      <div class="hidden lg:block absolute top-[36px] left-[10%] right-[10%] h-[2px] bg-[#F2EAE5] z-0"></div>
      <!-- Connecting Line (Mobile/Tablet) -->
      <div class="block lg:hidden absolute top-[36px] bottom-[36px] left-[50%] w-[2px] -translate-x-1/2 bg-[#F2EAE5] z-0"></div>

      <!-- Step 1 -->
      <div class="relative z-10 flex flex-col items-center text-center">
        <!-- Icon -->
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/five1.webp" alt="Event Scheduled / Check Calendar Icon" class="w-[72px] h-[72px] object-contain" />
        <!-- Number Pill -->
        <div class="bg-[#FFF7F3] text-[#6F6259] text-[12px] font-bold tracking-widest px-3 py-1 rounded-full mb-4">
          01
        </div>
        <!-- Description -->
        <p class="text-[#524B48] text-[14.5px] leading-[1.6] max-w-[220px] mx-auto m-0">
          Book your appointment online and select "Video consultation" as the format
        </p>
      </div>

      <!-- Step 2 -->
      <div class="relative z-10 flex flex-col items-center text-center">
        <!-- Icon -->
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/five2.webp" alt="Event Scheduled / Check Calendar Icon" class="w-[72px] h-[72px] object-contain" />
        <!-- Number Pill -->
        <div class="bg-[#FFF7F3] text-[#6F6259] text-[12px] font-bold tracking-widest px-3 py-1 rounded-full mb-4">
          02
        </div>
        <!-- Description -->
        <p class="text-[#524B48] text-[14.5px] leading-[1.6] max-w-[220px] mx-auto m-0">
          You will receive a confirmation by SMS with a secure video link
        </p>
      </div>

      <!-- Step 3 -->
      <div class="relative z-10 flex flex-col items-center text-center">
        <!-- Icon -->
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/five3.webp" alt="Event Scheduled / Check Calendar Icon" class="w-[72px] h-[72px] object-contain" />
        <!-- Number Pill -->
        <div class="bg-[#FFF7F3] text-[#6F6259] text-[12px] font-bold tracking-widest px-3 py-1 rounded-full mb-4">
          03
        </div>
        <!-- Description -->
        <p class="text-[#524B48] text-[14.5px] leading-[1.6] max-w-[220px] mx-auto m-0">
          At the time of your session, open the link on your device. No downloads required
        </p>
      </div>

      <!-- Step 4 -->
      <div class="relative z-10 flex flex-col items-center text-center">
        <!-- Icon -->
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/five4.webp" alt="Event Scheduled / Check Calendar Icon" class="w-[72px] h-[72px] object-contain" />
        <!-- Number Pill -->
        <div class="bg-[#FFF7F3] text-[#6F6259] text-[12px] font-bold tracking-widest px-3 py-1 rounded-full mb-4">
          04
        </div>
        <!-- Description -->
        <p class="text-[#524B48] text-[14.5px] leading-[1.6] max-w-[220px] mx-auto m-0">
          Your psychologist connects at the scheduled time
        </p>
      </div>

      <!-- Step 5 -->
      <div class="relative z-10 flex flex-col items-center text-center">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/five5.webp" alt="Event Scheduled / Check Calendar Icon" class="w-[72px] h-[72px] object-contain" />
        <!-- Number Pill -->
        <div class="bg-[#FFF7F3] text-[#6F6259] text-[12px] font-bold tracking-widest px-3 py-1 rounded-full mb-4">
          05
        </div>
        <!-- Description -->
        <p class="text-[#524B48] text-[14.5px] leading-[1.6] max-w-[220px] mx-auto m-0">
          Payment by Vipps or card after the session
        </p>
      </div>

    </div>

    <!-- CTA Button -->
    <div class="mt-14 lg:mt-20 text-center">
      <a
        href="#"
        class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A94836] text-white px-8 py-3.5 rounded-full font-sans text-[16px] font-bold transition-colors"
      >
        Book A Video Consultation <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/white-arrow.webp" alt="Right Arrow Icon" class="w-4 h-4 object-contain inline-block" />
      </a>
    </div>

  </div>
</section>


    

      <section class="section bg-[#FFF7F3]">
        <div class="container" data-reveal="">
          <!-- Section Header -->
          <div class="mb-8">
            <h2 class="h2 mb-4">What Can Our Psychologists Help You With?</h2>
            <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6]">
              Our psychologists work with the common mental health challenges.
              You do not need to have a formal diagnosis to book an appointment.
            </p>
          </div>

          <!-- 4-Column Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- 1. Anxiety -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms1.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Anxiety
                </h3>
                <p
                  class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"
                >
                  Worry, panic, social anxiety, phobias, health anxiety
                </p>
              </div>
            </div>

            <!-- 2. Depression -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms2.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Depression
                </h3>
                <p
                  class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"
                >
                  Low mood, loss of interest, hopelessness, persistent sadness
                </p>
              </div>
            </div>

            <!-- 3. Stress -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms3.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Stress
                </h3>
                <p class="text-[#6B6B6B] text-[14px] leading-[1.6]">
                  Acute and chronic stress, work pressure, overwhelm
                </p>
              </div>
            </div>

            <!-- 4. Burnout -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms4.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Burnout
                </h3>
                <p
                  class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"
                >
                  Emotional exhaustion, cynicism, reduced capacity
                </p>
              </div>
            </div>

            <!-- 5. Sleep problems -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms5.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Sleep problems
                </h3>
                <p class="text-[#6B6B6B] text-[14px] leading-[1.6]">
                  Insomnia, disrupted sleep, sleep anxiety
                </p>
              </div>
            </div>

            <!-- 6. Trauma and PTSD -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms6.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Trauma and PTSD
                </h3>
                <p class="text-[#6B6B6B] text-[14px] leading-[1.6]">
                  Post traumatic stress, complex trauma, acute trauma reactions
                </p>
              </div>
            </div>

            <!-- 7. Grief and loss -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms7.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Grief and loss
                </h3>
                <p
                  class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"
                >
                  Bereavement, complicated grief, traumatic grief
                </p>
              </div>
            </div>

            <!-- 8. OCD -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms8.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  OCD
                </h3>
                <p class="text-[#6B6B6B] text-[14px] leading-[1.6]">
                  Obsessive compulsive patterns, intrusive thoughts, compulsions
                </p>
              </div>
            </div>

            <!-- 9. Bipolar disorder -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms9.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Bipolar disorder
                </h3>
                <p
                  class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"
                >
                  Mood episodes, assessment, and support
                </p>
              </div>
            </div>

            <!-- 10. Eating disorders -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms10.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Eating disorders
                </h3>
                <p
                  class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"
                >
                  Anorexia, bulimia, binge eating, disordered eating
                </p>
              </div>
            </div>

            <!-- 11. ADHD -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms11.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  ADHD
                </h3>
                <p class="text-[#6B6B6B] text-[14px] leading-[1.6]">
                  Assessment, coping strategies, adult ADHD support
                </p>
              </div>
            </div>

            <!-- 12. Low self-esteem -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms12.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Low self-esteem
                </h3>
                <p
                  class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"
                >
                  Self-criticism, confidence, identity
                </p>
              </div>
            </div>

            <!-- 13. Relationship difficulties -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms13.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Relationship difficulties
                </h3>
                <p class="text-[#6B6B6B] text-[14px] leading-[1.6]">
                  Communication, trust, couples work
                </p>
              </div>
            </div>

            <!-- 14. Life difficulties -->
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow"
            >
              <div>
                <div class="w-[40px] h-[40px] mb-5">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Symptoms14.webp"
                    alt="Network / Share / Connectivity Icon"
                    class="object-contain"
                  />
                </div>
                <h3
                  class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"
                >
                  Life difficulties
                </h3>
                <p
                  class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"
                >
                  Transitions, loss of direction, existential questions
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

<section class="section">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[537px_744px] gap-10 lg:gap-16 items-center">
      
      <!-- Left Column: Image with Overlay Badge -->
      <div class="relative w-full aspect-[4/3] sm:aspect-[3/2] lg:aspect-[4/3] rounded-[28px] overflow-hidden shadow-sm bg-gray-100">
        <!-- Image -->
        <img
          src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Bergen/Video-consultation.webp"
          alt="Woman setting up for a video session on her laptop"
          class="absolute inset-0 w-full h-full object-cover object-center"
        />
        
        <!-- Glassmorphic Overlay Badge -->
        <div class="absolute bottom-6 left-6 inline-flex items-center gap-3 bg-[#FFFFFF29] backdrop-blur-md border border-white/20 rounded-full p-2 pr-6 shadow-lg">
          <div class="w-8 h-8 rounded-full bg-[#C2543F] flex items-center justify-center shrink-0 text-white">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"></path>
            </svg>
          </div>
          <span class="text-white text-[10px] font-bold tracking-[0.15em] uppercase mt-px">
            Secure Video, All of Norway
          </span>
        </div>
      </div>

      <!-- Right Column: Content & List -->
      <div class="flex flex-col pr-0 lg:pr-6">
        <!-- Heading -->
        <h2 class="font-serif text-[36px] sm:text-[40px] lg:text-[44px] font-bold text-[#241C19] leading-[1.2] mb-10">
          What You Need for a Video Session
        </h2>

        <!-- Features List -->
        <div class="flex flex-col gap-7">
          
          <!-- Item 1: Device -->
          <div class="flex items-center gap-5">
            <div class="w-[52px] h-[52px] rounded-[14px] bg-[#FBEAE7] text-[#C2543F] flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
              </svg>
            </div>
            <p class="text-[#524B48] text-[16px] lg:text-[20px] leading-snug m-0">
              A smartphone, tablet, or computer with a working camera and microphone
            </p>
          </div>

          <!-- Item 2: Internet -->
          <div class="flex items-center gap-5">
            <div class="w-[52px] h-[52px] rounded-[14px] bg-[#E8EFE5] text-[#5C7454] flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
              </svg>
            </div>
            <p class="text-[#524B48] text-[16px] lg:text-[20px] leading-snug m-0">
              A stable internet connection
            </p>
          </div>

          <!-- Item 3: Private Space -->
          <div class="flex items-center gap-5">
            <div class="w-[52px] h-[52px] rounded-[14px] bg-[#F5EBD5] text-[#96702B] flex items-center justify-center shrink-0">
              <!-- Custom workspace/desk icon to match the reference -->
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v-5a2 2 0 012-2h12a2 2 0 012 2v5M4 16h16M7 16v4M17 16v4M9 9l3-3m0 0l3 3m-3-3v8"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h8"></path>
              </svg>
            </div>
            <p class="text-[#524B48] text-[16px] lg:text-[20px] leading-snug m-0">
              A private, quiet space where you can talk freely for the length of the session
            </p>
          </div>

          <!-- Item 4: Browser -->
          <div class="flex items-center gap-5">
            <div class="w-[52px] h-[52px] rounded-[14px] bg-[#EAE5F0] text-[#6B568A] flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2h-4a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2h-4a2 2 0 01-2-2v-4z"></path>
              </svg>
            </div>
            <p class="text-[#524B48] text-[16px] lg:text-[20px] leading-snug m-0">
              No app or software download required; sessions run directly in your browser
            </p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="pt-[90px]" data-reveal>
  <div class="container">

  <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[759px_500px] gap-12 lg:gap-20 items-center">
  <div>
    <h2 class="h2 mb-4">
      Our Services for Bergen Clients
    </h2>
    <p class="text-[#6B6B6B] text-[166px] md:text-[20px] leading-[1.6] mb-6">
     We offer a range of psychological services by video for individuals, couples, families, and  organisations based in Bergen
    </p>

    <!-- Services List -->
    <div class="flex flex-col">
      
      <!-- Row 1 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-5 border-b border-[#F2E4DC]">
        <!-- Individual therapy -->
        <div class="flex items-center gap-4">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Services1.webp" alt="Individual therapy icon" class="w-[46px] h-[46px]">
          <span class="font-serif text-[#241C19] font-bold text-[16px] md:text-[22px] leading-[24px]">Individual therapy</span>
        </div>
        
        <!-- Couples therapy -->
        <div class="flex items-center gap-4">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Services2.webp" alt="Individual therapy icon" class="w-[46px] h-[46px]">
          <span class="font-serif text-[#241C19] font-bold text-[16px] md:text-[22px] leading-[24px]">Couples therapy</span>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-5 border-b border-[#F2E4DC]">
        <!-- Family therapy -->
        <div class="flex items-center gap-4">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Services2.webp" alt="Individual therapy icon" class="w-[46px] h-[46px]">
          <span class="font-serif text-[#241C19] font-bold text-[16px] md:text-[22px] leading-[24px]">Family therapy</span>
        </div>
        
        <!-- Psychological assessment -->
        <div class="flex items-center gap-4">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Services3.webp" alt="Individual therapy icon" class="w-[46px] h-[46px]">
          <span class="font-serif text-[#241C19] font-bold text-[16px] md:text-[22px] leading-[24px]">Psychological assessment</span>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-5">
        <!-- Documentation and reports -->
        <div class="flex items-center gap-4">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Services4.webp" alt="Individual therapy icon" class="w-[46px] h-[46px]">
          <span class="font-serif text-[#241C19] font-bold text-[16px] md:text-[22px] leading-[24px]">Documentation and reports</span>
        </div>
      </div>

    </div>
  </div>

  <!-- Right Column: Image Composition -->
  <div class="relative w-full aspect-square md:h-[500px] md:aspect-auto rounded-3xl overflow-hidden shadow-lg bg-gray-100">
    <!-- Main Background Image Placeholder -->
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Services.webp" alt="Oslo Clinic Background" class="absolute inset-0 w-full h-full object-cover">
    
    <!-- Gradient Overlay for text readability -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

    <!-- Bottom Location Card -->
    <div class="absolute bottom-6 left-6 right-6">
      <div class="bg-white rounded-full px-4 py-2 inline-flex items-center gap-2 mb-3 shadow-md">
        <!-- Pin Icon -->
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/location.webp" alt="Location pin" class="w-[24px] h-[24px]">
        <span class="text-[10px] sm:text-xs font-bold tracking-widest text-[#241C19] uppercase">
          Veitvetveien 8, 0586 Oslo
        </span>
      </div>
      <h3 class="text-white text-[20px] md:text-[24px] font-bold font-serif">Our clinic in Bergen</h3>
    </div>
  </div>
 </div>
  </div>

</section>

      <section class="section" data-reveal="">
        <div class="container">
          <!-- Terracotta Container -->
          <div
            class="bg-[#C24C33] rounded-[28px] p-6 sm:p-10 md:p-12 shadow-md relative overflow-hidden"
          >
            <div
              class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[551px_612px] gap-8 lg:gap-10"
            >
              <!-- Left Column: Heading & Image -->
              <div class="flex flex-col justify-between">
                <!-- Heading -->
                <h2
                  class="font-serif text-white text-[32px] md:text-[48px] font-bold leading-[1.25] mb-6"
                >
                  Why Choose <br />
                  <span class="italic font-serif">Psykolog.no</span> in Bergen?
                </h2>

                <!-- Image -->
                <div
                  class="rounded-[24px] overflow-hidden w-full h-[360px] sm:h-[420px] lg:h-[480px]"
                >
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Why Choose.webp"
                    alt="Therapy session at Psykolog.no Oslo"
                    class="w-full h-full object-cover"
                  />
                </div>
              </div>

              <!-- Right Column: Translucent List Container -->
              <div class="flex flex-col justify-center">
                <div
                  class="bg-[#FFFFFF0E] border border-[#FFFFFF21] rounded-[22px] p-6 md:p-8 backdrop-blur-sm"
                >
                  <ul class="divide-y divide-white/20">
                    <!-- 1. Experienced Psychologist -->
                    <li class="pb-3.5 flex items-start gap-3.5 text-white">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/ticks.webp"
                        alt="Check"
                        class="w-[26px] h-[26px] mt-0.5 flex-shrink-0"
                      />
                      <p class="text-[13px] md:text-[16px] leading-relaxed">
                        <strong class="font-bold"
                          >Experienced Psychologist:</strong
                        >
                        We have experienced &amp; Authorized phychologist at our
                        clinic.
                      </p>
                    </li>

                    <!-- 2. No Referral -->
                    <li class="py-3.5 flex items-start gap-3.5 text-white">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/ticks.webp"
                        alt="Check"
                        class="w-[26px] h-[26px] mt-0.5 flex-shrink-0"
                      />
                      <p class="text-[13px] md:text-[16px] leading-relaxed">
                        <strong class="font-bold">No Referral :</strong> Book
                        directly online without seeing your GP first
                      </p>
                    </li>

                    <!-- 3. 1–3 Working Days Waiting Time -->
                    <li class="py-3.5 flex items-start gap-3.5 text-white">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/ticks.webp"
                        alt="Check"
                        class="w-[26px] h-[26px] mt-0.5 flex-shrink-0"
                      />
                      <p class="text-[13px] md:text-[16px] leading-relaxed">
                        <strong class="font-bold"
                          >1–3 Working Days Waiting Time.</strong
                        >
                        Short, predictable access, not a months long queue
                      </p>
                    </li>

                    <!-- 4. In Person Or Video Consultation -->
                    <li class="py-3.5 flex items-start gap-3.5 text-white">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/ticks.webp"
                        alt="Check"
                        class="w-[26px] h-[26px] mt-0.5 flex-shrink-0"
                      />
                      <p class="text-[13px] md:text-[16px] leading-relaxed">
                        <strong class="font-bold"
                          >In Person Or Video Consultation:</strong
                        >
                        Oslo clinic or nationwide video you decide
                      </p>
                    </li>

                    <!-- 5. Languages Include -->
                    <li class="py-3.5 flex items-start gap-3.5 text-white">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/ticks.webp"
                        alt="Check"
                        class="w-[26px] h-[26px] mt-0.5 flex-shrink-0"
                      />
                      <p class="text-[13px] md:text-[16px] leading-relaxed">
                        <strong class="font-bold">Languages Include :</strong>
                        Norwegian, English, Urdu, Swedish, Danish, and more
                      </p>
                    </li>

                    <!-- 6. Psychiatry In The Same Network -->
                    <li class="py-3.5 flex items-start gap-3.5 text-white">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/ticks.webp"
                        alt="Check"
                        class="w-[26px] h-[26px] mt-0.5 flex-shrink-0"
                      />
                      <p class="text-[13px] md:text-[16px] leading-relaxed">
                        <strong class="font-bold"
                          >Psychiatry In The Same Network:</strong
                        >
                        If you need medication or a specialist assessment,
                        internal referral to Psykiater.no.
                      </p>
                    </li>

                    <!-- 7. Transparent Booking And Payment -->
                    <li class="py-3.5 flex items-start gap-3.5 text-white">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/ticks.webp"
                        alt="Check"
                        class="w-[26px] h-[26px] mt-0.5 flex-shrink-0"
                      />
                      <p class="text-[13px] md:text-[16px] leading-relaxed">
                        <strong class="font-bold"
                          >Transparent Booking And Payment:</strong
                        >
                        Online booking, SMS confirmation, or Vipps or card
                        payment after your session
                      </p>
                    </li>

                    <!-- 8. Corporate And Employer Sessions -->
                    <li class="pt-3.5 flex items-start gap-3.5 text-white">
                      <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/ticks.webp"
                        alt="Check"
                        class="w-[26px] h-[26px] mt-0.5 flex-shrink-0"
                      />
                      <p class="text-[13px] md:text-[16px] leading-relaxed">
                        <strong class="font-bold"
                          >Corporate And Employer Sessions:</strong
                        >
                        For HR-referred employees and organisations.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section bg-[#FFF7F3]" data-reveal="">
        <div class="container">
          <!-- Header Content -->
          <div class="mb-12">
            <h2 class="h2 mb-4">Meet Our Psychologists Available in Bergen</h2>
            <p class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6]">
              Our psychologists are authorised clinicians with documented
              clinical backgrounds. At Psykolog.no you can choose which
              psychologist you want to work with, and every session with them is
              by video.
            </p>
          </div>

          <!-- 3-Column Psychologists Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 (Ingrid Halvorsen) -->
            <div
              class="bg-white rounded-[24px] p-3 shadow-[0_2px_10px_rgba(0,0,0,0.03)] flex flex-col h-full"
            >
              <!-- Image Container -->
              <div
                class="relative w-full h-[260px] md:h-[280px] rounded-[16px] overflow-hidden"
              >
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Psykologist1.webp"
                  alt="Ingrid Halvorsen"
                  class="w-full h-full object-cover"
                />
                <!-- Frosted Glass Overlay -->
                <div
                  class="absolute bottom-3 left-3 right-3 bg-white/10 backdrop-blur-md border border-[#FFFFFF57] shadow-lg rounded-[12px] px-5 py-4 bg-[#FFFFFF33] text-white"
                >
                  <h3
                    class="font-serif text-[20px] text-white font-bold leading-snug"
                  >
                    Ingrid Halvorsen
                  </h3>
                  <p class="text-white text-[12px] mt-0.5">
                    Psychologist Specialist
                  </p>
                </div>
              </div>

              <!-- Text Content -->
              <div
                class="flex flex-col flex-grow justify-between px-3 pt-5 pb-4"
              >
                <p
                  class="text-[#6B5F5A] text-[14px] md:text-[16px] leading-[1.6] mb-6"
                >
                  Psychologist / Psychologist Specialist 12 years of experience
                  in individual therapy for adults.
                </p>

                <!-- Actions -->
                <div
                  class="flex items-center gap-6 mt-auto pt-4 border-t border-[#F5EAE4]"
                >
                  <a
                    href="#profile"
                    class="inline-flex items-center gap-1.5 text-[#241C19] text-[13px] font-bold hover:text-[#C85237] transition-colors"
                  >
                    <span>→</span> See full profile
                  </a>
                  <a
                    href="#book"
                    class="inline-flex items-center gap-1.5 text-[#241C19] text-[13px] font-bold hover:text-[#C85237] transition-colors"
                  >
                    <span>→</span> Book a time
                  </a>
                </div>
              </div>
            </div>

            <!-- Card 2 (Jonas Berg) -->
            <div
              class="bg-white rounded-[24px] p-3 shadow-[0_2px_10px_rgba(0,0,0,0.03)] flex flex-col h-full"
            >
              <!-- Image Container -->
              <div
                class="relative w-full h-[260px] md:h-[280px] rounded-[16px] overflow-hidden"
              >
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Psykologist2.webp"
                  alt="Jonas Berg"
                  class="w-full h-full object-cover"
                />
                <!-- Frosted Glass Overlay -->
                <div
                  class="absolute bottom-3 left-3 right-3 bg-white/10 backdrop-blur-md border border-[#FFFFFF57] shadow-lg rounded-[12px] px-5 py-4 bg-[#FFFFFF33] text-white"
                >
                  <h3
                    class="font-serif text-[20px] text-white font-bold leading-snug"
                  >
                    Jonas Berg
                  </h3>
                  <p class="text-white text-[12px] mt-0.5">
                    Psychologist Specialist
                  </p>
                </div>
              </div>

              <!-- Text Content -->
              <div
                class="flex flex-col flex-grow justify-between px-3 pt-5 pb-4"
              >
                <p
                  class="text-[#6B5F5A] text-[14px] md:text-[16px] leading-[1.6] mb-6"
                >
                  Psychologist Specialist Background in occupational psychology
                  and ACT. 9 years in both public and private practice.
                </p>

                <!-- Actions -->
                <div
                  class="flex items-center gap-6 mt-auto pt-4 border-t border-[#F5EAE4]"
                >
                  <a
                    href="#profile"
                    class="inline-flex items-center gap-1.5 text-[#241C19] text-[13px] font-bold hover:text-[#C85237] transition-colors"
                  >
                    <span>→</span> See full profile
                  </a>
                  <a
                    href="#book"
                    class="inline-flex items-center gap-1.5 text-[#241C19] text-[13px] font-bold hover:text-[#C85237] transition-colors"
                  >
                    <span>→</span> Book a time
                  </a>
                </div>
              </div>
            </div>

            <!-- Card 3 (Looking To Join Us) -->
            <div
              class="bg-white rounded-[24px] p-3 shadow-[0_2px_10px_rgba(0,0,0,0.03)] flex flex-col h-full"
            >
              <!-- Image Container -->
              <div
                class="relative w-full h-[260px] md:h-[280px] rounded-[16px] overflow-hidden"
              >
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/Psykologist3.webp"
                  alt="Looking To Join Us?"
                  class="w-full h-full object-cover"
                />
                <!-- Frosted Glass Overlay -->
                <div
                  class="absolute bottom-3 left-3 right-3 bg-white/10 backdrop-blur-md border border-[#FFFFFF57] shadow-lg rounded-[12px] px-5 py-4 bg-[#FFFFFF33] text-white"
                >
                  <h3
                    class="font-serif text-[20px] text-white font-bold leading-snug"
                  >
                    Looking To Join Us?
                  </h3>
                  <p class="text-white text-[12px] mt-0.5">Psychologist</p>
                </div>
              </div>

              <!-- Text Content -->
              <div
                class="flex flex-col flex-grow justify-between px-3 pt-5 pb-4"
              >
                <p
                  class="text-[#6B5F5A] text-[14px] md:text-[16px] leading-[1.6] mb-6"
                >
                  Psychologist 8 years of experience in couples therapy and
                  individual therapy for adults.
                </p>

                <!-- Actions -->
                <div
                  class="flex items-center gap-6 mt-auto pt-4 border-t border-[#F5EAE4]"
                >
                  <a
                    href="#profile"
                    class="inline-flex items-center gap-1.5 text-[#241C19] text-[13px] font-bold hover:text-[#C85237] transition-colors"
                  >
                    <span>→</span> See full profile
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     

     <section class="section" data-reveal>
  <div class="container">
    
    <!-- Top Section: Pricing -->
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[465px_804px] gap-12 lg:gap-16 items-start">
      
      <!-- Left Column: Content -->
      <div class="pt-2">
        <span class="block text-[#A93E28] text-[11px] md:text-[14px] font-bold tracking-[1.5px] uppercase mb-4">
          WHAT DOES IT COST?
        </span>
        <h2 class="h2 mb-6">
          Prices for a Psychologist in <em>Oslo</em>
        </h2>
        <p class="text-[#5B5B5B] text-[15px] md:text-[20px] leading-[1.6]">
          You pay after the session Vipps, card or invoice. Longer sessions and student rates are on the full price list.
        </p>
      </div>

      <!-- Right Column: Pricing Cards -->
      <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-stretch">
          
          <!-- Card 1: In Person Consultation -->
          <div class="border border-[#F09367] rounded-[24px] p-6 md:p-8 flex flex-col justify-between transition-shadow hover:shadow-md bg-white">
            <div>
              <div class="w-[56px] h-[56px]  mb-6">
                <!-- Icon Placeholder -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Price1.webp" alt="In Person" class="object-contain" />
              </div>
              <h3 class="font-serif text-[24px] md:text-[28px] font-bold text-[#241C19] mb-5">
                In Person Consultation
              </h3>
              
              <div class="mb-5">
                <span class="block text-[#635A52] text-[13px] md:text-[16px] mb-1">From</span>
                <div class="flex items-baseline gap-2">
                  <span class="font-serif text-[36px] md:text-[40px] font-bold text-[#C24C33] leading-none">1 800 kr</span>
                </div>
                <span class="block text-[#393939] text-[13px] md:text-[15px] font-medium mt-1.5">per 45 minutes</span>
              </div>
              
              <p class="text-[#5B5B5B] text-[14px] md:text-[18px] leading-relaxed mb-8 max-w-[320px]">
                With us you book one to one conversation lasting 45 , 60 or 90 minutes.
              </p>
            </div>
            
            <a href="#pricing" class="inline-flex justify-center items-center bg-[#C85237] text-white font-bold text-[14px] md:text-[18px] py-3.5 px-6 rounded-full w-fit hover:bg-[#b0452e] transition-colors">
              See Pricing
            </a>
          </div>

          <!-- Card 2: Video Consultation -->
          <div class="rounded-[24px] p-6 md:p-8 flex flex-col justify-between shadow-sm transition-shadow hover:shadow-md bg-[#C85237]">
            <div>
             <div class="w-[56px] h-[56px]  mb-6">
                <!-- Icon Placeholder -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Price2.webp" alt="Video" class="object-contain" />
              </div>
              <h3 class="font-serif text-[22px] md:text-[28px] font-bold text-white mb-5">
                Video Consultation
              </h3>
              
              <div class="mb-5">
                <span class="block text-white/90 text-[13px] md:text-[16px] mb-1">From</span>
                <div class="flex items-baseline gap-2">
                  <span class="font-serif text-[36px] md:text-[40px] font-bold text-white leading-none">1 500 kr</span>
                </div>
                <span class="block text-white font-medium text-[13px] md:text-[15px] mt-1.5">per 45 minutes</span>
              </div>
              
              <p class="text-white/90 text-[14px] md:text-[18px] leading-relaxed mb-8 max-w-[320px]">
                With us you book one to one conversation lasting 45 , 60 or 90 minutes.
              </p>
            </div>
            
            <a href="#pricing" class="inline-flex justify-center items-center bg-white text-[#241C19] font-bold text-[14px] md:text-[18px] py-3.5 px-6 rounded-full w-fit hover:bg-gray-50 transition-colors">
              See Pricing
            </a>
          </div>

        </div>
      </div>
    </div>

    <!-- Bottom Section: Crisis Help -->
    <div 
      class="mt-16 md:mt-24 rounded-[16px] p-8 md:p-12 lg:p-16 bg-[#C24C33]"
    >
      <div class="mb-10">
        <h3 class="font-serif text-white text-[20px] md:text-[32px]  font-bold mb-4">
          Are Your In Crises or In Need of Acute Helo?
        </h3>
        <p class="text-white text-[15px] md:text-[18px] leading-[1.6]">
          Psykolog.no is not an emergency service. We cannot offer same-day crisis appointments. If you are in acute distress or in danger, please contact one of the services below immediately.
        </p>
      </div>

      <!-- Emergency Contacts Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
        
        <!-- Emergency -->
        <a href="tel:113" class="bg-white rounded-[20px] p-5 flex items-center gap-4 transition-transform hover:-translate-y-1 hover:shadow-sm border-[#FFFFFF29]">
          <div class="w-12 h-12">
            <!-- Icon Placeholder -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Call.webp" alt="Phone" class="object-contain" />
          </div>
          <div>
            <span class="block text-[#5C2A20] font-serif text-[10px] md:text-[14px] font-bold uppercase tracking-[1px] mb-[8px]">
              EMERGENCY
            </span>
            <span class="block text-[#C24C33] text-[20px] md:text-[24px] font-bold leading-none">
              113
            </span>
          </div>
        </a>

        <!-- Urgent Medical Help -->
        <a href="tel:116117" class="bg-white rounded-[20px] p-5 flex items-center gap-4 transition-transform hover:-translate-y-1 hover:shadow-sm border-[#FFFFFF29]">
          <div class="w-12 h-12 rounded-full bg-[#ECA180] flex items-center justify-center flex-shrink-0">
            <!-- Icon Placeholder -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Call.webp" alt="Phone" class="object-contain" />
          </div>
          <div>
            <span class="block text-[#5C2A20] font-serif text-[10px] md:text-[14px] font-bold uppercase tracking-[1px] mb-[8px]">
              URGENT MEDICAL HELP
            </span>
            <span class="block text-[#C24C33] text-[20px] md:text-[24px] font-bold leading-none">
              116 117
            </span>
          </div>
        </a>

        <!-- Mental Health Crisis Line -->
        <a href="tel:116123" class="bg-white rounded-[20px] p-5 flex items-center gap-4 transition-transform hover:-translate-y-1 hover:shadow-sm border-[#FFFFFF29]">
          <div class="w-12 h-12 rounded-full bg-[#ECA180] flex items-center justify-center flex-shrink-0">
            <!-- Icon Placeholder -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/oslo/Call.webp" alt="Phone" class="object-contain" />
          </div>
          <div>
            <span class="block text-[#5C2A20] font-serif text-[10px] md:text-[14px] font-bold uppercase tracking-[1px] mb-[8px]">
              MENTAL HEALTH CRISIS LINE
            </span>
            <span class="block text-[#C24C33] text-[20px] md:text-[24px] font-bold leading-none">
              116 123
            </span>
          </div>
        </a>

      </div>
    </div>
    
  </div>
</section>

      <section id="mh-faq" class="section bg-[#FFF7F3]">
        <div class="container" data-reveal="">
          <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start"
          >
            <!-- Left Column -->
            <div
              class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col items-start"
            >
              <span
                class="text-[#C24C33] text-[12px] font-normal tracking-[0.15em] uppercase mb-4 block"
              >
                FAQS
              </span>
              <h2 class="h2 mb-6">
                Frequently<br />
                Asked <em>Questions</em>
              </h2>
              <p
                class="text-[15px] sm:text-[18px] leading-[26px] text-[#6B5F5A] m-0 mb-8 max-w-[420px]"
              >
                Still unsure whether an appointment is the right next step?
                Speak to one of our psychologists.
              </p>

              <button
                type="button"
                class="border border-[#C24C33] text-[#C24C33] bg-transparent hover:bg-[#C24C33] hover:text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors mb-12 cursor-pointer"
              >
                Book a time
              </button>

              <hr
                class="border-t border-[#E8DDD7] w-full max-w-[420px] mb-10"
              />

              <div class="flex items-center gap-3 mb-5">
                <div class="flex -space-x-2">
                  <span
                    class="w-7 h-7 rounded-full bg-[#EADDCD] border-2 border-[#FEF7F4]"
                  ></span>
                  <span
                    class="w-7 h-7 rounded-full bg-[#DCE4DA] border-2 border-[#FEF7F4]"
                  ></span>
                  <span
                    class="w-7 h-7 rounded-full bg-[#F3DADA] border-2 border-[#FEF7F4]"
                  ></span>
                  <span
                    class="w-7 h-7 rounded-full bg-[#F6EBE2] border-2 border-[#FEF7F4]"
                  ></span>
                </div>
                <span
                  class="font-sans font-bold text-[14px] md:text-[16px] text-[#A93E28]"
                  >Bergen Questions Asked By Our Patients</span
                >
              </div>

              <p
                class="text-[14px] md:text-[16px] leading-[22px] text-[#6B5F5A] m-0 mb-6 max-w-[340px]"
              >
                These are the questions people ask us most often before booking
                their first consultation.
              </p>

              <button
                type="button"
                onclick="location.href = '#mh-book'"
                class="bg-[#C24C33] hover:bg-[#924A3D] text-white font-sans font-bold text-[16px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer shadow-sm"
              >
                <span>Ask Your Own Question</span>
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bergen/white-arrow.webp"
                  alt="Right Arrow"
                  class="w-6 h-6 object-contain"
                />
              </button>
            </div>

            <!-- Right Column -->
            <div class="lg:col-span-7 flex flex-col gap-4">
              <div
                class="faq-item bg-white border border-[#E8DDD7] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300"
              >
                <button
                  class="w-full flex items-center justify-between p-5 sm:px-7 sm:py-6 bg-transparent border-0 cursor-pointer text-left group"
                >
                  <span
                    class="font-serif font-bold text-[16px] md:text-[20px] text-ink-900 group-hover:text-[#A85848] transition-colors pr-4"
                  >
                    Do I need a referral to book a psychologist in Bergen?
                  </span>
                  <span
                    class="faq-icon text-[#A85848] flex-none transition-transform duration-300 font-medium text-4xl leading-none"
                  >
                    +
                  </span>
                </button>
                <div class="faq-content hidden px-5 sm:px-7 pb-6 pt-0">
                  <p class="text-[15px] leading-[26px] text-gray-600 m-0">
                    You can book directly at Psykolog.no without a referral from
                    your GP. All Bergen appointments are held by video, from
                    anywhere in Bergen.
                  </p>
                </div>
              </div>

              <div
                class="faq-item bg-white border border-[#E8DDD7] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300"
              >
                <button
                  class="w-full flex items-center justify-between p-5 sm:px-7 sm:py-6 bg-transparent border-0 cursor-pointer text-left group"
                >
                  <span
                    class="font-serif font-bold text-[16px] md:text-[20px] text-ink-900 group-hover:text-[#A85848] transition-colors pr-4"
                  >
                    Do you have a physical clinic in Bergen?
                  </span>
                  <span
                    class="faq-icon text-[#A85848] flex-none transition-transform duration-300 font-medium text-4xl leading-none"
                  >
                    +
                  </span>
                </button>
                <div class="faq-content hidden px-5 sm:px-7 pb-6 pt-0">
                  <p class="text-[15px] leading-[26px] text-gray-600 m-0">
                    We offer psychological help in Bergen by secure video, which
                    gives you access to our full network of authorized
                    psychologists.
                  </p>
                </div>
              </div>

              <div
                class="faq-item bg-white border border-[#E8DDD7] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300"
              >
                <button
                  class="w-full flex items-center justify-between p-5 sm:px-7 sm:py-6 bg-transparent border-0 cursor-pointer text-left group"
                >
                  <span
                    class="font-serif font-bold text-[16px] md:text-[20px] text-ink-900 group-hover:text-[#A85848] transition-colors pr-4"
                  >
                    What is the difference between a psychologist and a
                    therapist?
                  </span>
                  <span
                    class="faq-icon text-[#A85848] flex-none transition-transform duration-300 font-medium text-4xl leading-none"
                  >
                    +
                  </span>
                </button>
                <div class="faq-content hidden px-5 sm:px-7 pb-6 pt-0">
                  <p class="text-[15px] leading-[26px] text-gray-600 m-0">
                    "Psychologist" is a legally protected title in Norway,
                    requiring a six-year university degree and authorization
                    from the Norwegian Directorate of Health. "Therapist" is not
                    a protected title; anyone can use it regardless of training.
                  </p>
                </div>
              </div>

              <div
                class="faq-item bg-white border border-[#E8DDD7] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300"
              >
                <button
                  class="w-full flex items-center justify-between p-5 sm:px-7 sm:py-6 bg-transparent border-0 cursor-pointer text-left group"
                >
                  <span
                    class="font-serif font-bold text-[16px] md:text-[20px] text-ink-900 group-hover:text-[#A85848] transition-colors pr-4"
                  >
                    Is a video session with a psychologist as effective as an in
                    person one?
                  </span>
                  <span
                    class="faq-icon text-[#A85848] flex-none transition-transform duration-300 font-medium text-4xl leading-none"
                  >
                    +
                  </span>
                </button>
                <div class="faq-content hidden px-5 sm:px-7 pb-6 pt-0">
                  <p class="text-[15px] leading-[26px] text-gray-600 m-0">
                    Evidence supports video therapy as equally effective as
                    in-person sessions for most conditions, including anxiety,
                    depression, and stress. You work with the same psychologist
                    throughout, and the structure of the session is the same.
                  </p>
                </div>
              </div>

              <div
                class="faq-item bg-white border border-[#E8DDD7] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300"
              >
                <button
                  class="w-full flex items-center justify-between p-5 sm:px-7 sm:py-6 bg-transparent border-0 cursor-pointer text-left group"
                >
                  <span
                    class="font-serif font-bold text-[16px] md:text-[20px] text-ink-900 group-hover:text-[#A85848] transition-colors pr-4"
                  >
                    Do you work with employers and HR departments?
                  </span>
                  <span
                    class="faq-icon text-[#A85848] flex-none transition-transform duration-300 font-medium text-4xl leading-none"
                  >
                    +
                  </span>
                </button>
                <div class="faq-content hidden px-5 sm:px-7 pb-6 pt-0">
                  <p class="text-[15px] leading-[26px] text-gray-600 m-0">
                    We accept employer-referred patients and can invoice
                    companies, NAV, insurers, and other organisations for
                    sessions. Contact us directly to discuss corporate
                    arrangements.
                  </p>
                </div>
              </div>
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
              <h2
                class="font-serif text-[30px] md:text-[36px] text-[#241C19] mb-4 font-bold"
              >
                Didn't Find The Answer To
                <em class="italic text-[#C24C33]">Your Questions?</em>
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
                  Ask Question
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
                  Book An Appointment
                </a>
              </div>
            </div>

            <div class="shrink-0">
              <div class="w-[421px] h-[280px]">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Faqs/cta.webp"
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