<?php

use app\models\Districs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DistrictsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Districs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="districs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Districs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'distric_name',
            [
                'attribute' => 'provine_id', // Trường 'provine_id' trong Districs
                'value' => function ($model) {
                    return $model->provinces ? $model->provinces->provine_name : ''; // Lấy tên tỉnh từ quan hệ 'provinces'
                },
                'label' => 'Province', // Tiêu đề cột là "Province"
            ],
            [
                'attribute' => 'is_Active',
                'value' => function ($model) {
                    return $model->is_Active ? 'True' : 'False';
                },
                'filter' => [1 => 'True', 0 => 'False'],
            ],
            [
                'attribute' => 'is_Default',
                'value' => function ($model) {
                    return $model->is_Default ? 'True' : 'False';
                },
                'filter' => [1 => 'True', 0 => 'False'],
            ],
            //'is_Delete',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Districs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>