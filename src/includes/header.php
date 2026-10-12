<?php 
declare(strict_types=1);
/*******************************************************************************
 * Projet VALS
 ******************************************************************************/
namespace vals\src\includes;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Camping Nature & Détente'; ?></title>
    <meta name="description" content="Camping 3 étoiles en Occitanie - Hébergements, piscine, restaurant, activités">
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/css/style.css">
    <?php 
    if (isset($css)){echo $css;}
    ?>
</head>
<body>

<!-- Top Bar -->
<div class="top-bar bg-primary text-white py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center text-md-start mb-2 mb-md-0">
                <i class="bi bi-telephone-fill me-2"></i>
                <a href="tel:0467329196" class="text-white text-decoration-none">04 30 40 17 80</a>
            </div>
            <div class="col-md-4 text-center mb-2 mb-md-0">
                <i class="bi bi-envelope-fill me-2"></i>
                <a href="mailto:contact@camping-les-vals.org" class="text-white text-decoration-none">contact@camping-les-vals.org</a>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <i class="bi bi-geo-alt-fill me-2"></i>
                <span>2000 route du puech, 34700 Lodève</span>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="src/fichiers/accueil/logo.png" alt="Logo" height="60">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'accueil') ? 'active' : ''; ?>" href="index.php">Présentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'hebergements') ? 'active' : ''; ?>" href="hebergements.php">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'galerie') ? 'active' : ''; ?>" href="galerie.php">Galerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'activites') ? 'active' : ''; ?>" href="activites.php">Activités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'evenements') ? 'active' : ''; ?>" href="evenements.php">Événements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'tarifs') ? 'active' : ''; ?>" href="tarifs.php">Tarifs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'restaurant') ? 'active' : ''; ?>" href="restaurant.php">Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="ms-3">
                <a href="https://reservation.secureholiday.net/en/16206/search/product-list" class="btn btn-primary">
                    <i class="bi bi-calendar-check me-1"></i> Réserver
                </a>
            </div>
            <div class="ms-2">
                <a href="https://www.facebook.com/" target="_blank" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-facebook"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
