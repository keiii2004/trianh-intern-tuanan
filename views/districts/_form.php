<?php

use app\models\Provines;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Districs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="districs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'distric_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provine_id')->textInput()->dropDownList(ArrayHelper::map(Provines::find()->all(),'id','provine_name'),['prompt' => 'Chọn Tỉnh']) ?>

    <?= $form->field($model, 'is_Active')->textInput()->dropDownList([ 1 => 'true', 0 => 'false'],["prompt" => "None"]) ?>

    <?= $form->field($model, 'is_Default')->textInput()->dropDownList([ 1 => 'true', 0 => 'false'],["prompt" => "None"]) ?>

    <!-- #$form->field($model, 'is_Delete')->textInput() -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>