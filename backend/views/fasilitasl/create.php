<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Fasilitas $model */

$this->title = 'Create Fasilitas';
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fasilitas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
