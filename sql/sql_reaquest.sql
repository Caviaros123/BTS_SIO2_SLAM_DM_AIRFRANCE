
select year(curr_date()) - year(client.data_naiss) age where cleint.email = 'email';

ameliore moi cette requete en recherchons dans le resultat dans l'intervale de la dateDepart et dateArrive : $requete = "select * from vol where villedepart=:depart and villearrive=:arrive;";
				$donnees = array(":depart" => $tab['depart'], ":arrive" => $tab['arrive']);
				$select = $this->unPDO->prepare($requete);
				$select->execute($donnees);
				$unSelect = $select->fetchAll();