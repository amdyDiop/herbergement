<?php
require_once ("../libs/Manager.php");
class Bourse extends Manager {
    public function __construct(){
        $this->tableName="type_bourse";
    }
    public function findAll()
    {
        return parent::findAll(); //appele  de la function fundALL() de menager et recuPération des Etudiant
    }
}