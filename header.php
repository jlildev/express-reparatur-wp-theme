<?php
/**
 * Header Template - Clean Redesign
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 * @version 2.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Express Handy Reparatur Stuttgart - Professionelle Smartphone und Handy Reparatur. Display, Akku, Wasserschaden. Schnell, günstig, zuverlässig.">
    <meta name="keywords"
        content="Handy Reparatur Stuttgart, iPhone Reparatur, Samsung Reparatur, Display Reparatur, Smartphone Reparatur, Akku Wechsel, Wasserschaden">
    <meta name="author" content="Jlil - jlil.net">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right');
    bloginfo('name'); ?>">
    <meta property="og:description"
        content="Professionelle Smartphone Reparatur in Stuttgart - Schnell, günstig, zuverlässig">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:locale" content="de_DE">

    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#DC1F26">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header-clean" role="banner">
        <div class="container">
            <div class="header-content-clean">
                <!-- Logo -->
                <div class="logo-clean">
                    <?php if (has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Zurück zur Startseite">
                            <span class="logo-text-clean">
                                <span class="logo-highlight-clean">EXPRESS</span>
                                <span class="logo-normal-clean">HANDY REPARATUR</span>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Desktop Navigation -->
                <nav class="nav-menu-clean" role="navigation" aria-label="Hauptnavigation">
                    <ul class="nav-list-clean" role="menubar">
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
                            <a href="#location" role="menuitem">Standort</a>
                        </li>
                        <li role="none">
                            <a href="#contact" role="menuitem">Kontakt</a>
                        </li>
                    </ul>
                </nav>

                <!-- Contact Button -->
                <div class="header-actions-clean">
                    <a href="tel:+4971112345678" class="header-cta-btn" aria-label="Jetzt anrufen">
                        <i class="fas fa-phone"></i>
                        <span>Anrufen</span>
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle-clean" type="button" aria-expanded="false"
                    aria-controls="mobile-navigation" aria-label="Menü öffnen">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-nav-clean" id="mobile-navigation" aria-hidden="true">
            <nav role="navigation" aria-label="Mobile Navigation">
                <ul class="mobile-nav-list-clean">
                    <li>
                        <a href="#home">Startseite</a>
                    </li>
                    <li>
                        <a href="#services">Leistungen</a>
                    </li>
                    <li>
                        <a href="#reviews">Bewertungen</a>
                    </li>
                    <li>
                        <a href="#location">Standort</a>
                    </li>
                    <li>
                        <a href="#contact">Kontakt</a>
                    </li>
                </ul>
                <div class="mobile-nav-contact">
                    <a href="tel:+4971112345678" class="mobile-contact-btn">
                        <i class="fas fa-phone"></i>
                        <span>+49 711 12345678</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>