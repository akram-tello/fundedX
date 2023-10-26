<?php 
    $className = !empty($block['className']) ? $block['className'] : null;

?>

<?php if( have_rows('banner') ): ?>
<section class="module module--hero <?= $className ?>">
    <div class="hero-banner js-hero owl-carousel">
        <?php while( have_rows('banner') ): the_row(); ?>
            <div class="hero-item">
                <?php 
                    $background          = get_sub_field('background');
                    $heading             = get_sub_field('heading');
                    $intro_text          = get_sub_field('intro_text');
                    $cta                 = get_sub_field('cta');
                    $desktop_alignment   = get_sub_field('desktop_alignment');
                    $mobile_alignment    = get_sub_field('mobile_alignment');

                ?>
                <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
                    <?= responsive_image( $background['mobile']['ID'], $background['desktop']['ID'], 'bg' ) ?>
                <?php endif ?>

                <div class="hero-content desktop-<?= $desktop_alignment['horizontal'] ?> desktop-<?= $desktop_alignment['vertical'] ?> mobile-<?= $mobile_alignment['horizontal'] ?> mobile-<?= $mobile_alignment['vertical'] ?>">
                    <div class="wrapper">
                        <h2 class="hero-title"><?= esc_html( $heading ) ?></h2>
                        <?= $intro_text ?>

                        <?php if( !empty( $cta ) ): ?>
                            <a href="<?= $cta['url'] ?>" class="btn btn--primary"><?= $cta['title'] ?></a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
</section>
<?php endif ?>

