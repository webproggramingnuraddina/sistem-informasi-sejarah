<?php

use backend\models\Pengumuman;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PengumumanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengumumen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengumuman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pengumuman',
            'judul_pengumaman',
            'isi',
            'image',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pengumuman $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pengumuman' => $model->id_pengumuman]);
                 }
            ],
        ],
    ]); ?>


</div>
