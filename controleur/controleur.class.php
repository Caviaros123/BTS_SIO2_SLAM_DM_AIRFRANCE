<?php
require_once("modele/modele.class.php");
class Controleur
{
	private $unModele;

	public function __construct()
	{
		$this->unModele = new Modele();
	}
	/******Les aeroports******/
	public function selectAllAeroports()
	{
		$lesAeroports = $this->unModele->selectAllAeroports();
		return $lesAeroports;
	}
	public function insertAeroport($tab)
	{
		//contrôler les données avant de les envoyer au modèle
		$this->unModele->insertAeroport($tab);
	}
	public function selectLikeAeroports($mot)
	{
		$lesAeroports = $this->unModele->selectLikeAeroports($mot);
		return $lesAeroports;
	}
	public function deleteAeroport($idaeroport)
	{
		$this->unModele->deleteAeroport($idaeroport);
	}
	public function updateAeroport($tab)
	{
		$this->unModele->updateAeroport($tab);
	}
	public function selectWhereAeroport($idaeroport)
	{
		return $this->unModele->selectWhereAeroport($idaeroport);
	}

	/******Les avions******/
	public function selectAllAvions()
	{
		$lesAvions = $this->unModele->selectAllAvions();
		return $lesAvions;
	}
	public function insertAvion($tab)
	{
		//contrôler les données avant de les envoyer au modèle
		$this->unModele->insertAvion($tab);
	}
	public function selectLikeAvions($mot)
	{
		$lesAvions = $this->unModele->selectLikeAvions($mot);
		return $lesAvions;
	}
	public function deleteAvion($idavion)
	{
		$this->unModele->deleteAvion($idavion);
	}
	public function updateAvion($tab)
	{
		$this->unModele->updateAvion($tab);
	}
	public function selectWhereAvion($idavion)
	{
		return $this->unModele->selectWhereAvion($idavion);
	}
	/******Les pilotes******/
	public function selectAllPilotes()
	{
		$lesPilotes = $this->unModele->selectAllPilotes();
		return $lesPilotes;
	}
	public function insertPilote($tab)
	{
		//contrôler les données avant de les envoyer au modèle
		$this->unModele->insertPilote($tab);
	}
	public function selectLikePilotes($mot)
	{
		$lesPilotes = $this->unModele->selectLikePilotes($mot);
		return $lesPilotes;
	}
	public function deletePilote($idpilote)
	{
		$this->unModele->deletePilote($idpilote);
	}
	public function updatePilote($tab)
	{
		$this->unModele->updatePilote($tab);
	}
	public function selectWherePilote($idpilote)
	{
		return $this->unModele->selectWherePilote($idpilote);
	}
	/******Les vols******/
	public function selectAllVols()
	{
		$lesVols = $this->unModele->selectAllVols();
		return $lesVols;
	}
	public function insertVol($tab)
	{
		//contrôler les données avant de les envoyer au modèle
		$this->unModele->insertVol($tab);
	}
	public function selectLikeVol($mot)
	{
		$lesVols = $this->unModele->selectLikeVols($mot);
		return $lesVols;
	}
	public function deleteVol($idvol)
	{
		$this->unModele->deleteVol($idvol);
	}
	public function updateVol($tab)
	{
		$this->unModele->updateVol($tab);
	}
	public function selectWhereVol($idvol)
	{
		return $this->unModele->selectWhereVol($idvol);
	}
}
