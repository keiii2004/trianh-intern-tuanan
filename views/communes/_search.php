<?php

use app\models\Commune;
use app\models\Communes;
use app\models\Districs;
use app\models\Provines;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CommunesSearch $model */
/** @var yii\widgets\ActiveForm $form */
$defaultProvinceId = Communes::find()->select('id')->where(['is_Default' => true])->scalar();

// Lấy danh sách các tỉnh
$provinces = ArrayHelper::map(Districs::find()->all(), 'id', 'distric_name'); // Thay 'name' bằng tên trường chính xác trong bảng

?>

<div class="communes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'distric_id')->dropDownList(
        $provinces,
        [
            'options' => [$defaultProvinceId => ['selected' => true]], // Chọn tỉnh mặc định
            'prompt' => 'None' // Prompt mặc định
        ]
    )->label('Districts') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>