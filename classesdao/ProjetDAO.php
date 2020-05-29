<?php

require_once 'classes/connexion.class.php';
require_once 'classes/Projet.php';

class ProjetDAO {

    public function ajouter($projet) {

        $ps = Connexion::getPreparedStatement("INSERT INTO t_projet values(?,?,?,?,?,?,?)");
//        $projet = new Projet();
//        $ps->bindValue(1, $person->getId());
        $ps->bindValue(1, $projet->getIdprojet());
        $ps->bindValue(2, $projet->getNomprojet());
        $ps->bindValue(3, $projet->getDatedebut());
        $ps->bindValue(4, $projet->getDatefin());
        $ps->bindValue(5, $projet->getProgression());
        $ps->bindValue(6, $projet->getCommentaire());
        $ps->bindValue(7, $projet->getCuid());
//        var_dump($person->getAdresse()); die();
        $ps->execute();
    }

    public function modifier($projet) {
        $ps = Connexion::getPreparedStatement("UPDATE t_projet set nomprojet=?, datedebut=?, datefin=?, progression=?, commentaire=?, cuid=? WHERE idprojet=?");
        $ps->bindValue(1, $projet->getNomprojet());
        $ps->bindValue(2, $projet->getDatedebut());
        $ps->bindValue(3, $projet->getDatefin());
        $ps->bindValue(4, $projet->getProgression());
        $ps->bindValue(5, $projet->getCommentaire());
        $ps->bindValue(6, $projet->getCuid());
        $ps->bindValue(7, $projet->getIdprojet());
        $ps->execute();
    }

    public function supprimer($projet) {
        $ps = Connexion::getPreparedStatement("DELETE FROM t_projet WHERE idprojet=?");
        $ps->bindValue(1, $projet->getIdprojet());
        $ps->execute();
    }

    public function afficher() {
        try {

            $ps = Connexion::getPreparedStatement("SELECT * FROM t_projet");
            $ps->execute();

            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $projet = new Projet();
                $projet->setIdprojet($row['idprojet']);
                $projet->setNomprojet($row['nomprojet']);
                $projet->setDatedebut($row['datedebut']);
                $projet->setDatefin($row['datefin']);
                $projet->setProgression($row['progression']);
                $projet->setCommentaire($row['commentaire']);
                $projet->setCuid($row['cuid']);

                $projt[] = $projet;
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }

//        var_dump($person); //die();
        return $projt;
    }

    public function afficherParId($id) {
        try {
            $ps = Connexion::getPreparedStatement("SELECT * FROM t_projet WHERE idprojet=?");
            $ps->bindValue(1, $id);
            $ps->execute();
            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $projet = new Projet();
                $projet->setIdprojet($row['idprojet']);
                $projet->setNomprojet($row['nomprojet']);
                $projet->setDatedebut($row['datedebut']);
                $projet->setDatefin($row['datefin']);
                $projet->setProgression($row['progression']);
                $projet->setCommentaire($row['commentaire']);
                $projet->setCuid($row['cuid']);
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }

        return $projet;
    }

}
