<?php
/**
 * Footer Template
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 */
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Company Info -->
            <div class="footer-section">
                <h3>Express Handy Reparatur</h3>
                <p>
                    Ihre professionelle Werkstatt für Handy, iPhone, Samsung und Tablet Reparaturen in Stuttgart. 
                    Schnell, zuverlässig und mit hochwertigen Ersatzteilen.
                </p>
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
                    <a href="https://www.google.com/maps/place/Express+Handy+Reparatur/@48.7737905,9.170625,17z" target="_blank" aria-label="Google Maps">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-section">
                <h3>Schnelllinks</h3>
                <ul>
                    <li><a href="#services">Unsere Leistungen</a></li>
                    <li><a href="#reviews">Kundenbewertungen</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li><a href="#location">Anfahrt</a></li>
                    <li><a href="/datenschutz">Datenschutz</a></li>
                    <li><a href="/impressum">Impressum</a></li>
                </ul>
            </div>
            
            <!-- Services -->
            <div class="footer-section">
                <h3>Unsere Services</h3>
                <ul>
                    <li><a href="#">Display Reparatur</a></li>
                    <li><a href="#">Akku Austausch</a></li>
                    <li><a href="#">Wasserschaden</a></li>
                    <li><a href="#">Ladebuchse Reparatur</a></li>
                    <li><a href="#">Kamera Reparatur</a></li>
                    <li><a href="#">Datenrettung</a></li>
                </ul>
            </div>
            
            <!-- Contact & Opening Hours -->
            <div class="footer-section">
                <h3>Öffnungszeiten</h3>
                <ul>
                    <li><strong>Montag - Freitag:</strong></li>
                    <li>10:00 - 20:00 Uhr</li>
                    <li><strong>Samstag:</strong></li>
                    <li>10:00 - 18:00 Uhr</li>
                    <li><strong>Sonntag:</strong> Geschlossen</li>
                </ul>
                <div style="margin-top: 20px;">
                    <p><i class="fas fa-map-marker-alt"></i> Rotebühlplatz, Stuttgart</p>
                    <p><i class="fas fa-phone"></i> +49 711 12345678</p>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Express Handy Reparatur Stuttgart. Alle Rechte vorbehalten.</p>
            <p>Entwickelt von <a href="https://jlil.net" target="_blank" style="color: #e31e24;">Jlil</a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>