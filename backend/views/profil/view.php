<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Profil $model */

$this->title = $model->id_profil;
$this->params['breadcrumbs'][] = ['label' => 'Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_profil' => $model->id_profil], ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::a('Delete', ['delete', 'id_profil' => $model->id_profil], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_profil',
            'sejarah:ntext',
            'sejarah_eng:ntext',
            'visi:ntext',
            'visi_eng:ntext',
            'misi:ntext',
            'misi_eng:ntext',
            'tujuan:ntext',
            'tujuan_eng:ntext',
            'prodi:ntext',
            'prodi_eng:ntext',
        ],
    ]) ?>

</div>
