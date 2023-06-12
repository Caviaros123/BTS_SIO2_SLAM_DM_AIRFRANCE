
<?php
require_once("controleur/controleur.class.php");

$unControleur = new Controleur();
$lAvion = null;

if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== false) {
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

	$lesAeroports = $unControleur->selectAllAeroports();
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
} else {
	if (isset($_POST['getAvions']) && $_POST['from'] == 'api') {

		if (isset($_POST['action']) && isset($_POST['idavion'])) {
			$action = $_POST['action'];
			$idavion = $_POST['idavion'];
			switch ($action) {
				case 'sup':
					$unControleur->deleteAvion($idavion);
				case 'edit':
					$lAvion = $unControleur->selectWhereAvion($idavion);
			}
		}

		if (isset($_POST['Valider'])) {
			$unControleur->insertAvion($_POST);
		}

		if (isset($_POST['modifier'])) {
			$unControleur->updateAvion($_POST);
		}

		if (isset($_POST['Filtrer'])) {
			$mot = $_POST['mot'];
			$lesAvions = $unControleur->selectLikeAvions($mot);
		} else {
			$lesAvions = $unControleur->selectAllAvions();
		}

		$unUser = $unControleur->selectAllAvions();

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
				'data' => $unUser
			], 200);
		}
	} else {
		echo "Vous n'avez pas accès à cette page";
	}
}
?>