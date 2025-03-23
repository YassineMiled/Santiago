<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=liste">Liste des jeux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=formAjout">Ajouter un jeu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Filtrer par plateforme
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        $lesPlateformes = getAllPlateformes();
                        foreach ($lesPlateformes as $unePlateforme) {
                        ?>
                            <li><a class="dropdown-item" href="index.php?action=filtrer&idPlateforme=<?= $unePlateforme['id'] ?>"><?= $unePlateforme['nom'] ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>