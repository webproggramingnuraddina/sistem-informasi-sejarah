<?php

use yii\helpers\Url;
use yii\helpers\Html; ?>

<section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
    <div class="container pt-3 pb-5 mb-5">
        <div class="row mb-3">
            <div class="col">
                <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                    <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                    <li class="active text-color-primary"><?= Yii::t('app', 'Struktur Organisasi') ?></li>
                </ul>
                <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0"><?= Yii::t('app', 'Struktur Organisasi') ?></h1>
            </div>
        </div>
    </div>
    <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
        <i class="icons icon-arrow-down font-weight-bold"></i>
    </a>
</section>

<section id="intro">
    <div class="container py-5">

        <div class="row pt-5">
            <?php foreach ($struktur as $key => $val) : ?>
                <div class="col-lg-12 col-md-6 pb-2">
                    <div class="card border-0 mb-4 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                        <div class="card-body p-3 z-index-1 text-center">
                            <a href="<?= Html::encode($val->getImageUrl()) ?>" class="d-block text-center bg-color-grey">
                                <img alt="Doctor" class="img-fluid rounded" src="<?= Html::encode($val->getImageUrl()) ?>">
                            </a>

                        </div>
                    </div>
                </div>

        </div>
    <?php endforeach; ?>
    </div>
</section>