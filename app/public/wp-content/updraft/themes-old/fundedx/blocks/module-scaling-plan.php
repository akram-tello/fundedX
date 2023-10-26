<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('content');
    $text_1 = get_field('text_1');
    $text_2 = get_field('text_2');
    $text_3 = get_field('text_3');
?>

<section class="module module--scale py-80px <?= $className ?>" style="background-image: url('<?= get_template_directory_uri() . '/img/scale-bg.png' ?>'); background-size: cover; background-position: top;">
    <div class="wrapper">
        <div class="module-title-holder text-center">
            <h2 class="module--title text-white"><?= $heading ?></h2>
            <p class="max-w-2xl m-auto mt-3 text-white text-content"><?= $content ?></p>
        </div>

        <div class="module--scale-block"> 
            <img  data-src="<?= get_template_directory_uri() ?>/img/scale.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="scale" >  
            <div class="lg:grid grid-cols-3 text-center" style="max-width: 900px; margin: auto;">
                <div class="module--scale-block-1" style="margin-right: 3rem; margin-top: -17rem;">
                    <?= wrap_WYSIWYG_text($text_1, 'text-white') ?>
                </div>
                <div class="module--scale-block-2" style="margin-right: 3rem; margin-top: -3rem;">
                    <?= wrap_WYSIWYG_text($text_2, 'text-white') ?>
                </div>
                <div class="module--scale-block-3" style="margin-top: -25rem; margin-right: 6rem;">
                    <?= wrap_WYSIWYG_text($text_3, 'text-white') ?>
                </div>

            </div>
        </div>

        <div class="module-scale">
        <ul class="custom-list list-inside list-decimal">
            <li class="flex items-start mb-2 mt-5">
                <img data-src="<?= get_template_directory_uri(); ?>/img/social-icon.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                <?= wrap_WYSIWYG_text($text_1, 'text-white') ?> 
            </li>
            <li class="flex items-start mb-2 mt-5">
                <img data-src="<?= get_template_directory_uri(); ?>/img/pie-icon.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                <?= wrap_WYSIWYG_text($text_2, 'text-white') ?> 
            </li>
            <li class="flex items-start mb-2 mt-5">
                <img data-src="<?= get_template_directory_uri(); ?>/img/bar-icon.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                <?= wrap_WYSIWYG_text($text_3, 'text-white') ?> 
            </li>
        </ul>
        </div>

    </div>
</section>