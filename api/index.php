<?php
require_once("./api.php");
#localhost/maisons
#localhost/maisons/:type(vendre,location)

try
{
    if(!empty($_GET['demande'])){

        $url = explode("/", filter_var($_GET['demande'],FILTER_SANITIZE_URL));
        //print_r($url);

        switch ($url[0]) 
        {
            case 'users':
                if (!empty($url[1])) {
                    #Récupère les maisons par type(vente/location)
                    getUserById($url[1]);
                }else{
                    #Récupère toutes les maisons
                    getAllUsers();
                }
            break;
            case 'insert':
                if(insertUser($url[1],$url[2],$url[3],$url[4],$url[5],$url[6],$url[7])){
                    return true;
                }else{
                    return false;
                }
            break;
            default:  throw new Exception("La demande n'est pas valide, vérifiez l'url");
            break;
        }
    }
    else
    {
        throw new Exception("Problème de recupération de donnée");
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}
