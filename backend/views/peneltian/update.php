<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Peneltian $model */

$this->title = 'Update Peneltian: ' . $model->id_penelitian;
$this->params['breadcrumbs'][] = ['label' => 'Peneltians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penelitian, 'url' => ['view', 'id_penelitian' => $model->id_penelitian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peneltian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
