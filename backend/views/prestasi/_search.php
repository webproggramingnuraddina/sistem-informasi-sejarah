<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\PrestasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prestasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_prestasi') ?>

    <?= $form->field($model, 'nama_mhs') ?>

    <?= $form->field($model, 'nama_prestasi') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'jenis_prestasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
