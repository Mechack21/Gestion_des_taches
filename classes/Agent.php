<?php

class Agent {

    private $cuid;
    private $noms;
    private $prenom;
    private $sexe;
    private $telephone;
    private $email;
    private $pwd;
    private $statut;
    private $photo;

    function getCuid() {
        return $this->cuid;
    }

    function getPhoto() {
        return $this->photo;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function getNoms() {
        return $this->noms;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getEmail() {
        return $this->email;
    }

    function getPwd() {
        return $this->pwd;
    }

    function getStatut() {
        return $this->statut;
    }

    function setCuid($cuid) {
        $this->cuid = $cuid;
    }

    function setNoms($noms) {
        $this->noms = $noms;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

}
