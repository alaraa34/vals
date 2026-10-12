<?php   

    use shared\php\toolbox\Toolbox_index as TbIndex;
    
    session_start();
    //ROOT est la racine du projet

    define('PREFIXE_BDD','va_');
    
    //chargement de l'autoload
    define('ROOT_PATH', filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_URL) . '/');
    
    require_once(ROOT_PATH . 'shared/php/autoload.php');
    
    TbIndex::demarrer("vals");
