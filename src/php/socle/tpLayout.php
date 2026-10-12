<!DOCTYPE html>  
<html lang="fr">  
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name = "reply-to" content = "campinglesvals@yahoo.fr"/>
        <meta name = "author" content = "Alain Raibaut"/>
        <meta name = "description" content = "Au sud de la france, herault, midi, camping aux porte de la méditerranée, proche du lac du salagou, emplacement pour tentes, locations de mobil-home, chalet, jeux pour enfants, mini-golf"/>
        <meta name="classification" CONTENT="camping, caravaning, loisirs, vacances, montpellier,herault, campsite">
        <meta name="keywords" CONTENT="mediterrannee, lac salagou, montpellier, mobil-home,tourisme, vacances, hebergement, loisirs, lac, chalet, location, gite, village de vacances, camping, frankreich, tentes, location, chalets, piscine, swimming-pool,  caravane, emplacements, 3 etoiles, hebergements, europe ">
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        <title>Camping les vals 3 étoiles</title>  
        <!-- chargement des feuilles de style -->
        <link rel="stylesheet" href="src/css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="src/css/vals.css" type="text/css" media="screen" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"/>
        <?php if (isset($css)) {
            echo $css;
        } ?>
    </head>  
    <body class="p-3 m-0 border-0 bd-example m-0 border-0" >
        
        <!-- Blue background with white text -->
        <nav class="navbar navbar-expand-md bg-primary navbar-dark  sticky-top">
            <div class="container-fluid">
                <div class="container">
                    <a class="navbar-brand fs-1 site-name" href="#">
                       Camping Les Vals
                        <img src="images/3etoiles1.png" alt="Logo" width="60" height="24" class="d-inline-block align-text-top">
                      </a>
                    <br><p class="site-description">Les portes de la méditerrannée</p>
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <?= tpLayoutAfficherMenu()?>
                    </ul>
                    <div class=pull-right>
                        <a class="btn btn-dark btn-sm"  role="button" href="<?=tpLayoutHrefBoutonConnect();?>">
                            Réserver en ligne
                        </a>
                    </div>
                </div>
                <span class="navbar-text">
                <?php if (isset($messageBarreMenu)) {echo ($messageBarreMenu);} ?>
                </span>
            </div>
        </nav>
        <!-- CONTENU DE LA PAGE -->
        <main class="container">
            <!-- DEBUT DE PAGE -->
            <?= $content ?>
            <!-- FIN DE PAGE -->
        </main>
        <!-- FIN DE PAGE -->
        <!-- FOOTER -->
        <footer class="bg-body-tertiary text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © <?= date('Y') ?> Camping Les Vals
            </div>
            <!-- Copyright -->
        </footer>
        <!-- SCRIPTS -->		
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <?php if (isset($script)) {echo $script;} ?>
    <?php
        //Fonction affichage
        use shared\php\classes\socle\Menu as Menu;
        
       
        function tpLayoutAfficherMenu():string{
            $menu = new Menu();
            return $menu->myhtml;
        }
        function tpLayoutHrefBoutonConnect(): string{
        //bouton de la barre de menu : réservation en ligne (Secure Holiday)
            return "https://reservation.secureholiday.net/fr/16206/search/product-list";
        }
  

    ?>
    </body>  
</html>  
