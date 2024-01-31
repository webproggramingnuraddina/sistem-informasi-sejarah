<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Pkm $model */

$this->title = 'Update Pkm: ' . $model->id_pkm;
$this->params['breadcrumbs'][] = ['label' => 'Pkms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pkm, 'url' => ['view', 'id_pkm' => $model->id_pkm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pkm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
