<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Kelompokriset $model */

$this->title = $model->id_kelompokriset;
$this->params['breadcrumbs'][] = ['label' => 'Kelompokrisets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kelompokriset-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kelompokriset' => $model->id_kelompokriset], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kelompokriset' => $model->id_kelompokriset], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kelompokriset',
            'nama_riset',
            'nama_riset_eng',
            'anggota',
            'deskripsi:ntext',
            'deskripsi_eng:ntext',
        ],
    ]) ?>

</div>
