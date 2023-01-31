<?php
require_once("controleur/controleur.class.php");

$unControleur = new Controleur();
$lAeroport = null;
if (isset($_SESSION['email']) && isset($_SESSION['role']) != 'admin'){
    if (isset($_GET['action']) && isset($_GET['idaeroport'])) {
        $action = $_GET['action'];
        $idaeroport = $_GET['idaeroport'];
        switch ($action) {
            case 'sup':
                $unControleur->deleteAeroport($idaeroport);
                break;
            case 'edit':
                $lAeroport = $unControleur->selectWhereAeroport($idaeroport);
                break;
        }
    }
}else {
    header("Location: index.php?page=5");
}


require_once("vue/vue_insert_aeroport.php");

if (isset($_POST['Valider'])) {
	$unControleur->insertAeroport($_POST);
}

if (isset($_POST['modifier'])) {
	$unControleur->updateAeroport($_POST);
}

if (isset($_POST['Filtrer'])) {
	$mot = $_POST['mot'];
	$lesAeroports = $unControleur->selectLikeAeroports($mot);
} else {
	$lesAeroports = $unControleur->selectAllAeroports();
}
require_once("vue/vue_les_aeroports.php");
