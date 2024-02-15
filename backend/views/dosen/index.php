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

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dosen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

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
 -->

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Staff
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Staff', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('import Staff', ['import'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Kriteria</th>
                                    <th>Tempat / Tanggal Lahir</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dosen as $a) { ?>
                                    <tr>

                                        <td><?= $a->nama ?></td>
                                        <td><?= $a->nip ?></td>
                                        <td><?= isset($a->kriteria) ? $a->kriteria0->kriteria : '-' ?></td>
                                        <td><?= $a->tmp_tgl_lahir ?></td>
                                        <td><?= Html::img($a->getImageUrl(), ['style' => 'width: 150px']) ?></td>
                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_dosen' => $a->id_dosen], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id_dosen' => $a->id_dosen], [
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
    <!-- </section>/.content -->
</div>