<?php declare(strict_types=1);
/*******************************************************************************
 * Projet VALS
 ******************************************************************************/
namespace vals\src\includes;
?>
<!-- Formulaire de contact et réservation -->
<section class="contact-form-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5">Contact, Réservation, Simulation</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form id="contactForm" class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nom" class="form-label">Nom *</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                            <div class="invalid-feedback">Veuillez saisir votre nom.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="prenom" class="form-label">Prénom *</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                            <div class="invalid-feedback">Veuillez saisir votre prénom.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">E-mail *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">Veuillez saisir un email valide.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="telephone" class="form-label">Téléphone *</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone" required>
                            <div class="invalid-feedback">Veuillez saisir votre téléphone.</div>
                        </div>
                        <div class="col-12">
                            <label for="adresse" class="form-label">Adresse *</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse postale" required>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="codePostal" name="codePostal" placeholder="Code Postal" required>
                        </div>
                        <div class="col-md-6">
                            <label for="hebergement" class="form-label">Hébergement choisi *</label>
                            <select class="form-select" id="hebergement" name="hebergement" required>
                                <option value="">Sélectionnez...</option>
                                <option value="cottage">Mobil-home COTTAGE</option>
                                <option value="domino">Mobil-home DOMINO</option>
                                <option value="family">Mobil-home FAMILY</option>
                                <option value="emplacement">Emplacement tente/caravane</option>
                            </select>
                            <div class="invalid-feedback">Veuillez choisir un hébergement.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Climatisation</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="climatisation" id="climOui" value="oui">
                                <label class="form-check-label" for="climOui">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="climatisation" id="climNon" value="non" checked>
                                <label class="form-check-label" for="climNon">Non</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="dateArrivee" class="form-label">Date d'arrivée *</label>
                            <input type="date" class="form-control" id="dateArrivee" name="dateArrivee" required>
                            <div class="invalid-feedback">Veuillez saisir la date d'arrivée.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="dateDepart" class="form-label">Date de départ *</label>
                            <input type="date" class="form-control" id="dateDepart" name="dateDepart" required>
                            <div class="invalid-feedback">Veuillez saisir la date de départ.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="nbAdultes" class="form-label">Nombre d'adultes *</label>
                            <input type="number" class="form-control" id="nbAdultes" name="nbAdultes" min="1" max="10" value="2" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nbEnfants" class="form-label">Nombre d'enfants *</label>
                            <input type="number" class="form-control" id="nbEnfants" name="nbEnfants" min="0" max="10" value="0" required>
                        </div>
                        <div class="col-12">
                            <label for="demande" class="form-label">Demande particulière</label>
                            <textarea class="form-control" id="demande" name="demande" rows="4" placeholder="Précisez votre demande..."></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rgpd" name="rgpd" required>
                                <label class="form-check-label" for="rgpd">
                                    En cochant cette case, vous acceptez d'être recontacté par email, conformément à notre 
                                    <a href="mentions-legales.php">Politique de Confidentialité</a>. *
                                </label>
                                <div class="invalid-feedback">Vous devez accepter les conditions.</div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="bi bi-send me-2"></i>Envoyer ma demande
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            <!-- Avantages -->
            <div class="col-md-6 col-lg-3">
                <h5 class="text-uppercase fw-bold mb-4">Avantages</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-wifi text-primary me-2"></i>Wifi gratuit sur tout le camping</li>
                    <li class="mb-2"><i class="bi bi-heart-fill text-danger me-2"></i>Animaux acceptés</li>
                    <li class="mb-2"><i class="bi bi-p-square-fill text-info me-2"></i>Parking gratuit</li>
                    <li class="mb-2"><i class="bi bi-universal-access text-warning me-2"></i>Accessible PMR</li>
                </ul>
            </div>
            
            <!-- Horaires -->
            <div class="col-md-6 col-lg-3">
                <h5 class="text-uppercase fw-bold mb-4">Horaires</h5>
                <p><i class="bi bi-clock me-2"></i>Du lundi au dimanche</p>
                <p>7h à 23h</p>
                <p class="mt-4"><strong>Saison :</strong> 01 avril - 31 octobre</p>
            </div>
            
            <!-- Nous trouver -->
            <div class="col-md-6 col-lg-3">
                <h5 class="text-uppercase fw-bold mb-4">Nous trouver</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        <a href="#" class="text-white text-decoration-none">
                            Route de la Nature<br>34000 Montpellier
                        </a>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <a href="tel:0467329196" class="text-white text-decoration-none">04 67 32 91 96</a>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <a href="mailto:contact@camping-nature.com" class="text-white text-decoration-none">
                            contact@camping-nature.com
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Réseaux sociaux & Newsletter -->
            <div class="col-md-6 col-lg-3">
                <h5 class="text-uppercase fw-bold mb-4">Suivez-nous</h5>
                <div class="social-links mb-4">
                    <a href="#" class="btn btn-outline-light btn-sm me-2 mb-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm me-2 mb-2">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm mb-2">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>
                <h6 class="fw-bold">Newsletter</h6>
                <form id="newsletterForm">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Votre email">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Partenaires -->
        <div class="row mt-5 pt-4 border-top border-secondary">
            <div class="col-12">
                <h6 class="text-center mb-4">Nos partenaires</h6>
                <div class="row justify-content-center align-items-center g-3">
                    <div class="col-6 col-md-2 text-center">
                        <img src="fichiers/accueil/Logo-cheque-vacance.jpg" alt="Cheque vacances" class="img-fluid ">
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <img src="fichiers/accueil/ACCUEIL-VELO_LOGO_RVB.jpg" alt="Partenaire 2" class="img-fluid ">
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <img src="fichiers/accueil/partner3.png" alt="Partenaire 3" class="img-fluid partner-logo">
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <img src="fichiers/accueil/partner4.png" alt="Partenaire 4" class="img-fluid partner-logo">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="row mt-4 pt-3 border-top border-secondary">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <p class="mb-0">&copy; 2026 Camping Les Vals - Tous droits réservés</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="mentions-legales.php" class="text-white text-decoration-none me-3">Mentions légales</a>
                <a href="plan-site.php" class="text-white text-decoration-none">Plan du site</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bouton retour en haut -->
<button id="backToTop" class="btn btn-primary btn-floating" title="Retour en haut">
    <i class="bi bi-arrow-up"></i>
</button>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Bootstrap 5.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="src/js/main.js"></script>

</body>
</html>
