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
$batiment =new Batiment();

 if (isset($_GET['batiment'])){
    echo json_encode($batiment->findAll());
}