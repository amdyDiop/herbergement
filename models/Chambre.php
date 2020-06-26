<?php
require_once ("../libs/Manager.php");
class Chambre extends Manager {
    public function __construct(){
        $this->tableName="chambre";
    }
   public function findAll()
   {
       return parent::findAll(); // recupération de tout  les chambre via le parent findAll)=
   }
}