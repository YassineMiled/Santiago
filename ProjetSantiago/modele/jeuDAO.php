<?php
include_once "bd.inc.php";

function getAllJeux() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM jeu ORDER BY titre");
        $req->execute();
        
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getJeuById($idJeu) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM jeu WHERE id=:idJeu");
        $req->bindValue(':idJeu', $idJeu, PDO::PARAM_INT);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getJeuxByPlateforme($idPlateforme) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM jeu WHERE idPlateforme=:idPlateforme ORDER BY titre");
        $req->bindValue(':idPlateforme', $idPlateforme, PDO::PARAM_INT);
        $req->execute();
        
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addJeu($titre, $annee, $idPlateforme, $idGenre) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO jeu (titre, annee, idPlateforme, idGenre) VALUES (:titre, :annee, :idPlateforme, :idGenre)");
        $req->bindValue(':titre', $titre, PDO::PARAM_STR);
        $req->bindValue(':annee', $annee, PDO::PARAM_INT);
        $req->bindValue(':idPlateforme', $idPlateforme, PDO::PARAM_INT);
        $req->bindValue(':idGenre', $idGenre, PDO::PARAM_INT);
        
        $req->execute();
        return $cnx->lastInsertId();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function updateJeu($idJeu, $titre, $annee, $idPlateforme, $idGenre) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE jeu SET titre=:titre, annee=:annee, idPlateforme=:idPlateforme, idGenre=:idGenre WHERE id=:idJeu");
        $req->bindValue(':idJeu', $idJeu, PDO::PARAM_INT);
        $req->bindValue(':titre', $titre, PDO::PARAM_STR);
        $req->bindValue(':annee', $annee, PDO::PARAM_INT);
        $req->bindValue(':idPlateforme', $idPlateforme, PDO::PARAM_INT);
        $req->bindValue(':idGenre', $idGenre, PDO::PARAM_INT);
        
        return $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function deleteJeu($idJeu) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("DELETE FROM jeu WHERE id=:idJeu");
        $req->bindValue(':idJeu', $idJeu, PDO::PARAM_INT);
        
        return $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

// Programme de test (s'exécute uniquement si ce fichier est appelé directement)
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog de test
    header('Content-Type:text/plain');

    echo "getAllJeux() : \n";
    print_r(getAllJeux());
}
?>