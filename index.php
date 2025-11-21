<?php
/**
 * Main Template File - Home Page
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 */

get_header(); 
?>

<main id="main-content" class="site-main">
    <?php
    // Load modular template parts for homepage
    get_template_part('template-parts/hero');
    get_template_part('template-parts/services');
    get_template_part('template-parts/reviews');
    get_template_part('template-parts/contact');
    get_template_part('template-parts/location');
    ?>
</main>

<?php
get_footer();