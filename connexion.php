<?php

require_once("controleur/controleur.class.php");
$unControleur = new Controleur();
// check header server content-type: text/html
if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== false) {
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
    
            echo "<script>window.location.href='index.php?page=0';</script>";
        }
    }
}else{
    if (isset($_POST['seConnecter'])) {
        if ($_POST['from'] == 'api') {

            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            $unUser = $unControleur->verifConnexion($email, $mdp);

            if ($unUser == null) {
                $erreur = "Vérifiez vos identifiants";
                exit;
            } else {
                header('Content-Type: application/json');

                echo json_encode([
                    'status' => 200,
                    'message' => 'success',
                    'data' => [
                        'email' => $unUser['email'],
                        'nom' => $unUser['nom'],
                        'prenom' => $unUser['prenom'],
                        'role' => $unUser['role']
                    ]
                ], 400);
            }

        }
    }
}

