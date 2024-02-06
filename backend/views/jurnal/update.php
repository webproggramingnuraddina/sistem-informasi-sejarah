<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Jurnal $model */

$this->title = 'Update Jurnal: ' . $model->id_jurnal;
$this->params['breadcrumbs'][] = ['label' => 'Jurnals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jurnal, 'url' => ['view', 'id_jurnal' => $model->id_jurnal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jurnal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
