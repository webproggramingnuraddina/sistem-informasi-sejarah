<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Dosen $model */

$this->title = 'Create Dosen';
$this->params['breadcrumbs'][] = ['label' => 'Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-create">
    <div class="col-12">
        <div class="box">
            <div class="box-header">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
            <div class="box-body">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>