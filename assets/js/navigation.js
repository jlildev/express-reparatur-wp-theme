/**
 * Navigation JavaScript - Mobile Menu Toggle
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 * @version 2.0
 */

document.addEventListener('DOMContentLoaded', function () {
    const mobileToggle = document.querySelector('.mobile-menu-toggle-clean');
    const mobileNav = document.querySelector('.mobile-nav-clean');

    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', function () {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            // Toggle aria-expanded
            this.setAttribute('aria-expanded', !isExpanded);

            // Toggle mobile nav visibility
            mobileNav.setAttribute('aria-hidden', isExpanded);

            // Update button label
            this.setAttribute('aria-label', isExpanded ? 'Menü öffnen' : 'Menü schließen');
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function () {
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileNav.setAttribute('aria-hidden', 'true');
                mobileToggle.setAttribute('aria-label', 'Menü öffnen');
            });
        });
    }

    // Add scroll effect to header
    const header = document.querySelector('.site-header-clean');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
});
