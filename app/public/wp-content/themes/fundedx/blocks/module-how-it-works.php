<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('content');
    $cta = get_field('cta');
?>

<section class="module module--how-it-works pt-80px <?= $className ?>">
    <div class="wrapper">
        <div class="module-title-holder text-center">
            <h2 class="module--title"><?= $heading ?></h2>
            <p><?= $content ?></p>
        </div>

        <div class="module-works-list flex flex-wrap mt-30px md:space-x-0">
            <?php if( have_rows('cards') ): ?>
                <?php while( have_rows('cards') ): the_row(); ?>
                    <div class="box-list relative">
                        <?= get_template_part('img/box.svg'); ?>
                        <div class="box-content absolute">
                            <h2><?php the_sub_field('card_order'); ?></h2>
                            <h4><?php the_sub_field('card_title'); ?></h4>
                            <p><?php the_sub_field('card_content'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="btn-holder text-center mt-40px">
            <a href="<?= $cta['url'] ?>" class="btn btn--primary"><?= $cta['title'] ?> <?= get_template_part('img/arrow-up.svg'); ?></a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        if (window.matchMedia("(max-width: 767px)").matches) {
            $('.module-works-list').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
            });
        }
    });
</script>
