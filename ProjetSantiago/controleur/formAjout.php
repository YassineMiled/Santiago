<?php
// Inclusion des modèles nécessaires
include_once "modele/bd.inc.php";
include_once "modele/plateformeDAO.php";
include_once "modele/genreDAO.php";

// Récupération des données pour les listes déroulantes
$lesPlateformes = getAllPlateformes();
$lesGenres = getAllGenres();

// Récupération d'un éventuel message d'erreur
if (isset($_GET["message"])) {
    $message = $_GET["message"];
}

// Inclusion des vues
include_once "vue/entete.php";
include_once "vue/menu.php";
include_once "vue/formAjout.php";
include_once "vue/pied.php";
?>