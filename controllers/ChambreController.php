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

 if ( isset($_POST['limit'])) {
    extract($_POST);
    echo json_encode($chambre->findAllCostomized($limit,$offset));
}
else if (isset($_POST['chambre'])) {
    echo json_encode($chambre->findAll());
}
else if (isset($_GET['chambre'])){
    echo count($chambre->findAll());

}
else if ( isset($_POST['modifier'])) {
    extract($_POST);
    echo json_encode($chambre->modifier($numero,$batiment,$type,$id));
}
else if (isset($_POST['numero'])){
    extract($_POST);
    echo json_encode($chambre->findByNumero($id));
}
// récupération d'une chambre
else if (isset($_POST['edit'])){
    extract($_POST);
    echo json_encode($chambre->findById($id));
}
else if (isset($_POST['delete'])){
    extract($_POST);
   echo $chambre->delete($id);

}