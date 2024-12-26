<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Districs $model */

$this->title = 'Create Districs';
$this->params['breadcrumbs'][] = ['label' => 'Districs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="districs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
