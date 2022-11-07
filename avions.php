
<?php

$lAvion = null;
if (isset($_GET['action']) && isset($_GET['idavion'])) {
	$action = $_GET['action'];
	$idavion = $_GET['idavion'];
	switch ($action) {
		case 'sup':
			$unControleur->deleteAvion($idavion);
			break;
		case 'edit':
			$lAvion = $unControleur->selectWhereAvion($idavion);
			break;
	}
}


require_once("vue/vue_insert_avion.php");
if (isset($_POST['Valider'])) {
	$unControleur->insertAvion($_POST);
}

if (isset($_POST['Modifier'])) {
	$unControleur->updateAvion($_POST);
}

if (isset($_POST['Filtrer'])) {
	$mot = $_POST['mot'];
	$lesAvions = $unControleur->selectLikeAvions($mot);
} else {
	$lesAvions = $unControleur->selectAllAvions();
}
require_once("vue/vue_les_avions.php");
?>