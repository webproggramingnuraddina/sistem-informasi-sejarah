<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kerjasama $model */

$this->title = 'Create Kerjasama';
$this->params['breadcrumbs'][] = ['label' => 'Kerjasamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kerjasama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
