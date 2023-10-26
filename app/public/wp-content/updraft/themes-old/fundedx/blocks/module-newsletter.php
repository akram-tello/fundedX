<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading        = get_field('heading');
    $intro          = get_field('intro_text');
    $code           = get_field('shortcode');
    $background     = get_field('background');
?>


<section class="module module--newsletter <?= $className ?>">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
        <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif; ?>
    <div class="wrapper">
        <div class="newsletter">
            <div class="newsletter--text">
                <h2 class="module--tile"><?= $heading ?></h2>
                <?= $intro ?>
            </div>
            <div class="newsletter--form">
                <?= do_shortcode( $code ) ?>
            </div>
        </div>
    </div>
</section>

