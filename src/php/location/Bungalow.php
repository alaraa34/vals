<?php
declare(strict_types=1);
namespace vals\src\php\location;

/*******************************************************************************
 * Classe de gestion des locations
 ******************************************************************************/
use shared\php\database\Model as Model;
use shared\php\classes\lien\Lien as Lien;
use shared\php\toolbox\Toolbox_classe as TbClasse;

class Bungalow extends Location 
{
    // Attributs
    private string $tips="";
    private string $presentation="";
  
    // Constantes
    public const TABLE  = "bungalow";                             //nom de la table
    //public const INCLUDE_CRUD =["commentaire","coordonnee"];    //Classes à inclure lors d'une mise à jour
    //public const RESTREINT =[];                                 //Classes à ne pas charger lors d'un load by id
    
    //------------------------------------------------------------------------------------------------
    //CONSTRUCTEUR
    //-----------------------------------------------------------------------------------------------
    public function __construct(int $id = 0) {
        
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
        switch ($nomClasseCollection) {
            case "collection1":
                return "namespece";
            default:
                return  __NAMESPACE__ .'\\' . $nomClasseCollection; 
        }
    }
    //------------------------------------------------------------------------------------------------
    //CHARGEMENT
    //-----------------------------------------------------------------------------------------------
       
    
    //------------------------------------------------------------------------------------------------
    //ACCES AU MODELE
    //-----------------------------------------------------------------------------------------------
   
    
}