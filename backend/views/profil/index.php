<?php

use backend\models\Profil;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ProfilSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profil', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_profil',
            'sejarah:ntext',
            'visi:ntext',
            'misi:ntext',
            'tujuan:ntext',
            //'prodi:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Profil $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_profil' => $model->id_profil]);
                 }
            ],
        ],
    ]); ?> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Profil
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <!-- <?= Html::a('Create Profil', ['create'], ['class' => 'btn btn-success']) ?> -->

            <!-- <?= Html::a('Import Data', ['import'], ['class' => 'btn btn-success']) ?> -->
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
                                    <th>Sejarah</th>
                                    <th>Sejarah Eng</th>
                                    <th>Visi</th>
                                    <th>Visi Eng</th>
                                    <th>Misi</th>
                                    <th>Misi Eng</th>
                                    <th>Tujuan</th>
                                    <th>Tujuan Eng</th>
                                    <th>Prodi</th>
                                    <th>Prodi Eng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($profil as $a) { ?>
                                    <tr>


                                        <td><?= $a->sejarah ?></td>
                                        <td><?= $a->sejarah_eng ?></td>
                                        <td><?= $a->visi ?></td>
                                        <td><?= $a->visi_eng ?></td>
                                        <td><?= $a->misi ?></td>
                                        <td><?= $a->misi_eng ?></td>
                                        <td><?= $a->tujuan ?></td>
                                        <td><?= $a->tujuan_eng ?></td>
                                        <td><?= $a->prodi ?></td>
                                        <td><?= $a->prodi_eng ?></td>
                                        

                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_profil' => $a->id_profil], ['class' => 'btn btn-primary']) ?>

                                            <!-- <?= Html::a('Delete', ['delete', 'id_profil' => $a->id_profil], [
                                                'class' => 'btn btn-danger',
                                                'data' => [
                                                    'confirm' => 'Are you sure you want to delete this item?',
                                                    'method' => '',
                                                ],
                                            ]) ?></td> -->
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
