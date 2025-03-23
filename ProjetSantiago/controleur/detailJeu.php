<?php
// Inclusion des modèles nécessaires
include_once "modele/bd.inc.php";
include_once "modele/jeuDAO.php";
include_once "modele/plateformeDAO.php";
include_once "modele/genreDAO.php";

// Vérification de l'id du jeu
if (!isset($_GET["id"])) {
    header("Location: index.php?action=liste");
    exit();
}

// Récupération des données
$idJeu = $_GET["id"];
$leJeu = getJeuById($idJeu);

// Vérification de l'existence du jeu
if (empty($leJeu)) {
    header("Location: index.php?action=liste&message=" . urlencode("Jeu introuvable."));
    exit();
}

$laPlateforme = getPlateformeById($leJeu['idPlateforme']);
$leGenre = getGenreById($leJeu['idGenre']);

// Récupération d'un éventuel message
if (isset($_GET["message"])) {
    $message = $_GET["message"];
}

// Inclusion des vues
include_once "vue/entete.php";
include_once "vue/menu.php";
include_once "vue/detailJeu.php";
include_once "vue/pied.php";
?>