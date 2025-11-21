<?php
/**
 * Template Part: Location Section
 * Google Maps integration and location details
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 */
?>

<section id="location" class="location-section">
    <div class="container">
        <h2 class="section-title">Unser Standort</h2>
        <p class="text-center mb-5" style="font-size: 18px; color: #666;">
            Besuchen Sie uns direkt in Stuttgart - zentral gelegen und gut erreichbar
        </p>
        
        <div class="location-content">
            <!-- Google Maps -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.8344842395447!2d9.168436476934805!3d48.77379050711638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799df3dcfab92cd%3A0x4587488cb8cccfa6!2sExpress%20Handy%20Reparatur!5e0!3m2!1sde!2sde!4v1700000000000!5m2!1sde!2sde" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Express Handy Reparatur Standort">
                </iframe>
            </div>
            
            <!-- Location Information -->
            <div class="location-info">
                <h3>
                    <i class="fas fa-map-marker-alt"></i> Express Handy Reparatur
                </h3>
                
                <!-- Address -->
                <div class="info-item">
                    <i class="fas fa-location-dot"></i>
                    <div>
                        <strong>Adresse:</strong><br>
                        Rotebühlplatz<br>
                        70178 Stuttgart<br>
                        Deutschland
                    </div>
                </div>
                
                <!-- Opening Hours -->
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong>Öffnungszeiten:</strong><br>
                        <strong>Montag - Freitag:</strong> 10:00 - 20:00 Uhr<br>
                        <strong>Samstag:</strong> 10:00 - 18:00 Uhr<br>
                        <strong>Sonntag:</strong> Geschlossen
                    </div>
                </div>
                
                <!-- Phone -->
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <strong>Telefon:</strong><br>
                        <a href="tel:+4971112345678">+49 711 12345678</a>
                    </div>
                </div>
                
                <!-- Public Transport -->
                <div class="info-item">
                    <i class="fas fa-train-subway"></i>
                    <div>
                        <strong>Anfahrt ÖPNV:</strong><br>
                        U-Bahn: U2, U9 - Haltestelle Rotebühlplatz<br>
                        Bus: Linien 40, 42, 43
                    </div>
                </div>
                
                <!-- Parking -->
                <div class="info-item">
                    <i class="fas fa-square-parking"></i>
                    <div>
                        <strong>Parken:</strong><br>
                        Parkhaus Rotebühlzentrum<br>
                        (2 Minuten Fußweg)
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div style="margin-top: 30px;">
                    <a href="https://www.google.com/maps/dir/?api=1&destination=48.7737905,9.170625" 
                       target="_blank" class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">
                        <i class="fas fa-route"></i> Route planen
                    </a>
                    <a href="tel:+4971112345678" class="btn btn-primary" 
                       style="width: 100%; background: #28a745; border: none;">
                        <i class="fas fa-phone"></i> Jetzt anrufen
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Additional Info -->
        <div class="mt-5 text-center">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="p-4" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <i class="fas fa-wheelchair" style="font-size: 40px; color: #e31e24; margin-bottom: 15px;"></i>
                        <h4>Barrierefrei</h4>
                        <p style="color: #666; margin: 0;">Unser Geschäft ist rollstuhlgerecht zugänglich</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="p-4" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <i class="fas fa-wifi" style="font-size: 40px; color: #e31e24; margin-bottom: 15px;"></i>
                        <h4>Kostenloses WLAN</h4>
                        <p style="color: #666; margin: 0;">Nutzen Sie während der Reparatur unser WLAN</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="p-4" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <i class="fas fa-credit-card" style="font-size: 40px; color: #e31e24; margin-bottom: 15px;"></i>
                        <h4>Alle Zahlungsarten</h4>
                        <p style="color: #666; margin: 0;">Bar, EC-Karte, Kreditkarte - alles möglich</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>