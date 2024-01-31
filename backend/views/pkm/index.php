<?php

use backend\models\Pkm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PkmSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pkms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pkm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pkm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pkm',
            'judul_pkm',
            'nama_ketua',
            'kepakaran',
            'anggota',
            //'ang_mhs',
            //'tahun',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pkm $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pkm' => $model->id_pkm]);
                 }
            ],
        ],
    ]); ?>


</div>
