<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package starter
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function starter_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'starter_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function starter_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'starter_pingback_header' );

/** RESPONSIVE IMAGE **/
/**  @param: id | image id's **/
/**  @param: class | image classes **/
/**  @return: image tag **/
function responsive_image( $mobile, $desktop, $class ) { ?>
	<?php 
		$alt = get_post_meta( $desktop, '_wp_attachment_image_alt', true) ? get_post_meta( $desktop, '_wp_attachment_image_alt', true) : get_post_meta( $mobile, '_wp_attachment_image_alt', true);
	?>
	<picture>
		<source media="(max-width: 767px)" srcset="<?= wp_get_attachment_image_url( $mobile, 'full' ) ?>" />
		<source media="(min-width: 768px)" srcset="<?= wp_get_attachment_image_url( $desktop, 'full' ) ?>" /> <!-- Fixed here -->
		<img data-src="<?= wp_get_attachment_image_url( $desktop, 'full' ) ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" class="<?= $class ?>" alt="<?= $alt ?>" />
	</picture>
<?php }


/** RESPONSIVE IMAGE **/
/**  @param: id | image id's **/
/**  @param: aspect | 'a16x9 | a1x1 | a4x3' **/
/**  @return: image tag **/
function image( $id, $aspect ) { ?>
	<div class="aspect <?= $aspect ?>">
		<img data-src="<?= wp_get_attachment_image_url( $id, 'full' ) ?>" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="<?= get_post_meta( $id, '_wp_attachment_image_alt', true) ?>">
	</div>
<?php }

/** GET PHONE **/
function get_phone() {
	return get_field('phone_number', 'option') ? '<a href="tel:' . get_field('phone_number', 'option') . '">' . get_field('phone_number', 'option') . '</a>' : null;
}

/** GET EMAIL **/
function get_email() {
	return get_field('email', 'option') ? '<a class="mail" href="mailto:' . get_field('email', 'option') . '">' . get_field('email', 'option') . '</a>' : null;
}

/** GET ADDRESS **/
function get_address() {
	return get_field('address', 'option') ? get_field('address', 'option') : null;
}

/** GET BUSINESS HOURS **/
function get_business_hours() {
    return get_field('business_hours', 'option') ? get_field('business_hours', 'option') : null;
}

/** GET FOOTER LOGO **/
function get_footer_logo() {
	return get_field('footer_logo', 'option') ? '<img class="footer-logo" src="' . get_template_directory_uri() . '/img/placeholder.png" data-src="' . get_field('footer_logo', 'option')['url'] . '" alt="Logo of ' . get_bloginfo('name') . '">' : null;
}


/* GET FOOTER BACKGROUND */
function get_footer_background() {

    $background_id = get_field('footer_background_image', 'option');

    if (empty($background_id)) {
        return '';
    }

    $background_url = wp_get_attachment_image_url($background_id, 'full');

    return 'style="background-image: url(' . esc_url($background_url) . '); background-repeat: no-repeat;
    background-size: cover;"';
}

/** GET HEADER LOGO **/
function get_header_logo() {
	return get_field('site_logo', 'option') ? '<a href="/home" ><img src="' . get_template_directory_uri() . '/img/placeholder.png" data-src="' . get_field('site_logo', 'option')['url'] . '" alt="Logo of ' . get_bloginfo('name') . '"></a>' : the_custom_logo();
}

/** GET NEWS TAB TEXT **/
function get_news_tab_text() {
    return get_field('news_tab_text', 'option') ? get_field('news_tab_text', 'option') : 'Default News Text';
}

/** GET HEADER BUTTON **/
function get_challenge_button() {
    $link = get_field('challenge_button', 'option');
    if ($link) {
        return $link;
    }
    return [
        'url' => '#',
        'title' => 'Default Button Text'
    ];
}

/** GET FIXIBLE DROPDOWN **/
function get_dropdown_menu() {
    if (have_rows('dropdown_menu', 'option')) {
        $menu_items = [];
        while (have_rows('dropdown_menu', 'option')): the_row();
            $link = get_sub_field('menu_item');
            $menu_items[] = [
                'text' => $link['title'],
                'link' => $link['url']
            ];
        endwhile;
        return $menu_items;
    }
    return [];
}

/** GET LINKS **/
function get__link($platform) {
    $field_name = $platform . '_link';
    $link = get_field($field_name, 'option');
    return $link ? $link : '#';
}

/** GET TOP FOOTER TITLE **/
function get_top_footer_title() {
    $title = get_field('top_footer_title', 'option');
    return $title ? $title : 'Default Top Footer Title';
}

/** GET TOP FOOTER DESCRIPTION **/
function get_top_footer_description() {
    $desc = get_field('top_footer_description', 'option');
    return $desc ? $desc : 'Default Top Footer Description';
}

/** GET DISCLAIMER TEXT **/
function get_disclaimer_text() {
    $disclaimer_texts = get_field('disclaimer_texts', 'option');
    $output = '';
    
    if ($disclaimer_texts) {
        foreach ($disclaimer_texts as $text) {
            $output .= '<p class="mb-1" style="margin-bottom: 0 !important;">' . $text['single_text'] . '</p>';
        }
    } else {
        $output = '<p class="mb-1">Default Disclaimer Text</p>';
    }

    return $output;
}

// WRAP WYSIWYG Editor TEXT
function wrap_WYSIWYG_text($text, $color_class) {
    return '<span class="' . $color_class . '">' . $text . '</span>';
}
