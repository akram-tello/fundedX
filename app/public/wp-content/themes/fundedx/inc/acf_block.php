<?php 

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
        // register a block

        // HERO
        acf_register_block(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom hero block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'images-alt2',
            'keywords'          => array( 'hero', 'banner' ),
        ));

        // TEXT WITH MEDIA
        acf_register_block(array(
            'name'              => 'text-with-media',
            'title'             => __('Text with Media'),
            'description'       => __('A custom text with media block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'embed-photo',
            'keywords'          => array( 'text', 'media', 'text with media' ),
        ));

        // TESTIMONIAL
        acf_register_block(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonials'),
            'description'       => __('A custom testimonials block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'groups',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        // NEWSLETTER
        acf_register_block(array(
            'name'              => 'newsletter',
            'title'             => __('Newsletter'),
            'description'       => __('A custom newsletter block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'email-alt2',
            'keywords'          => array( 'newsletter', 'form', 'subscribe' ),
        ));

        // RTE
        acf_register_block(array(
            'name'              => 'rte',
            'title'             => __('RTE'),
            'description'       => __('A custom RTE block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'media-text',
            'keywords'          => array( 'rte', 'text', 'content' ),
        ));

        // PAGE HEADER
        acf_register_block(array(
            'name'              => 'page-header',
            'title'             => __('Page Header'),
            'description'       => __('A custom Page Header block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'cover-image',
            'keywords'          => array( 'header', 'heading', 'banner' ),
        ));

        // LOGO CAROUSEL
        acf_register_block(array(
            'name'              => 'logos',
            'title'             => __('Logo Carousel'),
            'description'       => __('A custom Logo Carousel block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'images-alt',
            'keywords'          => array( 'logos', 'logo carousel' ),
        ));

        // FAQ
        acf_register_block(array(
            'name'              => 'faqs',
            'title'             => __('FAQ'),
            'description'       => __('A custom FAQs block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'list-view',
            'keywords'          => array( 'question', 'answer', 'faq' ),
        ));

        // CONTACT FORM
        acf_register_block(array(
            'name'              => 'contact-form',
            'title'             => __('Contact Form'),
            'description'       => __('A custom Contact Form block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'forms',
            'keywords'          => array( 'forms', 'contact', 'contact form' ),
        ));

        // HOW IT WORKS
        acf_register_block(array(
            'name'              => 'how-it-works',
            'title'             => __('How it Works'),
            'description'       => __('A custom How it Works block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'list-view',
            'keywords'          => array( 'text', 'image' ),
        ));

        // Challenges
        acf_register_block(array(
            'name'              => 'challenges',
            'title'             => __('Challenges'),
            'description'       => __('A custom Challenges block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'text', 'image', 'gallery', 'challenges' ),
        ));

        // Broker
        acf_register_block(array(
            'name'              => 'broker',
            'title'             => __('Broker'),
            'description'       => __('A custom Broker block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'admin-home',
            'keywords'          => array( 'text', 'image', 'gallery', 'broker' ),
        ));

        // Video Carousel
        acf_register_block(array(
            'name'              => 'video-carousel',
            'title'             => __('Video Carousel'),
            'description'       => __('A custom Broker block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'format-video',
            'keywords'          => array( 'text', 'image', 'gallery', 'video-carousel' ),
        ));

        // Article
        acf_register_block(array(
            'name'              => 'article',
            'title'             => __('Article'),
            'description'       => __('A custom article block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'editor-paragraph',
            'keywords'          => array( 'article', 'text', 'title' ),
        ));

         // Banner
         acf_register_block(array(
            'name'              => 'banner',
            'title'             => __('Banner'),
            'description'       => __('A custom banner block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'format-image',
            'keywords'          => array( 'banner', 'image', 'title' ),
        ));

        //CTA 
        acf_register_block(array(
            'name'              => 'cta',
            'title'             => __('CTA'),
            'description'       => __('A custom CTA block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              =>'format-image',
            'keywords'          => array( 'cta', 'image', 'title' ),
        ));
    }
}