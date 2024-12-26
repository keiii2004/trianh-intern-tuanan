<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Communes $model */

$this->title = 'Create Communes';
$this->params['breadcrumbs'][] = ['label' => 'Communes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="communes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
