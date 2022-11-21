<?php

if (isset($_SESSION['email'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("Location: index.php?page=0");
    require_once("vue/vue_deconnexion.php");
}
