<?php
require_once("vue/vue_commande.php");

if (isset($_GET['idVol'])) {
    $searchResults = $unControleur->selectVol($_GET);

    if (count($searchResults) > 0) {
        var_dump($searchResults);
    }
}