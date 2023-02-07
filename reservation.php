<?php
require_once("controleur/controleur.class.php");

$unControleur = new Controleur();
$lAeroport = null;

if (isset($_POST['reserver'])) {
    $data =  $unControleur->selectVol($_POST);

    var_dump($data);
}
