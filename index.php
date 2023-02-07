<?php
session_start();
require_once("controleur/controleur.class.php");
$unControleur = new Controleur();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>AIR FRANCE | BTS SIO SLAM</title>
	<meta name="description" content="Fait avec amour par: Prince Thierry LOUBAYI MYSSIE, Valentin CIRCOSTA, SOW GAOUSSOU, BURHAN KARAMAHMUT" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,700,700i,600,600i&amp;display=swap">
	<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/Hero-Carousel-images.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
	<link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>

<body>
	<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
		<div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="index.php?page=0"><img src="assets/img/Air_France_Logo.svg.png" width="230"></a>
			<div class="collapse navbar-collapse" id="navcol-1">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link active" href="index.php?page=0"><img class="pr-2" src="images/home.png" alt="Aeroport" width="30" height="30" sizes="30"><strong>Accueil</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=1"><img class="pr-2" src="images/aeroport.png" alt="Aeroport" width="30" height="30" sizes="30"><strong>Aeroports</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=2"><img class="pr-2" src="images/avion.png" alt="Aeroport" width="30" height="30" sizes="30"><strong>Avions</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=3"><img class="pr-2" src="images/pilote.png" alt="Aeroport" width="30" height="30" sizes="30"><strong>Pilotes</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=4"><img class="pr-2" src="images/vol.png" alt="Aeroport" width="30" height="30" sizes="30">vols</a></li>
					<?php
					if (isset($_SESSION['email'])) {
					?>
						<li class="nav-item"><a class="nav-link text-danger" href="index.php?page=7"><img class="pr-2" src="images/deconnexion.png" alt="Aeroport" width="20" height="20" sizes="20">Déconnexion</a></li>
					<?php
					} else {
					?>
						<li class="nav-item"><a class="nav-link text-success" href="index.php?page=5">Connexion</a></li>
					<?php
					}

					?>
				</ul>
			</div>
		</div>
	</nav>

	<?php

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		if (!isset($_SESSION['email'])) {
			if ($page >= 1 && $page <= 4) {
				header("Location: index.php?page=5");
			}
		}
	} else {
		$page = 0;
	}
	switch ($page) {
		case 0:
			require_once("home.php");
			break;
		case 1:
			require_once("aeroports.php");
			break;
		case 2:
			require_once("avions.php");
			break;
		case 3:
			require_once("pilotes.php");
			break;
		case 4:
			require_once("vols.php");
			break;
		case 5:
			require_once("connexion.php");
			break;
		case 6:
			require_once("inscription.php");
			break;
		case 7:
			require_once("deconnexion.php");
			break;
	}
	?>

	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
	<script src="assets/js/vanilla-zoom.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="assets/js/Lightbox-Gallery.js"></script>
</body>

</html>