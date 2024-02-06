<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DosenSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dosen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dosen') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'kriteria') ?>

    <?= $form->field($model, 'tmp_tgl_lahir') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'riwayat_pen') ?>

    <?php // echo $form->field($model, 'kepakaran') ?>

    <?php // echo $form->field($model, 'mata_kuliah') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'detail') ?>

    <?php // echo $form->field($model, 'publikasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
