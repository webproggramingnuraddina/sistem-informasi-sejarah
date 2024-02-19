<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Dosen $model */

$this->title = $model->id_dosen;
$this->params['breadcrumbs'][] = ['label' => 'Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dosen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_dosen' => $model->id_dosen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_dosen' => $model->id_dosen], [
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
            'id_dosen',
            'nama',
            'nip',
            'kriteria',
            'tmp_tgl_lahir',
            'email:email',
            'riwayat_pen',
            'kepakaran',
            'pendidikan_serjana',
            'pendidikan_magister',
            'pendidikan_doktoral',
            'mata_kuliah',
            [
                'attribute' => 'image',
                'format' => ['html'],
                'value' => fn () => Html::img($model->getImageUrl(), ['style' => 'width:100px']),
            ],
            'detail',
            'publikasi',
        ],
    ]) ?>

</div>