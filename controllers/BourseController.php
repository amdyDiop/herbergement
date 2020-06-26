<?php
ini_set('display_errors', 1);
require_once ("../models/Bourse.php");
if ( isset($_POST['bourse'])) {
    $bourse = new Bourse();
    echo json_encode($bourse->findAll());
}