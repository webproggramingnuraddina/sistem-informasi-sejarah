<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Prestasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prestasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_mhs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_prestasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image', [
        'template' => '
                <div class="custom-file">
                    {input}
                    {label}
                    {error}
                </div>
            ',
        'labelOptions' => ['class' => 'custom-file-label'],
        'inputOptions' => ['class' => 'custom-file-input']
    ])->fileInput() ?> 

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'jenis_prestasi')->dropDownList([
        '1' => 'Internasional',
        '2' => 'Nasional',
        '3' => 'Lokal',
    ], ['prompt' => 'Pilih Jenis']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
