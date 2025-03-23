<h2>Liste des jeux</h2>

<?php if(isset($message)) { ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php } ?>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Titre</th>
                <th>Année</th>
                <th>Plateforme</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(count($lesJeux) > 0) {
                foreach($lesJeux as $unJeu) { 
                    $laPlateforme = getPlateformeById($unJeu['idPlateforme']);
                    $leGenre = getGenreById($unJeu['idGenre']);
            ?>
                <tr>
                    <td><?= $unJeu['titre'] ?></td>
                    <td><?= $unJeu['annee'] ?></td>
                    <td><?= $laPlateforme['nom'] ?></td>
                    <td><?= $leGenre['libelle'] ?></td>
                    <td>
                        <a href="index.php?action=detail&id=<?= $unJeu['id'] ?>" class="btn btn-info btn-sm">Détails</a>
                        <a href="index.php?action=formModif&id=<?= $unJeu['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="index.php?action=supprimer&id=<?= $unJeu['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce jeu ?')">Supprimer</a>
                    </td>
                </tr>
            <?php 
                }
            } else { 
            ?>
                <tr>
                    <td colspan="5" class="text-center">Aucun jeu n'a été trouvé dans la base de données.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<a href="index.php?action=formAjout" class="btn btn-success">Ajouter un nouveau jeu</a>