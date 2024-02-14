<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Maba $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maba-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image', [])->fileInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'deskripsi_eng')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>