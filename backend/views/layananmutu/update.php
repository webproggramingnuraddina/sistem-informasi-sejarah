<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Layananmutu $model */

$this->title = 'Update Layananmutu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Layananmutus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="layananmutu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
