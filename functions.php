<?php
/**
 * Express Handy Reparatur Theme Functions
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 * Registers theme support features and menus
 */
function express_reparatur_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'express-reparatur'),
        'footer'  => __('Footer Menu', 'express-reparatur'),
    ));
}
add_action('after_setup_theme', 'express_reparatur_setup');

/**
 * Enqueue Scripts and Styles
 * Loads Bootstrap and custom theme assets
 */
function express_reparatur_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.0');
    
    // Font Awesome for icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Theme stylesheet
    wp_enqueue_style('express-reparatur-style', get_stylesheet_uri(), array('bootstrap'), '1.0.0');
    
    // Bootstrap JS Bundle (includes Popper)
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
    
    // Custom theme JS
    wp_enqueue_script('express-reparatur-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap-bundle'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'express_reparatur_scripts');

/**
 * Register Widget Areas
 */
function express_reparatur_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'express-reparatur'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'express-reparatur'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'express-reparatur'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'express-reparatur'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'express_reparatur_widgets_init');

/**
 * Custom Excerpt Length
 */
function express_reparatur_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'express_reparatur_excerpt_length');

/**
 * Add Custom Body Classes
 */
function express_reparatur_body_classes($classes) {
    if (!is_singular()) {
        $classes[] = 'archive-page';
    }
    return $classes;
}
add_filter('body_class', 'express_reparatur_body_classes');

/**
 * Schema.org Markup for Local Business
 * Improves SEO for repair service business
 */
function express_reparatur_schema_markup() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'Express Handy Reparatur',
        'image' => get_template_directory_uri() . '/assets/images/logo.png',
        'telephone' => '+49-711-12345678',
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => 'Rotebühlplatz',
            'addressLocality' => 'Stuttgart',
            'addressRegion' => 'Baden-Württemberg',
            'postalCode' => '70178',
            'addressCountry' => 'DE'
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => '48.7737905',
            'longitude' => '9.170625'
        ),
        'openingHoursSpecification' => array(
            array(
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
                'opens' => '10:00',
                'closes' => '20:00'
            ),
            array(
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => 'Saturday',
                'opens' => '10:00',
                'closes' => '18:00'
            )
        ),
        'priceRange' => '€€',
        'url' => 'https://expressreparatur.com'
    );
    
    echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}
add_action('wp_head', 'express_reparatur_schema_markup');