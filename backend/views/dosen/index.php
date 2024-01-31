<?php

use backend\models\Dosen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\DosenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dosens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dosen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dosen',
            'nama',
            'nip',
            'kriteria',
            'tmp_tgl_lahir',
            //'email:email',
            //'riwayat_pen',
            //'kepakaran',
            //'mata_kuliah',
            //'image',
            //'detail',
            //'publikasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dosen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_dosen' => $model->id_dosen]);
                 }
            ],
        ],
    ]); ?>


</div>
