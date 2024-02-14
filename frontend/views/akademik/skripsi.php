<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
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
                            <li class="active text-color-primary">Skripsi</li>
                        </ul>
                        <br>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Skripsi</h1>
                    </div>
                </div>
            </div>
            <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
                <i class="icons icon-arrow-down font-weight-bold"></i>
            </a>
        </section>

        <div class="container pt-2 d-flex flex-column align-items-center">
            <div class="row justify-content-center pt-4 mt-5">
                <div class="col-lg-12 text-center">

                    <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Skripsi merupakan karya ilmiah yang ditulis mahasiswa program S1 dalam memenuhi tugas akhir yang membahas sebuah topik atau bidang tertentu berdasarkan hasil kajian pustaka, hasil penelitian lapangan, atau hasil pengembangan. Dalam mempermudah mahasiswa menulis skripsi (tugas akhir), Departemen Sejarah menyediakan panduan penulisan sebagai acuan untuk menyelesaikan skripsi.</p>
                </div>
            </div>
            <br>
            <a href="http://kurikulum.unp.ac.id/root/kurikulum/4" class="btn btn-primary btn-modern text-uppercase bg-color-hover-dark border-color-hover-dark custom-border-radius">Panduan Penulisan Skripsi</a>

            <br><br><br>
        </div>

    <?php elseif (Yii::$app->language === 'en') : ?>
        <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
            <div class="container pt-3 pb-5 mb-5">
                <div class="row mb-3">
                    <div class="col">
                        <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                            <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                            <li class="active text-color-primary">Thesis</li>
                        </ul>
                        <br>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Thesis</h1>
                    </div>
                </div>
            </div>
            <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
                <i class="icons icon-arrow-down font-weight-bold"></i>
            </a>
        </section>

        <div class="container pt-2 d-flex flex-column align-items-center">
            <div class="row justify-content-center pt-4 mt-5">
                <div class="col-lg-12 text-center">

                    <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation text-justify" data-appear-animation="fadeInUpShorter">A thesis is a scientific work written by undergraduate students to fulfill their final assignment which discusses a particular topic or field based on the results of a literature review, field research results, or development results. To make it easier for students to write a thesis (final assignment), the History Department provides a writing guide as a reference for completing the thesis.</p>
                </div>
            </div>
            <br><br>
            <a href="http://kurikulum.unp.ac.id/root/kurikulum/4" class="btn btn-primary btn-modern text-uppercase bg-color-hover-dark border-color-hover-dark custom-border-radius">Thesis Writing Guide</a>

            <br><br><br>
        </div>
    <?php endif; ?>
</div>