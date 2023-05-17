<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

?>

<div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Benvenuto nel sito web del gruppo INDI!</h1>
        <p class="lead">Entra con le tue credenziali e scopri i servizi che offriamo.</p>
        <p><a class="btn btn-lg btn-success" href="<?= Yii::$app->urlManager->createUrl(['scelta.php']) ?>">Entra in XXX</a></p>

    </div>
    <div class="body-content">
    </div>
</div>
