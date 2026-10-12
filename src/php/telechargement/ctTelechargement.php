<?php
declare(strict_types=1);
namespace theBand\src\php\accueil;
/*******************************************************************************
 * Projet VALS
 ******************************************************************************/
use shared\php\classes\socle\User                   as User;
use shared\php\toolbox\Toolbox                      as Tbx;
use shared\php\toolbox\Toolbox_adressage            as TbAdressage;

function ctTeleIAccueilEditer(){
// appelé pour le code 'documentsListe'
    $idDomaine = mdNomenclatureGetDetail("DOMAINE", "ACCUEIL","ID"); 
    ctTeleLister($idDomaine);
}

function ctTeleLister(int $domaine) {
    $infos = telechargement::listeTeleDomaine($domaine);
    $libelleDomaine = strtoupper(mdNomenclatureGetDetailFromID($domaine));
    if (count($infos)==0){
       $content = messageColorer(false,"","Aucun téléchargement n'a été fait pour ce domaine");
       require('src/templates/layout.php');
    }
    else{
        $messageBarreMenu = "Fichiers téléchargés";
        $actions = [
            ['texte'=> 'Modifier','logoClass' =>'bi bi-pencil-fill','href'=>'TeleEditer'],
            ['texte' => 'Supprimer','logoClass' => 'bi bi-trash3-fill','modale'=>'supprimer', 
               'sujet'=> Telechargement::SUJET_MDL ,'message' => 'Supprimer définitivement?'],
               ];
        require('src/templates/telechargement/telechargementListe.php'); 
    }
  }
function ctGetTeleExistants(){
//fonction qui restitue les téléchargements effectués pour un répetoire
//parametre le nom du répertoire
    $repertoire = getPost("S", "repertoire");
    $teles = telechargement::listeTeleUnRepertoire($repertoire);
    if (count($teles)==0){
        $myhtml = "<p> Aucun téléchargement n'a été déjà fait dans ce répertoire.</p>";
    }
    else{
        //table type, URL, Raccouri
        $myhtml = "<p><strong>Téléchargement déjà faits dans ce dossier</strong></p>";
        $myhtml .= "<table width='60%' class='table table-bordered w-75 p-3' >";
        $myhtml.= "<tr>" . formaterEntete(["Type","URL","Nom raccourci"],true);
        foreach($teles as $tele){
            $myhtml .= "<tr><td>" . $tele['typeFichier']. "</td><td>" . $tele['url']. 
                    "</td><td>" .$tele['texteCommentaireLien']."</td></tr>";
        }
        $myhtml .= "</table>";
    }
    echo ($myhtml);
}
function ctTeleEditer(int $id = 0) {
    $typesLien = TypeLien::listePourUnSujet(Telechargement::LIEN_SUJET); // Types de liens admissible au téléchargement
    $domaines = telechargement::listeDomaines();
    $repertoires = Telechargement::listeRepertoires();
    $urlControleur = urlControleur(telechargement::SUJET_MDL . "GetRepertoires");
    $script = Tbx::includeJS('ajax');
    //chargement
    $tele = new Telechargement($id);
    if ($id==0){
        $messageBarreMenu = "Nouveau téléchargement";
        $afficherPlus = true;
    }
    else{
        $messageBarreMenu = "Modifier un téléchargement";
        $afficherPlus = false;
    }
    require(controleLogin('telechargement/telechargementDetail'));
}

function ctTeleGetRepertoires(){
//Appelé sur le click de domaine pour lister les répertoires qui lui correspondent
    $repertoires = Telechargement::listeRepertoires(getPost("I","domaine"));
    echo (telechargement::selectBoutonRepertoire(true,$repertoires));
}

function ctTeleMAJ() {
//mise à jour suite à ecran de saisie nouveau
    //réception des liens 
    $mvtLiens = TbAdressage::getValeurPostTableau(Lien::ZONES_MOUVEMENTS);
    //pour chaque lien création d'un telechargement
    $idDomaine = getPost("I","domaine");
    foreach ($mvtLiens as $mvtLien){
        $tele = new telechargement(getPost("I","idTele"));
        if ($tele->id===0){
            //nouveau téléchargement, ilpeut y avoir plusieur liens
            $tele->repertoire = getPost("S","repertoire");
            $tele->idDomaine = getPost("I","domaine");
            $tele->chargerLiensParMouvements([$mvtLien]);
        }
        else{
            //telechargement exietant , un seul et modification libellé raccourci et privé
            $tele->lien->commentaire->texte = getPost("S","texteCommentaireLien1");
            $tele->lien->prive =  getPost("B","priveLien1");
            $idDomaine = $tele->idDomaine;//si disabed en modif donc ne remonte pas dans post
        }
        $tele->update();
        unset($tele);
    }
    $retour = uploadReceptionLien(true); //ds art_toolbox_upload, import des fichiers
    if (!$retour){die ("Erreur lors du téléchargemment des fichiers");}
    ctTeleLister($idDomaine);
}    

function ctTeleMDLsupprimer(){
    $tele = new telechargement(getIdFromModal());
    $retour = $tele->delete();
    $content = messageColorer($retour,"Téléchargement supprimé","Erreur lors de la suppresssion"); 
    //affichage 
    require('src/templates/layout.php');
}