<?php
declare(strict_types=1);
namespace vals\src\php\tarif;

/*
 * 
 */
use shared\php\database\Model as Model;
use shared\php\classes\socle\Commentaire as Commentaire;
use shared\php\toolbox\Toolbox_classe as TbClasse;
use shared\php\classes\socle\Mere as Mere;

class Grille extends Mere 
{
    // Attributs
    public int $annee=0;
    public string $titre="";
    public string $publication="";                      //Date de publication
    public string $complement="";
    public bool $decimal=false;
    public Commentaire $commentaire;
    public array $saisons=[];                           //collection de saisons
    public array $prestations=[];                       //collection de prestations
  
    // Constantes
    public const TABLE  = "tarif_grille";
    //public const INCLUDE_CRUD =[];
    //public const RESTREINT =[];                                 //Classes à ne pas charger lors d'un load by id
    
    //------------------------------------------------------------------------------------------------
    //CONSTRUCTEUR
    //-----------------------------------------------------------------------------------------------
    public function __construct(int $idGrille = 0) {
        $this->id = $idGrille;
        $this->commentaire = new Commentaire();
        if ($this->id > 0){$this->loadFromId();}
    }
    //------------------------------------------------------------------------------------------------
    //FONCTIONS STATIQUES
    //-----------------------------------------------------------------------------------------------
    public static function ListeSelection(int $natureEvenement) {
        return self::mdEtabListeSelection($natureEvenement);
    }
  
    public static function liste(bool $miseEnFormeLien = false){
        $etablissements = self::mdEtabListeGenerique(false);
        return self::miseEnFormeListe ($etablissements,$miseEnFormeLien);
     }
   
     
     public static function listeDesTypes(){
         return mdNomenclatureGetListe("TYPE_ETAB","valeurA");
     }
    
    //------------------------------------------------------------------------------------------------
    //CRUD une fois les classes mises à jour
    //-----------------------------------------------------------------------------------------------
    
   
    //------------------------------------------------------------------------------------------------
    //METIER
    //-----------------------------------------------------------------------------------------------
     public function getNamespaceCollection(string $nomClasseCollection):string{
    //appelé par classeLpoadID pour trouver la liste des ID de la collection 
    //renvoie le namespace completde la classe de collection 
    //par défaut celui de la classe si dans le même name space
            return  __NAMESPACE__ .'\\' . $nomClasseCollection; 
    }
    //------------------------------------------------------------------------------------------------
    //CHARGEMENT
    //-----------------------------------------------------------------------------------------------
       
    
    //------------------------------------------------------------------------------------------------
    //ACCES AU MODELE
    //-----------------------------------------------------------------------------------------------
       
    public function mdInfosIdCollection(string $collection):array{
    //appelé par classeLpoadID pour trouver la liste des ID de la collection 
    //redefinition classe mère
        if(str_contains($collection, "saison")){
            return parent::mdInfosIdCollection(GrilleSaison_ass::TABLE);
        }
        elseif (str_contains($collection, "prestation")) {
            return parent::mdInfosIdCollection(Prestation::TABLE);
        }
    }
    
    public static function mdListeIdGrillesActives() :array{
    //Liste les grilles à afficher sur la page tarif
        $requete = "SELECT id FROM " . self::TABLE ." WHERE annee=? ";
        return Model::mdRequeteListerZoneUnique($requete,"id",[2024]);
    }
}