<?php

use backend\models\Tindaklanjutmutu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\TindaklanjutmutuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tindaklanjutmutus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindaklanjutmutu-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <!-- <p>
        <?= Html::a('Create Tindaklanjutmutu', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <!-- <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'strategi:ntext',
                    'strategi_eng:ntext',
                    'upaya:ntext',
                    'upaya_eng:ntext',
                    //'pelaksanaan_waktu:ntext',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Tindaklanjutmutu $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?> -->

    <section class="content-header">

        <h1>
            Tindak Lanjut Mutu
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?= Url::toRoute(['/']) ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data tables</li>
        </ol>
        <br>
        <p>
            <?= Html::a('Create Tindak Lanjut', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    <th>Strategi</th>
                                    <th>Strategi Eng</th>
                                    <th>Upaya</th>
                                    <th>Upaya_eng</th>
                                    <th>Pelaksanan & Waktu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tindaklanjut as $a) { ?>
                                    <tr>

                                        <td><?= $a->id ?></td>
                                        <td><?= $a->strategi ?></td>
                                        <td><?= $a->strategi_eng ?></td>
                                        <td><?= $a->upaya ?></td>
                                        <td><?= $a->upaya_eng ?></td>
                                        <td><?= $a->pelaksanaan_waktu ?></td>

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