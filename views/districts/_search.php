<?php

use app\models\Districs;
use app\models\Province;
use app\models\Provines;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DistrictsSearch $model */
/** @var yii\widgets\ActiveForm $form */
$defaultProvinceId = Provines::find()->select('id')->where(['is_Default' => true])->scalar();
$provinces = ArrayHelper::map(Provines::find()->all(), 'id', 'provine_name'); // Thay 'name' bằng tên trường chính xác
?>

trong bảng
<div class="districs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'provine_id')->dropDownList(
        $provinces,
        [
            'options' => [$defaultProvinceId => ['Selected' => true]],
            'prompt' => 'None'
        ]
    )->label('Province') ?>


    <?php // echo $form->field($model, 'is_Delete') 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>