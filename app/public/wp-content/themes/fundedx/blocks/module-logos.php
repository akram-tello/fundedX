<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading        = get_field('heading');
?>


<section class="module module--logo-carousel bg-gray <?= $className ?>">
    <div class="wrapper">
        <h2 class="module--title text-center"><?= $heading ?></h2>
        <div class="logo-carousel js-logo-carousel owl-carousel">
            <?php while( have_rows('logo') ): the_row(); ?>
                <div class="logo-item">
                    <?php 
                        $logo  = get_sub_field('logo');
                        $link  = get_sub_field('link');
                        $title = get_sub_field('title');
                    ?>

                    <?php if( !empty( $link ) ): ?>
                        <a href="<?= $link ?>" target="_blank">
                    <?php endif ?>
                        <img data-src="<?= $logo['url'] ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $logo['alt'] ?>">

                        <?php if( !empty( $title ) ): ?>
                            <p><?= $title ?></p>
                        <?php endif ?>
                    <?php if( !empty( $link ) ): ?>
                        </a>
                    <?php endif ?>
                </div>
            <?php endwhile ?>    
        </div>
    </div>
</section>

