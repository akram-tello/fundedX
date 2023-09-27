<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $articleTitle = get_field('article_title');
    $additionalTextPosition = get_field('additional_text_position');
    $background   = get_field('background');
?>

<section class="module module--article <?= $className ?>">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
    <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif ?>
    <div class="wrapper article-card">
        <h2 class="module--title"><?= $articleTitle ?></h2>
        
        <?php if( $additionalTextPosition === 'Before' ): ?>
            <?php include_additional_texts(get_field('additional_texts'), $additionalTextPosition); ?>
        <?php endif; ?>

        <ol class="article-list">
            <?php while( have_rows('repeated_text_field') ): the_row(); ?>
                <?php 
                    $list = get_sub_field('list');
                ?>
                <li class="article-list__item">
                    <span class="article-text">
                        <?= $list ?>
                    </span>
                </li>
            <?php endwhile; ?>
        </ol>

        <?php if( $additionalTextPosition === 'After' ): ?>
            <?php include_additional_texts(get_field('additional_texts'), $additionalTextPosition); ?>
        <?php endif; ?>

    </div>
</section>

<?php 

function include_additional_texts($additional_texts, $position) {
    $paddingClass = $position === 'After' ? 'additional-text-after' : 'additional-text-before';
    foreach( $additional_texts as $additionalTextArray ) {
        $additionalText = $additionalTextArray['text'];
        if( !empty($additionalText) ): ?>
            <p class="additional-text <?= $paddingClass ?>"><?= esc_html($additionalText) ?></p>
        <?php endif;
    }
}

?>