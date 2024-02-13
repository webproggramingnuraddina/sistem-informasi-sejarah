<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Home $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="home-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image1', [])->fileInput() ?>

    <?= $form->field($model, 'image2', [])->fileInput() ?>

    <?= $form->field($model, 'image3', [])->fileInput() ?>

    <?= $form->field($model, 'link_video')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>