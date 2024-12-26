<?php

use app\models\Districs;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

use function PHPSTORM_META\map;

/** @var yii\web\View $this */
/** @var app\models\Communes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="communes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'commune_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distric_id')->textInput()->dropDownList(ArrayHelper::map(Districs::find()->all(),'id','distric_name'),['prompt'=> "Chọn huyện"]) ?>

    <?= $form->field($model, 'is_Active')->textInput()->dropDownList([ 1 => 'true', 0 => 'false'],["prompt" => "None"]) ?>

    <?= $form->field($model, 'is_Default')->textInput()->dropDownList([ 1 => 'true', 0 => 'false'],["prompt" => "None"]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>