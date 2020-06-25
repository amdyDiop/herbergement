<?php
class Boursier extends Etudiant{
   private $pension;
   public function __construct($row=null){
       if($row!=null){
           $this->hydrate($row);
       }
   }
   public function hydrate($data)
   {
       parent::hydrate($data);
       //$this->pension=row['pension'];
       $this->pension = $data['pension'];
   }
}