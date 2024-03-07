<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Profil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="profil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sejarah')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sejarah_eng')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'visi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'visi_eng')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'misi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'misi_eng')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tujuan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tujuan_eng')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prodi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prodi_eng')->textarea(['rows' => 6]) ?>

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
