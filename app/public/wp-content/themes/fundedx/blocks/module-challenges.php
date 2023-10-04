<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $content = get_field('content');
?>

<section class="module module--challenges py-80px <?= $className ?>" style="margin-bottom: 12rem">
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
</section>
