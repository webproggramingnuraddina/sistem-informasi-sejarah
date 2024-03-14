<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

date_default_timezone_set('Asia/Jakarta');
/* @var $this yii\web\View */
/* @var $val backend\models\Berita */

$this->title = 'Detail';
$this->params['breadcrumbs'][] = $this->title;
$lang = Yii::$app->session->get('language', 'id');
Yii::$app->language = $lang;
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
            <div class="col-md-7">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="row pb-1">
                            <div class="clearfix">
                                <div class="post-date ms-0">
                                    <span class="day"> <?= date('d', date($model->created_at)) ?></span>
                                    <span class="month"><?= date('F Y', date($model->created_at)) ?></span>
                                </div>

                            </div>
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
                                <img src="<?php echo $model->getImageUrl() ?>" alt="..." width="700" height="450">

                            </div>

                            <p class=""><?= $model->isi_berita ?></p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="row">
                    <div class="heading heading-border heading-middle-border">
                        <h3 class="text-4"><strong class="font-weight-bold text-1 px-3 text-light py-2 bg-danger">Berita Lainnya</strong></h3>
                    </div>
                    <?php
                    usort($modelBerita, function ($a, $b) {
                        return strtotime($b->created_at) - strtotime($a->created_at);
                    });

                    // Mengambil 12 berita terbaru
                    $latestBerita = array_slice($modelBerita, 0, 6);

                    foreach ($latestBerita as $val) :
                    ?>

                        <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                            <div class="row align-items-center pb-1">
                                <div class="col-sm-6">
                                    <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                        <img src="<?php echo $val->getImageUrl() ?>" width="350" height="150">

                                    </a>
                                </div>
                                <div class="col-sm-6 ps-sm-1">
                                    <div class="thumb-info-caption-text">
                                        <div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-dark px-2 m-0 mb-1 float-none">
                                            <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>" class="text-decoration-none text-color-light">
                                                <?= date('d F Y', date($val->created_at)) ?>
                                            </a>
                                        </div>
                                        <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                                            <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                                <?php
                                                // Mengambil hanya 25 karakter pertama dari deskripsi
                                                $shortDescription = mb_substr($val->tittle, 0, 20, 'UTF-8');
                                                ?>
                                                <p class="text-decoration-none text-color-dark text-color-hover-primary mb-0"><?= $shortDescription; ?>...</p>
                                            </a>
                                        </h2>

                                        <div class="thumb-info-show-more-content" href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                            <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                <?php
                                                // Mengambil hanya 25 karakter pertama dari deskripsi
                                                $shortDescription = mb_substr($val->isi_berita, 0, 40, 'UTF-8');
                                                ?>
                                            <p class="card-text mb-2"><?= $shortDescription; ?>...</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<?php elseif (Yii::$app->language === 'en') : ?>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-7">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="row pb-1">
                            <div class="clearfix">
                                <div class="post-date ms-0">
                                    <span class="day"> <?= date('d', date($model->created_at)) ?></span>
                                    <span class="month"><?= date('F Y', date($model->created_at)) ?></span>
                                </div>

                            </div>
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
                                <img src="<?php echo $model->getImageUrl() ?>" alt="..." width="700" height="450">

                            </div>
                            <p class=""><?= $model->isi_berita_eng ?></p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="row">
                    <div class="heading heading-border heading-middle-border">
                        <h3 class="text-4"><strong class="font-weight-bold text-1 px-3 text-light py-2 bg-danger">Berita Lainnya</strong></h3>
                    </div>
                    <?php
                    usort($modelBerita, function ($a, $b) {
                        return strtotime($b->created_at) - strtotime($a->created_at);
                    });

                    // Mengambil 12 berita terbaru
                    $latestBerita = array_slice($modelBerita, 0, 6);

                    foreach ($latestBerita as $val) :
                    ?>

                        <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                            <div class="row align-items-center pb-1">
                                <div class="col-sm-6">
                                    <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                        <img src="<?php echo $val->getImageUrl() ?>" width="350" height="150">

                                    </a>
                                </div>
                                <div class="col-sm-6 ps-sm-1">
                                    <div class="thumb-info-caption-text">
                                        <div class="thumb-info-type text-light text-uppercase d-inline-block bg-color-dark px-2 m-0 mb-1 float-none">
                                            <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>" class="text-decoration-none text-color-light">
                                                <?= date('d F Y', date($val->created_at)) ?>
                                            </a>
                                        </div>
                                        <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0">
                                            <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                                <?php
                                                // Mengambil hanya 25 karakter pertama dari deskripsi
                                                $shortDescription = mb_substr($val->tittle, 0, 20, 'UTF-8');
                                                ?>
                                                <p class="text-decoration-none text-color-dark text-color-hover-primary mb-0"><?= $shortDescription; ?>...</p>
                                            </a>
                                        </h2>

                                        <div class="thumb-info-show-more-content" href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                            <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                <?php
                                                // Mengambil hanya 25 karakter pertama dari deskripsi
                                                $shortDescription = mb_substr($val->isi_berita, 0, 40, 'UTF-8');
                                                ?>
                                            <p class="card-text mb-2"><?= $shortDescription; ?>...</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>