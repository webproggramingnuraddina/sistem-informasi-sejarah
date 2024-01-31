<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kriteria $model */

$this->title = 'Update Kriteria: ' . $model->id_kriteria;
$this->params['breadcrumbs'][] = ['label' => 'Kriterias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kriteria, 'url' => ['view', 'id_kriteria' => $model->id_kriteria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kriteria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
