<?php
ini_set('display_errors', 1);

require_once("../libs/Manager.php");

class Etudiant extends Manager
{
    public function __construct()
    {
        $this->tableName = "etudiant";
    }

    public function findAll()
    {
        return parent::findAll(); //appele  de la function fundALL() de menager et recuPération des Etudiant
    }

    public function enregistrerEtudiant($prenom, $nom, $matricule, $telephone, $email, $chambre, $adresse, $bourse, $date_naiss)
    {
        $sql = "INSERT INTO etudiant (prenom, nom, matricule,telephone, email,chambre_id, adresse,type_bourse_id,date_naiss)
           VALUES (${prenom},${nom},${matricule},${telephone},${email},${chambre} ,${adresse},${bourse},${date_naiss} )";
        return parent::executeUpdate($sql); // enregistrement d'un etudiant au niveau de la base de donnée
    }
}