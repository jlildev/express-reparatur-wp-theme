<?php
/**
 * Header Template
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 * @version 1.1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Express Handy Reparatur Stuttgart - Professionelle Smartphone und Handy Reparatur. Display, Akku, Wasserschaden. Schnell, günstig, zuverlässig.">
    <meta name="keywords" content="Handy Reparatur Stuttgart, iPhone Reparatur, Samsung Reparatur, Display Reparatur, Smartphone Reparatur, Akku Wechsel, Wasserschaden">
    <meta name="author" content="Jlil - jlil.net">
    
    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta property="og:description" content="Professionelle Smartphone Reparatur in Stuttgart - Schnell, günstig, zuverlässig">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:locale" content="de_DE">
    
    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#DC1F26">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <!-- Top Bar: Contact Info & Social Media -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="contact-info">
                    <a href="tel:+4971112345678" aria-label="Rufen Sie uns an">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                        <span>+49 711 12345678</span>
                    </a>
                    <a href="mailto:info@expressreparatur.com" aria-label="Senden Sie uns eine E-Mail">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                        <span>info@expressreparatur.com</span>
                    </a>
                </div>
                <div class="social-links-header" role="navigation" aria-label="Social Media Links">
                    <a href="https://www.facebook.com/expressreparatur" target="_blank" rel="noopener noreferrer" aria-label="Besuchen Sie uns auf Facebook">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/expressreparatur" target="_blank" rel="noopener noreferrer" aria-label="Folgen Sie uns auf Instagram">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://wa.me/4971112345678" target="_blank" rel="noopener noreferrer" aria-label="Kontaktieren Sie uns über WhatsApp">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation -->
    <nav class="main-navigation" role="navigation" aria-label="Hauptnavigation">
        <div class="container">
            <div class="nav-container">
                <!-- Logo -->
                <div class="logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Zurück zur Startseite">
                            <span class="logo-highlight">EXPRESS</span> HANDY REPARATUR
                        </a>
                    <?php endif; ?>
                </div>
                
                <!-- Desktop Navigation Menu -->
                <ul class="nav-menu" role="menubar">
                    <li role="none">
                        <a href="#home" role="menuitem">Startseite</a>
                    </li>
                    <li role="none">
                        <a href="#services" role="menuitem">Leistungen</a>
                    </li>
                    <li role="none">
                        <a href="#reviews" role="menuitem">Bewertungen</a>
                    </li>
                    <li role="none">
                        <a href="#contact" role="menuitem">Kontakt</a>
                    </li>
                    <li role="none">
                        <a href="#location" role="menuitem">Standort</a>
                    </li>
                </ul>
                
                <!-- Mobile Menu Toggle Button -->
                <button class="mobile-menu-toggle" 
                        type="button" 
                        aria-expanded="false" 
                        aria-controls="mobile-navigation"
                        aria-label="Menü öffnen">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </nav>
</header>