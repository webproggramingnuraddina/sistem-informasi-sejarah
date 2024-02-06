<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
        <div class="container pt-3 pb-5 mb-5">
            <div class="row mb-3">
                <div class="col">
                    <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                        <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                        <li class="active text-color-primary">Jurnal</li>
                    </ul>
                    <br>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Jurnal</h1>
                </div>
            </div>
        </div>
        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
            <i class="icons icon-arrow-down font-weight-bold"></i>
        </a>
    </section>

    <div class="container position-relative z-index-1 py-5 mb-3">
        <div class="row">
            <?php foreach ($modelJurnal as $key => $val) : ?>
                <div class="col-sm-4 col-md-9 col-lg-4 text-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" data-plugin-options="{'accY': -150}">
                    <div class="card" style="height: 800px; display: flex; flex-direction: column;">

                        <div class="custom-bg-2" style="flex: 1; overflow: hidden;">
                            <img src="<?= $val->getImageUrl() ?>" class="img-fluid p-2" style="width: 100%; height: 100%; object-fit: cover;" alt="" />
                        </div>

                        <div style="padding: 15px;">
                            <strong class="d-block positive-ls-3 text-uppercase text-4"><?= $val->judul_jurnal ?></strong>
                            <p class="d-block text-3" style="text-align: justify;"><?= $val->deskripsi ?></p>

                            <ul class="social-icons social-icons-clean social-icons-icon-dark">
                                <li class="social-icons-instagram">
                                    <a href="<?= $val->jurnal_link ?>" target="_blank" class="text-3" data-cursor-effect-hover="fit"><i class="fas fa-link"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>
</div>