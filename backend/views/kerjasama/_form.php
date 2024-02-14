<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Kerjasama $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kerjasama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nm_instansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mulai_kerjasama')->textInput() ?>

    <?= $form->field($model, 'akhir_kerjasama')->textInput() ?>

    <?= $form->field($model, 'manfaat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manfaat_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang')->dropDownList([
        '1' => 'Bidang Pendidikan',
        '2' => 'Bidang Penelitian',
        '3' => 'Bidang PKM',
    ], ['prompt' => 'Pilih Bidang']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
