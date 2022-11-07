
<?php

$leVol = null;
if (isset($_GET['action']) && isset($_GET['idvol'])) {
	$action = $_GET['action'];
	$idvol = $_GET['idvol'];
	switch ($action) {
		case 'sup':
			$unControleur->deleteVol($idpilote);
			break;
		case 'edit':
			$leVol = $unControleur->selectWhereVol($idpilote);
			break;
	}
}


require_once("vue/vue_insert_vol.php");
if (isset($_POST['Valider'])) {
	$unControleur->insertVol($_POST);
}

if (isset($_POST['Modifier'])) {
	$unControleur->updateVol($_POST);
}

if (isset($_POST['Filtrer'])) {
	$mot = $_POST['mot'];
	$lesVols = $unControleur->selectLikeVols($mot);
} else {
	$lesVols = $unControleur->selectAllVols();
}
require_once("vue/vue_les_vols.php");
?>