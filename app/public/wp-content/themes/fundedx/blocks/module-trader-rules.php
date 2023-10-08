<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('content');
?>

<style> 
.box-list:nth-child(2) svg g#Box-7 {
    stroke: #32373c;
}
.box-list:nth-child(2) h2 {
    color: #141414;
}

.box-list:last-child svg g#Box-7 {
    stroke: #32373c;
}
.box-list:last-child h2 {
    color: #141414;
}
</style>
<section class="module module--trader py-80px <?= $className ?>">
    <div class="wrapper">
        <div class="module-title-holder text-center">
            <h2 class="module--title"><?= $heading ?></h2>
            <p class="max-w-2xl m-auto mt-3"><?= $content ?></p>
        </div>

        <div class="flex flex-wrap m-auto justify-center module-works-list mt-5">

            <?php if( have_rows('cards') ): ?>
                <?php while( have_rows('cards') ): the_row(); ?>
                    <div class="box-list relative w-full">
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
