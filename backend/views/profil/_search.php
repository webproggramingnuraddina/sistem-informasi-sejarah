<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ProfilSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="profil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_profil') ?>

    <?= $form->field($model, 'sejarah') ?>

    <?= $form->field($model, 'visi') ?>

    <?= $form->field($model, 'misi') ?>

    <?= $form->field($model, 'tujuan') ?>

    <?php // echo $form->field($model, 'prodi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
