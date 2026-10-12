<?php
declare(strict_types=1);
namespace vals\src\php\tarif;

/*
 * 
 */
use shared\php\database\Model as Model;
use shared\php\classes\socle\User as User;
use shared\php\classes\socle\Commentaire as Commentaire;
use shared\php\classes\lien\Lien as Lien;
use shared\php\toolbox\Toolbox_classe as TbClasse;
use shared\php\classes\socle\Mere as Mere;
use vals\src\php\location\Location as Location;


class Prestation extends Mere 
{
    // Attributs
    public string $libelle="";
    public string $description="";
    public Location $location;
  
    // Constantes
    public const TABLE  = "tarif_prestation";
    public const INCLUDE_CRUD =[];
    
    //------------------------------------------------------------------------------------------------
    //CONSTRUCTEUR
    //-----------------------------------------------------------------------------------------------
    public function __construct(int $id=0) {
        $this->id = $id;
        $this->location = new Location();
        if ($id > 0){$this->loadFromId();}
    }
  //------------------------------------------------------------------------------------------------
    //FONCTIONS STATIQUES
    //-----------------------------------------------------------------------------------------------
    
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
    //ti toutes les collections sont dans le même namespacepas de case
         return  __NAMESPACE__ .'\\' . $nomClasseCollection; 
    }
    //------------------------------------------------------------------------------------------------
    //CHARGEMENT
    //-----------------------------------------------------------------------------------------------
       
    
    //------------------------------------------------------------------------------------------------
    //ACCES AU MODELE
    //-----------------------------------------------------------------------------------------------
    

}
