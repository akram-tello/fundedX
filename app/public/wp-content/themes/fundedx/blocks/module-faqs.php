<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $faq_background_image = get_field('faq_background_image');
?>

<section class="module module--faq pt-20 <?= $className ?>" <?php if( !empty( $faq_background_image ) ): ?>style="background-image: url('<?= $faq_background_image['url']; ?>');  background-size: cover; background-position: top;"<?php endif; ?>>
    <div class="wrapper">
        <?php if( have_rows('faq_groups') ): ?>
            <?php while( have_rows('faq_groups') ): the_row(); ?>
                <h2 class="module--title faq-title"><?= get_sub_field('group_heading'); ?></h2>
                <div class="faq-list">
                    <?php if( have_rows('faqs') ): ?>
                        <?php while( have_rows('faqs') ): the_row(); ?>
                            <?php 
                                $question = get_sub_field('question');
                                $answer   = get_sub_field('answer');
                            ?>
                            <div class="faq-list__item">
                                <h3 class="faq-question">
                                    <?= $question ?>
                                    <img class="faq-icon" data-src="<?= get_template_directory_uri(); ?>/img/arrow-icon.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                                </h3>
                                <div class="faq-answer"><?= $answer ?></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
