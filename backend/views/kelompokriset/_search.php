<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\KelompokrisetSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kelompokriset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kelompokriset') ?>

    <?= $form->field($model, 'nama_riset') ?>

    <?= $form->field($model, 'nama_riset_eng') ?>

    <?= $form->field($model, 'anggota') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?php // echo $form->field($model, 'deskripsi_eng') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
