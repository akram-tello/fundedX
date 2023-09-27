<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading   = get_field('heading');
?>


<section class="module module--faq <?= $className ?>">
    <div class="wrapper">
        <h2 class="module--title"><?= $heading ?></h2>
        
        <div class="faq-list">
            <?php while( have_rows('faqs') ): the_row(); ?>
                <?php 
                    $question = get_sub_field('question');
                    $answer   = get_sub_field('answer');
                ?>
                <div class="faq-list__item">
                    <h3 class="faq-question"><?= $question ?></h3>
                    <div class="faq-answer"><?= $answer ?></div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
</section>

