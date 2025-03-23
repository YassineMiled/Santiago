<h2>Modifier un jeu</h2>

<?php if(isset($message)) { ?>
    <div class="alert alert-warning">
        <?= $message ?>
    </div>
<?php } ?>

<div class="card">
    <div class="card-body">
        <form action="index.php?action=modifier" method="post">
            <input type="hidden" name="id" value="<?= $leJeu['id'] ?>">
            
            <div class="mb-3">
                <label for="titre" class="form-label">Titre du jeu</label>
                <input type="text" class="form-control" id="titre" name="titre" value="<?= $leJeu['titre'] ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="annee" class="form-label">Année de sortie</label>
                <input type="number" class="form-control" id="annee" name="annee" min="1970" max="<?= date('Y') ?>" value="<?= $leJeu['annee'] ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="idPlateforme" class="form-label">Plateforme</label>
                <select class="form-select" id="idPlateforme" name="idPlateforme" required>
                    <?php foreach($lesPlateformes as $unePlateforme) { ?>
                        <option value="<?= $unePlateforme['id'] ?>" <?= ($unePlateforme['id'] == $leJeu['idPlateforme']) ? 'selected' : '' ?>>
                            <?= $unePlateforme['nom'] ?> (<?= $unePlateforme['fabricant'] ?>)
                        </option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="idGenre" class="form-label">Genre</label>
                <select class="form-select" id="idGenre" name="idGenre" required>
                    <?php foreach($lesGenres as $unGenre) { ?>
                        <option value="<?= $unGenre['id'] ?>" <?= ($unGenre['id'] == $leJeu['idGenre']) ? 'selected' : '' ?>>
                            <?= $unGenre['libelle'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="index.php?action=detail&id=<?= $leJeu['id'] ?>" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>