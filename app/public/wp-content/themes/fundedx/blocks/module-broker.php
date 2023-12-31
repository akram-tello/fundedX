<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $title = get_field('title');
    $sub_title = get_field('sub_title');
    $google_play_link = get_field('google_play_link');
    $app_store_link = get_field('app_store_link');
    $windows_store_link = get_field('windows_store_link');
    $background     = get_field('background');
?>

<section class="module module--broker <?= $className ?>">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
        <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif ?>    
    <div class="page-header align-middle">
        <div class="wrapper mt-0">
            <div class="module--broker-content flex items-center justify-end">
                <div class="module-broker-title">
                    <h2><?= $heading ?></h2>
                    <img data-src="<?= get_template_directory_uri(); ?>/img/think-markets.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                    <p><?= $title ?></p>
                    <p class="small"><?= $sub_title ?></p>
                </div>

                <div class="bracket-center">
                    <?= get_template_part('img/bracket.svg'); ?>
                </div>

                <div class="partner-logo">
                    <!-- <a href="<?= $google_play_link ?>" target="_blank" style="curser: none" > -->
                    <a style="curser: none" >
                        <img data-src="<?= get_template_directory_uri(); ?>/img/google-play.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                    </a>
                    <a  style="curser: none" >
                        <img data-src="<?= get_template_directory_uri(); ?>/img/app-store.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                    </a>
                    <a  style="curser: none" >
                        <img data-src="<?= get_template_directory_uri(); ?>/img/windows-store.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</section>
