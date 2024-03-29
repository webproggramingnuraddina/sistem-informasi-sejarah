<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Kriteria $model */

$this->title = $model->id_kriteria;
$this->params['breadcrumbs'][] = ['label' => 'Kriterias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kriteria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kriteria' => $model->id_kriteria], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kriteria' => $model->id_kriteria], [
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
            'id_kriteria',
            'kriteria',
        ],
    ]) ?>

</div>
