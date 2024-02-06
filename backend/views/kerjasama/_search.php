<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\KerjasamaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kerjasama-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kerjasama') ?>

    <?= $form->field($model, 'nm_instansi') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'mulai_kerjasama') ?>

    <?= $form->field($model, 'akhir_kerjasama') ?>

    <?php // echo $form->field($model, 'manfaat') ?>

    <?php // echo $form->field($model, 'bidang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
