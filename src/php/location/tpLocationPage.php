<?php
$page_title = "Locations - Camping Les Vals";
$current_page = "locations";

include ROOT_PATH . 'vals/src/includes/header.php';
?>

<!-- Bandeau promotionnel si renseigné -->
<?php if(isset($bandeau) && strlen($bandeau)> 0){
    echo ('<section class="promo-banner bg-warning text-dark ">' . $bandeau . '</section>');
}?>

<!-- Sections principales -->
<section class="main-sections py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Emplacements & Hébergements -->
            <div class="col-md-6 col-lg-4">
                <div class="card section-card h-100">
                    <img src="fichiers/accueil/GallerieLocation02-800x598.jpg" class="card-img-top" alt="Hébergements">
                    <div class="card-body text-center">
                        <h3 class="card-title text-uppercase">Bungalows</h3>
                        <p class="card-text">Mobil-homes climatisés et emplacements spacieux pour tentes et caravanes</p>
                        <a href="https://reservation.secureholiday.net/fr/16206/search/product-list" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Événements -->
            <div class="col-md-6 col-lg-4">
                <div class="card section-card h-100">
                    <img src="fichiers/accueil/Chanteuse02_light.jpg" class="card-img-top" alt="Événements">
                    <div class="card-body text-center">
                        <h3 class="card-title text-uppercase">Emplacements</h3>
                        <p class="card-text">Animations, soirées thématiques et événements tout au long de la saison</p>
                        <a href="evenements.php" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Galerie Photos -->
            <div class="col-md-6 col-lg-4">
                <div class="card section-card h-100">
                    <img src="fichiers/accueil/GalleriePiscine05.jpg" class="card-img-top" alt="Galerie">
                    <div class="card-body text-center">
                        <h3 class="card-title text-uppercase">Fournitures</h3>
                        <p class="card-text">Découvrez notre camping en images et vidéos</p>
                        <a href="galerie.php" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Tarifs / Promos -->
            <div class="col-md-6 col-lg-4">
                <div class="card section-card h-100">
                    <img src="fichiers/accueil/tarifs.JPG" class="card-img-top" alt="Tarifs">
                    <div class="card-body text-center">
                        <h3 class="card-title text-uppercase">Autres 1</h3>
                        <p class="card-text">Consultez nos tarifs et profitez de nos offres promotionnelles</p>
                        <a href="https://reservation.secureholiday.net/fr/16206/search/product-list" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Activités & Découvertes -->
            <div class="col-md-6 col-lg-4">
                <div class="card section-card h-100">
                    <img src="fichiers/accueil/activ.jpg" class="card-img-top" alt="Activités">
                    <div class="card-body text-center">
                        <h3 class="card-title text-uppercase">Autres2</h3>
                        <p class="card-text">Randonnées, visites culturelles et activités sportives à proximité</p>
                        <a href="activites.php" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Restaurant -->
            <div class="col-md-6 col-lg-4">
                <div class="card section-card h-100">
                    <img src="fichiers/accueil/IMG_7401 cr2.jpg" class="card-img-top" alt="Restaurant">
                    <div class="card-body text-center">
                        <h3 class="card-title text-uppercase">Autres 3</h3>
                        <p class="card-text">Savourez nos spécialités locales dans une ambiance conviviale</p>
                        <a href="restaurant.php" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include ROOT_PATH . 'vals/src/includes/footer.php'; ?>
