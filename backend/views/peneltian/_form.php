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

    <?= $form->field($model, 'anggota')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ang_mhs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link_penelitian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->dropDownList(
        array_combine(range(date("Y"), date("Y") - 10, -1), range(date("Y"), date("Y") - 10, -1)),
        ['prompt' => 'Pilih Tahun']
    ) ?>

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
