<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Download $model */

$this->title = 'Update Download: ' . $model->id_download;
$this->params['breadcrumbs'][] = ['label' => 'Downloads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_download, 'url' => ['view', 'id_download' => $model->id_download]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="download-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
