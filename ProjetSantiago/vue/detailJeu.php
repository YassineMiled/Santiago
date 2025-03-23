<?php if(isset($message)) { ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php } ?>

<div class="card">
    <div class="card-header bg-primary text-white">
        <h2><?= $leJeu['titre'] ?> (<?= $leJeu['annee'] ?>)</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <p><strong>Plateforme :</strong> <?= $laPlateforme['nom'] ?> (<?= $laPlateforme['fabricant'] ?>)</p>
                <p><strong>Genre :</strong> <?= $leGenre['libelle'] ?></p>
                <p><strong>Année de sortie :</strong> <?= $leJeu['annee'] ?></p>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="index.php?action=liste" class="btn btn-secondary">Retour à la liste</a>
        <a href="index.php?action=formModif&id=<?= $leJeu['id'] ?>" class="btn btn-warning">Modifier</a>
        <a href="index.php?action=supprimer&id=<?= $leJeu['id'] ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce jeu ?')">Supprimer</a>
    </div>
</div>