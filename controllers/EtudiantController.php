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
$etudiant = new Etudiant();

if ($_POST['prenom']) {
    extract($_POST);
    $validator = new Validator();
    if ($validator->isEamil($email) !== 1) {
        echo $validator->isEamil($email);
    }
    if ($validator->isTelephone($telephone) !== 1) {
        echo $validator->isTelephone($telephone);
    }
    $matricule = $validator->genereMatricule($prenom, $nom);
    echo $etudiant->enregistrerEtudiant($prenom,$nom,$matricule,$telephone,$email,$chambre,$adresse, $bourse,$date_naiss)!=0;


} else if ($_POST['limit']) {

    $etudiant = new Etudiant();
    echo json_encode($etudiant->findAll());
}



