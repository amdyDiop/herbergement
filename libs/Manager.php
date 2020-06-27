<?php
ini_set('display_errors', 1);

abstract class Manager
{
    //Connexion est Fermée
    private $pdo = null;
    protected $tableName;

    // protected $className;
    private function getConnexion()
    {
        //Connexion est fermée
        if ($this->pdo == null) {
            try {
                $this->pdo = new PDO("mysql:host=localhost;dbname=hebergement", "amdy", "ouvreleboudhdeug", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                  $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $ex) {
                die("Erreur lors de la  Connexion");
            }
        }
    }
    private function closeConnexion()
    {

        if ($this->pdo != null) {
            $this->pdo = null;
        }
    }

    public function executeUpdate($sql)
    {
        $this->getConnexion();
        $nbreLigne = $this->pdo->exec($sql);
        $this->closeConnexion();
        return $nbreLigne;
    }

    public function enregistrerEtudiant($prenom, $nom, $matricule, $telephone, $email, $chambre, $adresse, $bourse, $date_naiss)
    {
        try {
            $this->getConnexion();
            $sql = 'INSERT INTO `etudiant` (`id`, `matricule`, `nom`, `date_naiss`, `prenom`, `chambre_id`, `type_bourse_id`, `email`, `telephone`, `adresse`)
        VALUES (NULL, "'.$matricule.'", "'.$nom.'" ,"'.$date_naiss.'", "'.$prenom.'", "'.$chambre.'", "'.$bourse.'", "'.$email.'" ,"'.$telephone.'" , "'.$adresse.'");';
            $this->executeUpdate($sql);
            $this->closeConnexion();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return "success";
    }
    public function EtudiantNoChambre($prenom, $nom, $matricule, $telephone, $email, $adresse, $bourse, $date_naiss)
    {
        try {
            $this->getConnexion();
            $sql = 'INSERT INTO `etudiant` (`id`, `matricule`, `nom`, `date_naiss`, `prenom`, `type_bourse_id`, `email`, `telephone`, `adresse`)
        VALUES (NULL, "'.$matricule.'", "'.$nom.'" ,"'.$date_naiss.'", "'.$prenom.'", "'.$bourse.'", "'.$email.'" ,"'.$telephone.'" , "'.$adresse.'");';
            $this->executeUpdate($sql);
            $this->closeConnexion();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return "success";
    }
    function executeSelect($sql)
    {
        $this->getConnexion();
        //Traitement
        $result = $this->pdo->query($sql);
        $data = [];
        foreach ($result as $rowBD) {
            //ORM=> tuple BD transformer en Objet
            $data[] = $rowBD;
        }
        $this->closeConnexion();
        return $data;
    }

    public
    function findAll()
    {
        $sql = "select * from $this->tableName";
        $data = $this->executeSelect($sql);
        return $data;
    }

    public
    function findById($id)
    {
        $sql = "select * from $this->tableName where id=$id ";
        $data = $this->executeSelect($sql);
        return count($data) == 1 ? $data[0] : $data;
    }

    public
    function delete($id)
    {
        $sql = "delete from $this->tableName where id=$id";
        return $this->executeUpdate($sql) != 0;
    }


    //Connexion
    //FermerConnexion
    //Executer une requete et Retourner un Résultat
    //Execution Requete MaJ(Insert,Update,delete)
    //Execution requete Select


}
