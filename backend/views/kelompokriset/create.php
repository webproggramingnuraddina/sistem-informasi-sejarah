<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kelompokriset $model */

$this->title = 'Create Kelompokriset';
$this->params['breadcrumbs'][] = ['label' => 'Kelompokrisets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelompokriset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
