<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Dosen $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput() ?>

    <?= $form->field($model, 'kriteria')->textInput() ?>

    <?= $form->field($model, 'tmp_tgl_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'riwayat_pen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepakaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mata_kuliah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image', [])->fileInput() ?>

    <?= $form->field($model, 'detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publikasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>