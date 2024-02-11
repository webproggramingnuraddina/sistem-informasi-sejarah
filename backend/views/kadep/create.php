<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kadep $model */

$this->title = 'Create Kadep';
$this->params['breadcrumbs'][] = ['label' => 'Kadeps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kadep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
