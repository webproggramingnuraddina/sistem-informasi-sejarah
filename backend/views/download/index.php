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

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Download', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <!-- <?= GridView::widget([
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
            ]); ?> -->


    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Download
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Download', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <!-- <th>No</th> -->
                                    <th>Judul</th>
                                    <th>Link Dowbload</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($download as $a) { ?>
                                    <tr>


                                        <td><?= $a->judul ?></td>
                                        <td><?= $a->link_download ?></td>
                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_download' => $a->id_download], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id_download' => $a->id_download], [
                                                'class' => 'btn btn-danger',
                                                'data' => [
                                                    'confirm' => 'Are you sure you want to delete this item?',
                                                    'method' => '',
                                                ],
                                            ]) ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
</div>