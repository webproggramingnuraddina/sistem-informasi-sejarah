<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Prestasi $model */

$this->title = 'Create Prestasi';
$this->params['breadcrumbs'][] = ['label' => 'Prestasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
