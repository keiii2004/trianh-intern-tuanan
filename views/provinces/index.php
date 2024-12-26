<?php

use app\models\Provines;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProvincesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Provines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provines-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Provines', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'provine_name',
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
                'urlCreator' => function ($action, Provines $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>