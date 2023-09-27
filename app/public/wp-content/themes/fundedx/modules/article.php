<?php 
  $articleTitle = $fields['article_title'];
  $repeatedTextField = $fields['repeated_text_field'];
  $additionalTextPosition = $fields['additional_text_position']; 
  $desktop = isset( $fields['desktop'] ) ? $fields['desktop'] : null;
  $mobile  = isset( $fields['mobile'] ) ? $fields['mobile'] : null;
?>

<section class="module module-article <?= !empty( $attributes['className'] ) ? $attributes['className'] : '' ?>">
  <?php 
    if( $desktop && $mobile ) {
      responsive_image( $mobile, $desktop, 'absolute' );
    }
  ?>
  <div class="wrapper">
    <h2 class="module-title"><?= esc_html( $articleTitle ) ?></h2>

    <?php if( $additionalTextPosition === 'Before' ): ?>
        <?php include_additional_texts($fields['additional_texts'], $additionalTextPosition); ?>
    <?php endif; ?>

    <div class="article-group">
      <?php foreach( $repeatedTextField as $list ): ?>
        <div class="article-group__item">
          <p><?= esc_html( $list['list'] ) ?></p> 
        </div>
      <?php endforeach ?>
    </div>

    <?php if( $additionalTextPosition === 'After' ): ?>
        <?php include_additional_texts($fields['additional_texts'], $additionalTextPosition); ?>
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