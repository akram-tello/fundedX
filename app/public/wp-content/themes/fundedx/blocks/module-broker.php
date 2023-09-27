<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $title = get_field('title');
    $sub_title = get_field('sub_title');
    $google_play_link = get_field('google_play_link');
    $app_store_link = get_field('app_store_link');
    $windows_store_link = get_field('windows_store_link');
    $broker_background_image = get_field('broker_background_image');
?>

<section class="module module--broker <?= $className ?>">
    <img data-src="<?= $broker_background_image['url']; ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= $broker_background_image['alt']; ?>">
    
    <div class="page-header align-middle">
        <div class="wrapper">
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
                    <a href="<?= $google_play_link ?>" target="_blank">
                        <img data-src="<?= get_template_directory_uri(); ?>/img/google-play.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                    </a>
                    <a href="<?= $app_store_link ?>" target="_blank">
                        <img data-src="<?= get_template_directory_uri(); ?>/img/app-store.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                    </a>
                    <a href="<?= $windows_store_link ?>" target="_blank">
                        <img data-src="<?= get_template_directory_uri(); ?>/img/windows-store.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</section>
