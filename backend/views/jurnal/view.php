<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Jurnal $model */

$this->title = $model->id_jurnal;
$this->params['breadcrumbs'][] = ['label' => 'Jurnals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jurnal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back', ['/jurnal'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id_jurnal' => $model->id_jurnal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_jurnal' => $model->id_jurnal], [
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
            'id_jurnal',
            'judul_jurnal',
            [
                'attribute' => 'foto',
                'format' => ['html'],
                'value' => fn () => Html::img($model->getImageUrl(), ['style' => 'width:150px']),
            ],
            'deskripsi',
            'deskripsi_eng',
            'jurnal_link',
        ],
    ]) ?>

</div>