<?php
declare(strict_types=1);
/*******************************************************************************
 * Projet VALS
 ******************************************************************************/
namespace vals\src\php\accueil;

use shared\php\classes\personalisation\Parametre as Parametre;
use shared\php\bricks\Brick_slider as BkSlider;
use shared\php\toolbox\Toolbox_html as TbHtml;
use shared\php\toolbox\Toolbox as Tbx;
use shared\php\classes\telechargement\Telechargement as  Telechargement;


function ctListe() {
    $messageBarreMenu = "Accueil";
    $mode = "accueil";
    $css = Tbx::includeCSS("texteDefilant");
    $bandeau = TbHtml::htmlTexteDefilant(Parametre::mdParametreGetDetail("ACCUEIL", "BANDEAU", "valeurA"));
    //Slider 
    $slider = new BkSlider(1,crossfade:true);
    require(ROOT_PATH . 'vals/src/php/accueil/tpAccueil1.php');
}
function ctPageLocation() {
    $messageBarreMenu = "Accueil";
    $mode = "accueil";
    $css = Tbx::includeCSS("texteDefilant");
    $bandeau = TbHtml::htmlTexteDefilant(Parametre::mdParametreGetDetail("ACCUEIL", "BANDEAU", "valeurA"));
    //Slider 
    $slider = new BkSlider(1,crossfade:true);
    require(ROOT_PATH . 'vals/src/php/accueil/tpAccueil1.php');
}


