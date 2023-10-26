<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('content');
    $cta = get_field('cta');
    $table_labels = get_field('table_labels');
    $table_prices = get_field('table_prices');
    $table_rows = get_field('table_rows');
?>

<style>
.centered-text {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-65%, -10%);
    z-index: 1000;
    margin-top: 1rem;
    padding-top: 1rem;
    padding-bottom: 6px;
    font-size: 12px;
    font-weight: 500;
    line-height: 1.6;
    z-index: 0;
}

</style>
<?php if(is_page('home')) : ?>

<section class="module module--challenges pt-40-mob py-80px <?= $className ?>" id="take-the-challenge">
    <div class="wrapper">
        <div class="module-title-holder text-center">
            <h2 class="module--title"><?= $heading ?></h2>
            <p><?= $content ?></p>
        </div>

        <div class="card--carousel mt-40px mt-0-mob">
            <?php if( have_rows('cards') ): // Outer loop for Cards ?>
                <?php $counter = 1; // Initialize a counter ?>
                <?php while( have_rows('cards') ): the_row(); ?>

                    <div class="card-holder" data-id="card-<?php echo $counter; ?>">
                        <div class="card-header text-light">
                            <h3><?php the_sub_field('card_title'); ?></h3>
                            <div class="card-price">
                                <p><?php the_sub_field('card_price_label'); ?></p>
                                <h4><?php the_sub_field('card_price_amount'); ?></h4>
                            </div>
                        </div>

                        <div class="card-body">
                            <?php if( have_rows('card_body_list') ): // Nested loop for card_body_list ?>
                                <?php while( have_rows('card_body_list') ): the_row(); ?>
                                    <div class="card-body-list">
                                        <p class="body-title"><?php the_sub_field('body_title'); ?></p>
                                        <p><?php the_sub_field('body_value'); ?></p>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="card-btn text-center">
                            <a href="<?php the_sub_field('buy_now_url'); ?>" class="btn btn--primary w-full">Buy Now</a>
                        </div>
                    </div>
                    <?php $counter ++; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
        
        <div class="wrapper" style="margin-top: 5rem">
            <div class="module-title-holder lg:text-center mw-511 m-auto module-challenge-text">
                <p>FundedX Traders Challenge allows participants in both Stage 1 and Stage 2 to complete their trading without any time constraints.</p>
            </div>
            <span id="tooltip_bar" class="tooltip-bar custom-tooltip-bar"></span>
            <div class="progress-bar" id="slider-progress">
                <div class="progress-bar-fill" id="slider-progress-fill">
                </div>
            </div>

            <div class="btn-holder text-center mt-40px">
            <a href="<?= $cta['url'] ?>" class="btn btn--primary"><?= $cta['title'] ?> <?= get_template_part('img/arrow-up.svg'); ?></a>
            </div>

        </div>

</section>


<?php else : ?>


    <section class="module module--challenges py-40px <?= $className ?>" id="take-the-challenge-table">

        <div class="wrapper">

            <div class="module-title-holder text-center">
                <h2 class="module--title"><?= $heading ?></h2>
                <p><?= $content ?></p>
            </div>

        </div>

        <div class="flex-table-container">
        <div class="table-container">
        <?php if( have_rows('table_rows') ): ?>
            <table>
                <!-- Table Headers -->
                <tr>
                    <th></th>
                    <?php
                    if ($table_labels):
                        foreach ($table_labels as $label):
                    ?>
                        <th><div class="table-label"><?php echo $label['col_label']; ?></div></th>
                    <?php
                        endforeach;
                    endif;
                    ?>
                    <th><div class="bg-black-table table-label">500K</div></th>
                    <th><div class="bg-gray-table  table-label">$1M+</div></th>
                </tr>

                <!-- Prices Row -->
                <tr>
                    <th style="border-bottom: 1px solid #ddd;">PRICE</th>
                    <?php
                    if ($table_prices):
                        foreach ($table_prices as $price):
                    ?>
                        <td class="text-center" style="font-weight: bold; border-bottom: 1px solid #ddd; padding-block: 0.5rem;"><?php echo $price['col_price']; ?></td>
                    <?php
                        endforeach;
                    endif;
                    ?>
                    <td rowspan="50" class="bg-black-table text-center vertical-align-middle"><span class="text-center">For Access to $500,000<br> <br><a href="<?php echo get_site_url(); ?>/contact/" style="color: #fff; text-decoration: underline; font-weight: bold">CONTACT US</a></span></td>
                    <td rowspan="50" class="bg-gray-table text-center vertical-align-middle"><span class="text-center">For Access to $1,000,000 <br><br><a href="<?php echo get_site_url(); ?>/contact/" style="color: #fff; text-decoration: underline; font-weight: bold">CONTACT US</a></span></td>
                </tr>

                <!-- Table Rows Content -->
                <?php if ($table_rows):
                    foreach ($table_rows as $row):?>
                    <tr class="relative" data-row-id="<?php echo $row['row_name']; ?>">
                        <th style="font-size: 14px;font-weight: 600; display: flex;line-height: 2; align-items: center; border-bottom: 1px solid #ddd; padding-block: 0.7rem;">
                            <span class="collapsible-icon" data-id="<?php echo $row['row_name']; ?>">
                            <img data-src="<?php echo get_template_directory_uri(); ?>/img/table-arrow.svg" alt="pie-icon" style="max-width: 16px; margin-right: 10px;" />
                        </span>

                            <?php echo $row['row_name']; ?>
                        </th>
                        <?php
                        if ($row['col_values']):
                            foreach ($row['col_values'] as $col):
                        ?>
                        <td class="table-content"><span><?php echo $col['col_value']; ?></span></td>
                        <?php
                        endforeach;
                        endif;
                        ?>
                    </tr>
                    <?php endforeach;
                endif;?>


            </table>
        <?php endif; ?>
        </div>
        </div> 

    </section>

    <div class="wrapper lg:mt-12">
        
        <div class="module-title-holder lg:text-center mw-511 m-auto module-challenge-text">
            <p>FundedX Traders Challenge allows participants in both Stage 1 and Stage 2 to complete their trading without any time constraints.</p>
        </div>

        <?php if (is_page('evaluation')) : ?>
            <div id="slider-container" style="margin-top: 10rem">

                <div id="slider-table" class="w-full relative cursor-pointer" style="height: 10px; background-color: #CACACA;">
                    <div id="slider-fill" class="progress-bar-fill" style="height: 100%; background-color: #141414;"></div>
                    <div id="slider-thumb" class="absolute" style="width: 20px; height: 20px; background-color: black; top: 50%; transform: translateY(-50%); border-radius: 50%;"></div>
                </div>

                <div id="slider-tooltip-table" class="tooltip-table-bar"></div>

            </div>
            
            <?php else : ?>
                <div id="slider-container" style="margin-top: 6rem">

                    <div id="slider-table" class="w-full relative cursor-pointer" style="height: 10px; background-color: #CACACA;">
                        <div id="slider-fill" class="progress-bar-fill" style="height: 100%; background-color: #141414;"></div>
                        <div id="slider-thumb" class="absolute" style="width: 20px; height: 20px; background-color: black; top: 50%; transform: translateY(-50%); border-radius: 50%;"></div>
                    </div>

                    <div id="slider-tooltip-table" class="tooltip-table-bar"></div>

                </div>
            <?php endif; ?>



        <div class="btn-holder text-center mt-40px">
            <a href="<?php echo get_site_url(); ?>#take-the-challenge" class="btn btn--primary">TAKE THE CHALLENGE<?= get_template_part('img/arrow-up.svg'); ?></a>
        </div>

    </div>

<?php endif; ?>


<script type="text/javascript">
    // if the url evaluation/ only 
    
 document.addEventListener("DOMContentLoaded", function() {
  
  const labels = <?php echo json_encode($table_labels); ?>;
  const slider = document.getElementById('slider-table');
  const tooltip = document.getElementById('slider-tooltip-table');
  const fill = document.getElementById("slider-fill");
  const thumb = document.getElementById("slider-thumb");

  let isDragging = false;

  // Initialize tooltip with the first label
  tooltip.innerHTML = `<p style="font-size: 16px;font-weight: 500;}">Trading Period <br> ${labels[0].col_label}</p>Unlimited Days`;

  function updateSlider(event) {
    const rect = slider.getBoundingClientRect();
    let x = event.clientX - rect.left;
    x = Math.min(Math.max(0, x), rect.width);

    const index = Math.round((x / rect.width) * (labels.length - 1));
    const snappedX = (index / (labels.length - 1)) * rect.width;

    fill.style.width = `${(snappedX / rect.width) * 100}%`;
    thumb.style.left = `${snappedX}px`;

    // Update the position and text of the tooltip
    tooltip.style.left = `${snappedX}px`;
    // only on evalaution page 
    if (window.location.href.indexOf("evaluation") > -1) {
        tooltip.innerHTML = `<p style="font-size: 16px;font-weight: 500;}">Trading Period <br> ${labels[index].col_label}</p>Unlimited Days`;
    }

    // Log to console
    console.log(`Selected Label: ${labels[index].col_label}`);
  }

  slider.addEventListener("mousedown", function(event) {
    isDragging = true;
    updateSlider(event);
  });

  window.addEventListener("mousemove", function(event) {
    if (isDragging) {
      updateSlider(event);
    }
  });

  window.addEventListener("mouseup", function() {
    isDragging = false;
  });

const collapsibleIcons = document.querySelectorAll('.collapsible-icon');

collapsibleIcons.forEach(icon => {
   
  icon.addEventListener('click', function() {
    const rowId = this.getAttribute('data-id');
    const row = document.querySelector(`[data-row-id="${rowId}"]`);
    const existingText = row.querySelector('.centered-text');

    if (existingText) {
      existingText.remove();
      row.style.height = 'auto'; 
    } else {
      
      const centeredText = document.createElement('div');
      centeredText.innerHTML = 'FundedX Traders Challenges allows participants in both Stage 1 and Stage 2 to complete their trading without any time constraints.';
      centeredText.className = 'centered-text mw-511';

      row.appendChild(centeredText);

      row.style.height = 'auto';
      const rowHeight = row.offsetHeight;
      const newRowHeight = rowHeight + 110;
      row.style.height = `${newRowHeight}px`;
    }
  });
});


});

</script>


