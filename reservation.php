<?php
require_once("vue/vue_reservation.php");

if (isset($_POST['reserver'])) {
    $searchResults = $unControleur->selectVol($_POST);

    if (count($searchResults) > 0) {
        require_once("vue/vue_recherche.php");

        echo "<script>
            $(document).ready(function() {
                $('#exampleModal').modal('show');
            });
        </script>";
    }else {
        $searchResults = [];
        require_once("vue/vue_recherche.php");

        echo "<script>
            $(document).ready(function() {
                $('#exampleModal').modal('show');
            });
        </script>";
    }
}
