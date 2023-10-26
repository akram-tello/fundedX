<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading        = get_field('heading');
    $subheading     = get_field('sub_heading');
    $trustpilot_link = get_field('trustpilot_link');
?>

<section class="module module--video-carousel py-80px" style="background-image: url('<?= get_template_directory_uri() . '/img/feedback-BG.png' ?>'); background-size: cover; background-position: top;">
    <div class="wrapper">
        <div class="module-title-holder text-center">
            <h2 class="module--title">Our FundedX Traders Success Is Our Success.</h2>
            <p class="mt-3">Here is what our FundedX traders have to say.</p>
        </div>

        <div class="card--carousel mt-40px">
            <?php 

            if(have_rows('video_carousel')): 


                while(have_rows('video_carousel')): the_row(); 
                    $youtube_id = get_sub_field('youtube_video_id');
            ?>
                <div class="card-holder">
                    <div class="card-video">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo esc_attr($youtube_id); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            <?php 
                endwhile;
            endif; 
            ?>
        </div>

    </div>

    <div class="module module--testimonial client-feedback-area d-md-flex align-items-center justify-content-between <?= $className ?>">
      <!-- Client Feedback Heading-->
      <div class="client-feedback-heading">
        <div class="section-heading mb-0 text-end">
          <h2 class="text-center"><?= $heading ?></h2>
          <img class="trustpilot-stars m-auto" data-src="<?= get_template_directory_uri(); ?>/img/trustpilot-starts.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="" style="width: 200%">
          <h6 class="text-center mt-3">Based on <span style="font-weight: 500; cursor: pointer; text-decoration: underline;"><a href="<?= $trustpilot_link['url'] ?>" target="_blank" ><?= $subheading ?> reviews</span></a> </h6>
          <img class="m-auto" data-src="<?= get_template_directory_uri(); ?>/img/Trustpilot_logo.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="" style="width: 50%">
          <div class="testimonial-arrows text-left mt-4" style="margin-top: 2rem">
            <button id="prev-arrow" class="arrow-button mx-2"></button>
            <button id="next-arrow" class="arrow-button mx-2"></button>
        </div>
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
    </div>

</section>


<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', () => {
    const sectionElement = document.querySelector('.module--testimonial');
    const testimonialSlider = $('.client-feedback-slides');
    const prevArrow = document.getElementById('prev-arrow');
    const nextArrow = document.getElementById('next-arrow');

    prevArrow.addEventListener('click', () => {
    testimonialSlider.trigger('prev.owl.carousel');
    });

    nextArrow.addEventListener('click', () => {
      testimonialSlider.trigger('next.owl.carousel');
    });

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