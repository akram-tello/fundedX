<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading        = get_field('heading');
    $content        = get_field('intro_text');
    $cta            = get_field('cta');
    $background     = get_field('background');
    $alignment      = get_field('alignment');
?>


<section class="module module--page-header <?= $className ?>">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
        <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif ?>
    <div class="page-header align-<?= $alignment['vertical'] ?>">
        <div class="wrapper align-<?= $alignment['horizontal'] ?>">
            <div class="module-page-content mw-511 text-light">
                <h1 class="module--title"><?= $heading ?></h1>
                <?= $content ?>
                <?php if( !empty( $cta ) ): ?>
                    <div class="cta-center">
                        <a href="<?= $cta['url'] ?>" class="btn btn--light mt-30px"><?= $cta['title'] ?> <?= get_template_part('img/arrow-up.svg'); ?></a>
                    </div>
                    <?php endif ?>
                <img id="image-phone" data-src="<?= get_template_directory_uri(); ?>/img/phone.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="" style="height: 22rem; margin: auto; margin-top: 1rem">
            </div>

            <?php if(is_page('home')) : ?>

            <div class="stats-holder flex space-x-4 md:space-x-0 md:flex-wrap mt-80px">
                <?php if( have_rows('stats') ): ?>
                    <?php while( have_rows('stats') ): the_row(); ?>
                        <div class="stats-list text-light mr-0 md:mr-40px">
                            <p><?php the_sub_field('title'); ?></p>
                            <h3><?php the_sub_field('number'); ?></h3>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php endif; ?>

        </div>
    </div>
</section>



<script>
const mediaQuery = window.matchMedia('(max-width: 639px)');

const toggleVisibility = (e) => {
    const imagePhone = document.getElementById('image-phone');
    const stats = document.getElementById('stats');

    if (e.matches) {
        if (imagePhone) imagePhone.style.display = 'block';
        if (stats) stats.style.display = 'block';
    } else {
        if (imagePhone) imagePhone.style.display = 'none';
        if (stats) stats.style.display = 'none';
    }
};

toggleVisibility(mediaQuery);

mediaQuery.addListener(toggleVisibility);

</script>

