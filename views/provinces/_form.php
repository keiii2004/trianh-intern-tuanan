<?php

use app\models\Provines;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Provines $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="provines-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'provine_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_Active')->textInput()->dropDownList([1 => 'true', 0 => 'false'], ["prompt" => "None"]) ?>

    <?= $form->field($model, 'is_Default')->textInput()->dropDownList([1 => 'true', 0 => 'false'], ["prompt" => "None"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>