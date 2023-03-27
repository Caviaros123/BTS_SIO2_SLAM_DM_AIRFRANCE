<?php
require_once("vue/vue_commande.php");

if (isset($_GET['idVol'])) {
    $searchResults = $unControleur->searchVolById($_GET);

    if (count($searchResults) > 0) {
        
    }
}