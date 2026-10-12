<?php
declare(strict_types=1);
/*******************************************************************************
 * Projet VALS
 ******************************************************************************/
namespace vals\src\php\location;

use shared\php\classes\personalisation\Parametre as Parametre;
use shared\php\bricks\Brick_slider as BkSlider;
use shared\php\toolbox\Toolbox_html as TbHtml;
use shared\php\toolbox\Toolbox as Tbx;


function ctListe() {
//liste des bungalows
    $messageBarreMenu = "Locations";
    $css = Tbx::includeCSS("texteDefilant");
    $bandeau = TbHtml::htmlTexteDefilant(Parametre::mdParametreGetDetail("ACCUEIL", "BANDEAU", "valeurA"));
    require(ROOT_PATH . 'vals/src/php/location/tpListeBungalows.php');
}
function ctPageLocation() {
//page d'entrée des locations (bungalows, emplacements, fournitures)
    $messageBarreMenu = "Locations";
    $css = Tbx::includeCSS("texteDefilant");
    $bandeau = TbHtml::htmlTexteDefilant(Parametre::mdParametreGetDetail("ACCUEIL", "BANDEAU", "valeurA"));
    require(ROOT_PATH . 'vals/src/php/location/tpLocationPage.php');
}
