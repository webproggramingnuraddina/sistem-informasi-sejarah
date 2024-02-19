<?php

use yii\helpers\Url;
use yii\helpers\Html; ?>

<section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
    <div class="container pt-3 pb-5 mb-5">
        <div class="row mb-3">
            <div class="col">
                <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                    <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                    <li class="active text-color-primary"><?= Yii::t('app', 'Berita') ?></li>
                </ul>
                <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0"><?= Yii::t('app', 'Berita') ?></h1>
            </div>
        </div>
    </div>
    <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
        <i class="icons icon-arrow-down font-weight-bold"></i>
    </a>
</section>
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
                                usort($modelBerita, function ($a, $b) {
                                    return strtotime($b->created_at) - strtotime($a->created_at);
                                });

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
                            usort($modelBerita, function ($a, $b) {
                                return strtotime($b->created_at) - strtotime($a->created_at);
                            });

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
                usort($modelBerita, function ($a, $b) {
                    return strtotime($b->created_at) - strtotime($a->created_at);
                });

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
        <!-- </section> -->
    <?php elseif (Yii::$app->language === 'en') : ?>
        <div class="container">
            <div class="row pb-1">
                <div class="col-lg-12 mb-4 pb-2">
                    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 5000, 'animateOut': 'fadeOut', 'animateIn': 'fadeIn'}" data-dynamic-height="['700px','700px','700px','700px','700px']" style="height: 500px;">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <?php
                                usort($modelBerita, function ($a, $b) {
                                    return strtotime($b->created_at) - strtotime($a->created_at);
                                });

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
                            usort($modelBerita, function ($a, $b) {
                                return strtotime($b->created_at) - strtotime($a->created_at);
                            });

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
                usort($modelBerita, function ($a, $b) {
                    return strtotime($b->created_at) - strtotime($a->created_at);
                });

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