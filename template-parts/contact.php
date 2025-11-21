<?php
/**
 * Template Part: Contact Section
 * Multiple contact options and social media links
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 */
?>

<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title" style="color: #fff;">Kontaktieren Sie uns</h2>
        <p class="text-center mb-5" style="font-size: 18px;">
            Wir sind für Sie da - wählen Sie Ihren bevorzugten Kontaktweg
        </p>
        
        <div class="contact-grid">
            <!-- Phone Contact -->
            <div class="contact-box">
                <i class="fas fa-phone-volume"></i>
                <h3>Telefonisch</h3>
                <p>Rufen Sie uns direkt an für schnelle Beratung</p>
                <a href="tel:+4971112345678" class="btn btn-primary mt-3">
                    <i class="fas fa-phone"></i> +49 711 12345678
                </a>
                <p style="margin-top: 15px; font-size: 14px;">
                    Mo-Fr: 10:00 - 20:00 Uhr<br>
                    Sa: 10:00 - 18:00 Uhr
                </p>
            </div>
            
            <!-- WhatsApp Contact -->
            <div class="contact-box">
                <i class="fab fa-whatsapp"></i>
                <h3>WhatsApp</h3>
                <p>Schnelle Antworten und Terminvereinbarung</p>
                <a href="https://wa.me/4971112345678" class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp Chat starten
                </a>
                <p style="margin-top: 15px; font-size: 14px;">
                    Sofortige Antwort während<br>
                    unserer Öffnungszeiten
                </p>
            </div>
            
            <!-- Email Contact -->
            <div class="contact-box">
                <i class="fas fa-envelope"></i>
                <h3>E-Mail</h3>
                <p>Schreiben Sie uns Ihr Anliegen</p>
                <a href="mailto:info@expressreparatur.com" class="btn btn-primary mt-3">
                    <i class="fas fa-envelope"></i> E-Mail senden
                </a>
                <p style="margin-top: 15px; font-size: 14px;">
                    info@expressreparatur.com<br>
                    Antwort innerhalb von 2 Stunden
                </p>
            </div>
            
            <!-- Visit Us -->
            <div class="contact-box">
                <i class="fas fa-store"></i>
                <h3>Vor Ort</h3>
                <p>Besuchen Sie uns in unserer Werkstatt</p>
                <a href="#location" class="btn btn-primary mt-3">
                    <i class="fas fa-map-marker-alt"></i> Anfahrt ansehen
                </a>
                <p style="margin-top: 15px; font-size: 14px;">
                    Rotebühlplatz<br>
                    70178 Stuttgart
                </p>
            </div>
        </div>
        
        <!-- Social Media Section -->
        <div class="text-center mt-5">
            <h3 style="margin-bottom: 30px; color: #fff;">Folgen Sie uns auf Social Media</h3>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://www.facebook.com/expressreparatur" target="_blank" 
                   class="btn btn-primary" style="background: #1877f2; border: none;">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="https://www.instagram.com/expressreparatur" target="_blank" 
                   class="btn btn-primary" style="background: #E4405F; border: none;">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://www.google.com/maps/place/Express+Handy+Reparatur/@48.7737905,9.170625,17z" 
                   target="_blank" class="btn btn-primary" style="background: #4285F4; border: none;">
                    <i class="fab fa-google"></i> Google Bewertungen
                </a>
            </div>
        </div>
        
        <!-- Emergency Service Highlight -->
        <div class="mt-5 p-4" style="background: rgba(255,255,255,0.1); border-radius: 15px; text-align: center;">
            <h3 style="color: #ffd700; margin-bottom: 20px;">
                <i class="fas fa-bolt"></i> Express-Service verfügbar!
            </h3>
            <p style="font-size: 18px; margin-bottom: 0;">
                Dringender Reparaturbedarf? Rufen Sie uns an - wir reparieren Ihr Gerät 
                oft noch am selben Tag!
            </p>
        </div>
    </div>
</section>