<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Maba $model */

$this->title = 'Update Maba: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mabas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maba-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
