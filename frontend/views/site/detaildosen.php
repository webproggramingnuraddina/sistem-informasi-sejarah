<div id="et-main-area">
    <div id="main-content">
        <article id="post-48123" class="post-48123 page type-page status-publish hentry">
            <div class="entry-content">
                <div id="et-boc" class="et-boc">
                    <div class="et-l et-l--post">
                        <div class="et_builder_inner_content et_pb_gutters3">
                            <div class="et_pb_section et_pb_section_0 et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">

                                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
                                    <strong class="font-weight-bold text-dark d-block text-8 mt-4 mb-2">
                                        <p class="text-center text-dark">
                                            <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2 text-center text-dark"><?= $dosen->nama ?> </span>
                                        </p>

                                    </strong>
                                </div> <!-- .et_pb_text -->

                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="et_pb_text_inner">
                                                <!-- Konten kolom kiri -->
                                                <h2 class="text-center" style="color: orange;"> <strong>Identitas</strong></h2>
                                                <h4 class="text-center">Nama</h4>
                                                <p class="text-center"><?= $dosen->nama ?></p>

                                                <h4 class="text-center">Tempat, Tanggal Lahir</h4>
                                                <p class="text-center"><?= $dosen->tmp_tgl_lahir ?></p>
                                                <h4 class="text-center">NIP</h4>
                                                <p class="text-center"><?= $dosen->nip ?></p>
                                                <h4 class="text-center">Email</h4>
                                                <p class="text-center"><?= $dosen->email ?></p>


                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-body p-3 z-index-1 text-center">
                                                <a href="demo-medical-2-our-doctors-detail.html" class="d-block text-center bg-color-grey">
                                                    <img alt="Doctor" class="img-fluid rounded" src="<?php echo $dosen->getImageUrl() ?>">
                                                </a>
                                                <br>
                                                <span class="text-uppercase d-block text-default font-weight-semibold text-1 p-relative bottom-4 mb-0">Kepakaran : <?= $dosen->kepakaran ?></span>
                                                <a href="mailto:<?= $dosen->email ?>" class="btn btn-outline btn-light bg-hover-light text-dark text-hover-primary border-color-grey border-color-active-primary border-color-hover-primary text-uppercase rounded-0 px-4 py-2 mb-4 mt-3 text-2"><?= $dosen->email ?></a>

                                            </div>
                                            <ul class="social-icons social-icons-clean social-icons-big text-center">
                                                <li class="social-icons-instagram">
                                                    <a href="http://www.instagram.com/" target="_blank" title="Instagram" class="border border-color-grey">
                                                        <i class="fab fa-instagram text-4"></i>
                                                    </a>
                                                </li>
                                                <li class="social-icons-twitter">
                                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter" class="border border-color-grey">
                                                        <i class="fab fa-twitter text-4"></i>
                                                    </a>
                                                </li>
                                                <li class="social-icons-facebook">
                                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook" class="border border-color-grey">
                                                        <i class="fab fa-facebook-f text-4"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="et_pb_column et_pb_column_1_4 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">
                                                <div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_right et_pb_bg_layout_light">
                                                    <div class="et_pb_text_inner">
                                                        <!-- Konten kolom kanan -->
                                                        <h2 class="text-center" style="color: orange;"> <strong>Klaster Pengajaran</strong></h2>

                                                        <h4 class="text-center">Sarjana (S1)</h4>
                                                        <p class="text-center"><?= $dosen->pendidikan_sarjana ?></p>

                                                        <h4 class="text-center">Magister (S2)</h4>
                                                        <p class="text-center"><?= $dosen->pendidikan_magister ?></p>

                                                        <h4 class="text-center">Doktoral (S3)</h4>
                                                        <p class="text-center"><?= $dosen->pendidikan_doktoral ?></p>

                                                    </div>
                                                </div> <!-- .et_pb_text -->
                                            </div> <!-- .et_pb_column -->
                                        </div>
                                    </div>
                                </div>



                            </div> <!-- .et_pb_section -->

                        </div><!-- .et_builder_inner_content -->
                    </div><!-- .et-l -->

                </div><!-- #et-boc -->
            </div> <!-- .entry-content -->

        </article> <!-- .et_pb_post -->

        <div class="container">
            <div class="row mb-2">
                <div class="col">
                    <div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
                        <ul class="nav nav-tabs justify-content-start">
                            <li class="nav-item"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-bs-toggle="tab">Publikasi</a></li>
                            <li class="nav-item"><a class="nav-link nav-link-reviews font-weight-bold text-3 text-uppercase py-2 px-3" href="#productReviews" data-bs-toggle="tab">Mata Kuliah</a></li>
                            <li class="nav-item"><a class="nav-link nav-link-reviews font-weight-bold text-3 text-uppercase py-2 px-3" href="#dosendetail" data-bs-toggle="tab">Detail</a></li>
                        </ul>
                        <div class="tab-content p-0">
                            <div class="tab-pane px-0 py-3 active" id="productDescription">
                                <p><?= $dosen->publikasi ?></p>
                            </div>

                            <div class="tab-pane px-0 py-3" id="productReviews">
                                <section class="section section-with-shape-divider border-0 bg-transparent m-0">
                                    <div class="container">
                                        <div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 col-lg-4">
                                                    <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                                        <div class="box-content text-center">
                                                            <div class="custom-featured-icon-wrapper bg-secondary mb-4">
                                                                <img src="<?= yii::$app->gethomeurl(); ?>img/demos/cleaning-services/icons/icon-1.png" class="img-fluid icon-featured" alt="" />
                                                            </div>
                                                            <h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3"><?= $dosen->mata_kuliah ?></h3>
                                                            <p class="px-3 mb-0" style="text-align: left;">

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane px-0 py-3" id="dosendetail">
                                <p><?= $dosen->detail ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- #main-content -->
</div> <!-- #et-main-area -->