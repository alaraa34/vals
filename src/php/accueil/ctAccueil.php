<?php
declare(strict_types=1);
/*******************************************************************************
 * Projet VALS
 ******************************************************************************/
namespace vals\src\php\accueil;

use shared\php\classes\socle\Login                  as Login;
use shared\php\classes\personalisation\Parametre    as Parametre;
use shared\php\bricks\Brick_slider                  as BkSlider;
use shared\php\toolbox\Toolbox_html                 as TbHtml;
use shared\php\toolbox\Toolbox                      as Tbx;
use shared\php\toolbox\Toolbox_adressage            as TbAdressage;


function ctAccueil() {
        $messageBarreMenu = "Accueil";
        $mode = "accueil";
        $css = Tbx::includeCSS("texteDefilant");
        $bandeau = TbHtml::htmlTexteDefilant(Parametre::mdParametreGetDetail("ACCUEIL", "BANDEAU", "valeurA"));
        //Slider 
        $slider = new BkSlider(1,crossfade:true);
        require(ROOT_PATH . 'vals/src/php/accueil/tpAccueil.php');
}

function ctEnConstruction() {
//page en construction dans le layout
    $messageBarreMenu = "";
    $content = "<div class=\"d-block mx-auto img-fluid\"><br><br>"
             . "<img src='images/EnConstruction.png' alt=\"En construction\" class=\"img-fluid mx-auto d-block\"></div>";
    require(TbAdressage::projetGetLayout(__NAMESPACE__));
}

function ctLoginFromToolbar() {
//réception du bouton d'authentification de la barre d'outils
// déconnexion si clic sur se déconnecter
    Login::loginControlDemand(__NAMESPACE__);
}

function ctLoginUser() {
//réception du formulaire d'authentification 
    Login::loginControlReception(__NAMESPACE__);
}
