<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Pkm $model */

$this->title = 'Create Pkm';
$this->params['breadcrumbs'][] = ['label' => 'Pkms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pkm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
