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

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kerjasama', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <?= GridView::widget([
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
                'attribute' => 'bidang',
                'value' => function ($model) {
                    if ($model->bidang === '1') {
                        return 'Bidang Pendidikan';
                    } elseif ($model->bidang === '2') {
                        return 'Bidang Penelitian';
                    } elseif ($model->bidang === '3') {
                        return 'Bidang PKM';
                    }
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kerjasama $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kerjasama' => $model->id_kerjasama]);
                 }
            ],
        ],
    ]); ?> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Kerjasama
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Kerjasama', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    <th>No</th>
                                    <th>Nama Instansi</th>
                                    <th>Nomor</th>
                                    <th>Mulai Kerjasama</th>
                                    <th>Akhir Kerjasama</th>
                                    <th>Manfaat</th>
                                    <th>Manfaat Eng</th>
                                    <th>Bidang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kerjasama as $key => $a) { ?>
                                    <tr>

                                        <td><?= $key + 1 ?></td>
                                        <td><?= $a->nm_instansi ?></td>
                                        <td><?= $a->nomor ?></td>
                                        <td><?= $a->mulai_kerjasama ?></td>
                                        <td><?= $a->akhir_kerjasama ?></td>
                                        <td><?= $a->manfaat ?></td>
                                        <td><?= $a->manfaat_eng  ?></td>
                                        <td>
                                            <?php 
                                            if ($a->bidang == 1) {
                                                echo "Bidang Pendidikan";
                                            } elseif ($a->bidang == 2) {
                                                echo "Bidang Penelitian";
                                            } elseif ($a->bidang == 3) {
                                                echo "Bidang PKM";
                                            } 
                                            ?>
                                        </td>

                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_kerjasama' => $a->id_kerjasama], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id_kerjasama' => $a->id_kerjasama], [
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
