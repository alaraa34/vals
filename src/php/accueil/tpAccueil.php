<?php
$page_title = "Accueil - Camping Les Vals";
$current_page = "accueil";

include 'src/includes/header.php';
?>

<!-- Hero Section / Carousel -->
<section id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <!-- debut de carrousel-->
    <?= $slider->sliderRender()?>
    <!-- fin de carrousel -->
</section>

<!-- Bandeau promotionnel si renseigné -->
<?php if(strlen($bandeau)> 0){
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
                        <h3 class="card-title text-uppercase">Locations</h3>
                        <p class="card-text">Mobil-homes climatisés et emplacements spacieux pour tentes et caravanes</p>
                        <a href="src/php/location/tpLocationPage.php" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Événements -->
            <div class="col-md-6 col-lg-4">
                <div class="card section-card h-100">
                    <img src="fichiers/accueil/Chanteuse02_light.jpg" class="card-img-top" alt="Événements">
                    <div class="card-body text-center">
                        <h3 class="card-title text-uppercase">Événements</h3>
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
                        <h3 class="card-title text-uppercase">Galeries</h3>
                        <p class="card-text">Découvrez notre camping en images et vidéos</p>
                        <a href="galerie.php" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Tarifs / Promos -->
            <div class="col-md-6 col-lg-4">
                <div class="card section-card h-100">
                    <img src="fichiers/accueil/tarifs.jpg" class="card-img-top" alt="Tarifs">
                    <div class="card-body text-center">
                        <h3 class="card-title text-uppercase">Tarifs</h3>
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
                        <h3 class="card-title text-uppercase">Activités & Découvertes</h3>
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
                        <h3 class="card-title text-uppercase">Restaurant / Snack</h3>
                        <p class="card-text">Savourez nos spécialités locales dans une ambiance conviviale</p>
                        <a href="restaurant.php" class="btn btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Présentation du camping -->
<section class="presentation py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold mb-4">Camping Nature & Détente</h2>
                <h4 class="text-primary mb-3">En famille et entre amis pour des moments inoubliables !</h4>
                <p class="lead mb-4">
                    C'est au cœur de l'Occitanie, Terre du Sud et de contrastes, que toute notre équipe vous accueille 
                    dès les premiers beaux jours.
                </p>
                <p>
                    Simplicité, convivialité, bienveillance et partage sont nos maîtres mots, pour que vous passiez 
                    des vacances reposantes dans un cadre naturel préservé.
                </p>
                <p>
                    Notre camping, situé dans le sud de la France, est ouvert du 01 avril au 31 octobre et vous propose 
                    de passer quelques jours paisibles dans l'arrière-pays, au calme d'une nature préservée.
                </p>
                <p>
                    Nous disposons de plusieurs types d'hébergements, d'un espace aquatique chauffé (du 01/06 au 15/09) 
                    et d'un restaurant où vous passerez de très bons moments.
                </p>
                <div class="alert alert-info mt-4">
                    <strong>Idéal pour :</strong> organiser un anniversaire, une cousinade ou un week-end d'intégration 
                    sur plusieurs jours avec ou sans demi-pension !
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-12">
                        <img src="fichiers/accueil/GalleriePiscine11.jpg" class="img-fluid rounded shadow" alt="Vue camping 1">
                    </div>
                    <div class="col-6">
                        <img src="fichiers/accueil/IMG_7465 cr2.jpg" class="img-fluid rounded shadow" alt="Vue camping 2">
                    </div>
                    <div class="col-6">
                        <img src="fichiers/accueil/GalleriePiscine06.jpg" class="img-fluid rounded shadow" alt="Vue camping 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nature et activités -->
<section class="nature-section py-5">
    <div class="container">
        <h2 class="text-center display-5 fw-bold mb-5">Des vacances en pleine nature</h2>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="fichiers/accueil/WhatsApp Image 2026-03-06 at 14.31.21" class="img-fluid rounded shadow" alt="Nature 1">
                    </div>
                    <div class="col-6">
                        <img src="fichiers/accueil/WhatsApp Image 2026-03-06 at 14.31.46 (3)" class="img-fluid rounded shadow" alt="Nature 2">
                    </div>
                    <div class="col-12">
                        <img src="fichiers/accueil/WhatsApp Image 2026-03-06 at 14.31.11" class="img-fluid rounded shadow" alt="Nature 3">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="lead">
                    Pour des vacances ensoleillées, que vous soyez en caravane, sous une tente ou l'heureux locataire 
                    d'un mobil-home, notre camping a tout pour séduire les familles et les amis amoureux de la nature 
                    et du bon vivre, dans une ambiance bon enfant et familiale.
                </p>
                <p>
                    De nombreuses activités et sites touristiques sont à découvrir près de notre camping. Toute la famille 
                    pourra pleinement s'amuser et profiter de vacances qu'elles soient reposantes ou plus sportives !
                </p>
                <div class="mt-4">
                    <h5 class="fw-bold">À découvrir :</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Lacs et plages naturelles</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Randonnées pédestres et VTT</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Sites historiques et villages pittoresques</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Activités nautiques et sports</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Marchés locaux et gastronomie</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'vals/src/includes/footer.php'; ?>
