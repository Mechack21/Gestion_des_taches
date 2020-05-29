<?php

require_once 'classes/connexion.class.php';
require_once 'classes/Personne.php';

class PersonneDAO {

    public function ajouter($person) {
        
        $ps = Connexion::getPreparedStatement("INSERT INTO personnes(nom, prenom, dateNaiss)values(?,?,?)");
//        $person = new Hopital();
//        $ps->bindValue(1, $person->getId());
        $ps->bindValue(1, $person->getNom());
        $ps->bindValue(2, $person->getPrenom());
        $ps->bindValue(3, $person->getDateNaiss());
//        var_dump($person->getAdresse()); die();
        $ps->execute();
    }

    public function modifier($person) {
        $ps = Connexion::getPreparedStatement("UPDATE personnes set nom=?, prenom=?, dateNaiss=? WHERE id=?");
        $ps->bindValue(1, $person->getNom());
        $ps->bindValue(2, $person->getPrenom());
        $ps->bindValue(3, $person->getDateNaiss());
        $ps->bindValue(4, $person->getId());
        $ps->execute();
    }

    public function supprimer($person) {
        $ps = Connexion::getPreparedStatement("DELETE FROM personnes WHERE id=?");
        $ps->bindValue(1, $person->getId());
        $ps->execute();
    }

    public function afficher() {
        try {

            $ps = Connexion::getPreparedStatement("SELECT * FROM personnes");
            $ps->execute();

            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $pers = new Personne();
                $pers->setId($row['id']);
                $pers->setNom($row['nom']);
                $pers->setPrenom($row['prenom']);
                $pers->setDateNaiss($row['dateNaiss']);

                $person[] = $pers;
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }

//        var_dump($person); //die();
        return $person;
    }

    public function afficherParId($id) {
        try {
            $ps = Connexion::getPreparedStatement("SELECT * FROM personnes WHERE id=?");
            $ps->bindValue(1, $id);
            $ps->execute();
            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $pers = new Personne();
                $pers->setId($row['id']);
                $pers->setNom($row['nom']);
                $pers->setPrenom($row['prenom']);
                $pers->setDateNaiss($row['dateNaiss']);
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }

        return $pers;
    }

    public function afficherParH($id, $ht, $limit, $offset) {
        try {
            $ps = Connexion::getPreparedStatement("SELECT * FROM personnes WHERE nom like '%$id%' and prenom like '%$ht%' LIMIT $limit OFFSET $offset");

            $ps->execute();
            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $pers = new Personne();
                $pers->setId($row['id']);
                $pers->setNom($row['nom']);
                $pers->setPrenom($row['prenom']);
                $pers->setDateNaiss($row['dateNaiss']);
                $person[] = $pers;
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }
//        var_dump($person); die();
        return $person;
    }

    public function Compter() {
        try {

            $ps = Connexion::getPreparedStatement("SELECT count(*) nbre FROM personnes");
            $ps->execute();

            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $nbres = $row['nbre'];
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }

//        var_dump($person); //die();
        return $nbres;
    }

    public function compterParH($id, $ht) {
        try {
            $ps = Connexion::getPreparedStatement("SELECT count(*) nbre FROM personnes WHERE nom like '%$id%' and prenom like '%$ht%'");

            $ps->execute();
            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $nbres = $row['nbre'];
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }
//        var_dump($person); die();
        return $nbres;
    }
    
    public function exportXLS(){
        
               
    }

}
