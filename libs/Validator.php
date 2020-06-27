<?php

class Validator
{
    private $errors;

    public function getErrors()
    {
        return $this->errors;
    }

    public function isTelephone($telephone)
    {
          $validation = "/^7[7|7|6|8|0][0-9]{7}$/";
        if (preg_match($validation, $telephone)) {
            return 1;
        } else {
            return  "invalid phone";
        }
    }
    public function genereMatricule($prenom, $nom)
    {
        $matricule= "2020".substr($nom,0,2).substr($prenom,-2).rand(1000,9999);
        return $matricule;
    }
    public function isEamil($email)
    {
        $validation = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
        if (preg_match($validation, $email)) {
            return 1;
        } else {
              return  "email non valide";
        }

    }
}
