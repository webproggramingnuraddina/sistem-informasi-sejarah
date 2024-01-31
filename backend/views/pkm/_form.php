<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Pkm $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pkm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_pkm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ketua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepakaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ang_mhs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
