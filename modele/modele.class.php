<?php
class Modele
{
	private $unPDO; //instance de la classe PDO

	public function __construct()
	{
		$this->unPDO = null;
		try {
			$this->unPDO = new PDO("mysql:host=localhost:8889;dbname=air_france", "root", "root"); //PHP DATA OBJECT
		} catch (PDOException $exp) {
			echo "Erreur de connexion à la base de  données <br/>";
			echo $exp->getMessage();
		}
	}

	public function rechercheVol($tab)
	{
		if ($this->unPDO != null) {
			$requete = "select * from vol where villeDepart = :ville_depart and villeArrive = :ville_arrive;";
			$donnees = array(
				":villeDepart" => $tab['ville_depart'],
				":villeArrive" => $tab['ville_arrive'],
			);
			$update = $this->unPDO->prepare($requete);
			$update->execute($donnees);
		}
	}

	/******Les Aeroports******/

	public function selectAllAeroports()
	{
		if ($this->unPDO != null) {
			$requete = "select * from aeroport order by idaeroport desc;";
			$select = $this->unPDO->prepare($requete);
			$select->execute();
			$lesAeroports = $select->fetchAll(PDO::FETCH_CLASS);
			return $lesAeroports;
		} else {
			return null;
		}
	}
	public function insertAeroport($tab)
	{
		if ($this->unPDO != null) {
			$requete = "insert into aeroport values(null, :nom, :pays);";
			$donnees = array(
				":nom" => $tab['nom'],
				":pays" => $tab['pays']
			);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeAeroports($mot)
	{
		if ($this->unPDO != null) {
			$requete = "select * from aeroport where nom like :mot order by idaeroport desc;";
			$donnees = array(":mot" => "%$mot%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesAeroports = $select->fetchAll(PDO::FETCH_CLASS);
			
			return $lesAeroports;
		} else {
			return null;
		}
	}
	public function deleteAeroport($idaeroport)
	{
		if ($this->unPDO != null) {
			$requete = "delete from aeroport where idaeroport = :idaeroport;";
			$donnees = array(":idaeroport" => $idaeroport);
			$delete = $this->unPDO->prepare($requete);
			$delete->execute($donnees);
		}
	}
	public function updateAeroport($tab)
	{
		if ($this->unPDO != null) {
			$requete = "update aeroport set nom = :nom, pays= :pays where idaeroport = :idaeroport;";
			$donnees = array(
				":nom" => $tab['nom'],
				":pays" => $tab['pays'],
				":idaeroport" => $tab['idaeroport']
			);
			$update = $this->unPDO->prepare($requete);
			$update->execute($donnees);
		}
	}
	public function selectWhereAeroport($idaeroport)
	{
		if ($this->unPDO != null) {
			$requete = "select * from aeroport where idaeroport = :idaeroport;";
			$donnees = array(":idaeroport" => $idaeroport);
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$unAeroport = $select->fetch();
			return $unAeroport;
		} else {
			return null;
		}
	}
	/******Les Avions******/

	public function selectAllAvions()
	{
		if ($this->unPDO != null) {
			$requete = "select * from avion order by idavion desc;";
			$select = $this->unPDO->prepare($requete);
			$select->execute();
			$lesAvions = $select->fetchAll(PDO::FETCH_CLASS);
			return $lesAvions;
		} else {
			return null;
		}
	}
	public function insertAvion($tab)
	{
		if ($this->unPDO != null) {
			$requete = "insert into avion values(null, :designation, :constructeur, :nbplaces, :idaeroport);";
			$donnees = array(
				":designation" => $tab['designation'],
				":constructeur" => $tab['constructeur'],
				":nbplaces" => $tab['nbplaces'],
				"idaeroport" => $tab['idaeroport']
			);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeAvions($mot)
	{
		if ($this->unPDO != null) {
			$requete = "select * from avion where designation like :mot or constructeur like :mot or nbplaces like :mot or idaeroport like :mot;";
			$donnees = array(":mot" => "%" . $mot . "%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesAvions = $select->fetchAll(PDO::FETCH_CLASS);
			return $lesAvions;
		} else {
			return null;
		}
	}
	public function deleteAvion($idavion)
	{
		if ($this->unPDO != null) {
			$requete = "delete from avion where idavion = :idavion;";
			$donnees = array(":idavion" => $idavion);
			$delete = $this->unPDO->prepare($requete);
			$delete->execute($donnees);
		}
	}
	public function updateAvion($tab)
	{
		if ($this->unPDO != null) {
			$requete = "update avion set designation = :designation, constructeur = :constructeur, nbplaces = :nbplaces where idavion = :idavion;";
			$donnees = array(
				":designation" => $tab['designation'],
				"constructeur" => $tab['constructeur'],
				"nbplaces" => $tab['nbplaces'],
				"idaeroport" => $tab['idaeroport'],
				":idavion" => $tab['idavion']
			);
			$update = $this->unPDO->prepare($requete);
			$update->execute($donnees);
		}
	}
	public function selectWhereAvion($idavion)
	{
		if ($this->unPDO != null) {
			$requete = "select * from avion where idavion = :idavion;";
			$donnees = array(":idavion" => $idavion);
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$unAvion = $select->fetch();
			return $unAvion;
		} else {
			return null;
		}
	}

	/******Les Pilotes******/

	public function selectAllPilotes()
	{
		if ($this->unPDO != null) {
			$requete = "select * from pilote ;";
			$select = $this->unPDO->prepare($requete);
			$select->execute();
			$lesPilotes = $select->fetchAll(PDO::FETCH_CLASS);
			return $lesPilotes;
		} else {
			return null;
		}
	}
	public function insertPilote($tab)
	{
		if ($this->unPDO != null) {
			$requete = "insert into pilote values(null, :nom, :prenom, :email);";
			$donnees = array(
				":nom" => $tab['nom'],
				":prenom" => $tab['prenom'],
				":email" => $tab['email']
			);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikePilotes($mot)
	{
		if ($this->unPDO != null) {
			$requete = "select * from pilote where nom like :mot or prenom like :mot or email :mot;";
			$donnees = array(":mot" => "%" . $mot . "%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesPilotes = $select->fetchAll(PDO::FETCH_CLASS);
			return $lesPilotes;
		} else {
			return null;
		}
	}
	public function deletePilote($idpilote)
	{
		if ($this->unPDO != null) {
			$requete = "delete from pilote where idpilote = :idpilote;";
			$donnees = array(":idpilote" => $idpilote);
			$delete = $this->unPDO->prepare($requete);
			$delete->execute($donnees);
		}
	}
	public function updatePilote($tab)
	{
		if ($this->unPDO != null) {
			$requete = "update pilote set nom = :nom, prenom = :prenom, email = :email where idpilote = :idpilote;";
			$donnees = array(
				":nom" => $tab['nom'],
				":prenom" => $tab['prenom'],
				":email" => $tab['email'],
				":idpilote" => $tab['idpilote']
			);
			$update = $this->unPDO->prepare($requete);
			$update->execute($donnees);
		}
	}
	public function selectWherePilote($idpilote)
	{
		if ($this->unPDO != null) {
			$requete = "select * from pilote where idpilote = :idpilote;";
			$donnees = array(":idpilote" => $idpilote);
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$unPilote = $select->fetch();
			return $unPilote;
		} else {
			return null;
		}
	}

	/******Les Vols******/

	public function selectAllVols()
	{
		if ($this->unPDO != null) {
			$requete = "select * from vol ;";
			$select = $this->unPDO->prepare($requete);
			$select->execute();
			$lesVols = $select->fetchAll(PDO::FETCH_CLASS);
			return $lesVols;
		} else {
			return null;
		}
	}
	public function insertVol($tab)
	{
		if ($this->unPDO != null) {
			$requete = "insert into vol values(null, :designation, :datevol, :heurevol, :idaeroport, :idpilote);";
			$donnees = array(
				":designation" => $tab['designation'],
				":datevol" => $tab['datevol'],
				":heurevol" => $tab['heurevol'],
				":idaeroport" => $tab['idaeroport'],
				":idpilote" => $tab['idpilote']
			);
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);
		}
	}
	public function selectLikeVols($mot)
	{
		if ($this->unPDO != null) {
			$requete = "select * from vol where designation like :mot or datevol like :mot or heurevol like :mot or idaeroport like :mot or idpilote like :mot;";
			$donnees = array(":mot" => "%" . $mot . "%");
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$lesVols = $select->fetchAll(PDO::FETCH_CLASS);
			return $lesVols;
		} else {
			return null;
		}
	}
	public function deleteVol($idvol)
	{
		if ($this->unPDO != null) {
			$requete = "delete from vol where idvol = :idvol;";
			$donnees = array(":idvol" => $idvol);
			$delete = $this->unPDO->prepare($requete);
			$delete->execute($donnees);
		}
	}
	public function updateVol($tab)
	{
		if ($this->unPDO != null) {
			$requete = "update vol set designation = :designation where idvol = :idvol, datevol = :datevol, heurevol = :heurevol, idaeroport = :idaeroport, idpilote = :idpilote;";
			$donnees = array(
				":designation" => $tab['designation'],
				":idvol" => $tab['idvol'],
				":datevol" => $tab['datevol'],
				":heurevol" => $tab['heurevol'],
				":idaeroport" => $tab['idaeroport'],
				":idpilote" => $tab['idpilote']
			);
			$update = $this->unPDO->prepare($requete);
			$update->execute($donnees);
		}
	}
	public function selectWhereVol($idvol)
	{
		if ($this->unPDO != null) {
			$requete = "select * from vol where idvol = :idvol;";
			$donnees = array(":idvol" => $idvol);
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$unVol = $select->fetch();
			return $unVol;
		} else {
			return null;
		}
	}
	public function verifConnexion($email, $mdp)
	{
		if ($this->unPDO != null) {
			$req= "select * from client where email = :email;";
			$donnees = array(":email" => $email);
			$select = $this->unPDO->prepare($req);
			$select->execute($donnees);
			$unUser = $select->fetch();
			$hash = $unUser['mdp'];

			if ($unUser && password_verify($mdp, $hash)) {
				return $unUser;
			} else {
				return $unUser = null;
			}
		} else {
			return null;
		}
	}
	public function setInscription($nom, $prenom, $email, $mdp)
	{
		$options = [
			'cost' => 12, // the default cost is 10
		];

		if ($this->unPDO != null) {
			try {
				$requete = "insert into client values(null, :nom, :prenom, :email, :mdp, :role);";
				$donnees = array(":nom" => $nom, ":prenom" => $prenom, ":email" => $email, ":mdp" => password_hash($mdp, PASSWORD_DEFAULT, $options), ":role" => "client");
				$select = $this->unPDO->prepare($requete);
				$select->execute($donnees);
				$unUser = $select->fetch();
				return $unUser;
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		} else {
			return null;
		}
	}
	public function updateProfile($nom, $prenom, $email, $mdp)
	{
		$options = [
			'cost' => 12, // the default cost is 10
		];

		if ($this->unPDO != null) {
			try {
				$requete1= "select mdp from client where email = :email;";
				$donnees = array(":email" => $email);
				$select = $this->unPDO->prepare($requete1);
				$select->execute($donnees);
				$unuser = $select->fetch();
				$hash = $unuser['mdp'];

				if ($unuser && password_verify($mdp, $hash)) {
					$requete2 = "update client set nom = :nom, prenom = :prenom, email = :email where email = :email ;";
					$donnees2 = array(":nom" => $nom, ":prenom" => $prenom, ":email" => $email);
					$select2 = $this->unPDO->prepare($requete2);
					$select2->execute($donnees2);

					$requete3= "select * from client where email = :email;";
					$donnees3 = array(":email" => $email);
					$select3 = $this->unPDO->prepare($requete3);
					$select3->execute($donnees3);
					$unuser = $select3->fetch();

					return $unuser;
				} else {
					return null;
				}
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		} else {
			return null;
		}
	}
	public function selectVol($tab)
	{
		if ($this->unPDO != null) {
			try {
				$requete = "select * from vol where villedepart=:depart or villearrive=:arrive or villedepart=:arrive or villearrive=:depart; ";
				$donnees = array(
					":depart" => $tab['depart'], 
					":arrive" => $tab['arrive'],
					":dateDepart" => $tab['dateDepart'] || null,
					":dateArrive" => $tab['dateArrive'] || null
				);
				$select = $this->unPDO->prepare($requete);
				$select->execute($donnees);
				$unSelect = $select->fetchAll(PDO::FETCH_CLASS);

				return $unSelect;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		} else {
			return null;
		}
	}

	public function searchVolById($tab)
	{
		if ($this->unPDO != null) {
			try {
				$req = "SELECT * FROM vol
				WHERE idvol=:idVol;";
				// $requete = "select * from vol where villedepart=:depart or villearrive=:arrive or villedepart=:arrive or villearrive=:depart; ";
				$donnees = array(
					":idVol" => $tab['idVol'],
				);
				$select = $this->unPDO->prepare($req);
				$select->execute($donnees);
				$unSelect = $select->fetchAll(PDO::FETCH_CLASS);

				return $unSelect;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		} else {
			return null;
		}
	}
}
