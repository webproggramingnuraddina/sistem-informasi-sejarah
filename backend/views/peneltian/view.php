<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Peneltian $model */

$this->title = $model->id_penelitian;
$this->params['breadcrumbs'][] = ['label' => 'Peneltians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="peneltian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_penelitian' => $model->id_penelitian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_penelitian' => $model->id_penelitian], [
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
            'id_penelitian',
            'judul_penelitian',
            'nama_ketua',
            'kepakaran_ketua',
            'anggota',
            'ang_mhs',
            'link_penelitian',
        ],
    ]) ?>

</div>
