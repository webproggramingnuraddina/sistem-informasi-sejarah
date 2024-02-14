<section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
    <div class="container pt-3 pb-5 mb-5">
        <div class="row mb-3">
            <div class="col">
                <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                    <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                    <li class="active text-color-primary">Download</li>
                </ul>
                <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Download</h1>
            </div>
        </div>
    </div>
    <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
        <i class="icons icon-arrow-down font-weight-bold"></i>
    </a>
</section>

<section id="intro" class="section border-0 z-index-2 pb-0 m-0">
    <div class="container pt-3">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9 col-xl-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Download Dokumen</h2>
                </div>
                <!-- <div class="overflow-hidden mb-3">
                    <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">A Selection Of Industries We Serve</h3>
                </div> -->
                <p class="custom-font-secondary custom-font-size-1 line-height-7 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"><?= Yii::t('app', 'Here you can download various documents related to activities and important information provided.') ?></p>
            </div>
        </div>
        <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
            <?php foreach ($modelDownload as $key => $val) : ?>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="<?= $val->link_download ?>" class="text-decoration-none" target="_blank">
                        <div>
                            <div class="thumb-info-wrapper">
                                <div class="card">
                                    <?php
                                    $previewLink = str_replace('/view', '/preview', $val->link_download);
                                    ?>
                                    <iframe src="<?= $previewLink ?>" class="pdf-viewer" style="height: 180px;"></iframe>
                                </div>
                            </div>
                        </div>
                    </a>
                    <h5 class="text-center mb-2 pt-3">
                        <a href="<?= $val->link_download ?>" class="text-color-dark text-color-hover-primary text-decoration-none text-2"><?= $val->judul ?></a>
                    </h5>
                    <div class="text-center mb-3"> <!-- Tambahkan margin bottom di sini -->
                        <a href="<?= $val->link_download ?>" class="btn btn-primary" target="_blank" download>Download</a>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</section>