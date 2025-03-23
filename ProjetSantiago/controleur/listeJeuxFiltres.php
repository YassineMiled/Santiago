<?php
// Inclusion des modèles nécessaires
include_once "modele/bd.inc.php";
include_once "modele/jeuDAO.php";
include_once "modele/plateformeDAO.php";
include_once "modele/genreDAO.php";

// Vérification de l'id de la plateforme
if (!isset($_GET["idPlateforme"])) {
    header("Location: index.php?action=liste");
    exit();
}

// Récupération des données
$idPlateforme = $_GET["idPlateforme"];
$lesJeux = getJeuxByPlateforme($idPlateforme);
$laPlateforme = getPlateformeById($idPlateforme);

// Inclusion des vues
include_once "vue/entete.php";
include_once "vue/menu.php";
include_once "vue/listeJeuxFiltres.php";
include_once "vue/pied.php";
?>