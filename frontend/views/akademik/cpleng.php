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
                    <h3 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Intended Learning Outcome (ILO)</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-5  ">
                <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Knowledge</h2>
                <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Graduates are able to explain concepts, theories, and developments in the field of education and history science.</li>
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Graduates are able to apply methods, models, strategies, planning, assessment, and evaluation of learning and produce works in the field of education and historical learning.</li>
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Graduates are able to apply and conduct research and scientific work in the field of history education and history science (historiography).</li>
                </ul>
                <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Attitude</h2>
                <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Graduates can demonstrate self-confidence, positive personality, ability to work independently and in groups, as well as professional commitment to ethics and the profession.</li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5  ">
                <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Generic Skills</h2>
                <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Graduates are able to design history learning in secondary schools logically, critically, systematically, and innovatively related to history learning and education.</li>
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Graduates are able to teach effectively by utilizing innovative and relevant information technology in the fields of education, learning, and historical research.</li>
                </ul>
                <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Knowledge</h2>
                <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Graduates are able to apply the principles of Historical Thinking in history learning.</li>
                    <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Graduates are able to solve problems based on historical perspectives and are able to write scholarly works that enrich Indonesian historiography.</li>
                </ul>
            </div>
        </div>

    </div>
</div>