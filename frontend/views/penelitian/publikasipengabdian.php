<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Publikasi Pengabdian';
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
                            <li class="active text-color-primary">Publikasi Pengabdian</li>
                        </ul>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Publikasi Pengabdian</h1>
                    </div>
                </div>
            </div>
            <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
                <i class="icons icon-arrow-down font-weight-bold"></i>
            </a>
        </section>

        <div class="container">
            <div class="card-body pt-0">
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <br><br>
                        <select class="form-select" id="tahunSelect" onchange="filterByTahun()">
                            <option value="">Pilih Tahun</option>
                            <?php
                            // Generate options for tahun select
                            $tahunList = range(date("Y"), date("Y") - 10);
                            foreach ($tahunList as $tahun) {
                                echo "<option value='$tahun'>$tahun</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table_pengabdian">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="">No</th>
                            <th class="">Judul Pengabdian</th>
                            <th class="">Nama Ketua</th>
                            <th class="">Kepakaran Ketua</th>
                            <th class="">Anggota</th>
                            <th class="">Anggota Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <?php foreach ($modelPublikasipengabdian as $key => $a) { ?>
                            <tr class="tahunData <?= $a->tahun ?>">
                                <td><?= $key + 1 ?></td>
                                <td><?= $a->judul_pkm ?></td>
                                <td><?= $a->nama_ketua ?></td>
                                <td><?= $a->kepakaran ?></td>
                                <td><?= $a->anggota ?></td>
                                <td><?= $a->ang_mhs ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?= yii\widgets\LinkPager::widget([
                    'pagination' => $pagination,
                    'options' => ['class' => 'pagination justify-content-center'], // Menambahkan kelas Bootstrap untuk pusatkan paginasi
                    'linkOptions' => ['class' => 'page-link'], // Menambahkan kelas Bootstrap untuk tautan halaman
                    'prevPageLabel' => 'Previous', // Label untuk tautan halaman sebelumnya
                    'nextPageLabel' => 'Next', // Label untuk tautan halaman selanjutnya
                    'disabledListItemSubTagOptions' => ['class' => 'page-link'], // Menambahkan kelas Bootstrap untuk tautan halaman yang dinonaktifkan
                    'firstPageLabel' => false, // Menghilangkan label halaman pertama
                ]) ?>


            </div>
        </div>
    <?php elseif (Yii::$app->language === 'en') : ?>
        <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
            <div class="container pt-3 pb-5 mb-5">
                <div class="row mb-3">
                    <div class="col">
                        <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                            <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                            <li class="active text-color-primary">Community Engagement Publication</li>
                        </ul>
                        <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Community Engagement Publication</h1>
                    </div>
                </div>
            </div>
            <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
                <i class="icons icon-arrow-down font-weight-bold"></i>
            </a>
        </section>

        <div class="container">
            <div class="card-body pt-0">
                <div class="row mb-3">
                    <div class="col-lg-3">
                        <br><br>
                        <select class="form-select" id="tahunSelect" onchange="filterByTahun()">
                            <option value="">Pilih Tahun</option>
                            <?php
                            // Generate options for tahun select
                            $tahunList = range(date("Y"), date("Y") - 10);
                            foreach ($tahunList as $tahun) {
                                echo "<option value='$tahun'>$tahun</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table_pengabdian">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="">No</th>
                            <th class="">Research Title</th>
                            <th class="">Chairman's Name</th>
                            <th class="">Chairman's Expertise</th>
                            <th class="">Members</th>
                            <th class="">Student Members</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <?php foreach ($modelPublikasipengabdian as $key => $a) { ?>
                            <tr class="tahunData <?= $a->tahun ?>">
                                <td><?= $key + 1 ?></td>
                                <td><?= $a->judul_pkm ?></td>
                                <td><?= $a->nama_ketua ?></td>
                                <td><?= $a->kepakaran ?></td>
                                <td><?= $a->anggota ?></td>
                                <td><?= $a->ang_mhs ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?= yii\widgets\LinkPager::widget([
                    'pagination' => $pagination,
                    'options' => ['class' => 'pagination justify-content-center'], // Menambahkan kelas Bootstrap untuk pusatkan paginasi
                    'linkOptions' => ['class' => 'page-link'], // Menambahkan kelas Bootstrap untuk tautan halaman
                    'prevPageLabel' => 'Previous', // Label untuk tautan halaman sebelumnya
                    'nextPageLabel' => 'Next', // Label untuk tautan halaman selanjutnya
                    'disabledListItemSubTagOptions' => ['class' => 'page-link'], // Menambahkan kelas Bootstrap untuk tautan halaman yang dinonaktifkan
                    'firstPageLabel' => false, // Menghilangkan label halaman pertama
                ]) ?>


            </div>
        </div>
    <?php endif; ?>

</div>

<script>
    function filterByTahun() {
        var selectBox = document.getElementById("tahunSelect");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        var rows = document.getElementsByClassName("tahunData");

        for (var i = 0; i < rows.length; i++) {
            var tahunClass = rows[i].classList[1];
            if (selectedValue === "" || tahunClass === selectedValue) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
</script>