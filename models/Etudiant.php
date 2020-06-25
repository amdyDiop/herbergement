<?php
require_once ("../libs/Manager.php");
class Etudiant extends Manager {
    public function __construct(){
        $this->tableName="etudiant";
    }
    public function findAll()
    {
        return parent::findAll(); //appele  de la function fundALL() de menager et recuPération des Etudiant
    }
}