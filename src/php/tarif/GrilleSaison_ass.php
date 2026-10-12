<?php
declare(strict_types=1);
namespace vals\src\php\tarif;

/*
 * 
 */
use shared\php\database\Model as Model;
use shared\php\toolbox\Toolbox_classe as TbClasse;

class GrilleSaison_ass 
{
    // Attributs
    private int $id=0;
    private Grille $grille;
    private Saison $saison;
    private string $information="";
  
    // Constantes
    public const TABLE  = "tarif_grille_saison_ass";
    public const INCLUDE_CRUD =[];
    
    //------------------------------------------------------------------------------------------------
    //CONSTRUCTEUR
    //-----------------------------------------------------------------------------------------------
    public function __construct(Grille $grille, Saison $saison) {
        $this->grille = $grille;
        $this->saison = $saison;
    }
    
    //------------------------------------------------------------------------------------------------
    //CRUD une fois les classes mises à jour
    //-----------------------------------------------------------------------------------------------
   
    //------------------------------------------------------------------------------------------------
    //METIER
    //-----------------------------------------------------------------------------------------------
     public function getInformation(): string{
     //retourne l'information de l'association
         $tableau = $this->mdGetInformation();
         $this->information = $tableau[0];
         return $this->information;
     }
    //------------------------------------------------------------------------------------------------
    //CHARGEMENT
    //-----------------------------------------------------------------------------------------------
     
    //------------------------------------------------------------------------------------------------
    //ACCES AU MODELE
    //-----------------------------------------------------------------------------------------------
       
    private function mdGetInformation() {
    //Liste de etab pour concert ou répétition
        $requete = "SELECT information FROM " . self::TABLE .
            " WHERE idGrille=? and idSaison=? ";
        return Model::mdRequeteListerZoneUnique($requete,[$this->grille->id, $this->saison->id]);
    }
    
}



