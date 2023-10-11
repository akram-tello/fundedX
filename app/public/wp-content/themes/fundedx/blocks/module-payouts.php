<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading             = get_field('heading');
    $intro_text          = get_field('intro_text');
    $white_text          = get_field('white_text_color_toggle');
    $cta                 = get_field('cta');

?>

<section class="module module--payouts py-80px <?= $className ?>">
    <div class="wrapper lg:grid grid-cols-2">
        <div class="mw-511">
            <h2><?= esc_html( $heading ) ?></h2>
            <?= wrap_WYSIWYG_text($intro_text, $white_text ? 'text-white' : 'mw-511 cta-intro-text block') ?>
            <div class="cta-intro-text" style= "display: flex; justify-content: flex-start; justify-items: self-end; margin-top: 1rem">
                <img data-src="<?= get_template_directory_uri(); ?>/img/payoneer.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="" width="70" height="70" style="margin-right: 10px; filter: opacity(0.3);" class=" size-full"/>
                <img data-src="<?= get_template_directory_uri(); ?>/img/deel.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Group-2" width="70" height="70" style="margin-right: 10px; filter: opacity(0.3);" class=" size-full" />
                <img data-src="<?= get_template_directory_uri(); ?>/img/wise.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Group-3" width="70" height="70" style="margin-right: 10px; filter: opacity(0.3);" class=" size-full"/>
                <img data-src="<?= get_template_directory_uri(); ?>/img/revolut.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Group-4" width="70" height="70" style="margin-right: 10px; filter: opacity(0.3);" class=" size-full" />
            </div>

            <div class="lg:hidden">
                <img data-src="<?= get_template_directory_uri(); ?>/img/payouts.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Group-4" width="100%" height="100%" style="margin-top: 1rem; margin-left: 2.5rem;" class=" size-full" />
            </div>

            <?php if( !empty( $cta ) ): ?>
                <div class="payout-btn">
                    <a href="<?php echo get_site_url(); ?>#take-the-challenge" class="mt-40px btn btn--primary"> <?= $cta['title'] ?>
                        <?= get_template_part('img/arrow-up.svg'); ?>
                </a>
                </div>
            <?php endif ?>

        </div>

        <div class="lg:block hidden">
            <img data-src="<?= get_template_directory_uri(); ?>/img/payouts.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Group-4" width="100%" height="100%" style="margin-right: 0px; top: 0px; position: absolute; width: 45%; right: 0px;" class=" size-full" />
        </div>
        
        
    </div>
</section>
