<?php
// Inclusion des modèles nécessaires
include_once "modele/bd.inc.php";
include_once "modele/jeuDAO.php";

// Vérification des données du formulaire
if (isset($_POST["id"]) && isset($_POST["titre"]) && isset($_POST["annee"]) && isset($_POST["idPlateforme"]) && isset($_POST["idGenre"])) {
    // Récupération des données du formulaire
    $idJeu = $_POST["id"];
    $titre = $_POST["titre"];
    $annee = $_POST["annee"];
    $idPlateforme = $_POST["idPlateforme"];
    $idGenre = $_POST["idGenre"];
    
    // Modification du jeu dans la base de données
    $result = updateJeu($idJeu, $titre, $annee, $idPlateforme, $idGenre);
    
    // Vérification du résultat de la modification
    if ($result) {
        $message = "Jeu modifié avec succès !";
    } else {
        $message = "Erreur lors de la modification du jeu.";
    }
    
    // Redirection vers le détail du jeu
    header("Location: index.php?action=detail&id=$idJeu&message=" . urlencode($message));
    exit();
} else {
    // Si le formulaire n'a pas été soumis correctement, redirection vers la liste des jeux
    $message = "Données de formulaire incorrectes.";
    header("Location: index.php?action=liste&message=" . urlencode($message));
    exit();
}
?>