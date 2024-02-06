<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Fasilitas $model */

$this->title = 'Update Fasilitas: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id_fasilitas' => $model->id_fasilitas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fasilitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
