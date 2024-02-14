<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Organisasimhs $model */

$this->title = 'Create Organisasimhs';
$this->params['breadcrumbs'][] = ['label' => 'Organisasimhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organisasimhs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
