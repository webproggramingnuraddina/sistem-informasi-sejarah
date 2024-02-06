<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Kerjasama $model */

$this->title = $model->id_kerjasama;
$this->params['breadcrumbs'][] = ['label' => 'Kerjasamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kerjasama-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kerjasama' => $model->id_kerjasama], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kerjasama' => $model->id_kerjasama], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['/kerjasama'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kerjasama',
            'nm_instansi',
            'nomor',
            'mulai_kerjasama',
            'akhir_kerjasama',
            'manfaat',
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
        ],
    ]) ?>

</div>
