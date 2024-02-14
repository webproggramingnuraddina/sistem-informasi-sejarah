<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TindaklanjutmutuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindaklanjutmutu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'strategi') ?>

    <?= $form->field($model, 'strategi_eng') ?>

    <?= $form->field($model, 'upaya') ?>

    <?= $form->field($model, 'upaya_eng') ?>

    <?php // echo $form->field($model, 'pelaksanaan_waktu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
