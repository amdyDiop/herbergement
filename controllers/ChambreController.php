<?php
ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    $pathModels = "../models/" . $class . ".php";
    $pathLibs = "../libs/" . $class . ".php";
    if (file_exists($pathModels)) {
        require_once($pathModels);
    } elseif (file_exists($pathLibs)) {
        require_once($pathLibs);
    }
});
$chambre = new Chambre();
// récupération d'une chambre
if (isset($_POST['getByID'])){
   echo json_encode($chambre->findById($_POST['id']));
}
else if ( isset($_POST['limit'])) {
    extract($_POST);
    echo json_encode($chambre->findAllCostomized($limit,$offset));
}
else if (isset($_POST['id'])){
    extract($_POST);
   echo $chambre->delete($id);


}