<?php

use app\models\Provines;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProvincesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="provines-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'provine_name')->dropDownList(ArrayHelper::map(Provines::find()->all(), 'provine_name', 'provine_name'), ['prompt' => "Chọn Tỉnh"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>