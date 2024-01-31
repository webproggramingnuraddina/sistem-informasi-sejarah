<?php

use backend\models\Download;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\DownloadSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Downloads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="download-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Download', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_download',
            'judul',
            'link_download',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Download $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_download' => $model->id_download]);
                 }
            ],
        ],
    ]); ?>


</div>
