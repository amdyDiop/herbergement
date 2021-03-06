<?php
require_once("../libs/Manager.php");

class Chambre extends Manager
{
    public function __construct()
    {
        $this->tableName = "chambre";
    }

    public function findAll()
    {
        return parent::findAll(); // recupération de tout  les chambre via le parent findAll)=
    }

    public function findAllCostomized($limit, $offset)
    {
        $sql = "select c.id, c.numero, tc.type ,b.nom  AS batiment FROM $this->tableName c
                   JOIN type_chambre tc ON c.type_chambre_id = tc.id
                   JOIN  batiment b ON c.batiment_id = b.id limit ${limit} offset ${offset}";
        return $this->executeSelect($sql);
    }

    public function findById($id)
    {
        $sql = "select c.*, tc.type ,b.nom  AS batiment FROM $this->tableName c
                   JOIN type_chambre tc ON c.type_chambre_id = tc.id
                   JOIN  batiment b ON c.batiment_id = b.id WHERE c.id=$id  ";
        return $this->executeSelect($sql);
    }

    public function findByNumero($id)
    {
        $sql = "select numero FROM $this->tableName  WHERE id= $id";
        return parent::executeSelect($sql);
    }
    public function modifier($numero, $batiment, $type, $id)
    {
        $sql = "UPDATE $this->tableName SET numero='$numero', batiment_id=${batiment} ,type_chambre_id =${type} where id=${id}";
        return parent::executeUpdate($sql);
    }

}