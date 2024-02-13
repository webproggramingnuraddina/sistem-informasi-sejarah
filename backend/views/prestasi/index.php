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

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prestasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

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
    ]); ?> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Prestasi
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Prestasi', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Nama Mahasiswa</th>
                                    <th>Nama Prestasi</th>
                                    <th>Image</th>
                                    <th>Tahun</th>
                                    <th>Jenis Prestasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($prestasi as $a) { ?>
                                    <tr>
                                        <td><?= $a->nama_mhs ?></td>
                                        <td><?= $a->nama_prestasi ?></td>
                                        <td><?= Html::img($a->getImageUrl(), ['style' => 'width: 150px']) ?></td>
                                        <td><?= $a->tahun ?></td>
                                        <td>
                                            <?php 
                                            if ($a->jenis_prestasi == 1) {
                                                echo "Internasional";
                                            } elseif ($a->jenis_prestasi == 2) {
                                                echo "Nasional";
                                            } elseif ($a->jenis_prestasi == 3) {
                                                echo "Lokal";
                                            } 
                                            ?>
                                        </td>
                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_prestasi' => $a->id_prestasi], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id_prestasi' => $a->id_prestasi], [
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
        <!-- </section>/.content -->
    </section>

</div>