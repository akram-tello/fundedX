<?php 
    $className = !empty($block['className']) ? $block['className'] : null;

?>

<style>
    .black-part{
        max-width: 330px;
        border-radius: 10px 0px 0px 10px;
    }

    .white-part{
        border: 10px solid #858585;
        border-radius: 0px 10px 10px 0px;
        border-left: 0px;
    }
    .text-sm{
        font-size: 14px;
    }


</style>
<section class="module module--phases pt-20 <?= $className ?>">
    <div class="mx-auto px-4" style="max-width:900px">
    <div class="wrapper module-title-holder text-center">
    <div class="grid grid-cols-3 text-xs sm:text-sm md:text-base lg:text-lg" style="margin-bottom: 3rem">
        <div style="text-align: start; display: grid;"> 
            <span>phase 1:</span>
            <span>Evaluation</span>
        </div>
        <div style="text-align: center; display: grid;"> 
            <span>phase 2:</span>
            <span>Verification</span>
        </div>
        <div style="text-align: end; display: grid;"> 
            <span>phase 3:</span>
            <span>Challenges</span>
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
            <!-- Black part must be dynamically change between 2 phases -->
            <div class="black-part bg-black text-white flex-1 w-full p-4">
                
                <div class="flex items-start" style="margin-block: 3rem">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" width="30"> 
                    <div>
                        <h4 class="font-semibold text-white">Prove Your Trading Skills</h4>
                        <p class="text-sm">
                        The first stage of the Evaluation Process requires successful completion to move to Stage 2. Showcase your trading acumen and commitment to the Trading Objectives.
                        </p>
                    </div>
                </div>

                <div class="flex items-start" style="margin-block: 3rem">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" width="30"> 
                    <div>
                        <h4 class="font-semibold text-white">Prove Your Trading Skills</h4>
                        <p class="text-sm">
                        Meet the profit target without drawdown violations. FundedX have unlimited time to complete this stage.
                        </p>
                    </div>
                </div>

                <div class="flex items-start" style="margin-block: 3rem">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" width="30"> 
                    <div>
                        <h4 class="font-semibold text-white">Prove Your Trading Skills</h4>
                        <p class="text-sm">
                        A minimum of three trading days is mandatory for success in this phase.
                        </p>
                    </div>
                </div>

            </div>

            <!-- White part this part is common between 2 phases -->
            <div class="white-part bg-white flex-1 md:w-2/3 w-full p-4">

                <div class="flex items-start mb-4">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" width="30"> 
                    <div class="mw-511">
                        <h4 class="font-semibold">5% Drawdown</h4>
                        <p class="text-sm">
                        You will have an allowed max daily loss (drawdown) of 5% of your initial balance from your previous day ending balance or equity (whichever is higher).
                        </p>
                        <ul class="custom-list list-inside list-decimal">
                        <li class="flex items-start mb-2">
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" style="width: 18px;"> 
                            The permitted daily loss is 5% of the balance or equity from the previous day's ending. This is recalculated at 5:00 pm ET daily.
                        </li>
                        <li class="flex items-start mb-2">
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" style="width: 18px;"> 
                            For instance, starting with a $100,000 account, the max daily loss is $5,000, unaffected by profits made during the day.
                        </li>

                    </ul>
                    </div>
                </div>

                <div class="flex items-start mb-4">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" width="30"> 
                    <div class="mw-511">
                        <h4 class="font-semibold">10% Drawdown</h4>
                        <p class="text-sm">
                        You will have an allowed max overall loss (drawdown) of 10% of the initial account balance you purchased. When calculating drawdown, we include all floating losses and profits.
                        </p>
                        <ul class="custom-list list-inside list-decimal">
                        <li class="flex items-start mb-2">
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" style="width: 18px;"> 
                            The overall allowed loss is 10% of the initial account balance, including floating losses and profits.
                        </li>
                        <li class="flex items-start mb-2">
                            <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-8 mr-4" style="width: 18px;"> 
                            If you start with a $100,000 account, the max loss is $10,000, meaning equity must never drop below $90,000.
                        </li>
                        <!-- You can repeat the above li for the remaining items -->
                    </ul>
                    </div>
                </div>

                <div style="text-align: end">
                    <a href="#" class="btn btn--primary text-white rounded" style="padding-block: 10px">Get started!</a>
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
    } else if (x < 2 * rect.width / 3) {
      fillRatio = 2 / 3;
      dots.forEach((dot, index) => {
        dot.style.backgroundColor = index <= 1 ? '#212930' : '#cacaca';
      });
    } else {
      fillRatio = 1;
      dots.forEach(dot => dot.style.backgroundColor = '#212930');
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