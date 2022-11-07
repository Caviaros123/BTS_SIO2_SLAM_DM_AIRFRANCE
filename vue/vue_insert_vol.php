<section style="padding-left: 280px;padding-right: 280px; padding-top: 80px;">
	<div class="card" style="margin: 28px;margin-right: 0;margin-left: 0;">
		<div class="card-body" style="margin: 3px;">
			<h4 class="text-center card-title" style="margin: 18px;font-weight: bold;">Gestions des Vols</h4>
			<h4 class="card-title">Ajout d'un vol</h4>
			<form method="post" style="margin-bottom: 30px;">
				<div class="mb-3"><input class="form-control form-control-lg" type="text" name="designation" placeholder=" Designation du Vol "></div>
				<div class="mb-3"><input class="form-control form-control-lg" type="date" name="datevol" placeholder=" Date du Vol "></div>
				<div class="mb-3"><input class="form-control form-control-lg" type="time" name="heurevol" placeholder=" Heure duVvol "></div>
				<div class="mb-3"><input class="form-control form-control-lg" type="number" name="idaeroport" placeholder=" ID Aeroport "></div>
				<div class="mb-3"><input class="form-control form-control-lg" type="number" name="idpilote" placeholder=" ID Pilote "></div>

				<div class="container">
					<div class="row">
						<div class="col-auto col-md-6 m-auto"><button class="btn btn-danger d-block w-100" type="reset" name="Annuler" value="Annuler" style="height: 50px;">Annuler</button></div>
						<div class="col-md-6"><button class="btn btn-primary d-block w-100" type="submit" name="Valider" value="Valider" style="height: 50px;">Valider</button></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>