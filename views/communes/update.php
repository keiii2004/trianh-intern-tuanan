<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Communes $model */

$this->title = 'Update Communes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Communes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="communes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
