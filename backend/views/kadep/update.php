<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kadep $model */

$this->title = 'Update Kadep: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kadeps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kadep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
