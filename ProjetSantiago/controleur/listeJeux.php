<?php
// Inclusion des modèles nécessaires
include_once "modele/bd.inc.php";
include_once "modele/jeuDAO.php";
include_once "modele/plateformeDAO.php";
include_once "modele/genreDAO.php";

// Récupération des données
$lesJeux = getAllJeux();

// Récupération d'un éventuel message
if (isset($_GET["message"])) {
    $message = $_GET["message"];
}

// Inclusion des vues
include_once "vue/entete.php";
include_once "vue/menu.php";
include_once "vue/listeJeux.php";
include_once "vue/pied.php";
?>