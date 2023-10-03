<?php 
    $className = !empty($block['className']) ? $block['className'] : null;

    // Assuming you have set up your ACF fields accordingly
    $background          = get_field('background');
    $heading             = get_field('heading');
    $intro_text          = get_field('intro_text');
    $cta                 = get_field('cta');
    $desktop_alignment   = get_field('desktop_alignment');
    $mobile_alignment    = get_field('mobile_alignment');

?>

<section class="module module--cta <?= $className ?>">
    <div class="cta-item">
        <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
            <?= responsive_image( $background['mobile']['ID'], $background['desktop']['ID'], 'bg' ) ?>
        <?php endif ?>

        <div class="cta-content desktop-<?= $desktop_alignment['horizontal'] ?> desktop-<?= $desktop_alignment['vertical'] ?> mobile-<?= $mobile_alignment['horizontal'] ?> mobile-<?= $mobile_alignment['vertical'] ?>">
            <div class="wrapper">
                <h2 class="cta-title"><?= esc_html( $heading ) ?></h2>
                <p> <?= $intro_text ?></p>                
                <?php if( !empty( $cta ) ): ?>
                    <div>
                        <a href="<?= $cta['url'] ?>" class="btn btn--primary"><?= $cta['title'] ?></a>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
