<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

date_default_timezone_set('Asia/Jakarta');
/* @var $this yii\web\View */
/* @var $val backend\models\Berita */

$this->title = 'Detail';
$this->params['breadcrumbs'][] = $this->title;

?>
<style>
    .image-float-left {
        float: left;
        /* Mengapit gambar ke kiri */
        margin-right: 10px;
        /* Jarak antara gambar dan kontennya */
    }

    /* Membersihkan efek float yang mempengaruhi elemen di bawahnya */
    .post-content::after {
        content: "";
        display: table;
        clear: both;
    }
</style>

<?php if (Yii::$app->language === 'id') : ?>

    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="row pb-1">
                            <div class="clearfix">
                                <img src="<?php echo $model->getImageUrl() ?>" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid" alt="...">
                                <div class="post-date ms-0">
                                    <span class="day"> <?= date('d', date($model->created_at)) ?></span>
                                    <span class="month"><?= date('F Y', date($model->created_at)) ?></span>
                                </div>
                                <div class="post-content ms-0">
                                    <h2 class="font-weight-semi-bold"><?= $model->tittle ?></h2>
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="">
                                                <td><?= $model->createdBy->username ?></td>
                                            </a> </span>
                                        <span><i class="far fa-clock"></i> <a href="">
                                                <td><?= date('H:i:s', date($model->created_at)) ?></td>
                                            </a> WIB</span>
                                    </div>
                                    <p class=""><?= $model->isi_berita ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

<?php elseif (Yii::$app->language === 'en') : ?>
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="row pb-1">
                            <div class="clearfix">
                                <img src="<?php echo $model->getImageUrl() ?>" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid" alt="...">
                                <div class="post-date ms-0">
                                    <span class="day"> <?= date('d', date($model->created_at)) ?></span>
                                    <span class="month"><?= date('F Y', date($model->created_at)) ?></span>
                                </div>
                                <div class="post-content ms-0">
                                    <h2 class="font-weight-semi-bold"><?= $model->tittle_eng ?></h2>
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="">
                                                <td><?= $model->createdBy->username ?></td>
                                            </a> </span>
                                        <span><i class="far fa-clock"></i> <a href="">
                                                <td><?= date('H:i:s', date($model->created_at)) ?></td>
                                            </a> WIB</span>
                                    </div>
                                    <p class=""><?= $model->isi_berita_eng ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>