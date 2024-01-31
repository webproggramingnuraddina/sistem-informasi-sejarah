<?php

use backend\models\Prestasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PrestasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Prestasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prestasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prestasi',
            'nama_mhs',
            'nama_prestasi',
            'tahun',
            'jenis_prestasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Prestasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_prestasi' => $model->id_prestasi]);
                 }
            ],
        ],
    ]); ?>


</div>
