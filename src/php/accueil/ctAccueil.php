<?php
declare(strict_types=1);
/*******************************************************************************
 * Projet VALS
 ******************************************************************************/
namespace vals\src\php\accueil;

use shared\php\classes\socle\User as User;
use shared\php\classes\personalisation\Parametre as Parametre;
use shared\php\bricks\Brick_slider as BkSlider;
use shared\php\toolbox\Toolbox_html as TbHtml;
use shared\php\toolbox\Toolbox as Tbx;
use shared\php\classes\telechargement\Telechargement as  Telechargement;


function ctAccueil() {
        $messageBarreMenu = "Accueil";
        $mode = "accueil";
        $css = Tbx::includeCSS("texteDefilant");
        $bandeau = TbHtml::htmlTexteDefilant(Parametre::mdParametreGetDetail("ACCUEIL", "BANDEAU", "valeurA"));
        //Slider 
        $slider = new BkSlider(1,crossfade:true);
        require(ROOT_PATH . 'vals/src/php/accueil/tpAccueil.php');
}

function ctLogin() {
//réception du formulaire d'authentification ou du bouton connexion/déconexion
// déconnexion si clic sur se déconnecter
    if(User::userConnecte()){
        User::deconnecter();
        //Suppression du menu stocké 
        unset($_SESSION[menu::NOM_VARIABLE_SESSION]);
        $content = messageColorer(true,"Déconnexion effectuée"); 
        require('src/templates/layout.php');
    }
    else{
        $pageCible ="";
        require('src/templates/login.php');
    }
}
function ctLoginUser() {
//réception du formulaire d'authentification 
    $user = new user();
    if($user->isValid((string)filter_input(INPUT_POST,'pseudo'), (string)filter_input(INPUT_POST,'password'))){
        $pageCible = (string)filter_input(INPUT_SERVER,'HTTP_REFERER');
        if (str_contains($pageCible,"?action=login")){
           //la demande a été faite à partir du bouton, retour menu avec message
           $content = "<div role=\"alert\">" . $_SESSION['LOGGED_USER']['prenom'] . 
                    ",  welcome sur le site! Tu es authentifié, ton avatar est en haut à gauche !!  </div> ";
           require('src/templates/layout.php');
        }
        else{
            header('Location: ' . $pageCible);
        }
    }
    else{
        //erreur sur user password
        $content  = messageColorer(false,messageKO:'Ooops il doit y avoir une erreur !!' );
        require('src/templates/layout.php');
    }
    unset ($user);
}

function ctEnConstruction() {
        $messageBarreMenu = "";
        $mode = "enConstruction";
        require('src/templates/accueil.php');
}
