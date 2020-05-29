<?php

session_start();
require_once 'classes/Agent.php';
require_once 'classesdao/AgentDAO.php';
$agt = new Agent();
$ag = new AgentDAO();

$login = isset($_POST['login']) ? $_POST['login'] : "";
$password = isset($_POST['pwd']) ? $_POST['pwd'] : "";
//
//
//$requete = "select * from utilisateurs where login='$login' and psswd=MD5('$password')";
//$resultat = $pdo->query($requete);

if ($user = $ag->logIn($login, $password)) {
     
    $_SESSION['user'] = $user;
//    var_dump($_SESSION['user']); die();
    header('Location:projets.php');
} else {
    $_SESSION['erreurLogin'] = "<strong>Erreur!</strong> Login ou mot de passe incorrecte!!!";
    header('location:login.php');
}
?>