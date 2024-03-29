<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Organisasimhs;

$this->title = 'Organisasi Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
$lang = Yii::$app->session->get('language', 'id');
Yii::$app->language = $lang;
?>
<div class="site-about">

    <?php if (Yii::$app->language === 'id') : ?>
        <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
            <div class="container pt-3 pb-5 mb-5">
                <div class="row mb-3">
                    <div class="col">
                        <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                            <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                            <li class="active text-color-primary">Organisasi Mahasiswa</li>
                        </ul>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Organisasi Mahasiswa</h1>
                    </div>
                </div>
            </div>
            <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
                <i class="icons icon-arrow-down font-weight-bold"></i>
            </a>
        </section>


        <section id="intro">
            <div class="container py-5">


                <div class="row">
                    <?php foreach ($modelOrganisasimhs as $key => $val) : ?>
                        <div class="col-lg-6 col-md-6 ">
                            <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                                <div class="card-body p-3 z-index-1 d-flex align-items-center">
                                    <div class="mr-3">
                                        <a href="" class="d-block text-center bg-color-grey">
                                            <img alt="Doctor" class="img-fluid rounded" src="<?= Html::encode($val->getImageUrl()) ?>">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 ">
                            <div>
                                <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0" class="text-dark">
                                    <?= $val->title ?>
                                </strong>
                                <p class="pt-2"><?= $val->deskripsi ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

        </section>
    <?php elseif (Yii::$app->language === 'en') : ?>
        <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
            <div class="container pt-3 pb-5 mb-5">
                <div class="row mb-3">
                    <div class="col">
                        <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                            <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                            <li class="active text-color-primary">Student Organizations</li>
                        </ul>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Student Organizations</h1>
                    </div>
                </div>
            </div>
            <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
                <i class="icons icon-arrow-down font-weight-bold"></i>
            </a>
        </section>

        <section id="intro">
            <div class="container py-5">

                <div class="row">
                    <?php foreach ($modelOrganisasimhs as $key => $val) : ?>
                        <div class="col-lg-6 col-md-6 ">
                            <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                                <div class="card-body p-3 z-index-1 d-flex align-items-center">
                                    <div class="mr-3">
                                        <a href="" class="d-block text-center bg-color-grey">
                                            <img alt="Doctor" class="img-fluid rounded" src="<?= Html::encode($val->getImageUrl()) ?>">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 ">
                            <div>
                                <strong class="font-weight-bold text-dark d-block text-5 mt-4 mb-0" class="text-dark">
                                    <?= $val->title_eng ?>
                                </strong>
                                <p class="pt-2"><?= $val->deskripsi_eng ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </section>
    <?php endif; ?>
</div>