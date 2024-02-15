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

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Peneltian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

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
    ]); ?> -->


    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Penelitian
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Penelitian', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Judul</th>
                                    <th>Nama Ketua</th>
                                    <th>Kepakaran</th>
                                    <th>Anggota</th>
                                    <th>Anggota Mahasiswa</th>
                                    <!-- <th>Link Penelitian</th> -->
                                    <th>Tahun</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($peneltian as $a) { ?>
                                    <tr>


                                        <td><?= $a->judul_penelitian ?></td>
                                        <td><?= $a->nama_ketua ?></td>
                                        <td><?= $a->kepakaran_ketua ?></td>
                                        <td><?= $a->anggota ?></td>
                                        <td><?= $a->ang_mhs ?></td>
                                        <td>
                                            <?php
                                            if ($a->tahun == '2020') {
                                                echo "2020";
                                            } elseif ($a->tahun == '2021') {
                                                echo "2021";
                                            } elseif ($a->tahun == '2022') {
                                                echo "2022";
                                            } elseif ($a->tahun == '2023') {
                                                echo "2023";
                                            } elseif ($a->tahun == '2024') {
                                                echo "2024";
                                            } elseif ($a->tahun == '2025') {
                                                echo "2025";
                                            } elseif ($a->tahun == '2026') {
                                                echo "2026";
                                            } elseif ($a->tahun == '2027') {
                                                echo "2027";
                                            } elseif ($a->tahun == '2028') {
                                                echo "2028";
                                            }
                                            ?>
                                        </td>


                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_penelitian' => $a->id_penelitian], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id_penelitian' => $a->id_penelitian], [
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