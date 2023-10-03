<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading   = get_field('heading');
?>
<section class="module module--logo-carousel bg-gray <?= $className ?>">
    <div class="wrapper px-4 py-6 mx-auto max-w-7xl">
        <h2 class="module--title text-center mb-6 text-xl font-bold"><?= $heading ?></h2>
        <div class="logos flex flex-wrap justify-center items-center gap-y-2 gap-x-4 md:gap-4 md:space-y-0 md:flex-nowrap md:overflow-x-auto">
            <?php while( have_rows('logo') ): the_row(); ?>
                <div class="logo-item flex flex-col items-center mb-4 md:mb-0">
                    <?php 
                        $logo  = get_sub_field('logo');
                        $link  = get_sub_field('link');
                        $title = get_sub_field('title');
                    ?>

                    <?php if( !empty( $link ) ): ?>
                        <a href="<?= $link ?>" target="_blank" class="flex flex-col items-center">
                    <?php endif ?>
                        <img data-src="<?= $logo['url'] ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $logo['alt'] ?>" class="w-24">

                        <?php if( !empty( $title ) ): ?>
                            <p class="mt-2 text-sm"><?= $title ?></p>
                        <?php endif ?>
                    <?php if( !empty( $link ) ): ?>
                        </a>
                    <?php endif ?>
                </div>
            <?php endwhile ?>    
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Owl Carousel for desktop view
        if (window.matchMedia("(min-width: 768px)").matches) {
            $('.logos').addClass('owl-carousel owl-theme').owlCarousel({
                items: 5,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:3,
                    },
                    1000:{
                        items:5,
                    }
                }
            });
        }
    });
</script>
