v<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'History';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
        <div class="container pt-3 pb-5 mb-5">
            <div class="row mb-3">
                <div class="col">
                    <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                        <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                        <li class="active text-color-primary">History</li>
                    </ul>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">History</h1>
                </div>
            </div>
        </div>
        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
            <i class="icons icon-arrow-down font-weight-bold"></i>
        </a>
    </section>

    <div class="container">
        <!-- <h1><?= Html::encode($this->title) ?></h1> -->

        <!-- <p>This is the About page. You may modify the following file to customize its content:</p> -->

        <!-- <div class="container pt-3 mt-4"> -->
        <section class="section custom-section-shape-background border-0 m-0">
            <div class="container position-relative z-index-3 my-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                        <img src="<?= Yii::$app->getHomeUrl(); ?>img/demos/industry-factory/Misi.jpg" class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" alt="" />
                    </div>
                    <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                        <!-- <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">History</h2> -->
                        <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">History</h3>
                        <!-- <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Company Overview</h3> -->
                        <!-- <p class="custom-font-secondary custom-font-size-1 line-height-7 pb-2 mb-4"> -->
                        <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">
                        The History Education Department has existed since Universitas Negeri Padang was established. Universitas Negeri Padang, initially named Perguruan Tinggi Pendidikan Guru (PTPG) in Batusangkar (1954 - 1956), had six departments, one of which was the History Department. Subsequently, PTPG evolved into the Faculty of Teacher Training and Education Sciences (FKIP) under Universitas Andalas Bukittinggi (1956 - 1958). It was then named FIKIP Unand Padang (1958 - 1964), and from 1964 to 1965, it was called IKIP Jakarta branch Padang. Following that, from 1965 to 1999, it was named IKIP Padang, and since 1999 to the present, its status changed to Universitas Negeri Padang (UNP). With each of the changes outlined above, the History Education Department has remained as one of the enduring study programs.</p>

                        
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</div>