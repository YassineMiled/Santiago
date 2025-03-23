<?php
// Inclusion des modèles nécessaires
include_once "modele/bd.inc.php";
include_once "modele/jeuDAO.php";

// Vérification de l'id du jeu
if (isset($_GET["id"])) {
    // Récupération de l'id du jeu
    $idJeu = $_GET["id"];
    
    // Suppression du jeu dans la base de données
    $result = deleteJeu($idJeu);
    
    // Vérification du résultat de la suppression
    if ($result) {
        $message = "Jeu supprimé avec succès !";
    } else {
        $message = "Erreur lors de la suppression du jeu.";
    }
} else {
    $message = "Aucun jeu spécifié pour la suppression.";
}

// Redirection vers la liste des jeux
header("Location: index.php?action=liste&message=" . urlencode($message));
exit();
?>