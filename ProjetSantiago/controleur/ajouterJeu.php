<?php
// Inclusion des modèles nécessaires
include_once "modele/bd.inc.php";
include_once "modele/jeuDAO.php";
include_once "modele/plateformeDAO.php";
include_once "modele/genreDAO.php";

// Vérification des données du formulaire
if (isset($_POST["titre"]) && isset($_POST["annee"]) && isset($_POST["idPlateforme"]) && isset($_POST["idGenre"])) {
    // Récupération des données du formulaire
    $titre = $_POST["titre"];
    $annee = $_POST["annee"];
    $idPlateforme = $_POST["idPlateforme"];
    $idGenre = $_POST["idGenre"];
    
    // Ajout du jeu dans la base de données
    $idJeu = addJeu($titre, $annee, $idPlateforme, $idGenre);
    
    // Vérification du résultat de l'ajout
    if ($idJeu > 0) {
        $message = "Jeu ajouté avec succès !";
    } else {
        $message = "Erreur lors de l'ajout du jeu.";
    }
    
    // Redirection vers la liste des jeux
    header("Location: index.php?action=liste&message=" . urlencode($message));
    exit();
} else {
    // Si le formulaire n'a pas été soumis correctement, redirection vers le formulaire d'ajout
    $message = "Tous les champs sont obligatoires !";
    header("Location: index.php?action=formAjout&message=" . urlencode($message));
    exit();
}
?>