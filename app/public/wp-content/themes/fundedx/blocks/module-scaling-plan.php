<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('content');
?>

<section class="module module--scale py-80px <?= $className ?>" style="background-image: url('<?= get_template_directory_uri() . '/img/scale-BG.png' ?>'); background-size: cover; background-position: top;">
    <div class="wrapper">
        <div class="module-title-holder text-center">
            <h2 class="module--title text-white"><?= $heading ?></h2>
            <p class="max-w-2xl m-auto mt-3 text-white"><?= $content ?></p>
        </div>

        <div>
            <img  data-src="<?= get_template_directory_uri() ?>/img/scale.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="scale" >  
        </div>
    </div>
</section>