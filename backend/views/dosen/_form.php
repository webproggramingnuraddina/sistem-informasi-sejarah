<?php

use backend\models\Kriteria;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Dosen $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput() ?>

    <!-- <?= $form->field($model, 'kriteria')->dropDownList([1 => 'Dosen', 2 => 'Dosen Praktisi']) ?> -->
    <?= $form->field($model, 'kriteria')->dropDownList(
        ArrayHelper::map(Kriteria::find()->all(), 'id_kriteria', 'kriteria'),
        ['prompt' => 'Pilih Kriteria']
    ) ?>

    <?= $form->field($model, 'tmp_tgl_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan_sarjana')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'pendidikan_magister')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'pendidikan_doktoral')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepakaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mata_kuliah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image', [])->fileInput() ?>

    <?= $form->field($model, 'detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publikasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script src="<?= Yii::$app->getHomeUrl(); ?>/js/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea', // Pilih elemen textarea yang akan diaktifkan oleh TinyMCE
        plugins: 'autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        setup: function(editor) {
            editor.on('change', function() {
                editor.save(); // Simpan perubahan kembali ke textarea
            });
        }
    });
</script>