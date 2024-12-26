<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Communes;
use app\models\Districs;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CommunesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Communes';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo $this->render('_search', ['model' => $searchModel]); ?>
>
<?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'commune_name',
            [
                'attribute' => 'distric_id',
                'value' => function ($model) {
                    return $model->districs ? $model->districs->distric_name : ""; // Hiển thị tên quận
                },
                'filter' => ArrayHelper::map(Districs::find()->all(), 'id', 'distric_name'), // Bộ lọc cho tên quận
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Communes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

</div>