<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kriteria $model */

$this->title = 'Create Kriteria';
$this->params['breadcrumbs'][] = ['label' => 'Kriterias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kriteria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
