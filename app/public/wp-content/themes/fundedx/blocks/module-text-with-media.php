<?php 
    $className  = !empty($block['className']) ? $block['className'] : null;
    $heading    = get_field('heading');
    $content    = get_field('content');
    $cta        = get_field('cta');
    $alignment  = get_field('alignment');
    $media      = get_field('media');
    $code_embed = get_field('embed_code');
    $icon_image = get_field('icon_image');
    $code      = get_field('shortcode');
    $sub_text  = get_field('sub_text');
?>


<section class="module module--text-with-media <?= $className ?>" style="background-image: url('<?= get_template_directory_uri(); ?>/img/bg.svg');  background-size: cover; background-position: top;">
    <div class="wrapper">
        <div class="text-with-media align-<?= $alignment ?>">

            <div class="mw-511">

            <div class="flex items-start" style="margin-bottom: 2rem">

            <?php if( !empty( $icon_image ) ): ?>
                <img style="margin-right: 1rem" data-src="<?= $icon_image['url']; ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $icon_image['alt']; ?>" width="50" >
            <?php endif; ?>

            <div>
                <h2 class="module-title"><?= $heading ?></h2>
                <?php if( !empty($sub_text) ): ?>
                    <p class="sub-text"><?= $sub_text ?></p>
                <?php endif; ?>
            </div>
            </div>
            <div class="text-content">
                <?php if( !empty( $code ) ): ?>
                    <?= do_shortcode( $code ) ?>
                <?php endif ?>
            <?= $content ?>
            <?php if( !empty( $cta ) ): ?>
                <a href="<?= $cta['url'] ?>" class="btn btn--primary"><?= $cta['title'] ?><?= get_template_part('img/arrow-up.svg'); ?></a>
            <?php endif ?>
            </div>

            </div>
            <div class="text-media">
                <?php if( !empty( $code_embed ) ): ?>
                    <?= do_shortcode( $code_embed ) ?>
                <?php else: ?>
                    <?php if( $media['type'] == 'video' ): ?>
                        <video width="320" height="240" controls>
                            <source src="<?= $media['url'] ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php elseif( $media['type'] == 'image' ): ?>
                        <?= image( $media['ID'], 'a4x3' ) ?>
                    <?php endif ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

