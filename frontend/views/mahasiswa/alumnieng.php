<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Alumni';
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
                            <li class="active text-color-primary">Alumni</li>
                        </ul>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Alumni</h1>
                    </div>
                </div>
            </div>
            <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
                <i class="icons icon-arrow-down font-weight-bold"></i>
            </a>
        </section>

        <div class="container">
            <section class="sectionpu">
                <div class="container position-relative z-index-3 my-5">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 order-2 order-lg-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">

                            <h1 class="text-color-primary font-weight-medium positive-ls-3 text-5 mb-0">Alumni</h1>
                            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">To improve the quality of graduates, HESP always ensures that alumni get jobs that suit their fields. HESP regularly reviews and updates the curriculum, involving users and academics so that teaching will be relevant to school conditions. Apart from that, tracer studies are also carried out periodically as input in curriculum development, both theoretical and practical. The evaluation results show that an average of 73% of graduates according to their field of competency find work in less than 6 months. HESP also holds regular activities to improve student competency in acquiring the required skills. Examples of activities are <a href="https://unp.ac.id/events/02-12-2021/webinar-peningkatan-keterampilan-mahasiswa-dalam-mempersiapkan-diri-memasuki-dunia-kerja-tahap-ii">counseling</a>, certified competency training, preparation <a href="https://uptbahasa.unp.ac.id/index.php/pelatihan-bahasa-asing/">TOEFL</a>, <a href="https://unp.ac.id/events/22-06-2021/programprogram-kampus-merdeka-sedang-buka-pendaftaran-loh-simak-informasinya">Certified Internship</a>, dan perencanaan karir bagi pencari kerjaand career planning for job seekers <a href="https://uptpkk.unp.ac.id/">Career Center</a>. </p>
                        </div>
                        <div class="col-lg-6 order-2 order-lg-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">

                            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">HESP offers elective courses that support students in gaining skills for employment, such as introductory entrepreneurship courses. The activities carried out by HESP in order to develop students' skills and competencies have increased the reputation of the study program through student participation in several competitions such as scientific writing competitions where participants produce articles that are suitable for publication and entrepreneurship development competitions where participants produce products that can be traded. HESP also facilitates prospective graduates with special activities in the form of developing skills that can be used by prospective history teachers such as creating learning media, digitizing teaching materials, or the ability to speak in public in a structured and informative manner..</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section custom-section-shape-background custom-section-shape-background-reverse border-0 m-0">
                <div class="container position-relative z-index-3 my-5">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 order-2 order-lg-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                            <h1 class="text-color-primary font-weight-medium positive-ls-3 text-5 mb-0">Alumni Activities</h1>
                            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">UNP maintains a strong alumni network and has an alumni association called <a href="https://iluni.unp.ac.id/">ILUNI UNP</a>. ILUNI UNP organizes programs that support UNP's efforts to become a world-class university, including seminars, curriculum development participation, and providing internship and job placement opportunities for UNP graduates. In addition to ILUNI UNP, faculties and programs at UNP also establish their own alumni associations. In FBS, the alumni organization is <a href="https://drive.google.com/file/d/1WInzPU_BQbMxsHgGqTOUwP-gDSRT5V86/view?usp=sharing">ILUNI FBS UNP</a>, which combines ISLP and ELSP alumni. HESP alumni are organized in ILUNI HESP and organizations such as AGSI and the History Teachers' Organization. Their activities and information are available on the program's website in English. The associations have developed websites, tracer studies, mailing lists, social media, and regular meetings. Furthermore, information regarding job opportunities can be shared with alumni and students to assist them in entering the job market more quickly.</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 ps-lg-5 mb-4 mb-lg-0">
                            <img src="<?= Yii::$app->getHomeUrl(); ?>img/demos/industry-factory/Misi.jpg" class="img-fluid box-shadow-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <?php elseif (Yii::$app->language === 'en') : ?>

    <?php endif; ?>
</div>