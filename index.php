<?php   

    use shared\php\toolbox\Toolbox_index as TbIndex;
    
    session_start();
    //ROOT est la racine du projet

    define('PREFIXE_BDD','va_');
    //include path =  chemin ajouté à tous les includes
    set_include_path(dirname(dirname(__FILE__)));
    
    //chargement de l'autoload
    require_once(ROOT_PATH . 'shared/php/autoload.php');
    
    TbIndex::demarrer("vals");