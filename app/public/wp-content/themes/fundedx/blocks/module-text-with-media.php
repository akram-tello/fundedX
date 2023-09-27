<?php 
    $className  = !empty($block['className']) ? $block['className'] : null;
    $heading    = get_field('heading');
    $content    = get_field('content');
    $cta        = get_field('cta');
    $alignment  = get_field('alignment');
    $media      = get_field('media');
    $code       = get_field('embed_code');
?>


<section class="module module--text-with-media <?= $className ?>">
    <div class="wrapper">
        <div class="text-with-media align-<?= $alignment ?>">
            <div class="text-content">
                <h2 class="module-title"><?= $heading ?></h2>
                <?= $content ?>
                <?php if( !empty( $cta ) ): ?>
                    <a href="<?= $cta['url'] ?>" class="btn btn--primary"><?= $cta['title'] ?></a>
                <?php endif ?>
            </div>
            <div class="text-media">
                <?php if( !empty( $code ) ): ?>
                    <?= do_shortcode( $code ) ?>
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

