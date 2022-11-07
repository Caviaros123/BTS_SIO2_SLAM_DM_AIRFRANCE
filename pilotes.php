<?php

	$lePilote = null;
	if (isset($_GET['action']) && isset($_GET['idpilote'])){
		$action = $_GET['action'];
		$idpilote = $_GET['idpilote'];
		switch ($action) 
		{
			case 'sup': $unControleur -> deletePilote($idpilote); break;
			case 'edit': $lePilote = $unControleur -> selectWherePilote($idpilote);
			break;

		}
	}
	

	require_once ("vue/vue_insert_pilote.php");
	if (isset($_POST['Valider']))
	{
		$unControleur -> insertPilote($_POST);
	}

	if (isset($_POST['Modifier']))
	{
		$unControleur -> updatePilote($_POST);
	}

	if(isset($_POST['Filtrer']))
	{
		$mot = $_POST['mot'];
		$lesPilotes = $unControleur -> selectLikePilotes($mot);
	}else {
		$lesPilotes = $unControleur->selectAllPilotes ();
	}
	require_once ("vue/vue_les_pilotes.php");
?>




