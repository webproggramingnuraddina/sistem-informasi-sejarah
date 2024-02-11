<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Strukturorganisasi $model */

$this->title = 'Create Strukturorganisasi';
$this->params['breadcrumbs'][] = ['label' => 'Strukturorganisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="strukturorganisasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
