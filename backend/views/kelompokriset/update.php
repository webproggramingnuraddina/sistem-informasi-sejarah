<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kelompokriset $model */

$this->title = 'Update Kelompokriset: ' . $model->id_kelompokriset;
$this->params['breadcrumbs'][] = ['label' => 'Kelompokrisets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kelompokriset, 'url' => ['view', 'id_kelompokriset' => $model->id_kelompokriset]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelompokriset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
