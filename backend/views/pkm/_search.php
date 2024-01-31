<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\PkmSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pkm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pkm') ?>

    <?= $form->field($model, 'judul_pkm') ?>

    <?= $form->field($model, 'nama_ketua') ?>

    <?= $form->field($model, 'kepakaran') ?>

    <?= $form->field($model, 'anggota') ?>

    <?php // echo $form->field($model, 'ang_mhs') ?>

    <?php // echo $form->field($model, 'tahun') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
