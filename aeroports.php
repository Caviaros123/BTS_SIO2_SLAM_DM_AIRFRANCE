
<?php

$lAeroport = null;
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


require_once("vue/vue_insert_aeroport.php");
if (isset($_POST['Valider'])) {
	$unControleur->insertAeroport($_POST);
}

if (isset($_POST['Modifier'])) {
	$unControleur->updateAeroport($_POST);
}

if (isset($_POST['Filtrer'])) {
	$mot = $_POST['mot'];
	$lesAeroports = $unControleur->selectLikeAeroports($mot);
} else {
	$lesAeroports = $unControleur->selectAllAeroports();
}
require_once("vue/vue_les_aeroports.php");
?>