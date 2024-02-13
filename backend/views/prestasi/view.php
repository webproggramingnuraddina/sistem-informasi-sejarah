<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Prestasi $model */

$this->title = $model->id_prestasi;
$this->params['breadcrumbs'][] = ['label' => 'Prestasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="prestasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_prestasi' => $model->id_prestasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_prestasi' => $model->id_prestasi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['/prestasi'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_prestasi',
            'nama_mhs',
            'nama_prestasi',
            [
                'attribute' => 'image',
                'format' => ['html'],
                'value' => fn () => Html::img($model->getImageUrl(), ['style' => 'width:50px']),
            ],
            'tahun',
            [
                'attribute' => 'jenis_prestasi',
                'value' => function ($model) {
                    if ($model->jenis_prestasi === '1') {
                        return 'Internasional';
                    } elseif ($model->jenis_prestasi === '2') {
                        return 'Nasional';
                    } elseif ($model->jenis_prestasi === '3') {
                        return 'Lokal';
                    }
                },
            ],
        ],
    ]) ?>

</div>
