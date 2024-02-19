<?php

use backend\models\Layananmutu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\LayananmutuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Layananmutus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="layananmutu-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <!-- <p>
        <?= Html::a('Create Layananmutu', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <!-- <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'nama_layanan:ntext',
                    'nama_layanan_eng:ntext',
                    'link',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Layananmutu $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?> -->

    <section class="content-header">

        <h1>
            Layanan Mutu
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Layanan Mutu', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Id</th>
                                    <th>nama Layanan</th>
                                    <th>nama Layanan Eng</th>
                                    <th>link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($layananmutu as $a) { ?>
                                    <tr>


                                        <td><?= $a->id ?></td>

                                        <td><?= $a->nama_layanan ?></td>
                                        <td><?= $a->nama_layanan_eng ?></td>
                                        <td><?= $a->link ?></td>

                                        <td><?= Html::a('&nbsp; View&nbsp;', ['view', 'id' => $a->id], ['class' => 'btn btn-primary']) ?>
                                            <?= Html::a('Delete', ['delete', 'id' => $a->id], [
                                                'class' => 'btn btn-danger',
                                                'data' => [
                                                    'confirm' => 'Are you sure you want to delete this item?',
                                                    'method' => '',
                                                ],
                                            ]) ?>
                                        </td>
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