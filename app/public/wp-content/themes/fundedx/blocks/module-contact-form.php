<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading   = get_field('heading');
    $code      = get_field('shortcode');
    $sub_text  = get_field('sub_text');
    $background = get_field('background');
?>

<section class="module module--contact-form <?= $className ?>" <?php if( !empty( $background ) ): ?>style="background-image: url('<?= $background['url']; ?>');  background-size: cover; background-position: top;"<?php endif; ?> >

    <div class="wrapper grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">

        <div class="form">
            <h2 class="module--title"><?= $heading ?></h2>
            <?php if( !empty($sub_text) ): ?>
                <p class="sub-text"><?= $sub_text ?></p>
            <?php endif; ?>
            <?= do_shortcode( $code ) ?>
        </div>
        
        <div class="card">
            <p><?= get_phone(); ?></p>
            <p><?= get_email(); ?></p>
            <p><?= get_address(); ?></p>
        </div>

    </div>
</section>
