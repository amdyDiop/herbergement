<?php
ini_set('display_errors', 1);
require_once ("../models/Etudiant.php");



if ($_POST['limit']) {

    $etudiant = new Etudiant();
    echo json_encode($etudiant->findAll());
}
