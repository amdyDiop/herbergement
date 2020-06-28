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

$typeChambre =new TypeChambre();
 if (isset($_GET['type'])){
    echo json_encode($typeChambre->findAll());
}