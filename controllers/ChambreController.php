<?php
ini_set('display_errors', 1);
require_once ("../models/Chambre.php");

if ( isset($_POST['chambre'])) {
    $chambre = new Chambre();
    echo json_encode($chambre->findAll());
}