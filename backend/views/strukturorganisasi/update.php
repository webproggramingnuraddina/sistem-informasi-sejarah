<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Strukturorganisasi $model */

$this->title = 'Update Strukturorganisasi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Strukturorganisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="strukturorganisasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
