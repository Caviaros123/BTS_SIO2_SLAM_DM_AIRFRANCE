<?php

require_once("controleur/controleur.class.php");
$unControleur = new Controleur();

if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== false) {
    require_once("vue/vue_profile.php");

    if (isset($_POST['updateProfile'])) {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $unUser = $unControleur->updateProfile($firstname, $lastname, $email, $mdp);

        if ($unUser == null) {
            $erreur = "Vérifiez vos identifiants !";
            require_once("vue/modal/error_modal.php");

            echo "<script>
                $(document).ready(function() {
                    $('#errorModal').modal('show');
                });
            </script>";
        } else {
            $_SESSION['email'] = $unUser['email'];
            $_SESSION['nom'] = $unUser['nom'];
            $_SESSION['prenom'] = $unUser['prenom'];
            $_SESSION['role'] = $unUser['role'];
            echo "<script>window.location.href='index.php?page=0';</script>";
        }
    }
}else{
    if (isset($_POST['updateProfile'])) {
        if ($_POST['from'] == 'api') {

            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];

            $unUser = $unControleur->updateProfile($nom, $prenom, $email, $mdp);

            if ($unUser == null) {
                header(
                    'Content-Type: application/json',
                );

                echo json_encode([
                    'status' => 400,
                    'message' => 'echec de connexion, vérifiez vos identifiants',
                    'data' => []
                ], 400);
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
                ], 200);
            }

        }
    }
}