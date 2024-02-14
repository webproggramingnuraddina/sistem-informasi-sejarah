<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Research Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
<div class="site-about">
    <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
        <div class="container pt-3 pb-5 mb-5">
            <div class="row mb-3">
                <div class="col">
                    <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                        <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                        <li class="active text-color-primary">Research Groups</li>
                    </ul>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Research Groups</h1>
                </div>
            </div>
        </div>
        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
            <i class="icons icon-arrow-down font-weight-bold"></i>
        </a>
    </section>

    <section id="intro">
        <div class="container py-5">
            <div class="row flex-row flex-wrap pt-5">
                <?php foreach ($modelKelompokriset as $key => $val) : ?>
                    <div class="col-lg-6 col-md-6 pb-2">
                        <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation bg-dark" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                            <div class="card-body p-3 z-index-1">
                                <div class="d-flex justify-content-start align-items-center">
                                    <div>
                                        <i class="bi bi-journal-bookmark text-white fs-4"></i>
                                        <strong class="font-weight-bold text-white text-5 mt-4 mb-0"><?= $val->nama_riset_eng ?></strong>
                                        <br>
                                        <i class="bi bi-person text-white fs-5"></i>
                                        <strong class="font-weight-bold text-white text-3 mt-2 mb-0"><?= $val->anggota ?></strong>
                                        <br>
                                        <p class="text-light bg-white bg-opacity-25 "><?= $val->deskripsi_eng ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>