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
                        <li class="active text-color-primary">Admission of new students</li>
                    </ul>
                    <br>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Admission of new students</h1>
                </div>
            </div>
        </div>
        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
            <i class="icons icon-arrow-down font-weight-bold"></i>
        </a>
    </section>

    <br><br>
    <div class="container">
        <div class="row pb-1">
            <div class="col-lg-12 mb-4 pb-2">
                <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 5000, 'animateOut': 'fadeOut', 'animateIn': 'fadeIn'}" data-dynamic-height="['700px','700px','700px','700px','700px']">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <?php


                            foreach ($modelMaba as $key => $val) :
                            ?>
                                <img src="<?= $val->getImageUrl() ?>" alt="" class="img-fluid">
                                <br><br>
                                <b class="d-block positive-ls-3 text-4 pt-3 mb-0 line-height-4 text-center"><?= $val->deskripsi_eng ?></b>

                            <?php endforeach; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>