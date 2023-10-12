<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading   = get_field('heading');
    $code      = get_field('shortcode');
    $sub_text  = get_field('sub_text');
    $background = get_field('background');
    $text     = get_field('text');
?>

<section class="module module--contact-form <?= $className ?>" <?php if( !empty( $background ) ): ?>style="background-image: url('<?= $background['url']; ?>');  background-size: cover; background-position: top;filter: grayscale(100%);"<?php endif; ?> >

    <div class="wrapper grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">

        <div class="form">
            <h2 class="module--title"><?= $heading ?></h2>
            <?php if( !empty($sub_text) ): ?>
                <p class="sub-text"><?= $sub_text ?></p>
            <?php endif; ?>
            <?= do_shortcode( $code ) ?>
        </div>
        
        <div class="card card-info-width">
        <ul class="custom-list list-inside list-decimal" style="padding-bottom: 20px; border-bottom: 1px solid rgb(139, 163, 191);">
            <li class="flex items-start mb-2 mt-5">
                <img data-src="<?= get_template_directory_uri(); ?>/img/mail-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                <div>
                    <h3 class="text-white" style="font-size: 20px; font-weight: 500; color:#141414; padding-top: 0.5rem;">Email us:</h3>
                    <p> <span><?= get_email(); ?></span> </p>
                </div>
            </li>
            <li class="flex items-start mb-2 mt-5">
                <img data-src="<?= get_template_directory_uri(); ?>/img/hours-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                <div>
                    <h3 class="text-white" style="font-size: 20px; font-weight: 500; color:#141414; padding-top: 0.5rem;">Business Hours:</h3>
                    <p style="max-width: 250px; font-size: 16px; line-height: 20px; letter-spacing: 1px;"> <?= get_business_hours(); ?> </p>
                </div>
            </li>
        </ul>
        
        <p class="mt-8"><?= wrap_WYSIWYG_text(get_field('text'), 'mt-5') ?></p>

        <div class="flex space-x-8 social-links">
                <!-- <a href="<?php echo get__link('facebook'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33.891" height="33.893" viewBox="0 0 33.891 33.893">
                        <path id="Facebook_Hover_" data-name="Facebook [Hover]" d="M16.445,32.893A16.446,16.446,0,0,1,4.816,4.818,16.446,16.446,0,1,1,28.073,28.076,16.335,16.335,0,0,1,16.445,32.893ZM13.2,17.091V27.842h4.446V17.091h2.934l.389-3.776H17.644V11.093a.909.909,0,0,1,.944-1.029h2.388V6.394L17.684,6.38A4.171,4.171,0,0,0,13.2,10.867v2.444H11.083v3.78Z" transform="translate(0.5 0.5)" fill="#141414" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                    </svg>
                </a> -->
                <a href="<?php echo get__link('youtube'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
                        <path id="Social_Media_Small_Dark_Youtube" data-name="Social Media / Small / Dark / Youtube" d="M16.5,33A16.5,16.5,0,0,1,4.833,4.833,16.5,16.5,0,0,1,28.168,28.168,16.393,16.393,0,0,1,16.5,33ZM16.424,8.543a45.2,45.2,0,0,0-8.006.6,2.763,2.763,0,0,0-2.238,2.139,33.067,33.067,0,0,0-.4,5.222,26.96,26.96,0,0,0,.446,5.223,2.817,2.817,0,0,0,2.238,2.138,46.128,46.128,0,0,0,8.008.6,46.144,46.144,0,0,0,8.008-.6,2.763,2.763,0,0,0,2.237-2.138,38.258,38.258,0,0,0,.5-5.223,34.922,34.922,0,0,0-.6-5.222,2.815,2.815,0,0,0-2.238-2.139A44.79,44.79,0,0,0,16.424,8.543ZM13.739,19.982V13.019L19.806,16.5,13.74,19.981Z" transform="translate(0 0)" fill="#141414"/>
                    </svg>
                </a>
                <a href="<?php echo get__link('instagram'); ?>">
                    <svg id="Instagram_Hover_" data-name="Instagram [Hover]" xmlns="http://www.w3.org/2000/svg" width="33.038" height="33.038" viewBox="0 0 33.038 33.038">
                        <path id="Shape" d="M12.7,15.548H2.85A2.854,2.854,0,0,1,0,12.7V2.85A2.854,2.854,0,0,1,2.85,0H12.7a2.854,2.854,0,0,1,2.85,2.85V12.7A2.854,2.854,0,0,1,12.7,15.548ZM7.774,2.655a5.118,5.118,0,1,0,5.118,5.119A5.125,5.125,0,0,0,7.774,2.655Zm5.283-1.363a1.21,1.21,0,1,0,1.21,1.21A1.213,1.213,0,0,0,13.057,1.292Z" transform="translate(8.745 8.79)" fill="#141414"/>
                        <path id="Shape-2" data-name="Shape" d="M2.956,0A2.956,2.956,0,1,0,5.911,2.955,2.959,2.959,0,0,0,2.956,0Z" transform="translate(13.563 13.608)" fill="#fff"/>
                        <path id="Shape-3" data-name="Shape" d="M16.519,33.038A16.519,16.519,0,1,1,33.038,16.519,16.537,16.537,0,0,1,16.519,33.038ZM11.6,6.626A5.019,5.019,0,0,0,6.583,11.64v9.848A5.019,5.019,0,0,0,11.6,26.5h9.846a5.019,5.019,0,0,0,5.013-5.013V11.64a5.019,5.019,0,0,0-5.013-5.013Z" fill="#141414"/>
                    </svg>
                </a>
                <a href="<?php echo get__link('discord'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33.001" height="33.001" viewBox="0 0 33.001 33.001">
                        <path id="Subtraction_15" data-name="Subtraction 15" d="M15462.5,5455.15a16.5,16.5,0,1,1,11.67-4.834A16.39,16.39,0,0,1,15462.5,5455.15Zm-2.95-24a8.927,8.927,0,0,0-4.979,1.849,23.764,23.764,0,0,0-2.567,10.291,6.517,6.517,0,0,0,5.442,2.692c.01-.01.675-.8,1.2-1.461a5.583,5.583,0,0,1-3.123-2.082,13.225,13.225,0,0,0,4.657,1.794,11.341,11.341,0,0,0,2.284.224,13.053,13.053,0,0,0,6.985-2.019s0,0,0,.007a5.774,5.774,0,0,1-3.234,2.09c.306.375.716.873,1.157,1.4l.023.027a6.673,6.673,0,0,0,5.433-2.649l.008-.011.007-.009a23.619,23.619,0,0,0-2.572-10.294,8.881,8.881,0,0,0-4.979-1.85h-.021l-.249.284a11.827,11.827,0,0,1,4.444,2.246,14.8,14.8,0,0,0-7.117-1.784,15.712,15.712,0,0,0-7.272,1.783s0,0,0-.006a12.187,12.187,0,0,1,4.673-2.309l-.179-.214Zm6.055,10.485a1.894,1.894,0,0,1-1.818-1.958,1.824,1.824,0,1,1,3.64,0A1.873,1.873,0,0,1,15465.6,5441.635Zm-6.515,0a1.9,1.9,0,0,1-1.822-1.958,1.826,1.826,0,1,1,3.644,0A1.873,1.873,0,0,1,15459.088,5441.635Z" transform="translate(-15446 -5422.149)" fill="#141414"/>
                    </svg>
                </a>
            </div>

    </div>
</section>
