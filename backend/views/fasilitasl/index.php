<?php

use backend\models\Fasilitas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\FasilitasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Fasilitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fasilitas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fasilitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_fasilitas',
            'title',
            'deskripsi',
            'image',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Fasilitas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_fasilitas' => $model->id_fasilitas]);
                 }
            ],
        ],
    ]); ?>


</div>
