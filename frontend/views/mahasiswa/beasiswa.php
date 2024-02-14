v<?php

    /** @var yii\web\View $this */

    use yii\helpers\Html;
    use yii\helpers\Url;

    $this->title = 'Beasiswa';
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
                            <li class="active text-color-primary">Beasiswa</li>
                        </ul>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Beasiswa</h1>
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
                <div class="custom-shape-divider z-index-1" style="height: 129px;"></div>
                <div class="container position-relative z-index-3 mt-3 mb-5">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                            <img src="<?= Yii::$app->getHomeUrl(); ?>img/demos/industry-factory/Misi.jpg" class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" alt="" />
                        </div>
                        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                            <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Beasiswa</h2>
                            <!-- <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Other Industries</h3> -->
                            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">Prodi Pendidikan Sejarah senantiasa membantu mahasiswa untuk mendapatkan berbagai beasiswa yang dapat digunakan mahasiswa untuk membantu proses pendidikannya, terutama yang mengalami kesulitan biaya. Berbagai bentuk dan jalur beasiswa yang bisa didapatkan oleh mahasiswa sebagian berasal dari Universitas Negeri Padang (UNP) sendiri, dan sebagaian lain dari donator luar. Beasiswa tersebut antara lain dalam bentuk beasiswa prestasi, dan bantuan pendidikan.</p>
                            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">Bentuk beasiswa prestasi antara lain adalah beasiwa PPA (Peningkatan Prestasi Akademik). Beasiswa ini diperuntukkan bagi mahasiswa yang memiliki prestasi, baik di segi akademik maupun non akademik. Untuk mendapatkan beasiswa ini, mahasiswa harus aktif berkegiatan di berbagai UKM yang ada di UNP. Sementara itu jenis beasiswa bantuan berasal dari Kementerian Riset Teknologi dan Perguruan Tinggi (Kemristekdikti), serta Kementerian Pendidikan dan Kebudayaan (Kemdikbud).</p>
                        </div>
                    </div>
                </div>
            </section>


            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">Selain itu, beberapa perusahaan dan organisasi swasta pun sering memberikan beasiswa bantuan dalam tiap programnya. Beasiswa yang diberikan oleh perusahaan dan instansi swasta diataranya:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3" style="word-break: break-all;">
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> BBM (Bantuan Belajar Mahasiswa)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> BBPPA (Bantuan Belajar Peningkatan Prestasi Akademik)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> BUMN (Badan Usaha Milik Negara)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> BRI (Bank Rakyat Indonesia)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> Lippo Bank</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> Bank Nagari</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> Bidikmisi (Untuk calon mahasiswa)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3" style="word-break: break-all;">
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> BAZ (Badan Amil Zakat)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> PT. Semen Padang</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Toyota Astra</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> BI (Bank Indonesia)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> VDMS (Van Deventer-Maas Stichting)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Supersemar</li>
                    </ul>
                </div>
            </div>


            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">Modal utama untuk bisa mendapatkan beasiswa adalah nilai akademik yang baik dan prestasi di organisasi mahasiswa atau UKM (Unit Kegiatan Mahasiswa). Kategori baik di akademik itu dilihat dari nilai IPK (Indeks Prestasi komulatif) yang diperoleh semasa berkuliah. Pemberi beasiswa biasanya lebih memprioritaskan mahasiswa yang membutuhkan bantuan ekonomi agar dapat menyelesaikan studi. Semua informasi lengkap dan proses seleksi beasiswa dapat diakses mahasiswa di situs <a href="http://www.sib.unp.ac.id">www.sib.unp.ac.id</a>
                Website ini diperuntukkan bagi mahasiswa yang sudah terdaftar di UNP, sehingga untuk mengaksesnya perlu ID dan password yang otomatis didapatkan ketika sudah diterima sebagai mahasiswa UNP.</p>

        </div>

    <?php elseif (Yii::$app->language === 'en') : ?>
        <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
            <div class="container pt-3 pb-5 mb-5">
                <div class="row mb-3">
                    <div class="col">
                        <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                            <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                            <li class="active text-color-primary">Scholarship</li>
                        </ul>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Scholarship</h1>
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
                <div class="custom-shape-divider z-index-1" style="height: 129px;"></div>
                <div class="container position-relative z-index-3 mt-3 mb-5">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                            <img src="<?= Yii::$app->getHomeUrl(); ?>img/demos/industry-factory/Misi.jpg" class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" alt="" />
                        </div>
                        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                            <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Scholarship</h2>
                            <!-- <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Other Industries</h3> -->
                            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">The History Education Study Program always assists students in obtaining various scholarships that can be used to help their education process, especially those experiencing financial difficulties. Various forms and channels of scholarships that can be obtained by students partly come from Padang State University (UNP) itself, and partly from external donors. These scholarships include achievement scholarships and educational assistance.</p>
                            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">Forms of achievement scholarships include the Academic Achievement Scholarship (PPA). This scholarship is intended for students who have achievements, both academically and non-academically. To obtain this scholarship, students must actively participate in various Student Activity Units (UKM) at UNP. Meanwhile, the type of educational assistance scholarships come from the Ministry of Research, Technology, and Higher Education (Kemristekdikti), as well as the Ministry of Education and Culture (Kemdikbud).</p>

                        </div>
                    </div>
                </div>
            </section>


            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">Additionally, several private companies and organizations often provide scholarship assistance in each of their programs. Scholarships provided by private companies and institutions include:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3" style="word-break: break-all;">
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> BBM (Bantuan Belajar Mahasiswa)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> BBPPA (Bantuan Belajar Peningkatan Prestasi Akademik)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> BUMN (Badan Usaha Milik Negara)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> BRI (Bank Rakyat Indonesia)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> Lippo Bank</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> Bank Nagari</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7 pr-2"></i> Bidikmisi (Untuk calon mahasiswa)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg custom-list-icons-icon-size pb-1 mb-3" style="word-break: break-all;">
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> BAZ (Badan Amil Zakat)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> PT. Semen Padang</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Toyota Astra</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> BI (Bank Indonesia)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> VDMS (Van Deventer-Maas Stichting)</li>
                        <li class="text-color-dark"><i class="fas fa-check text-color-dark border-color-grey-1 top-7"></i> Supersemar</li>
                    </ul>
                </div>
            </div>


            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">The main requirement to be eligible for a scholarship is good academic performance and achievements in student organizations or Student Activity Units (UKM). Good academic performance is determined by the Grade Point Average (GPA) obtained during college. Scholarship providers usually prioritize students who require financial assistance to complete their studies. All comprehensive information and scholarship selection processes can be accessed by students on the website <a href="http://www.sib.unp.ac.id">www.sib.unp.ac.id</a>. This website is intended for students who are already registered at UNP, so to access it, an ID and password are required, which are automatically obtained upon acceptance as a UNP student.</p>

        </div>
    <?php endif; ?>
</div>