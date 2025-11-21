<?php
/**
 * Header Template
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Express Handy Reparatur Stuttgart - Professionelle Smartphone und Handy Reparatur. Display, Akku, Wasserschaden. Schnell, günstig, zuverlässig.">
    <meta name="keywords" content="Handy Reparatur Stuttgart, iPhone Reparatur, Samsung Reparatur, Display Reparatur, Smartphone Reparatur">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <!-- Top Bar: Contact Info & Social Media -->
    <div class="top-bar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="contact-info">
                    <a href="tel:+4971112345678">
                        <i class="fas fa-phone"></i> +49 711 12345678
                    </a>
                    <a href="mailto:info@expressreparatur.com">
                        <i class="fas fa-envelope"></i> info@expressreparatur.com
                    </a>
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/expressreparatur" target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/expressreparatur" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/4971112345678" target="_blank" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation -->
    <nav class="main-navigation">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <span style="color: #e31e24;">EXPRESS</span> HANDY REPARATUR
                        </a>
                    <?php endif; ?>
                </div>
                
                <ul class="nav-menu d-none d-lg-flex">
                    <li><a href="#home">Startseite</a></li>
                    <li><a href="#services">Leistungen</a></li>
                    <li><a href="#reviews">Bewertungen</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li><a href="#location">Standort</a></li>
                </ul>
                
                <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div class="collapse" id="mobileMenu">
                <ul class="nav-menu flex-column mt-3">
                    <li><a href="#home">Startseite</a></li>
                    <li><a href="#services">Leistungen</a></li>
                    <li><a href="#reviews">Bewertungen</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li><a href="#location">Standort</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>