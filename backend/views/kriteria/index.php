<?php

use backend\models\Kriteria;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KriteriaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kriterias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kriteria-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kriteria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kriteria',
            'kriteria',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kriteria $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kriteria' => $model->id_kriteria]);
                 }
            ],
        ],
    ]); ?>


</div>
