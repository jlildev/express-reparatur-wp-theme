<?php
/**
 * Template Part: Location Section
 * Google Maps integration and location details - Clean Redesign
 * 
 * @package ExpressReparatur
 * @author Jlil <https://jlil.net>
 * @version 2.0
 */
?>

<section id="location" class="location-section-clean">
    <div class="container">
        <!-- Section Header -->
        <div class="location-header">
            <h2 class="section-title-clean">Unser Standort</h2>
            <p class="section-subtitle-clean">
                Besuchen Sie uns direkt in Stuttgart - zentral gelegen und gut erreichbar
            </p>
        </div>

        <!-- Main Location Content -->
        <div class="location-grid">
            <!-- Google Maps -->
            <div class="map-wrapper">
                <div class="map-container-clean">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.8344842395447!2d9.168436476934805!3d48.77379050711638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799df3dcfab92cd%3A0x4587488cb8cccfa6!2sExpress%20Handy%20Reparatur!5e0!3m2!1sde!2sde!4v1700000000000!5m2!1sde!2sde"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Express Handy Reparatur Standort" aria-label="Google Maps Karte mit unserem Standort">
                    </iframe>
                </div>
            </div>

            <!-- Location Details -->
            <div class="location-details">
                <div class="details-card">
                    <h3 class="details-title">
                        <i class="fas fa-map-marker-alt"></i>
                        Express Handy Reparatur
                    </h3>

                    <!-- Information List -->
                    <div class="info-list">
                        <!-- Address -->
                        <div class="info-row">
                            <div class="info-icon">
                                <i class="fas fa-location-dot"></i>
                            </div>
                            <div class="info-text">
                                <span class="info-label">Adresse</span>
                                <span class="info-value">
                                    Rotebühlplatz<br>
                                    70178 Stuttgart<br>
                                    Deutschland
                                </span>
                            </div>
                        </div>

                        <!-- Opening Hours -->
                        <div class="info-row">
                            <div class="info-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="info-text">
                                <span class="info-label">Öffnungszeiten</span>
                                <span class="info-value">
                                    <strong>Mo - Fr:</strong> 10:00 - 20:00 Uhr<br>
                                    <strong>Samstag:</strong> 10:00 - 18:00 Uhr<br>
                                    <strong>Sonntag:</strong> Geschlossen
                                </span>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="info-row">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-text">
                                <span class="info-label">Telefon</span>
                                <span class="info-value">
                                    <a href="tel:+4971112345678" class="phone-link">+49 711 12345678</a>
                                </span>
                            </div>
                        </div>

                        <!-- Public Transport -->
                        <div class="info-row">
                            <div class="info-icon">
                                <i class="fas fa-train-subway"></i>
                            </div>
                            <div class="info-text">
                                <span class="info-label">ÖPNV</span>
                                <span class="info-value">
                                    U-Bahn: U2, U9 - Rotebühlplatz<br>
                                    Bus: Linien 40, 42, 43
                                </span>
                            </div>
                        </div>

                        <!-- Parking -->
                        <div class="info-row">
                            <div class="info-icon">
                                <i class="fas fa-square-parking"></i>
                            </div>
                            <div class="info-text">
                                <span class="info-label">Parken</span>
                                <span class="info-value">
                                    Parkhaus Rotebühlzentrum<br>
                                    <small>(2 Minuten Fußweg)</small>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=48.7737905,9.170625" target="_blank"
                            rel="noopener noreferrer" class="action-btn action-btn-primary"
                            aria-label="Route zu unserem Standort planen">
                            <i class="fas fa-route"></i>
                            <span>Route planen</span>
                        </a>
                        <a href="tel:+4971112345678" class="action-btn action-btn-secondary" aria-label="Jetzt anrufen">
                            <i class="fas fa-phone"></i>
                            <span>Jetzt anrufen</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="location-features">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-wheelchair"></i>
                </div>
                <h4 class="feature-title">Barrierefrei</h4>
                <p class="feature-description">
                    Unser Geschäft ist rollstuhlgerecht zugänglich
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-wifi"></i>
                </div>
                <h4 class="feature-title">Kostenloses WLAN</h4>
                <p class="feature-description">
                    Nutzen Sie während der Reparatur unser WLAN
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h4 class="feature-title">Alle Zahlungsarten</h4>
                <p class="feature-description">
                    Bar, EC-Karte, Kreditkarte - alles möglich
                </p>
            </div>
        </div>
    </div>
</section>