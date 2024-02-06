<?php

use backend\models\Fasilitas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\FasilitasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Fasilitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fasilitas-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fasilitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_fasilitas',
            'title',
            'deskripsi',
            'image',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Fasilitas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_fasilitas' => $model->id_fasilitas]);
                }
            ],
        ],
    ]); ?> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Fasilitas
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Fasilitas', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Deskripsi</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fasilitas as $a) { ?>
                                    <tr>


                                        <td><?= $a->title ?></td>
                                        <td><?= $a->deskripsi ?></td>
                                        <td><?= Html::img($a->getImageUrl(), ['style' => 'width: 150px']) ?></td>
                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_fasilitas' => $a->id_fasilitas], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id_fasilitas' => $a->id_fasilitas], [
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


</div>