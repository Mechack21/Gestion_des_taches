<?php

//require_once '../classesdao/PersonneDAO.php';
//require_once '../classes/Personne.php';
//$a = $_GET['a'];


require_once 'classesdao/PersonneDAO.php';
require_once 'classes/Personne.php';
$a = $_GET['a'];

if(isset($_POST['ajout'])){
    if ($a == inse) {
    $pers = new PersonneDAO();
    $per = new Personne();
    $per->setNom($_POST['nom']);
    $per->setPrenom($_POST['prenom']);
    $per->setDateNaiss($_POST['date']);
    $pers->ajouter($per);
}
header('location:../projets.php');
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