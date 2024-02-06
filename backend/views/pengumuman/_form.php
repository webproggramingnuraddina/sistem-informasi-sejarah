<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Pengumuman $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengumuman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_pengumaman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image', [])->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>