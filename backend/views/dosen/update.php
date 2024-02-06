<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Dosen $model */

$this->title = 'Update Dosen: ' . $model->id_dosen;
$this->params['breadcrumbs'][] = ['label' => 'Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dosen, 'url' => ['view', 'id_dosen' => $model->id_dosen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dosen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
