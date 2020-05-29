<?php

require_once 'classes/connexion.class.php';
require_once 'classes/Agent.php';

class AgentDAO {

    public function ajouter($agent) {

        $ps = Connexion::getPreparedStatement("INSERT INTO t_agent values(?,?,?,?,?,?,?,?,?)");
//        $agent = new Agent();
//        $ps->bindValue(1, $person->getId());
        $ps->bindValue(1, $agent->getCuid());
        $ps->bindValue(2, $agent->getNoms());
        $ps->bindValue(3, $agent->getPrenom());
        $ps->bindValue(4, $agent->getSexe());
        $ps->bindValue(5, $agent->getTelephone());
        $ps->bindValue(6, $agent->getEmail());
        $ps->bindValue(7, $agent->getPwd());
        $ps->bindValue(8, $agent->getStatut());
        $ps->bindValue(9, $agent->getPhoto());
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

            $ps = Connexion::getPreparedStatement("SELECT * FROM t_agent");
            $ps->execute();

            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $agent = new Agent();
                $agent->setCuid($row['cuid']);
                $agent->setNoms($row['noms']);
                $agent->setPrenom($row['prenom']);
                $agent->setSexe($row['sexe']);
                $agent->setTelephone($row['telephone']);
                $agent->setEmail($row['email']);
                $agent->setPwd($row['pwd']);
                $agent->setStatut($row['statut']);
                $agent->setPhoto($row['photo']);

                $agt[] = $agent;
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }

//        var_dump($person); //die();
        return $agt;
    }

    public function afficherParId($id) {
        try {
            $ps = Connexion::getPreparedStatement("SELECT * FROM t_agent WHERE cuid=?");
            $ps->bindValue(1, $id);
            $ps->execute();
            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $agent = new Agent();
                $agent->setCuid($row['cuid']);
                $agent->setNoms($row['noms']);
                $agent->setPrenom($row['prenom']);
                $agent->setSexe($row['sexe']);
                $agent->setTelephone($row['telephone']);
                $agent->setEmail($row['email']);
                $agent->setPwd($row['pwd']);
                $agent->setStatut($row['statut']);
                $agent->setPhoto($row['photo']);
                
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }

        return $agent;
    }

    public function logIn($login, $pass) {
        try {
            $ps = Connexion::getPreparedStatement("SELECT * FROM t_agent WHERE cuid=? and pwd=?");
            $ps->bindValue(1, $login);
            $ps->bindValue(2, $pass);
            $ps->execute();
            while ($row = $ps->fetch(PDO::FETCH_ASSOC)) {
                $agent = new Agent();
                $agent->setCuid($row['cuid']);
                $agent->setNoms($row['noms']);
                $agent->setPrenom($row['prenom']);
                $agent->setSexe($row['sexe']);
                $agent->setTelephone($row['telephone']);
                $agent->setEmail($row['email']);
                $agent->setPwd($row['pwd']);
                $agent->setStatut($row['statut']);
                $agent->setPhoto($row['photo']);
            }
        } catch (Exception $ex) {
            echo 'Erreur AFFICHAGE' . $ex->getMessage();
        }

        return $agent;
    }

}
