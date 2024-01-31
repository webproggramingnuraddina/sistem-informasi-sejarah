<?php

use backend\models\Kerjasama;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KerjasamaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kerjasamas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kerjasama-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kerjasama', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kerjasama',
            'nm_instansi',
            'nomor',
            'mulai_kerjasama',
            'akhir_kerjasama',
            //'manfaat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kerjasama $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kerjasama' => $model->id_kerjasama]);
                 }
            ],
        ],
    ]); ?>


</div>
