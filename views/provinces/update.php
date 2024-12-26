<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Provines $model */

$this->title = 'Update Provines: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Provines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provines-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
