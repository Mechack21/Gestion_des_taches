<?php

//require_once '../classesdao/PersonneDAO.php';
//require_once '../classes/Personne.php';
//$a = $_GET['a'];


require_once 'classesdao/ProjetDAO.php';
require_once 'classes/Projet.php';
require_once 'classesdao/AgentDAO.php';
require_once 'classes/Agent.php';
$a = $_GET['a'];
$t = $_GET['t'];

if (isset($_POST['ajout'])) {
    if ($a == inse) {
        $prjt = new ProjetDAO();
        $projet = new Projet();
        $projet->setIdprojet($_POST['idprojet']);
        $projet->setNomprojet($_POST['nomprojet']);
        $projet->setDatedebut(date('y-m-d', strtotime($_POST['dateD'])));
        $projet->setDatefin(date('y-m-d', strtotime($_POST['dateF'])));
        $projet->setProgression($_POST['progression']);
        $projet->setCommentaire($_POST['commentaire']);
        $projet->setCuid($_POST['cuid']);
        $prjt->ajouter($projet);
    } elseif ($a == modif) {
        $prjt = new ProjetDAO();
        $projet = new Projet();
        $projet->setIdprojet($_POST['idprojet']);
        $projet->setNomprojet($_POST['nomprojet']);
        $projet->setDatedebut(date('y-m-d', strtotime($_POST['dateD'])));
        $projet->setDatefin(date('y-m-d', strtotime($_POST['dateF'])));
        $projet->setProgression($_POST['progression']);
        $projet->setCommentaire($_POST['commentaire']);
        $projet->setCuid($_POST['cuid']);
        $prjt->modifier($projet);
    } elseif ($a == sup) {
        $prjt = new ProjetDAO();
        $projet = new Projet();
        $projet->setIdprojet($_POST['idprojet']);
//    var_dump($hop); die();
        $prjt->supprimer($projet);
    }elseif ($a = ins and $t = agent) {
        $agt = new AgentDAO();
        $agent = new Agent();
        $agent->setCuid($_POST['cuid']);
        $agent->setNoms($_POST['nomagentt']);
        $agent->setPrenom($_POST['prenom']);
        $agent->setSexe($_POST['sexe']);
        $agent->setTelephone($_POST['telephone']);
        $agent->setEmail($_POST['email']);
        $agent->setPwd($_POST['pwd']);
        $agent->setStatut($_POST['statut']);
        $agent->setPhoto(addslashes(file_get_contents($_FILES['photo']['tmp_name'])));
        $agt->ajouter($agent);
        header('location:agent.php');
    }
//    header('location:projets.php');
}

//if ($a == inse) {
//    $hopt = new PersonneDAO();
//    $hop = new Personne();
//    $hop->setNom($_POST['nom']);
//    $hop->setPrenom($_POST['prenom']);
//    $hop->setDateNaiss($_POST['date']);
//    $hopt->ajouter($hop);
//} elseif ($a == modif) {
//    $hopt = new HopitalDAO();
//    $hop = new Hopital();
//    $hop->setId($_POST['id']);
//    $hop->setNom($_POST['nom']);
//    $hop->setAdresse($_POST['adresse']);
//    $hopt->modifier($hop);
//} elseif ($a == sup) {
//    $hopt = new HopitalDAO();
//    $hop = new Hopital();
//    $hop->setId($_GET['idH']);
////    var_dump($hop); die();
//    $hopt->supprimer($hop);
//}



/* $id = $_POST['id'];
  $nom = $_POST['nom'];
  $adress = $_POST['adresse'];
 */
?>