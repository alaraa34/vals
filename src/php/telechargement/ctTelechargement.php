<?php
declare(strict_types=1);
/*******************************************************************************
 * Projet VALS - téléchargements (fichiers de la page d'accueil, slider...)
 ******************************************************************************/
namespace vals\src\php\telechargement;

use shared\php\toolbox\Toolbox_adressage                as TbAdressage;
use shared\php\toolbox\Toolbox                          as Tbx;
use shared\php\classes\personalisation\Nomenclature     as Nomenclature;
use shared\php\classes\telechargement\Telechargement    as Telechargement;
use shared\php\modale\Toolbox_modal                     as TbModal;


function ctAccueilLister(){
// fichiers du domaine ACCUEIL
    $idDomaine = Nomenclature::mdNomenclatureGetDetail("DOMAINE", "ACCUEIL","id"); 
    ctTeleLister($idDomaine);
}

function ctTeleLister(int $domaine) {
//Liste une fois le répertoire sélectionné la liste des téléchargements faits sur ce domaine
    Telechargement::teleLister($domaine, __NAMESPACE__);
}
  
function ctGetTeleExistants(){
//fonction qui restitue les téléchargements effectués pour un répertoire
    echo (Telechargement::getTeleExistants());
}

function ctTeleEditer(int $id = 0) {
    Telechargement::teleEditer(__NAMESPACE__, $id);
}

function ctTeleGetRepertoires(){
//Appelé sur le click de domaine pour lister les répertoires qui lui correspondent
    $repertoires = Telechargement::listeRepertoires(TbAdressage::getPost("I","domaine"));
    echo (Telechargement::selectBoutonRepertoire(true,$repertoires));
}

function ctTeleMAJ() {
//mise à jour suite à écran de saisie
    ctTeleLister(Telechargement::teleMAJ());
}    

function ctTeleSupprimer(){
    $tele = new Telechargement(TbModal::modalGetIdFromModal());
    $retour = $tele->delete();
    $content = Tbx::messageColorer($retour,"Téléchargement supprimé","Erreur lors de la suppresssion"); 
    require(TbAdressage::projetGetLayout(__NAMESPACE__));
}
