<?php

use backend\models\Organisasimhs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\OrganisasimhsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Organisasimhs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organisasimhs-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Organisasimhs', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <!-- <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'title',
                    'title_eng',
                    'image',
                    'deskripsi:ntext',
                    //'deskripsi_eng:ntext',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Organisasimhs $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Organisasi Mahasiswa
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Organisasi Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Title</th>
                                    <th>Title Eng</th>
                                    <th>Image</th>
                                    <th>Deskripsi</th>
                                    <th>Deskripsi Eng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($organisasimhs as $a) { ?>
                                    <tr>
                                        <td><?= $a->title ?></td>
                                        <td><?= $a->title_eng ?></td>
                                        <td><?= Html::img($a->getImageUrl(), ['style' => 'width: 150px']) ?></td>
                                        <td><?= $a->deskripsi ?></td>
                                        <td><?= $a->deskripsi_eng ?></td>

                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id' => $a->id], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id' => $a->id], [
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