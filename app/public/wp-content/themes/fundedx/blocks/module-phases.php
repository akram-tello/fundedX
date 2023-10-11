<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    
    $phase1_heading = get_field('phase1_heading');
    $phase2_heading = get_field('phase2_heading');
    $phase3_heading = get_field('phase3_heading');

    $phase1_list_title = get_field('phase1_list_title');
    $phase1_list_text = get_field('phase2_list_text');
    $phase2_list_title = get_field('phase2_list_title');
    $phase2_list_text = get_field('phase2_list_text');

    $common_list_title = get_field('common_list_title');
    $common_list_text = get_field('common_list_text');

?>

<section class="module module--phases pt-20 nav-phase <?= $className ?>" style="padding-bottom: 5rem;">
    <div class="mx-auto px-4" style="max-width:900px">
    <div class="wrapper module-title-holder text-center">
    <div class="grid grid-cols-3 text-xs sm:text-sm md:text-base lg:text-lg" style="margin-bottom: 3rem">
        <div style="text-align: start; display: grid;"> 
            <p style="font-size: 16px; margin-bottom: 10px;">Phase 1:</p>
            <p class="phase-heading"><?= $phase1_heading ?></p>
        </div>
        <div style="text-align: center; display: grid;"> 
        <p style="font-size: 16px; margin-bottom: 10px;">Phase 2:</p>
            <p class="phase-heading"><?= $phase2_heading ?></p>
        </div>
        <div style="text-align: end; display: grid;"> 
        <p style="font-size: 16px; margin-bottom: 10px;">Phase 3:</p>
            <p class="phase-heading"><?= $phase3_heading ?></p>
        </div>
    </div>
    
    <div id="new-slider-container" class="mt-4 mb-24">
        <div id="new-slider-table" class="w-full relative cursor-pointer" style="height: 10px; background-color: #CACACA;">
            <div id="new-slider-fill" class="progress-bar-fill" style="height: 100%; background-color: #212930;"></div>
            <div class="dot start-dot" id="start-dot"></div>
            <div class="dot middle-dot" id="middle-dot"></div>
            <div class="dot end-dot" id="end-dot"></div>
        </div>
    </div>
</div>


        <div class="phases--box flex md:flex-row flex-col">

            <div class="black-part bg-black text-white flex-1 w-full p-4 relative">

                <span id="phase1">
                    <?php if( have_rows('phase1') ): ?>

                    <?php while( have_rows('phase1') ): the_row(); 

                        $list_title = get_sub_field('list_title');
                        $list_text = get_sub_field('list_text');

                        ?>
                        
                        <div class="flex items-start" style="margin-top: 1rem"> 
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" 
                                src="<?= get_template_directory_uri() ?>/img/placeholder.png" 
                                alt="Icon" 
                                class="list-icon w-8 mr-4" width="30" style="filter: grayscale(1);"> 

                            <div>
                                <h4 class="font-semibold text-white"><?= $list_title ?></h4>
                                <p class="text-sm"><?= $list_text ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <?php endif; ?>
                </span>

                <span id="phase2" style="display: none">
                    <?php if( have_rows('phase2') ): ?>

                    <?php while( have_rows('phase2') ): the_row(); 

                        $list_title = get_sub_field('list_title');
                        $list_text = get_sub_field('list_text');

                        ?>
                        
                        <div class="flex items-start" style="margin-top: 1rem"> 
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" 
                                src="<?= get_template_directory_uri() ?>/img/placeholder.png" 
                                alt="Icon" 
                                class="list-icon w-8 mr-4" width="30" style="filter: grayscale(1);"> 

                            <div>
                                <h4 class="font-semibold text-white"><?= $list_title ?></h4>
                                <p class="text-sm"><?= $list_text ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <?php endif; ?>
                </span>

                <img data-src="<?= get_template_directory_uri(); ?>/img/slash-down.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="phase1" class="slash-img" style=" position: absolute; bottom: -50px; right: 200px; width: 50%;">

            </div>

            <div class="white-part bg-white flex-1 md:w-2/3 w-full p-4">

                <div class="flex items-start mb-4">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/capital-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" width="30"> 
                    <div class="mw-511">
                        <h4 class="font-semibold">5% Drawdown</h4>
                        <p class="text-sm">
                        You will have an allowed max daily loss (drawdown) of 5% of your initial balance from your previous day ending balance or equity (whichever is higher).
                        </p>
                        <ul class="custom-list list-inside list-decimal">
                        <li class="flex items-start mb-2">
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" style="width: 18px; filter: grayscale(1);"> 
                            The permitted daily loss is 5% of the balance or equity from the previous day's ending. This is recalculated at 5:00 pm ET daily.
                        </li>
                        <li class="flex items-start mb-2">
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" style="width: 18px; filter: grayscale(1);"> 
                            For instance, starting with a $100,000 account, the max daily loss is $5,000, unaffected by profits made during the day.
                        </li>

                    </ul>
                    </div>
                </div>

                <div class="flex items-start mb-4">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/capital-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" width="30"> 
                    <div class="mw-511">
                        <h4 class="font-semibold">10% Drawdown</h4>
                        <p class="text-sm">
                        You will have an allowed max overall loss (drawdown) of 10% of the initial account balance you purchased. When calculating drawdown, we include all floating losses and profits.
                        </p>
                        <ul class="custom-list list-inside list-decimal">
                        <li class="flex items-start mb-2">
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" style="width: 18px; filter: grayscale(1);"> 
                            The overall allowed loss is 10% of the initial account balance, including floating losses and profits.
                        </li>
                        <li class="flex items-start mb-2">
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" style="width: 18px; filter: grayscale(1);"> 
                            If you start with a $100,000 account, the max loss is $10,000, meaning equity must never drop below $90,000.
                        </li>

                    </ul>
                    </div>
                </div>

                <div class="get-verified-btn">
                    <a href="<?php echo get_site_url(); ?>#take-the-challenge" class="btn btn--primary text-white rounded" style="padding-block: 10px">GET VERIFIED <?= get_template_part('img/arrow-up.svg'); ?></a>
                </div>

            </div>
        </div>
    </div>
</section>


<script>
 document.addEventListener("DOMContentLoaded", function() {
  const newSlider = document.getElementById("new-slider-table");
  const newFill = document.getElementById("new-slider-fill");
  const dots = Array.from(document.querySelectorAll('.dot'));
  const phase1 = document.getElementById("phase1");
  const phase2 = document.getElementById("phase2");

  let isDragging = false;

  function updateNewSlider(event) {
    const rect = newSlider.getBoundingClientRect();
    let x = event.clientX - rect.left;
    x = Math.min(Math.max(0, x), rect.width);

    let fillRatio;

    // Snap to one of the three points
    if (x < rect.width / 3) {
      fillRatio = 1 / 3;
      dots.forEach((dot, index) => {
        dot.style.backgroundColor = index === 0 ? '#212930' : '#cacaca';
      });
        phase1.style.display = "block";
        phase2.style.display = "none";
    } else if (x < 2 * rect.width / 3) {
      fillRatio = 2 / 3;
      dots.forEach((dot, index) => {
        dot.style.backgroundColor = index <= 1 ? '#212930' : '#cacaca';
      });
        phase1.style.display = "none";
        phase2.style.display = "block";
    } else {
      fillRatio = 1;
      dots.forEach(dot => dot.style.backgroundColor = '#212930');
      phase1.style.display = "none";
        phase2.style.display = "block";
    }

    newFill.style.width = `${fillRatio * 100}%`;
  }

  // Set initial fill to 1/3
  function setInitialValue() {
    const rect = newSlider.getBoundingClientRect();
    newFill.style.width = `${(1 / 3) * 100}%`;
    dots[0].style.backgroundColor = '#212930';
    dots.slice(1).forEach(dot => dot.style.backgroundColor = '#cacaca');
  }

  // Call to set initial fill and dot color
  setInitialValue();

  newSlider.addEventListener("mousedown", function(event) {
    isDragging = true;
    updateNewSlider(event);
  });

  window.addEventListener("mousemove", function(event) {
    if (isDragging) {
      updateNewSlider(event);
    }
  });

  window.addEventListener("mouseup", function() {
    isDragging = false;
  });
});

</script>