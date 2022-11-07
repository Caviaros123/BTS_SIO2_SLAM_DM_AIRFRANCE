<?php
require_once("controleur/controleur.class.php");
$unControleur = new Controleur();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>AIR FRANCE | BTS SIO SLAM</title>
	<meta name="description" content="Fait avec amour par: Prince Thierry LOUBAYI MYSSIE, Valentin CIRCOSTA, SOW GAOUSSOU" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
	<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/Hero-Carousel-images.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
	<link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
	<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
		<div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a href="/"><img src="assets/img/Air_France_Logo.svg.png" width="230"></a>
			<div class="collapse navbar-collapse" id="navcol-1">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link active" href="index.php?page=0"><strong>Accueil</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=1"><strong>gestion des aeroports</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=2"><strong>gestion des avions</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=3"><strong>pilotes</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?page=4">vols</a></li>
					<li class="nav-item"><a class="nav-link text-danger" href="index.php?page=4">Déconnexion</a></li>
				</ul>
			</div>
		</div>
	</nav>


	<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
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