<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kerjasama $model */

$this->title = 'Update Kerjasama: ' . $model->id_kerjasama;
$this->params['breadcrumbs'][] = ['label' => 'Kerjasamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kerjasama, 'url' => ['view', 'id_kerjasama' => $model->id_kerjasama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kerjasama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
