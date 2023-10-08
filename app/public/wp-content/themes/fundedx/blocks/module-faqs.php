<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $faq_background_image = get_field('faq_background_image');
?>

<?php if(is_page('home')) : ?>

    <section class="module module--faq-homepage py-80px <?= $className ?>" <?php if( !empty( $faq_background_image ) ): ?>style="background-image: url('<?= $faq_background_image['url']; ?>');  background-size: cover; background-position: top;"<?php endif; ?>>
        
        <div class="module-title-holder text-center mb-10">
            <h2 class="module--title faq-title text-white">Frequently Asked Questions</h2>
        </div>

        <div class="wrapper lg:grid grid-cols-2 gap-10 faq-list">
            <?php 
                $faqs = get_field('homepage_faqs'); 
                $total_faqs = count($faqs);
                $faqs_per_col = ceil($total_faqs / 2);
            ?>
            <div>
                <?php for($i = 0; $i < $faqs_per_col; $i++): ?>
                    <div class="faq-list__item">
                        <h3 class="faq-question" style="color:#EAEDEB; font-size: 16px; font-weight: 400;">
                            <?= $faqs[$i]['question'] ?>
                            <img class="faq-icon" data-src="<?= get_template_directory_uri(); ?>/img/faq-arrow.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                        </h3>
                        <div class="faq-answer text-white"><?= $faqs[$i]['answer'] ?></div>
                    </div>
                <?php endfor; ?>
            </div>

            <div>
                <?php for($i = $faqs_per_col; $i < $total_faqs; $i++): ?>
                    <div class="faq-list__item">
                        <h3 class="faq-question" style="color:#EAEDEB; font-size: 16px; font-weight: 400;">
                            <?= $faqs[$i]['question'] ?>
                            <img class="faq-icon" data-src="<?= get_template_directory_uri(); ?>/img/faq-arrow.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
                        </h3>
                        <div class="faq-answer text-white"><?= $faqs[$i]['answer'] ?></div>
                    </div>
                <?php endfor; ?>
            </div>

        </div>

        <div class="text-center m-auto">
            <a href="/faqs" class="btn btn--primary btn-faqs">VIEW ALL FAQS</a>
        </div>

    </section>

<?php else : ?>


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
                            <div class="faq-list__item border-b">
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

<?php endif; ?>