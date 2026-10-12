<?php
declare(strict_types=1);
/*******************************************************************************
 * Projet VALS
 ******************************************************************************/
namespace vals\src\php\tarif;


function ctTarifAfficherGrille() {
//affichage de la grille de taif en cours
        $messageBarreMenu = "Accueil";
        $mode = "accueil";
        //Tarif
        $grilles = [];
        foreach (Grille::mdListeIdGrillesActives() as $id){
            $grilles[]= new Grille($id); 
        }
        require(ROOT_PATH . 'vals/src/php/tarif/tpTarif.php');
}

