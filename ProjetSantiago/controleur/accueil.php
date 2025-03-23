<?php
// Inclusion des modèles nécessaires
include_once "modele/bd.inc.php";
include_once "modele/jeuDAO.php";
include_once "modele/plateformeDAO.php";
include_once "modele/genreDAO.php";

// Récupération des statistiques pour la page d'accueil
$nbJeux = count(getAllJeux());
$nbPlateformes = count(getAllPlateformes());
$nbGenres = count(getAllGenres());

// Inclusion des vues
include_once "vue/entete.php";
include_once "vue/menu.php";
include_once "vue/accueil.php";
include_once "vue/pied.php";
?>