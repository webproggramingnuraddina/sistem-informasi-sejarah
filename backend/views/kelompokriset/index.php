<?php

use backend\models\Kelompokriset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KelompokrisetSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kelompokrisets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelompokriset-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kelompokriset', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <!-- <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id_kelompokriset',
                    'nama_riset',
                    'nama_riset_eng',
                    'anggota',
                    'deskripsi:ntext',
                    //'deskripsi_eng:ntext',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Kelompokriset $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id_kelompokriset' => $model->id_kelompokriset]);
                        }
                    ],
                ],
            ]); ?> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Kelompok Riset
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Kelompok Riset', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Import Data', ['import'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Nama Riset</th>
                                    <th>Nama Riset Eng</th>
                                    <th>Anggota</th>
                                    <th>Deskripsi</th>
                                    <th>Deskripsi Eng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kelompokriset as $a) { ?>
                                    <tr>
                                        <td><?= $a->nama_riset ?></td>
                                        <td><?= $a->nama_riset_eng ?></td>
                                        <td><?= $a->deskripsi ?></td>
                                        <td><?= $a->deskripsi_eng ?></td>

                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_kelompokriset' => $a->id_kelompokriset], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id_kelompokriset' => $a->id_kelompokriset], [
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