<?php
require_once("vue/vue_inscription.php");
if (isset($_POST['inscription'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // return var_dump($_POST);

    $unUser = $unControleur->setInscription($nom, $prenom, $email, $mdp);

    if ($unUser == null) {
        echo "<br> Vérifiez vos identifiants";
    } else {
        $_SESSION['email'] = $unUser['email'];
        $_SESSION['nom'] = $unUser['nom'];
        $_SESSION['prenom'] = $unUser['prenom'];
        $_SESSION['role'] = $unUser['role'];
        echo "<script>window.location.href='index.php?page=0';</script>";
        exit;
    }
}
