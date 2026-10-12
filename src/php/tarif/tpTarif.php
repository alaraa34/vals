<?php 
namespace vals\src\php\tarif;
use shared\php\bricks\Brick_table as BkTable;
use shared\php\toolbox\Toolbox_adressage as TbAdressage;
ob_start(); 
?>
<div id="features">
    <div class="inner">
        <div class="features-text">
            <h1>Tarifs</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="inner">
        <div class="content">
            <div class="info-box icon"><strong>Info  : Recharge pour voiture électrique 8€  </strong>(6 heures x 3,7 kw)</div>
            <a href="#camping">Accéder directement aux tarifs camping</a><br />
            <!-- AFFICHE TARIF -->
            <?php 
                //affcihe les différentes grilles
                foreach($grilles as $index=>$grille){
                    //initialisation table
                    $maTable = new BkTable("grille" .$index, nbLignesTitre:3 ,numeroterLignes : BkTable::NUMEROS_TOUTES_LIGNE_SAUF_DERNIERE);
                    $maTable->addHeader($grille->titre, alignement:"MC",rowspan:3, rang:1);
                    foreach($grille->saisons as $saison){
                        //ligne des saisons, première ligne entête
                        $maTable->addHeader($saison->nom,rang:1);
                        $maTable->addHeader($saison->formatterPlageDates(),classe:"fs-6" ,rang:2);
                        //rajouter ligne nuitées
                    } 
                    
                    foreach($grille->prestations as $prestation){
                        //ligne de tarifs
                        $maTable->addCell($prestation->libelle . "<br>" . $prestation->description, nouveau:true);
                        foreach($grille->saisons as $saison){
                             //instanciation tarif en euros sans décimales
                             $tarif = new Tarif($prestation,$grille,$saison);
                             $maTable->addCell($tarif->getMontant(true),alignement:"C");
                             unset ($tarif);
                        }
                    }
                    //pavé bas de la grille, nouvelle ligne
                    $maTable->addCell($grille->complement, nouveau: true, colspan:count($grille->saisons)+2);
                    echo ($maTable->render());
                    unset ($maTable);
                }
            ?>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require(TbAdressage::projetGetLayout(__NAMESPACE__));