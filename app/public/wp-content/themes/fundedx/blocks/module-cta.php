<?php 
    $className = !empty($block['className']) ? $block['className'] : null;

    // Assuming you have set up your ACF fields accordingly
    $background          = get_field('background');
    $heading             = get_field('heading');
    $intro_text          = get_field('intro_text');
    $cta                 = get_field('cta');
    $desktop_alignment   = get_field('desktop_alignment');
    $mobile_alignment    = get_field('mobile_alignment');
    $white_text          = get_field('white_text_color_toggle');
    $cta_gray           = get_field('gray_cta_button');
    $acdemeyX_logo      = get_field('acdemeyX_logo');

?>

<style>
    .cta-into-text{
        font-size:20px;
        font-weight: 500;
    }
</style>
<section class="module module--cta <?= $className ?>">
    <div class="cta-item">
        <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
            <?= responsive_image( $background['mobile']['ID'], $background['desktop']['ID'], 'bg' ) ?>
        <?php endif ?>

        <div class="cta-content desktop-<?= $desktop_alignment['horizontal'] ?> desktop-<?= $desktop_alignment['vertical'] ?> mobile-<?= $mobile_alignment['horizontal'] ?> mobile-<?= $mobile_alignment['vertical'] ?>">
            <div class="wrapper max-w-xl" <?php echo $cta_gray ? 'style="max-width: 38rem !important"' : ''; ?>>
                <h2 class="cta-title <?= $white_text ? 'text-white' : '' ?>"><?= esc_html( $heading ) ?></h2>
                <?php if( !empty( $acdemeyX_logo ) && !empty( $white_text ) ): ?>
                    <img class="m-auto" style="margin-bottom: 1rem" data-src="<?= $acdemeyX_logo['url']; ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $acdemeyX_logo['alt']; ?>" width="400" >
                <?php endif; ?>
                    <?= wrap_WYSIWYG_text($intro_text, $white_text ? 'text-white' : 'mw-511 cta-intro-text block') ?>
                
                    <?php if(is_page('evaluation')) : ?>
                    <div class="cta-intro-text" style= "display: flex; justify-content: flex-start; justify-items: self-end; margin-top: 1rem">
                        <img data-src="<?= get_template_directory_uri(); ?>/img/payoneer.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="" width="70" height="70" style="margin-right: 10px; filter: opacity(0.3);" class=" size-full"/>
                        <img data-src="<?= get_template_directory_uri(); ?>/img/deel.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Group-2" width="70" height="70" style="margin-right: 10px; filter: opacity(0.3);" class=" size-full" />
                        <img data-src="<?= get_template_directory_uri(); ?>/img/wise.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Group-3" width="70" height="70" style="margin-right: 10px; filter: opacity(0.3);" class=" size-full"/>
                        <img data-src="<?= get_template_directory_uri(); ?>/img/revolut.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Group-4" width="70" height="70" style="margin-right: 10px; filter: opacity(0.3);" class=" size-full" />
                    </div>
                    <?php endif; ?>

                <?php if( !empty( $cta ) ): ?>
                    <div>
                        <a href="<?= $cta['url'] ?>" class="mt-40px btn btn--primary" <?php echo $cta_gray ? 'style="background-color: #858585;"' : ''; ?>> <?= $cta['title'] ?>
                        <?php if( !empty( $cta_gray ) || is_page('evaluation') ): ?>
                            <?= get_template_part('img/arrow-up.svg'); ?>
                        <?php endif ?>
                    </a>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
