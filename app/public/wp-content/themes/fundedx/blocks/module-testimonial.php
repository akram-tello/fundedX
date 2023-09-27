<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading        = get_field('heading');
    $subheading     = get_field('sub_heading');
?>


<section class="module module--testimonial <?= $className ?>">
    <div class="wrapper">
        <h4 class="module--subtitle"><?= $subheading ?></h4>
        <h2 class="module--title"><?= $heading ?></h2>

        <div class="testimonials">
            <?php while( have_rows('testimonial') ): the_row(); ?>
                <div class="testimonials--item">
                    <?php 
                        $title      = get_sub_field('title');
                        $name       = get_sub_field('name');
                        $quote      = get_sub_field('quote');
                        $photo      = get_sub_field('photo');
                    ?>

                    <h3><?= $title ?></h3>
                    <?= $quote ?>
                    <p class="name"><?= $name ?></p>
                    <?php if( !empty( $photo ) ): ?>
                        <img data-src="<?= $photo['url'] ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $photo['alt'] ?>">
                    <?php endif ?>
                </div>
            <?php endwhile ?>
        </div>
    </div>
</section>

