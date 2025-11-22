<?php
/**
 * Express Handy Reparatur Theme Functions
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 * @version 1.1.0
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
 * Enqueue Scripts and Styles - Vanilla JS Only
 * Modern, lightweight approach without Bootstrap or jQuery
 */
function express_reparatur_scripts() {
    // Font Awesome for icons
    wp_enqueue_style(
        'font-awesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', 
        array(), 
        '6.5.1'
    );
    
    // Google Fonts - Inter & Plus Jakarta Sans for professional typography
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@700;800&display=swap',
        array(),
        null
    );
    
    // Theme stylesheet
    wp_enqueue_style(
        'express-reparatur-style', 
        get_stylesheet_uri(), 
        array('font-awesome', 'google-fonts'), 
        '1.1.0'
    );
    
    // Custom theme JS - Vanilla JavaScript only (NO jQuery, NO Bootstrap)
    wp_enqueue_script(
        'express-reparatur-script', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array(), 
        '1.1.0', 
        true
    );
    
    // Remove jQuery if not needed by other plugins
    // Uncomment the following line if you want to completely remove jQuery
    // wp_dequeue_script('jquery');
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
 * Enhanced Schema.org Markup for Local Business
 * Comprehensive structured data for better SEO and local search visibility
 */
function express_reparatur_schema_markup() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        '@id' => 'https://expressreparatur.com/#business',
        'name' => 'Express Handy Reparatur',
        'description' => 'Professionelle Smartphone und Handy Reparatur in Stuttgart. Display, Akku, Wasserschaden - Schnell, günstig, zuverlässig.',
        'image' => array(
            '@type' => 'ImageObject',
            'url' => get_template_directory_uri() . '/assets/images/logo.png',
            'width' => 300,
            'height' => 100
        ),
        'logo' => get_template_directory_uri() . '/assets/images/logo.png',
        'telephone' => '+49-711-12345678',
        'email' => 'info@expressreparatur.com',
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
            'latitude' => 48.7737905,
            'longitude' => 9.170625
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
        'url' => 'https://expressreparatur.com',
        'sameAs' => array(
            'https://www.facebook.com/expressreparatur',
            'https://www.instagram.com/expressreparatur'
        ),
        'areaServed' => array(
            '@type' => 'City',
            'name' => 'Stuttgart'
        ),
        'hasOfferCatalog' => array(
            '@type' => 'OfferCatalog',
            'name' => 'Reparatur Services',
            'itemListElement' => array(
                array(
                    '@type' => 'Offer',
                    'itemOffered' => array(
                        '@type' => 'Service',
                        'name' => 'Display Reparatur',
                        'description' => 'Professionelle Display Reparatur für alle Smartphone-Modelle'
                    )
                ),
                array(
                    '@type' => 'Offer',
                    'itemOffered' => array(
                        '@type' => 'Service',
                        'name' => 'Akku Wechsel',
                        'description' => 'Schneller Akkutausch mit hochwertigen Ersatzteilen'
                    )
                ),
                array(
                    '@type' => 'Offer',
                    'itemOffered' => array(
                        '@type' => 'Service',
                        'name' => 'Wasserschaden Reparatur',
                        'description' => 'Professionelle Wasserschaden-Behandlung und Reparatur'
                    )
                )
            )
        ),
        'aggregateRating' => array(
            '@type' => 'AggregateRating',
            'ratingValue' => '4.8',
            'reviewCount' => '127',
            'bestRating' => '5',
            'worstRating' => '1'
        )
    );
    
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'express_reparatur_schema_markup');

/**
 * Add Preconnect for Performance Optimization
 */
function express_reparatur_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'express_reparatur_resource_hints', 10, 2);

/**
 * Add Security Headers
 */
function express_reparatur_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
}
add_action('send_headers', 'express_reparatur_security_headers');