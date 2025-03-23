<?php
include_once "bd.inc.php";

function getAllPlateformes() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM plateforme ORDER BY nom");
        $req->execute();
        
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPlateformeById($idPlateforme) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM plateforme WHERE id=:idPlateforme");
        $req->bindValue(':idPlateforme', $idPlateforme, PDO::PARAM_INT);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

// Programme de test (s'exécute uniquement si ce fichier est appelé directement)
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog de test
    header('Content-Type:text/plain');

    echo "getAllPlateformes() : \n";
    print_r(getAllPlateformes());
}
?>