
<?php
require_once("controleur/controleur.class.php");

$unControleur = new Controleur();
$lAeroport = null;

if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== false) {

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
} else {
	if (isset($_POST['getAeroports']) && $_POST['from'] == 'api') {

			if (isset($_POST['action']) && isset($_POST['idaeroport'])) {
				$action = $_POST['action'];
				$idaeroport = $_POST['idaeroport'];
				switch ($action) {
					case 'sup':
						$unControleur->deleteAeroport($idaeroport);
					case 'edit':
						$lAeroport = $unControleur->selectWhereAeroport($idaeroport);
				}
			}

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

            $unUser = $unControleur->selectAllAeroports();

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
    }
}
?>