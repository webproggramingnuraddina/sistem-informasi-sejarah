<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Layananmutu $model */

$this->title = 'Create Layananmutu';
$this->params['breadcrumbs'][] = ['label' => 'Layananmutus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="layananmutu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
