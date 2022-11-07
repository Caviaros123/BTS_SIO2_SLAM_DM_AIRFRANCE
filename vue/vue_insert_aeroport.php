<section style="padding-left: 280px;padding-right: 280px; padding-top: 80px;">
	<div class="card" style="margin: 28px;margin-right: 0;margin-left: 0;">
		<div class="card-body" style="margin: 3px;">
			<h4 class="text-center card-title" style="margin: 18px;font-weight: bold;">Gestions des aéroports</h4>
			<h4 class="card-title">Ajouter des aéroports</h4>
			<form method="post" style="margin-bottom: 30px;">
				<div class="mb-3"><input class="form-control form-control-lg" type="text" name="nom" value="<?= ($lAeroport != null) ? $lAeroport['nom'] : '' ?>" placeholder="Nom"></div>
				<div class="mb-3"><input class="form-control form-control-lg" type="text" name="pays" value="<?= ($lAeroport != null) ? $lAeroport['pays'] : '' ?>" placeholder="Pays"></div>
				<input type="hidden" name="idaeroport" value="
				<?= ($lAeroport != null) ? $lAeroport['idaeroport'] : '' ?>
			">
				<div class="container">
					<div class="row">
						<div class="col-auto col-md-6 m-auto"><button class="btn btn-danger d-block w-100" type="submit" name="Annuler" style="height: 50px;">Annuler</button></div>
						<div class="col-md-6"><button class="btn btn-primary d-block w-100" type="submit" <?= ($lAeroport != null) ? ' name="Modifier" value="Modifier"' : ' name="Valider" value="Valider"' ?> style="height: 50px;">Valider</button></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>