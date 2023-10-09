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
        <p><?= get_news_tab_text(); ?></p>
    </div>

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

    <!-- Mobile Navigation Menu -->
    <div class="mobile-navigation">
        <span class="js-mobile-close"></span>
        <nav id="site-navigation" class="mobile-nav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'mobile',
                    'menu_id'        => 'mobile-menu',
                )
            );
            ?>
            
        </nav>
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