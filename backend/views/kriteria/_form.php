<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Kriteria $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kriteria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kriteria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
