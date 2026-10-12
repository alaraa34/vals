<?php
declare(strict_types=1);
namespace vals\src\php\tarif;
/******************************************************************************
 * 
 ******************************************************************************/

use shared\php\database\Model as Model;
use shared\php\classes\socle\Commentaire as Commentaire;
use shared\php\classes\socle\Mere as Mere;
use shared\php\toolbox\Toolbox_classe as tbClasse;

class Tarif extends Mere 
{
    // Attributs
    public float $montant=0;
    public Commentaire $commentaire;
    public Prestation $prestation;
    public Grille $grille;
    public Saison $saison;
    
    // Constantes
    public const TABLE  = "tarif_montant";
    public const INCLUDE_CRUD =[];
    
    //------------------------------------------------------------------------------------------------
    //CONSTRUCTEUR
    //-----------------------------------------------------------------------------------------------
    public function __construct(Prestation $prestation, Grille $grille,Saison $saison) {
        $this->prestation = $prestation;
        $this->grille = $grille;
        $this->saison = $saison;
        $this->commentaire = new Commentaire();
    }
    //------------------------------------------------------------------------------------------------
    //FONCTIONS STATIQUES
    //-----------------------------------------------------------------------------------------------
      
    //------------------------------------------------------------------------------------------------
    //CRUD une fois les classes mises à jour
    //-----------------------------------------------------------------------------------------------
     
    //------------------------------------------------------------------------------------------------
    //METIER
    //------------------------------------------------------------------------------------------------
    public function getMontant(bool $enEuros=false){
    //Retourne le texte si il existe ou le montant
        $this->loadFromArray($this->mdGetMontantTarif()); 
        if ($this->commentaire->id === 0){
            $nbDecimales = $this->grille->decimal ? 2 : 0;
            $retour = number_format($this->montant, $nbDecimales,",",".");
            $retour .= $enEuros ? " €" : "";
        }
        else{
            $retour = $this->commentaire->texte;
        }
        return $retour;
    }
  
    //------------------------------------------------------------------------------------------------
    //CHARGEMENT
    //-----------------------------------------------------------------------------------------------
          
    //------------------------------------------------------------------------------------------------
    //ACCES AU MODELE
    //-----------------------------------------------------------------------------------------------
    private function mdGetMontantTarif(){
    // renvoie le tarif correspondant au tryptique
        $requete = "SELECT tm.id, tm.montant ,co.id as idCommentaire, co.texte as texteCommentaire
                    FROM tarif_montant as tm
                        LEFT JOIN Commentaire as co ON tm.idCommentaire=co.id
                    WHERE tm.idSaison=? AND tm.idGrille=? AND tm.IdPrestation=?";
    
        return Model::mdRequeteListerUnique($requete,array($this->saison->id, $this->grille->id, $this->prestation->id));
    }
}  
    