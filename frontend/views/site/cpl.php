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
                        <li class="active text-color-primary">CPL</li>
                    </ul>
                    <br>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">CPL</h1>
                </div>
            </div>
        </div>
        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
            <i class="icons icon-arrow-down font-weight-bold"></i>
        </a>
    </section>

    <div class="container pt-2">
        <div class="row justify-content-center pt-4 mt-5">
            <div class="col-lg-12 text-center">
                <!-- <div class="overflow-hidden">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">HOW WE WORK</h2>
                </div> -->
                <div class="overflow-hidden mb-3">
                    <h3 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Capaian Pembelajaran Lulusan (CPL)</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-5 text-justify">
                <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Pengetahuan</h2>
                <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Lulusan mampu menjelaskan konsep, teori dan perkembangan ilmu pengetahuan di bidang pendidikan dan ilmu sejarah.</li>
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Lulusan mampu menerapkan metode, model, strategi, perencanaan, penilaian, dan evaluasi pembelajaran serta menghasilkan karya di bidang pendidikan dan pembelajaran sejarah.</li>
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Lulusan mampu menerapkan dan melakukan penelitian dan karya ilmiah dalam bidang pendidikan sejarah dan ilmu sejarah (historiografi).</li>
                </ul>
                <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Sikap</h2>
                <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Lulusan dapat menunjukkan sikap percaya diri, kepribadian positif, kemampuan bekerja mandiri dan kelompok, serta komitmen profesional terhadap etika dan profesi.</li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 text-justify">
                <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Keterampilan Generik</h2>
                <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Lulusan mampu merancang pembelajaran sejarah di sekolah menengah secara logis, kritis, sistematis, dan inovatif terkait pembelajaran dan pendidikan sejarah.</li>
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Lulusan mampu mengajar secara efektif dengan memanfaatkan teknologi informasi secara inovatif dan relevan dalam bidang pendidikan, pembelajaran dan penelitian sejarah.</li>
                </ul>
                <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Pengetahuan</h2>
                <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Lulusan mampu menerapkan prinsip Berpikir Historis dalam pembelajaran sejarah.</li>
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Lulusan mampu memecahkan permasalahan berdasarkan perspektif sejarah dan mampu menulis karya ilmiah yang memperkaya historiografi Indonesia.</li>
                </ul>
            </div>
        </div>
    </div>
</div>