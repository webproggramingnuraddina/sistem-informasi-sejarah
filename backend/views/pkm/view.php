<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Pkm $model */

$this->title = $model->id_pkm;
$this->params['breadcrumbs'][] = ['label' => 'Pkms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pkm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pkm' => $model->id_pkm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pkm' => $model->id_pkm], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['/pkm'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pkm',
            'judul_pkm',
            'nama_ketua',
            'kepakaran',
            'anggota',
            'ang_mhs',
            [
                'attribute' => 'tahun',
                'value' => function ($model) {
                    switch ($model->tahun) {
                        case '2020':
                            return '2020';
                            break;
                        case '2021':
                            return '2021';
                            break;
                        case '2022':
                            return '2022';
                            break;
                        case '2023':
                            return '2023';
                            break;
                        case '2024':
                            return '2024';
                            break;
                        case '2025':
                            return '2025';
                            break;
                        case '2026':
                            return '2026';
                            break;
                        case '2027':
                            return '2027';
                            break;
                        case '2028':
                            return '2028';
                            break;
                        default:
                            return '';
                    }
                },
            ],
        ],
    ]) ?>

</div>
