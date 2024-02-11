<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Tindaklanjutmutu $model */

$this->title = 'Create Tindaklanjutmutu';
$this->params['breadcrumbs'][] = ['label' => 'Tindaklanjutmutus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindaklanjutmutu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
