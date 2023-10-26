<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    
	<?php wp_head(); ?>

</head>

<style>
.custom-tooltip {
    min-width: max-content; 
    top: 3.2em; 
    left: -1em;
}
</style>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary">
    <?php esc_html_e('Skip to content', 'starter'); ?>
</a>

<!-- Main Container -->
<div id="page" class="site">

    <!-- News Tab -->
    <div id="news-tab" class="news-tab">
        <a href="<?php echo get_site_url(); ?>#take-the-challenge"><p><?= get_news_tab_text(); ?></p></a>
    </div>

    <?php
    if ( ! is_checkout() ) :  // Check if it's not the checkout page
    ?>
    <!-- Header Section -->
    <header id="masthead" class="site-header">
        
        <!-- Navigation Bar -->
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                
                <!-- Logo Section -->
                <div class="header-logo">
                    <?= get_header_logo(); ?>
                </div>

                <!-- Right Header Section -->
                <div class="hidden relative md:flex items-center lg:order-2">

                    <!-- Dropdown Menu -->
                    <div class="group inline-block relative mr-4" id="profile-container">
                        <img 
                            data-src="<?php echo get_template_directory_uri(); ?>/img/user - Login.png" 
                            src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" 
                            alt="avatar" 
                            class="object-cover rounded-full" 
                            id="profile-image" 
                            width="30" 
                            height="30">
                        <div class="absolute hidden text-gray-700 z-10 custom-tooltip" id="tooltip">
                            <div class="py-1 px-3 text-sm bg-white rounded shadow-lg tooltip-inner">
                                <?php 
                                $menu_items = get_dropdown_menu();
                                foreach ($menu_items as $item) :
                                ?>
                                    <a href="<?php echo esc_url($item['link']); ?>" class="block hover:bg-gray-700">
                                        <?php echo esc_html($item['text']); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->    
                    <?php $challenge_button = get_challenge_button(); ?>
                    <a href="<?php echo get_site_url(); ?>#take-the-challenge" class="flex items-center font-medium text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 main-btn">
                        <?= esc_html($challenge_button['title']); ?>
                         <!-- Arrow Icon -->
                         <svg class="ml-2 w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.074 11.073" fill="currentColor" aria-hidden="true">
                            <path id="Subtraction_11" data-name="Subtraction 11" d="M14600.635,9646.873h0l-1.5-1.5,7.624-7.624h-5.5l1.95-1.95h7v7l-1.95,1.955v-5.5l-7.619,7.619Z" transform="translate(-14599.131 -9635.8)" fill="#fff"/>
                        </svg>
                    </a>

                </div>

                <!-- Mobile Menu Icon -->
                <span class="mobile-menu js-mobile-open"></span>

                <!-- Desktop Navigation Menu -->
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">             
                    
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                        ?>
                    </nav>
                </div>

            </div>
        </nav>
    </header>

    <?php
    endif; // End if it's not the checkout page
    ?>
    
    <!-- Mobile Navigation Menu -->
    <div class="mobile-navigation">
        <span class="js-mobile-close"></span>
        <div class="flex justify-between items-center mx-auto max-w-screen-xl">
            <div class="header-logo header-logo-mobile">
                <?= get_header_logo(); ?>
            </div>
        </div>

        <!-- 2 btns in one row -->
        <div class="flex" style="margin-top: 2rem; border-bottom: 0.1px solid #CACACA; padding-bottom: 1rem;">
            <a href="https://www.lifestyledaytrading.com/home" class="flex items-center text-white font-medium text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 " style="width: 50%; justify-content: center;    background: #858585; justify-content: center; font-weight: 400;">
               <img 
                data-src="<?php echo get_template_directory_uri(); ?>/img/user-white-icon.png" 
                src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" 
                alt="avatar" 
                class="object-cover rounded-full" 
                id="profile-image" 
                width="20"
                style="margin-right: 10px;" 
                height="20">
                SIGN IN 
            </a>

            <a href="https://www.lifestyledaytrading.com/home" class="flex items-center text-white font-medium text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2" style="width: 50%; justify-content: center;font-weight: 400;color: #141414; background: #fff; border: 0.1px solid #707070;">
               <img 
                data-src="<?php echo get_template_directory_uri(); ?>/img/user - Login.png" 
                src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" 
                alt="avatar" 
                class="object-cover rounded-full" 
                id="profile-image" 
                width="20"
                style="margin-right: 10px;" 
                height="20">
                SIGN UP
            </a>
        </div>

        <div style="text-align: center; margin-block: 1rem;padding-bottom: 0.5rem; border-bottom: 0.1px solid #CACACA;">
            <h2 style="color: #858585; font-size: 24px; line-height: 1.4; font-weight: 500;">MENU</h2>
        </div>

        <ul class="custom-list list-inside list-decimal" style="padding-bottom: 20px; border-bottom: 0.1px solid #CACACA;">
            <li class="flex items-start mb-2 mt-5">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/home-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon mr-4" style="width: 30px; margin-left: 3rem;">
                    <div>
                    <a href="<?php echo get_site_url(); ?>/EVALUATION" >
                        <h3 class="text-white" style="font-size: 16px; font-weight: 500; color:#141414;">HOME</h3>
                    </a>
                </div> 
            </li>
            <li class="flex items-start mb-2 mt-5"> 
                    <img data-src="<?= get_template_directory_uri(); ?>/img/evaluation-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon mr-4" style="width: 30px; margin-left: 3rem;">
                <div>
                    <a href="<?php echo get_site_url(); ?>/EVALUATION" >
                        <h3 class="text-white" style="font-size: 16px; font-weight: 500; color:#141414;">EVALUATION</h3>
                    </a>
                </div> 
            </li>
            <li class="flex items-start mb-2 mt-5">
                <img data-src="<?= get_template_directory_uri(); ?>/img/faqs-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon mr-4" style="width: 30px; margin-left: 3rem;">
                <div>
                    <a href="<?php echo get_site_url(); ?>/faqs" >
                        <h3 class="text-white" style="font-size: 16px; font-weight: 500; color:#141414;">FAQS</h3>
                    </a>
                </div> 
            </li>
            <li class="flex items-start mb-2 mt-5">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/about-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon mr-4" style="width: 30px; margin-left: 3rem;">
                    <div>
                    <a href="<?php echo get_site_url(); ?>/about-us" >
                        <h3 class="text-white" style="font-size: 16px; font-weight: 500; color:#141414;">ABOUT US</h3>
                    </a>
                </div> 
            </li>
            <li class="flex items-start mb-2 mt-5">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/contact-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon mr-4" style="width: 30px; margin-left: 3rem;">
                    <div>
                    <a href="<?php echo get_site_url(); ?>/contact" >
                        <h3 class="text-white" style="font-size: 16px; font-weight: 500; color:#141414;">CONTACT</h3>
                    </a>
                </div> 
            </li>
        </ul>

        <p class="text-center" style="    padding-top: 3rem;
    font-size: 18px;
    line-height: 18px;
    letter-spacing: 0.4px;">Follow us at <b>@fundedX</b> and tag us to be featured on our socials and newsletter.</p>

        <div class="flex space-x-8" style="justify-content: center">
                <!-- <a href="<?php echo get__link('facebook'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33.891" height="33.893" viewBox="0 0 33.891 33.893">
                        <path id="Facebook_Hover_" data-name="Facebook [Hover]" d="M16.445,32.893A16.446,16.446,0,0,1,4.816,4.818,16.446,16.446,0,1,1,28.073,28.076,16.335,16.335,0,0,1,16.445,32.893ZM13.2,17.091V27.842h4.446V17.091h2.934l.389-3.776H17.644V11.093a.909.909,0,0,1,.944-1.029h2.388V6.394L17.684,6.38A4.171,4.171,0,0,0,13.2,10.867v2.444H11.083v3.78Z" transform="translate(0.5 0.5)" fill="#141414" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                    </svg>
                </a> -->
                <a href="<?php echo get__link('discord'); ?>">
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
</div>


<script>

let timeout;

const profileContainer = document.getElementById('profile-container');
const tooltip = document.getElementById('tooltip');
const profileImage = document.getElementById('profile-image');

profileContainer.addEventListener('mouseenter', () => {
  clearTimeout(timeout);
  tooltip.classList.remove('hidden');
    profileImage.classList.add('opacity-50');
});

profileContainer.addEventListener('mouseleave', () => {
  timeout = setTimeout(() => {
    tooltip.classList.add('hidden');
    profileImage.classList.remove('opacity-50');
  }, 300);
});

tooltip.addEventListener('mouseenter', () => {
  clearTimeout(timeout);
});

tooltip.addEventListener('mouseleave', () => {
  timeout = setTimeout(() => {
    tooltip.classList.add('hidden');
    profileImage.classList.remove('opacity-50');
  }, 300);
});

const header = document.querySelector('#page');

const sticky = header.offsetTop;

window.addEventListener('scroll', () => {
  if (window.pageYOffset > sticky) {
    header.classList.add('sticky-header');
  } else {
    header.classList.remove('sticky-header');
  }
});

</script>