<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Tindaklanjutmutu $model */

$this->title = 'Update Tindaklanjutmutu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tindaklanjutmutus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindaklanjutmutu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
