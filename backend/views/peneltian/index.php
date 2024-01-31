<?php

use backend\models\Peneltian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PeneltianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Peneltians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peneltian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Peneltian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penelitian',
            'judul_penelitian',
            'nama_ketua',
            'kepakaran_ketua',
            'anggota',
            //'ang_mhs',
            //'link_penelitian',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Peneltian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penelitian' => $model->id_penelitian]);
                 }
            ],
        ],
    ]); ?>


</div>
