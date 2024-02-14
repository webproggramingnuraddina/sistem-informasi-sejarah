<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

use frontend\components\Translator;



?>
<div role="main" class="main">
    <?php foreach ($modelHome as $key => $val) : ?>
        <section class="section section-with-shape-divider overflow-hidden border-0 m-0" style="background-image: url('<?php echo $val->getImageUrl(); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center 70px;">

            <div class="shape-divider shape-divider-bottom" style="height: 120px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
                    <polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
                </svg>
            </div>
            <div class="container custom-container-absolute-centered-x">
                <div class="row justify-content-end">
                    <div class="col-auto position-relative">
                        <img src="<?= $val->getImageUrl2() ?>" class="img-fluid box-shadow-4 position-relative bottom-10 right-0 d-none d-sm-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" width="500" height="400" />
                    </div>

                </div>
            </div>
            <div class="container-fluid px-0 mb-5">
                <div class="row">
                    <div class="col-sm-9 col-md-8 col-lg-7 col-xl-4 text-center text-sm-end z-index-0 px-5 px-sm-0 mt-5 mt-sm-0 pt-4 pt-sm-0">
                        <div class="position-relative bg-color-grey p-5">
                            <div class="spacer my-5 py-2 d-none d-sm-block"></div>
                            <div class="overflow-hidden pt-sm-5 mt-sm-5">
                                <h1 class="font-weight-semibold text-10 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300"><?= Yii::t('app', 'Departemen Sejarah') ?></h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <h4 class="font-weight-semibold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">
                                    <strong class="font-weight-extra-bold custom-font-size-2"><?= Yii::t('app', 'Universitas Negeri Padang') ?></strong>
                                </h4>
                            </div>
                            <p class="custom-font-size-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Embracing the Future Through Understanding the Past</p>
                            <a href="#intro" class="btn custom-svg-btn-style-1 text-color-hover-primary mb-sm-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                <svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
                                    <polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 " />
                                </svg>
                                GET STARTED
                            </a>
                            <div class="custom-hero-sub-images-style-1 text-start">
                                <div class="custom-hero-sub-images-shadow"></div>
                                <img src="<?= $val->getImageUrl3() ?>" class="img-fluid appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="700" alt="" />
                            </div>
                            <div class="spacer py-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>

    <div class="container py-4 my-5" id="intro">
        <div class="row">
            <div class="col-lg-6">
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-bold text-11 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">The Highest Quality</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <h3 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">THE LARGEST METALS MANUFACTURING</h3>
                </div>
                <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
            </div>
            <div class="col-lg-6">
                <p class="pt-3 pb-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.</p>
                <a href="#" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="650">
                    READ MORE
                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <section class="section custom-section-shape-background border-0 m-0">
        <div class="custom-shape-divider z-index-1" style="height: 129px;"></div>
        <div class="container position-relative z-index-3">
            <div class="row align-items-center justify-content-center">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h3 class="font-weight-bold text-transform-none text-12 line-height-2 mb-3"><?= Yii::t('app', 'Departemen Sejarah') ?></h3> <br>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                        <div class="row">
                            <?php foreach ($modelKadep as $key => $val) : ?>
                                <?php if ($val->id == 2) { ?>
                                    <div class="col-sm-6 mb-4 mb-md-0" style="padding-bottom: 20px;">
                                        <a href="#ourHistoryLightbox">
                                            <span class="thumb-info custom-thumb-info-style-1 thumb-info-no-borders thumb-info-no-borders-rounded">

                                                <img src="<?= $val->getImageUrl() ?>" alt="" class="img-fluid" style="max-width: 250px; max-height: 320px;">

                                            </span>
                                        </a>

                                        <p class="d-block positive-ls-3 text-2 pt-3 mb-0 line-height-4"><?= $val->nama ?></p>
                                        <p class="d-block positive-ls-3 text-1 mb-0 opacity-7"><?= $val->jabatan ?></p>
                                    </div>
                                <?php } ?>
                            <?php endforeach; ?>

                            <?php foreach ($modelKadep as $key => $val) : ?>
                                <?php if ($val->id == 1) { ?>
                                    <div class="col-sm-6">
                                        <a href="#ourHistoryLightbox">
                                            <span class="thumb-info custom-thumb-info-style-1 thumb-info-no-borders thumb-info-no-borders-rounded">

                                                <img src="<?= $val->getImageUrl() ?>" alt="" class="img-fluid" style="max-width: 250px; max-height: 400px;">


                                            </span>
                                        </a>

                                        <p class="d-block positive-ls-3 text-2 pt-3 mb-0 line-height-4"><?= $val->nama ?></p>
                                        <p class="d-block positive-ls-3 text-1 mb-0 opacity-7"><?= $val->jabatan ?></p>
                                    </div>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <?php foreach ($modelKadep as $key => $val) : ?>
                        <?php if ($val->id == 1) { ?>
                            <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                                <p class="font-weight-semibold text-color-dark"><?= Yii::t('app', $val->deskripsi) ?></p>
                                <a href="#" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                    READ MORE
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                    </svg>
                                </a>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>
    </section>

    <!-- <section class="section section-with-shape-divider border-0 z-index-2 pb-0 m-0"> -->
    <!-- <div class="shape-divider shape-divider-reverse-xy" style="height: 120px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
            <polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
        </svg>
    </div> -->
    <div class="container pt-3 mt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9 col-xl-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-8 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><u><?= Yii::t('app', 'Berita') ?></u></h2>
                </div>

            </div>
        </div>
        <?php if (Yii::$app->language === 'id') : ?>
            <div class="container">
                <div class="row pb-1">
                    <div class="col-lg-12 mb-4 pb-2">
                        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 5000, 'animateOut': 'fadeOut', 'animateIn': 'fadeIn'}" data-dynamic-height="['700px','700px','700px','700px','700px']" style="height: 500px;">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <?php


                                    // Mengambil 12 berita terbaru
                                    $latestBerita = array_slice($modelBerita, 0, 8);

                                    foreach ($latestBerita as $key => $val) :
                                    ?>

                                        <div class="owl-item position-relative overlay overlay-show overlay-op-3">
                                            <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>" class="text-decoration-none">
                                                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" style="background-image: url('<?php echo $val->getImageUrl() ?>'); background-size: cover; background-position: center; "></div>


                                                <div class="container position-relative z-index-3 h-100">
                                                    <div class="row justify-content-center align-items-end h-100">
                                                        <div class="col pb-2 mb-4 appear-animation" data-appear-animation="fadeInDownShorter">
                                                            <span class="badge badge-dark bg-color-primary badge-sm text-uppercase mb-2">
                                                                <?= date('d F Y', date($val->created_at)) ?>
                                                            </span>

                                                            <h3 class="text-light text-9 font-weight-bold mb-2">
                                                                <?php
                                                                // Mengambil hanya 25 karakter pertama dari deskripsi
                                                                $shortDescription = mb_substr($val->tittle, 0, 50, 'UTF-8');
                                                                ?>
                                                                <p class="card-text mb-1 text-light mb-0"><?= $shortDescription; ?>...</p>
                                                            </h3>
                                                            <p class="text-light opacity-6 text-4">

                                                                <?php
                                                                // Mengambil hanya 25 karakter pertama dari deskripsi
                                                                $shortDescription = mb_substr($val->isi_berita, 0, 130, 'UTF-8');
                                                                ?>
                                                            <p class="card-text mb-2 text-light opacity-4"><?= $shortDescription; ?>...</p>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    <?php endforeach; ?>


                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"></button>
                                <button type="button" role="presentation" class="owl-next"></button>
                            </div>
                            <div class="owl-dots mb-2">
                                <?php


                                // Mengambil 12 berita terbaru
                                $latestBerita = array_slice($modelBerita, 0, 8);

                                foreach ($latestBerita as $key => $val) :
                                ?>
                                    <button role="button" class="owl-dot <?= ($key === 0) ? 'active' : ''; ?>"><span></span></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <?php


                    // Mengambil 12 berita terbaru
                    $latestBerita = array_slice($modelBerita, 0, 8);

                    foreach ($latestBerita as $val) :
                    ?>
                        <div class="col-lg-6">
                            <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                <div class="row align-items-center pb-1">
                                    <div class="col-sm-6">
                                        <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                            <img src="<?php echo $val->getImageUrl() ?>" width="600" height="200">

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
                                                    $shortDescription = mb_substr($val->tittle, 0, 50, 'UTF-8');
                                                    ?>
                                                    <p class="text-decoration-none text-color-dark text-color-hover-primary mb-0"><?= $shortDescription; ?>...</p>
                                                </a>
                                            </h2>

                                            <div class="thumb-info-show-more-content" href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    <?php
                                                    // Mengambil hanya 25 karakter pertama dari deskripsi
                                                    $shortDescription = mb_substr($val->isi_berita, 0, 80, 'UTF-8');
                                                    ?>
                                                <p class="card-text mb-2"><?= $shortDescription; ?>...</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        <?php elseif (Yii::$app->language === 'en') : ?>
            <div class="container">
                <div class="row pb-1">
                    <div class="col-lg-12 mb-4 pb-2">
                        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 5000, 'animateOut': 'fadeOut', 'animateIn': 'fadeIn'}" data-dynamic-height="['700px','700px','700px','700px','700px']" style="height: 500px;">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <?php


                                    // Mengambil 12 berita terbaru
                                    $latestBerita = array_slice($modelBerita, 0, 8);

                                    foreach ($latestBerita as $key => $val) :
                                    ?>

                                        <div class="owl-item position-relative overlay overlay-show overlay-op-3">
                                            <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>" class="text-decoration-none">
                                                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" style="background-image: url('<?php echo $val->getImageUrl() ?>'); background-size: cover; background-position: center; "></div>


                                                <div class="container position-relative z-index-3 h-100">
                                                    <div class="row justify-content-center align-items-end h-100">
                                                        <div class="col pb-2 mb-4 appear-animation" data-appear-animation="fadeInDownShorter">
                                                            <span class="badge badge-dark bg-color-primary badge-sm text-uppercase mb-2">
                                                                <?= date('d F Y', date($val->created_at)) ?>
                                                            </span>

                                                            <h3 class="text-light text-9 font-weight-bold mb-2">
                                                                <?php
                                                                // Mengambil hanya 25 karakter pertama dari deskripsi
                                                                $shortDescription = mb_substr($val->tittle_eng, 0, 50, 'UTF-8');
                                                                ?>
                                                                <p class="card-text mb-1 text-light mb-0"><?= $shortDescription; ?>...</p>
                                                            </h3>
                                                            <p class="text-light opacity-6 text-4">

                                                                <?php
                                                                // Mengambil hanya 25 karakter pertama dari deskripsi
                                                                $shortDescription = mb_substr($val->isi_berita_eng, 0, 130, 'UTF-8');
                                                                ?>
                                                            <p class="card-text mb-2 text-light opacity-7"><?= $shortDescription; ?>...</p>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    <?php endforeach; ?>


                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"></button>
                                <button type="button" role="presentation" class="owl-next"></button>
                            </div>
                            <div class="owl-dots mb-2">
                                <?php


                                // Mengambil 12 berita terbaru
                                $latestBerita = array_slice($modelBerita, 0, 8);

                                foreach ($latestBerita as $key => $val) :
                                ?>
                                    <button role="button" class="owl-dot <?= ($key === 0) ? 'active' : ''; ?>"><span></span></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <?php


                    // Mengambil 12 berita terbaru
                    $latestBerita = array_slice($modelBerita, 0, 8);

                    foreach ($latestBerita as $val) :
                    ?>
                        <div class="col-lg-6">
                            <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                <div class="row align-items-center pb-1">
                                    <div class="col-sm-6">
                                        <a href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                            <img src="<?php echo $val->getImageUrl() ?>" width="600" height="200">

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
                                                    $shortDescription = mb_substr($val->tittle_eng, 0, 50, 'UTF-8');
                                                    ?>
                                                    <p class="text-decoration-none text-color-dark text-color-hover-primary mb-0"><?= $shortDescription; ?>...</p>
                                                </a>
                                            </h2>

                                            <div class="thumb-info-show-more-content" href="<?= Url::toRoute(['detail/detail', 'id_berita' => $val->id_berita]) ?>">
                                                <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">
                                                    <?php
                                                    // Mengambil hanya 25 karakter pertama dari deskripsi
                                                    $shortDescription = mb_substr($val->isi_berita_eng, 0, 80, 'UTF-8');
                                                    ?>
                                                <p class="card-text mb-2"><?= $shortDescription; ?>...</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- </section> -->

    <section class="section custom-section-shape-background border-0 m-0">
        <div class="custom-shape-divider z-index-1" style="height: 129px;"></div>
        <div class="container position-relative z-index-3 mt-3 mb-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                    <img src="img/demos/industry-factory/generic/generic-1.jpg" class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" alt="" />
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">SPECIAL SERVICES</h2>
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Other Industries</h3>
                    <p class="custom-font-secondary custom-font-size-1 line-height-7 pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod.</p>
                    <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3">
                        <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nibh</li>
                        <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
                        <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Ultricies nibh pellen</li>
                        <li class="font-weight-semibold text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Pellentesque ultricies nubh</li>
                    </ul>
                    <a href="demo-industry-factory-services-detail.html" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                        READ MORE
                        <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 border-0 m-0" style="background-image: url(img/demos/industry-factory/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
        <div class="container py-3">
            <div class="row align-items-center justify-content-center text-center text-lg-start">
                <div class="col-md-8 col-lg-9 mb-4 mb-lg-0">
                    <h2 class="text-color-light font-weight-bold custom-positive-ls-5px mb-0">Custom Steel Pipe For Your Next Project</h2>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a href="demo-industry-factory-contact.html" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-light text-color-light text-color-hover-dark">
                        <svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
                            <polygon fill="transparent" stroke="#FFF" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 " />
                        </svg>
                        GET A QUOTE
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container pt-2">
        <div class="row justify-content-center pt-4 mt-5">
            <div class="col-lg-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">HOW WE WORK</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Top Working Process</h3>
                </div>
                <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row justify-content-center process custom-process-style-1 my-5">
                    <div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content text-color-primary">1</strong>
                        </div>
                        <div class="process-step-content px-lg-4">
                            <h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">BRAINSTORM</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.</p>
                        </div>
                    </div>
                    <div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content text-color-primary">2</strong>
                        </div>
                        <div class="process-step-content px-lg-4">
                            <h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">DEVELOPMENT</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.</p>
                        </div>
                    </div>
                    <div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content text-color-primary">3</strong>
                        </div>
                        <div class="process-step-content px-lg-4">
                            <h4 class="font-weight-bold custom-font-size-2 pb-1 mb-2">DELIVERY</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="section section-with-shape-divider border-0 m-0">
        <div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
                <polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
            </svg>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-y" style="height: 120px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
                <polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
            </svg>
        </div>
        <div class="container py-5 my-5">
            <div class="row mb-5">
                <div class="col">
                    <div class="overflow-hidden">
                        <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">TESTIMONIALS</h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Hear From Some Previous Clients</h3>
                    </div>
                    <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod.</p>
                </div>
            </div>
            <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                    <div class="owl-carousel nav-style-1 nav-svg-arrows-1 nav-dark" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 2}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 2}}, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 60, 'stagePadding': 50}">
                        <div>
                            <div class="custom-testimonial-style-1 testimonial testimonial-style-3">
                                <blockquote>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum torr. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="img/demos/industry-factory/testimonials/author-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="ms-3"><strong class="font-weight-semibold text-color-dark text-4">John Smith</strong><span class="text-1">CLIMB THE MOUNTAIN</span></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-testimonial-style-1 testimonial testimonial-style-3">
                                <blockquote>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum torr. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="img/demos/industry-factory/testimonials/author-2.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="ms-3"><strong class="font-weight-semibold text-color-dark text-4">John Doe</strong><span class="text-1">AVANT GARDEN</span></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-testimonial-style-1 testimonial testimonial-style-3">
                                <blockquote>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum torr. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="img/demos/industry-factory/testimonials/author-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="ms-3"><strong class="font-weight-semibold text-color-dark text-4">Robert Doe</strong><span class="text-1">OKLER THEMES</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php foreach ($modelHome as $key => $val) : ?>
        <div class="container py-5 my-4">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                    <div class="featured-boxes featured-boxes-modern-style-1 box-shadow-3">
                        <div class="featured-box custom-featured-box-with-video">
                            <video class="custom-featured-box-video" controls preload="true">
                                <source src="<?= $val->link_video ?>" type="video/mp4">
                            </video>
                            <div class="featured-box-background" style="background-image: url('<?= $val->link_video ?>'); background-size: cover; background-position: center;"></div>
                            <div class="box-content">
                                <a class="custom-trigger-play-video text-decoration-none d-block" href="#">
                                    <i class="fas fa-play featured-icon featured-icon-style-2 featured-icon-hover-effect-1 text-4 bg-transparent rounded-circle border border-width-10 border-color-light right-4 top-0 m-0"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overflow-hidden">
                        <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">THE ADVANTAGE</h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Our Facilities</h3>
                    </div>
                    <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod.</p>
                    <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.</p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <section class="section section-with-shape-divider border-0 m-0">
        <div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
                <polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
            </svg>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-y" style="height: 120px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
                <polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
            </svg>
        </div>
        <div class="container py-5 my-5">
            <div class="row">
                <div class="col">
                    <div class="overflow-hidden">
                        <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">OUR BLOG</h2>
                    </div>
                    <div class="overflow-hidden pb-3 mb-3">
                        <h3 class="font-weight-bold text-transform-none text-9 pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">News & Press</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <article>
                        <div class="card border-0 border-radius-0 box-shadow-1">
                            <div class="card-body p-4 z-index-1">
                                <a href="demo-industry-factory-blog-post.html">
                                    <img class="card-img-top border-radius-0" src="img/demos/industry-factory/blog/blog-1.jpg" alt="Card Image">
                                </a>
                                <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                    <time pubdate datetime="2021-01-10">10 Jan 2021</time>
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    3 Comments
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    John Doe
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="demo-industry-factory-blog-post.html">An Interview with John Doe</a></h4>
                                    <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
                                    <a href="demo-industry-factory-blog-post.html" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                        READ MORE
                                        <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <article>
                        <div class="card border-0 border-radius-0 box-shadow-1">
                            <div class="card-body p-4 z-index-1">
                                <a href="demo-industry-factory-blog-post.html">
                                    <img class="card-img-top border-radius-0" src="img/demos/industry-factory/blog/blog-2.jpg" alt="Card Image">
                                </a>
                                <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                    <time pubdate datetime="2021-01-10">10 Jan 2021</time>
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    3 Comments
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    John Doe
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="demo-industry-factory-blog-post.html">How to Grow your Business</a></h4>
                                    <p class="card-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
                                    <a href="demo-industry-factory-blog-post.html" class="custom-read-more btn btn-link d-inline-flex align-items-center font-weight-semibold text-decoration-none ps-0">
                                        READ MORE
                                        <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>



</div>