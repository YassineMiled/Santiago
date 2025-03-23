<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["liste"] = "listeJeux.php";
    $lesActions["detail"] = "detailJeu.php";
    $lesActions["filtrer"] = "listeJeuxFiltres.php";
    $lesActions["formAjout"] = "formAjout.php";
    $lesActions["ajouter"] = "ajouterJeu.php";
    $lesActions["formModif"] = "formModif.php";
    $lesActions["modifier"] = "modifierJeu.php";
    $lesActions["supprimer"] = "supprimerJeu.php";
    
    if (array_key_exists($action, $lesActions)){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }
}

?>