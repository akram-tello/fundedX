<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $sub_text = get_field('sub_text');
    $background = get_field('background');
    $icon_image = get_field('icon_image');
?>

<section class="module module--banner <?= $className ?>">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
        <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif; ?>
    
    <div class="page-header align-middle">
        <div class="wrapper banner-top">
            <div class="module--banner-content flex items-start lg:col-span-6 lg:w-1/2 lg:py-12 w-full">

                <?php if( !empty( $icon_image ) ): ?>
                    <img style="margin-right: 1rem;" data-src="<?= $icon_image['url']; ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $icon_image['alt']; ?>" width="70" class="banner-icon" >
                <?php endif; ?>

                <div>
                    <h2 class="module--title banner-title"><?= $heading ?></h2>
                    <?php if( !empty( $sub_text ) ): ?>
                    <span class="sub-text-banner banner--web"><?= $sub_text ?></span>
                     <?php endif; ?>
                </div>
                
            </div>
            <?php if( !empty( $sub_text ) ): ?>
                    <span class="sub-text-banner banner--mobile"><?= $sub_text ?></span>
                     <?php endif; ?>

        </div>
    </div>
</section>