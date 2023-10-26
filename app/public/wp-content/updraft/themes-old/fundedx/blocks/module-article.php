<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $articleTitle = get_field('article_title');
    $additionalTextPosition = get_field('additional_text_position');
    $background   = get_field('background');
    $content   = get_field('content');
?>

<style>

.module--article .text-article-content p {
    text-align: left !important;
}
    
</style>

<section class="module module--article <?= $className ?>">
    <?php if( !empty( $background['mobile'] ) && !empty( $background['desktop'] ) ): ?>
    <?= responsive_image( $background['mobile'], $background['desktop'], 'bg' )?>
    <?php endif ?>
    <div class="wrapper article-card">
        <h2 class="module--title <?= $additionalTextPosition === 'After' ? 'mb-5' : '' ?>"><?= $articleTitle ?></h2>
        
        <?php if( $additionalTextPosition === 'Before' ): ?>
            <?php include_additional_texts(get_field('additional_texts'), $additionalTextPosition); ?>
        <?php endif; ?>

        <?= wrap_WYSIWYG_text($content,'text-article-content') ?>

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
            <span class="additional-text<?= $paddingClass ?>"><?= wrap_WYSIWYG_text($additionalText,'') ?></span>
        <?php endif;
    }
}

?>