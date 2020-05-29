<?php

class Personne {

    private $id;
    private $nom;
    private $prenom;
    private $dateNaiss;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDateNaiss() {
        return $this->dateNaiss;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDateNaiss($dateNaiss) {
        $this->dateNaiss = $dateNaiss;
    }


    

}
