<?php

use backend\models\Jurnal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\JurnalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jurnals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurnal-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jurnal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jurnal',
            'judul_jurnal',
            [
                'attribute' => 'foto',
                'content' => function ($model) {
                    /** @var \backend\models\Produk  $model*/
                    return Html::img($model->getImageUrl(), ['style' => 'width: 80px']);
                }
            ],
            'deskripsi',
            'jurnal_link',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jurnal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jurnal' => $model->id_jurnal]);
                }
            ],
        ],
    ]); ?> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Jurnal
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Jurnal', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Foto</th>
                                    <th>Deskripsi</th>
                                    <th>Jurnal Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jurnal as $a) { ?>
                                    <tr>


                                        <td><?= $a->judul_jurnal ?></td>
                                        <td><?= Html::img($a->getImageUrl(), ['style' => 'width: 150px']) ?></td>
                                        <td><?= $a->deskripsi ?></td>
                                        <td><?= $a->jurnal_link ?></td>
                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id_jurnal' => $a->id_jurnal], ['class' => 'btn btn-primary']) ?>

                                            <?= Html::a('Delete', ['delete', 'id_jurnal' => $a->id_jurnal], [
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