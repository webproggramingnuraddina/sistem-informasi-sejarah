<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Prestasi $model */

$this->title = 'Update Prestasi: ' . $model->id_prestasi;
$this->params['breadcrumbs'][] = ['label' => 'Prestasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prestasi, 'url' => ['view', 'id_prestasi' => $model->id_prestasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prestasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
