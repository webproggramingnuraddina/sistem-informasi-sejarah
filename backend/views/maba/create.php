<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Maba $model */

$this->title = 'Create Maba';
$this->params['breadcrumbs'][] = ['label' => 'Mabas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maba-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
