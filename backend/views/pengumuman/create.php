<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Pengumuman $model */

$this->title = 'Create Pengumuman';
$this->params['breadcrumbs'][] = ['label' => 'Pengumumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
