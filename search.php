<?php
/**
 * The template for displaying search results pages
 */

get_header();
?>

<main>
    <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[400px] lg:min-h-[500px]">
        <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
            <div class="max-w-[1312px] mx-auto text-center">
                <h1 class="font-serif font-bold text-brand-darkest mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px]">
                    Søkeresultater for: <span class="text-[#C24C33] italic"><?php echo get_search_query(); ?></span>
                </h1>
            </div>
        </div>
    </section> 

    <section class="lg:pb-[90px] pb-[40px] pt-[40px]" data-reveal>
        <div class="container mx-auto px-4">
            <div class="max-w-[800px] mx-auto">
                <?php if ( have_posts() ) : ?>
                    <ul class="divide-y divide-[#EAEAEA]">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <li class="py-6">
                                <a href="<?php the_permalink(); ?>" class="block hover:bg-[#F9F9F9] p-4 -mx-4 rounded-xl transition-colors">
                                    <h2 class="font-serif font-bold text-[22px] md:text-[24px] text-[#33170F] mb-2 hover:text-[#C24C33] transition-colors">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="text-[#33170F]/70 text-[15px] leading-[1.6]">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    
                    <div class="mt-8 flex justify-between items-center">
                        <div class="nav-previous"><?php previous_posts_link( '« Forrige side' ); ?></div>
                        <div class="nav-next"><?php next_posts_link( 'Neste side »' ); ?></div>
                    </div>

                <?php else : ?>
                    <div class="text-center py-12">
                        <h2 class="font-serif text-[24px] font-bold text-[#33170F] mb-4">Beklager, ingen resultater funnet.</h2>
                        <p class="text-[#33170F]/70 text-[16px]">Prøv å søke med et annet nøkkelord.</p>
                        
                        <div class="mt-8 max-w-md mx-auto relative">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
