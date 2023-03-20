<?php
require_once("vue/vue_connexion.php");
if (isset($_POST['seConnecter'])) { 

    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $unUser = $unControleur->verifConnexion($email, $mdp);

    if ($unUser == null) {
        $erreur = "Vérifiez vos identifiants";
        exit;
    } else {
        $_SESSION['email'] = $unUser['email'];
        $_SESSION['nom'] = $unUser['nom'];
        $_SESSION['prenom'] = $unUser['prenom'];
        $_SESSION['role'] = $unUser['role'];
        // header("Location: index.php?page=0");
        echo "<script>window.location.href='index.php?page=0';</script>";
        exit;
    }
}
