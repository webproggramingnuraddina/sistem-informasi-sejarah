<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Pkm $model */

$this->title = $model->id_pkm;
$this->params['breadcrumbs'][] = ['label' => 'Pkms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pkm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pkm' => $model->id_pkm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pkm' => $model->id_pkm], [
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
            'id_pkm',
            'judul_pkm',
            'nama_ketua',
            'kepakaran',
            'anggota',
            'ang_mhs',
            'tahun',
        ],
    ]) ?>

</div>
