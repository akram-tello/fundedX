<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading        = get_field('heading');
    $subheading     = get_field('sub_heading');
?>

<section class="module module--testimonial client-feedback-area d-md-flex align-items-center justify-content-between <?= $className ?>">
  <!-- Client Feedback Heading-->
  <div class="client-feedback-heading">
    <div class="section-heading mb-0 text-end">
      <h2 class="text-center"><?= $heading ?></h2>
      <img class="trustpilot-stars m-auto" data-src="<?= get_template_directory_uri(); ?>/img/trustpilot-starts.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
      <h6 class="text-center mt-3"><?= $subheading ?></h6>
      <img class="m-auto" data-src="<?= get_template_directory_uri(); ?>/img/trustpilot_logo.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="">
    </div>
  </div>
  <!-- Client Feedback Content-->
  <div class="client-feedback-content" style="padding: 1rem">
    <div class="client-feedback-slides owl-carousel">
      <?php while (have_rows('testimonial')): the_row(); ?>
        <!-- Single Feedback Slide-->
        <div class="card feedback-card p-0">
          <div class="card-body">
          <img class="trustpilot-stars" data-src="<?= get_template_directory_uri(); ?>/img/trustpilot-starts.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="" style="max-width: 50%; padding-bottom: 10px;">
            <small class="quote-text"><?= get_sub_field('quote') ?></small>
            <div class="client-info d-flex align-items-center mt-10">
              <div class="client-name">
                <h6><?= get_sub_field('name') ?></h6>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</section>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', () => {
    const sectionElement = document.querySelector('.module--testimonial');

    const applyFlexStyle = () => {
      if (window.matchMedia('(min-width: 1024px)').matches) {
        sectionElement.style.display = 'flex';
      } else {
        sectionElement.style.display = '';
      }
    };

    // Apply the flex style based on the initial window size
    applyFlexStyle();

    // Update the flex style whenever the window is resized
    window.addEventListener('resize', applyFlexStyle);
  });
</script>