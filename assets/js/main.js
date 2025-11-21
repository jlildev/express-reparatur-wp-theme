/**
 * Express Handy Reparatur - Main JavaScript
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 */

(function($) {
    'use strict';
    
    /**
     * Smooth Scrolling for Navigation Links
     */
    $(document).ready(function() {
        $('a[href^="#"]').on('click', function(e) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        });
        
        /**
         * Sticky Header on Scroll
         */
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.site-header').addClass('scrolled');
            } else {
                $('.site-header').removeClass('scrolled');
            }
        });
        
        /**
         * Mobile Menu Close on Link Click
         */
        $('#mobileMenu a').on('click', function() {
            $('#mobileMenu').collapse('hide');
        });
        
        /**
         * WhatsApp Button Click Tracking
         */
        $('.whatsapp-btn, a[href*="wa.me"]').on('click', function() {
            console.log('WhatsApp contact initiated');
            // Add analytics tracking here if needed
        });
        
        /**
         * Phone Call Tracking
         */
        $('a[href^="tel:"]').on('click', function() {
            console.log('Phone call initiated');
            // Add analytics tracking here if needed
        });
    });
    
})(jQuery);