/**
 * Express Handy Reparatur - Main JavaScript
 * Pure Vanilla JavaScript - No jQuery, No Bootstrap
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 * @version 1.1.0
 */

(function() {
    'use strict';

    /**
     * DOM Elements Cache
     */
    const DOM = {
        header: null,
        mobileMenuToggle: null,
        navMenu: null,
        navLinks: null,
        body: null
    };

    /**
     * Initialize DOM Elements
     */
    function cacheDOMElements() {
        DOM.header = document.querySelector('.site-header');
        DOM.mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        DOM.navMenu = document.querySelector('.nav-menu');
        DOM.navLinks = document.querySelectorAll('.nav-menu a');
        DOM.body = document.body;
    }

    /**
     * Sticky Header with Scroll Detection
     * Adds shadow to header when scrolled
     */
    function initStickyHeader() {
        if (!DOM.header) return;

        let lastScroll = 0;
        const scrollThreshold = 50;

        function handleScroll() {
            const currentScroll = window.pageYOffset;

            // Add/remove scrolled class for styling
            if (currentScroll > scrollThreshold) {
                DOM.header.classList.add('scrolled');
            } else {
                DOM.header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        }

        // Use passive listener for better performance
        window.addEventListener('scroll', handleScroll, { passive: true });
        
        // Initial check
        handleScroll();
    }

    /**
     * Mobile Menu Toggle
     * Pure CSS/JS implementation without Bootstrap collapse
     */
    function initMobileMenu() {
        if (!DOM.mobileMenuToggle || !DOM.navMenu) return;

        function toggleMobileMenu() {
            const isActive = DOM.navMenu.classList.toggle('mobile-active');
            DOM.mobileMenuToggle.setAttribute('aria-expanded', isActive);
            DOM.mobileMenuToggle.innerHTML = isActive 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
            
            // Prevent body scroll when menu is open
            if (isActive) {
                DOM.body.style.overflow = 'hidden';
            } else {
                DOM.body.style.overflow = '';
            }
        }

        function closeMobileMenu() {
            DOM.navMenu.classList.remove('mobile-active');
            DOM.mobileMenuToggle.setAttribute('aria-expanded', 'false');
            DOM.mobileMenuToggle.innerHTML = '<i class="fas fa-bars"></i>';
            DOM.body.style.overflow = '';
        }

        // Toggle on button click
        DOM.mobileMenuToggle.addEventListener('click', toggleMobileMenu);

        // Close menu when clicking on a nav link
        DOM.navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    closeMobileMenu();
                }
            });
        });

        // Close menu on window resize if screen becomes large
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (window.innerWidth > 768) {
                    closeMobileMenu();
                }
            }, 250);
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!DOM.navMenu.contains(e.target) && !DOM.mobileMenuToggle.contains(e.target)) {
                if (DOM.navMenu.classList.contains('mobile-active')) {
                    closeMobileMenu();
                }
            }
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     * Modern smooth scrolling with proper offset for sticky header
     */
    function initSmoothScroll() {
        DOM.navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Only handle anchor links
                if (href && href.startsWith('#')) {
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        e.preventDefault();
                        
                        // Calculate offset for sticky header
                        const headerHeight = DOM.header ? DOM.header.offsetHeight : 0;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
                        
                        // Smooth scroll
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });

                        // Update active state
                        updateActiveNavLink(this);
                        
                        // Update URL without jumping
                        if (history.pushState) {
                            history.pushState(null, null, href);
                        }
                    }
                }
            });
        });
    }

    /**
     * Update Active Navigation Link
     */
    function updateActiveNavLink(activeLink) {
        DOM.navLinks.forEach(link => link.classList.remove('active'));
        if (activeLink) {
            activeLink.classList.add('active');
        }
    }

    /**
     * Scroll Spy - Highlight Active Section in Navigation
     */
    function initScrollSpy() {
        const sections = document.querySelectorAll('section[id]');
        if (sections.length === 0) return;

        function highlightNavOnScroll() {
            const scrollPosition = window.pageYOffset + 100;

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    const activeLink = document.querySelector(`.nav-menu a[href="#${sectionId}"]`);
                    updateActiveNavLink(activeLink);
                }
            });
        }

        window.addEventListener('scroll', highlightNavOnScroll, { passive: true });
        highlightNavOnScroll(); // Initial check
    }

    /**
     * Intersection Observer for Fade-In Animations
     * Progressive enhancement for scroll animations
     */
    function initScrollAnimations() {
        // Only add animations if user hasn't set reduced motion preference
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }

        const animatedElements = document.querySelectorAll(
            '.service-card, .review-card, .feature-box, .contact-box'
        );

        if (animatedElements.length === 0) return;

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';
                    entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    
                    // Trigger animation
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);
                    
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(element => observer.observe(element));
    }

    /**
     * WhatsApp Click Tracking (Optional Analytics)
     */
    function initWhatsAppTracking() {
        const whatsappButtons = document.querySelectorAll('.whatsapp-btn');
        
        whatsappButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Track WhatsApp click (can integrate with Google Analytics)
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'click', {
                        'event_category': 'Contact',
                        'event_label': 'WhatsApp Button'
                    });
                }
            });
        });
    }

    /**
     * Phone Number Click Tracking (Optional Analytics)
     */
    function initPhoneTracking() {
        const phoneLinks = document.querySelectorAll('a[href^="tel:"]');
        
        phoneLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'click', {
                        'event_category': 'Contact',
                        'event_label': 'Phone Number'
                    });
                }
            });
        });
    }

    /**
     * Lazy Load Images (Progressive Enhancement)
     */
    function initLazyLoading() {
        if ('loading' in HTMLImageElement.prototype) {
            // Browser supports native lazy loading
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                }
            });
        } else {
            // Fallback to Intersection Observer
            const images = document.querySelectorAll('img[data-src]');
            
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.add('loaded');
                        imageObserver.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        }
    }

    /**
     * Form Validation Enhancement (if contact forms exist)
     */
    function initFormValidation() {
        const forms = document.querySelectorAll('form[data-validate]');
        
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const inputs = form.querySelectorAll('input[required], textarea[required]');
                let isValid = true;

                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.classList.add('error');
                    } else {
                        input.classList.remove('error');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                }
            });
        });
    }

    /**
     * Back to Top Button (Optional Enhancement)
     */
    function initBackToTop() {
        const backToTopBtn = document.querySelector('.back-to-top');
        
        if (!backToTopBtn) return;

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 500) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        }, { passive: true });

        backToTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * Initialize All Functions
     */
    function init() {
        // Cache DOM elements first
        cacheDOMElements();

        // Initialize all features
        initStickyHeader();
        initMobileMenu();
        initSmoothScroll();
        initScrollSpy();
        initScrollAnimations();
        initWhatsAppTracking();
        initPhoneTracking();
        initLazyLoading();
        initFormValidation();
        initBackToTop();

        console.log('Express Reparatur Theme: All features initialized successfully!');
    }

    /**
     * Execute when DOM is ready
     */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();