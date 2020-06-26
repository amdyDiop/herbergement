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
    else if ($validator->isTelephone($telephone) !== 1) {
        echo $validator->isTelephone($telephone);

    }
    else{
        $matricule = $validator->genereMatricule($prenom, $nom);
        if ($chambre ==0){

            echo $etudiant->EtudiantNoChambre($prenom,$nom,$matricule,$telephone,$email,$adresse, $bourse,$date_naiss);
        }
        else
        echo $etudiant->enregistrerEtudiant($prenom,$nom,$matricule,$telephone,$email,$chambre,$adresse, $bourse,$date_naiss);
    }

} else if ($_POST['limit']) {
    $etudiant = new Etudiant();
    echo json_encode($etudiant->findAll());
}



