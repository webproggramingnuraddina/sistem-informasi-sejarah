<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\JurnalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jurnal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_jurnal') ?>

    <?= $form->field($model, 'judul_jurnal') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'jurnal_link') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
