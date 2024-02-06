<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Peneltian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="peneltian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_penelitian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ketua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepakaran_ketua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ang_mhs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_penelitian')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
