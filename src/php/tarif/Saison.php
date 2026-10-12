<?php
declare(strict_types=1);
namespace vals\src\php\tarif;
/*******************************************************************************
 * 
 ******************************************************************************/

use shared\php\classes\socle\Mere as Mere;
use shared\php\toolbox\Toolbox_date as TbDate;

class Saison extends Mere 
{
    // Attributs
    public int $ordre =0;
    public string $nom="";
    public string $debut1="";
    public string $fin1="";
    public string $debut2="";
    public string $fin2="";
    private string $wrkInformation=""; //information issue de laassociation grille/saison
    // Constantes
    public const TABLE  = "saison";
    public const INCLUDE_CRUD =[];
    
    //------------------------------------------------------------------------------------------------
    //CONSTRUCTEUR
    //-----------------------------------------------------------------------------------------------
    public function __construct(int $idSaison = 0) {
        $this->id = $idSaison;
        if ($idSaison > 0){$this->loadFromId();}
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
    public function loadInformation(Grille $grille):string{
    //permet de rajouter une information quand la grille de tarif est connue
        if (strlen($this->wrkInformation)==0){
            $ass = GrilleSaison_ass($grille,$this);
            $this->wrkInformation = $ass->getInformation();
        }
        return $this->wrkInformation ;
    }
    
    public function  formatterPlageDates(){
     //met en forme la plage de dates
        $element = "Du " . TbDate::dateFormat($this->debut1,"j-m") . " au " . TbDate::dateFormat($this->fin1,"j-m");
        $element .="<br>";
        $element .= "Du " . TbDate::dateFormat($this->debut2,"j-m") . " au " . TbDate::dateFormat($this->fin2,"j-m");
        return $element;
    }
    
    
    //------------------------------------------------------------------------------------------------
    //CHARGEMENT
    //-----------------------------------------------------------------------------------------------
      
    //------------------------------------------------------------------------------------------------
    //ACCES AU MODELE
    //-----------------------------------------------------------------------------------------------
 
}



