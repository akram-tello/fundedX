<?php 
    $unique_class = 'module-text-with-media-' . uniqid();
    $className  = (!empty($block['className']) ? $block['className'] : null) . ' ' . $unique_class;
    $heading    = get_field('heading');
    $content    = get_field('content');
    $cta        = get_field('cta');
    $alignment  = get_field('alignment');
    $media      = get_field('media');
    $code_embed = get_field('embed_code');
    $icon_image = get_field('icon_image');
    $code      = get_field('shortcode');
    $sub_text  = get_field('sub_text');
    $background_images = get_field('background_images');
    $bg_desktop_url = isset($background_images['bg_desktop']['url']) ? $background_images['bg_desktop']['url'] : null;
    $bg_mobile_url = isset($background_images['bg_mobile']['url']) ? $background_images['bg_mobile']['url'] : null;
    $white_text          = get_field('white_text_color_toggle');
    
?>

<style>
    .video-media{
        border-radius: 15px;
    }

    .<?= $unique_class ?> {
        background-image: url('<?= !empty($bg_mobile_url) ? $bg_mobile_url : get_template_directory_uri() . '/img/bg.svg' ?>');
        background-size: cover;
        background-position: top;
    }

    @media(min-width: 768px) {
        .<?= $unique_class ?> {
            background-image: url('<?= !empty($bg_desktop_url) ? $bg_desktop_url : get_template_directory_uri() . '/img/bg.svg' ?>');
        }
    }
</style>

<section class="module module--text-with-media <?= $className ?>">
    <div class="wrapper">
        <div class="text-with-media align-<?= $alignment ?>">

            <div class="mw-511">

            <div class="flex items-start" style="margin-bottom: 2rem">

            <?php if( !empty( $icon_image ) ): ?>
                <img style="margin-right: 1rem" data-src="<?= $icon_image['url']; ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $icon_image['alt']; ?>" width="50" >
            <?php endif; ?>

            <div>
                <h2 class="module-title <?= $white_text ? 'text-white' : '' ?>"><?= $heading ?></h2>
                <?php if( !empty($sub_text) ): ?>
                    <p class="sub-text"><?= $sub_text ?></p>
                <?php endif; ?>
            </div>
            </div>
            <div class="text-content">
                <?php if( !empty( $code ) ): ?>
                    <?= do_shortcode( $code ) ?>
                <?php endif ?>
                <span class="<?= $white_text ? 'text-white' : '' ?>"><?= $content ?></span>
            <?php if( !empty( $cta ) ): ?>
                <a href="<?= $cta['url'] ?>" class="mt-30px mb-3 btn btn--primary <?= $background_images? 'secondary-btn' : '' ?>" ><?= $cta['title'] ?><?= get_template_part('img/arrow-up.svg'); ?></a>
            <?php endif ?>
            </div>

            </div>
            <div class="text-media">
                <?php if( !empty( $code_embed ) ): ?>
                    <?= do_shortcode( $code_embed ) ?>
                <?php elseif( !empty( $media ) ):  // Check if $media is not empty ?>
                    <?php if( $media['type'] == 'video' ): ?>
                        <video width="100%" height="100%" controls class="video-media">
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

