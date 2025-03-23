<div class="jumbotron bg-light p-5 rounded">
    <h2>Bienvenue sur GameLib</h2>
    <p class="lead">Gérez facilement votre collection de jeux vidéo</p>
    <hr class="my-4">
    <p>Cette application vous permet de cataloguer vos jeux vidéo, de les organiser par plateforme et par genre.</p>
    <a class="btn btn-primary btn-lg" href="index.php?action=liste" role="button">Voir tous les jeux</a>
    <a class="btn btn-success btn-lg" href="index.php?action=formAjout" role="button">Ajouter un jeu</a>
</div>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gérez votre collection</h5>
                <p class="card-text">Ajoutez, modifiez et supprimez vos jeux vidéo en quelques clics.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Organisez par plateforme</h5>
                <p class="card-text">Filtrez vos jeux par console ou PC pour une meilleure organisation.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Classez par genre</h5>
                <p class="card-text">Retrouvez facilement vos jeux d'action, RPG, FPS ou jeux de sport.</p>
            </div>
        </div>
    </div>
</div>

<?php if (isset($nbJeux) && isset($nbPlateformes) && isset($nbGenres)) : ?>
<div class="row mt-5">
    <div class="col-md-12">
        <div class="alert alert-info">
            <p>Statistiques de votre bibliothèque:</p>
            <ul>
                <li>Nombre de jeux: <?= $nbJeux ?></li>
                <li>Nombre de plateformes: <?= $nbPlateformes ?></li>
                <li>Nombre de genres: <?= $nbGenres ?></li>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>