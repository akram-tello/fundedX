<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('content');
    $cta = get_field('cta');
    $table_labels = get_field('table_labels');
    $table_prices = get_field('table_prices');
    $table_rows = get_field('table_rows');
?>
<?php if(is_page('home')) : ?>

<section class="module module--challenges py-80px <?= $className ?>" id="take-the-challenge">
    <div class="wrapper">
        <div class="module-title-holder text-center">
            <h2 class="module--title"><?= $heading ?></h2>
            <p><?= $content ?></p>
        </div>

        <div class="card--carousel mt-40px">
            <?php if( have_rows('cards') ): // Outer loop for Cards ?>
                <?php while( have_rows('cards') ): the_row(); ?>

                    <div class="card-holder">
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

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        

    </div>
        
        <div class="wrapper" style="margin-top: 5rem">
            <div class="module-title-holder text-center mw-511 m-auto module-challenge-text">
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


    <section class="module module--challenges py-80px <?= $className ?>">

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
                    <th><div class="bg-gray-table table-label">$500</div></th>
                    <th><div class="bg-black-table table-label">$1M+</div></th>
                </tr>

                <!-- Prices Row -->
                <tr>
                    <th>PRICE</th>
                    <?php
                    if ($table_prices):
                        foreach ($table_prices as $price):
                    ?>
                        <td class="text-center"><?php echo $price['col_price']; ?></td>
                    <?php
                        endforeach;
                    endif;
                    ?>
                    <td rowspan="50" class="bg-gray-table text-center vertical-align-middle"><span class="text-center">For Access to $500,000 <a href="#" style="color: #fff; text-decoration: underline;">Contact Us</a></span></td>
                    <td rowspan="50" class="bg-black-table text-center vertical-align-middle"><span class="text-center">For Access to $1,000,000 <a href="#" style="color: #fff; text-decoration: underline;">Contact Us</a></span></td>
                </tr>

                <!-- Table Rows Content -->
                <?php if ($table_rows):
                    foreach ($table_rows as $row):?>
                    <tr>
                        <th style="font-size: 14px; font-weight: 400;"><?php echo $row['row_name']; ?></th>
                        <?php
                        if ($row['col_values']):
                        foreach ($row['col_values'] as $col):
                        ?>
                        <td class="table-content"><?php echo $col['col_value']; ?></td>
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

    <div class="wrapper">
        
        <div class="module-title-holder text-center mw-511 m-auto module-challenge-text">
            <p>FundedX Traders Challenge allows participants in both Stage 1 and Stage 2 to complete their trading without any time constraints.</p>
        </div>

        <div id="slider-container"  style="margin-top: 6rem">
            <input type="range" min="0" max="100" value="0" id="slider-table" class="w-full" />
            <div id="slider-tooltip-table"></div>
        </div>

        <div class="btn-holder text-center mt-40px">
            <a href="<?= $cta['url'] ?>" class="btn btn--primary"><?= $cta['title'] ?> <?= get_template_part('img/arrow-up.svg'); ?></a>
        </div>

    </div>

<?php endif; ?>

<script type="text/javascript">
  const labels = <?php echo json_encode($table_labels); ?>;

  document.addEventListener("DOMContentLoaded", function() {
    const slider = document.getElementById("slider-table");
    const tooltip = document.getElementById("slider-tooltip-table");

    slider.max = labels.length - 1;

    slider.addEventListener("input", function() {
      const index = parseInt(this.value, 10);
      tooltip.innerHTML = `${labels[index].col_label}`;

      // Log to console
      console.log(`Selected Label: ${labels[index]}, Selected Price: ${prices[index]}`);
    });
  });
</script>