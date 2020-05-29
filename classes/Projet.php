<?php

class Projet {

    private $idprojet;
    private $nomprojet;
    private $datedebut;
    private $datefin;
    private $progression;
    private $commentaire;
    private $cuid;
    
    
    function getIdprojet() {
        return $this->idprojet;
    }

    function getNomprojet() {
        return $this->nomprojet;
    }

    function getDatedebut() {
        return $this->datedebut;
    }

    function getDatefin() {
        return $this->datefin;
    }

    function getProgression() {
        return $this->progression;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function getCuid() {
        return $this->cuid;
    }

    function setIdprojet($idprojet) {
        $this->idprojet = $idprojet;
    }

    function setNomprojet($nomprojet) {
        $this->nomprojet = $nomprojet;
    }

    function setDatedebut($datedebut) {
        $this->datedebut = $datedebut;
    }

    function setDatefin($datefin) {
        $this->datefin = $datefin;
    }

    function setProgression($progression) {
        $this->progression = $progression;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function setCuid($cuid) {
        $this->cuid = $cuid;
    }



}
