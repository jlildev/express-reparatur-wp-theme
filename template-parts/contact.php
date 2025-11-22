<?php
/**
 * Template Part: Contact Section - Clean Redesign
 * Multiple contact options - Simple and Clean
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 * @version 3.0
 */

// Get current time to determine if business is open
$current_hour = (int) current_time('H');
$current_day = (int) current_time('w'); // 0 = Sunday, 6 = Saturday
$is_open = false;

// Business hours: Mon-Fri 10-20, Sat 10-18
if ($current_day >= 1 && $current_day <= 5) {
    $is_open = ($current_hour >= 10 && $current_hour < 20);
} elseif ($current_day == 6) {
    $is_open = ($current_hour >= 10 && $current_hour < 18);
}
?>

<section id="contact" class="contact-section-clean">
    <div class="container">
        <!-- Section Header -->
        <div class="contact-header-clean">
            <h2 class="section-title-clean">Kontakt</h2>
            <p class="section-subtitle-clean">
                Wählen Sie Ihren bevorzugten Kontaktweg – wir freuen uns auf Ihre Nachricht
            </p>

            <!-- Status Indicator -->
            <div class="status-badge-clean <?php echo $is_open ? 'is-open' : 'is-closed'; ?>">
                <span class="status-dot-clean"></span>
                <span class="status-text-clean">
                    <?php echo $is_open ? 'Jetzt geöffnet' : 'Aktuell geschlossen'; ?>
                </span>
            </div>
        </div>

        <!-- Contact Methods Grid -->
        <div class="contact-grid-clean">
            <!-- Phone Contact -->
            <div class="contact-card-clean">
                <div class="contact-icon-clean">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 class="contact-title-clean">Telefonisch</h3>
                <p class="contact-description-clean">
                    Direkter Kontakt für schnelle Beratung und Terminvereinbarung
                </p>
                <a href="tel:+4971112345678" class="contact-btn-clean">
                    <i class="fas fa-phone"></i>
                    <span>+49 711 12345678</span>
                </a>
                <div class="contact-info-clean">
                    <p><strong>Mo-Fr:</strong> 10:00 - 20:00 Uhr</p>
                    <p><strong>Sa:</strong> 10:00 - 18:00 Uhr</p>
                </div>
            </div>

            <!-- WhatsApp Contact -->
            <div class="contact-card-clean contact-card-featured-clean">
                <div class="featured-label-clean">
                    <i class="fas fa-star"></i>
                    <span>Beliebt</span>
                </div>
                <div class="contact-icon-clean">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3 class="contact-title-clean">WhatsApp</h3>
                <p class="contact-description-clean">
                    Schnelle Antworten, Fotos senden und bequeme Terminvereinbarung
                </p>
                <a href="https://wa.me/4971112345678" class="contact-btn-clean contact-btn-whatsapp" target="_blank"
                    rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i>
                    <span>Chat starten</span>
                </a>
                <div class="contact-info-clean">
                    <p><strong>Antwortzeit:</strong> Sofort</p>
                    <p><strong>Verfügbar:</strong> 7 Tage/Woche</p>
                </div>
            </div>

            <!-- Email Contact -->
            <div class="contact-card-clean">
                <div class="contact-icon-clean">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 class="contact-title-clean">E-Mail</h3>
                <p class="contact-description-clean">
                    Detaillierte Anfragen und Kostenvoranschläge per E-Mail
                </p>
                <a href="mailto:info@expressreparatur.com" class="contact-btn-clean">
                    <i class="fas fa-envelope"></i>
                    <span>E-Mail senden</span>
                </a>
                <div class="contact-info-clean">
                    <p><strong>Antwort:</strong> Innerhalb 24h</p>
                    <p><strong>Adresse:</strong> info@expressreparatur.com</p>
                </div>
            </div>

            <!-- Visit Us Contact -->
            <div class="contact-card-clean">
                <div class="contact-icon-clean">
                    <i class="fas fa-location-dot"></i>
                </div>
                <h3 class="contact-title-clean">Vor Ort</h3>
                <p class="contact-description-clean">
                    Besuchen Sie uns direkt in unserer Werkstatt in Stuttgart
                </p>
                <a href="#location" class="contact-btn-clean">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Anfahrt anzeigen</span>
                </a>
                <div class="contact-info-clean">
                    <p><strong>Adresse:</strong> Rotebühlplatz</p>
                    <p><strong>Stadt:</strong> 70178 Stuttgart</p>
                </div>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="contact-social-section-clean">
            <h3 class="social-title-clean">Folgen Sie uns</h3>
            <div class="social-links-clean">
                <a href="https://www.facebook.com/expressreparatur" target="_blank" rel="noopener noreferrer"
                    aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </a>
                <a href="https://www.instagram.com/expressreparatur" target="_blank" rel="noopener noreferrer"
                    aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram</span>
                </a>
                <a href="https://www.google.com/maps/place/Express+Handy+Reparatur" target="_blank"
                    rel="noopener noreferrer" aria-label="Google Bewertungen">
                    <i class="fab fa-google"></i>
                    <span>Google</span>
                </a>
            </div>
        </div>
    </div>
</section>
