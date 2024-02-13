v<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Kerjasama';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <section class="section section-with-shape-divider section-height-3 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="<?= Yii::$app->getHomeUrl(); ?>img/logos/gedungfis.jpg">
        <div class="container pt-3 pb-5 mb-5">
            <div class="row mb-3">
                <div class="col">
                    <ul class="breadcrumb d-block text-center custom-font-secondary text-6 font-weight-medium positive-ls-3">
                        <li><a href="index" class="text-decoration-none opacity-hover-8">Home</a></li>
                        <li class="active text-color-primary">Kerjasama</li>
                    </ul>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Kerjasama</h1>
                </div>
            </div>
        </div>
        <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="100" data-hash-force="true" class="text-decoration-none text-color-light text-color-hover-primary text-5-5 position-absolute transform3dx-n50 left-50pct bottom-5 mb-4 z-index-2">
            <i class="icons icon-arrow-down font-weight-bold"></i>
        </a>
    </section>

    <div class="container">
       <br>
        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
            <h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0">Kerjasama</h2>
            <!-- <h3 class="font-weight-bold text-transform-none text-9 line-height-2 mb-3">Other Industries</h3> -->
            <p class="pt-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter">Untuk mencapai visi dan misi, maka Program Studi Pendidikan Sejarah  melakukan dan menjalim hubungan kerjasama dengan berbagai perguruan tinggi,  Pemerintah Daerah, Instansi/Departemen, dan dunia usaha. Kerjasama dilakukan berdasarkan kepada SK Rektor <a href="https://drive.google.com/file/d/1MlQemEwt5EHFwwgRjGiZ9srAXVB54in-/view%3Fusp%3Dsharing&q=EgQkRQzKGKXf-a0GIjAuFPdMu4zls0zqxwTUoQkJHKhMDsTAucIi7IV0P-nTPmbPln-nVgT4Avqusm3j4PQyAXJaAUM">No. 24/UN35/KS/2016</a>
            dan diperbarui dengan <a href="https://ppid.unp.ac.id/peraturan-rektor-unp-kerjasama-2019/">Keputusan Rektor 06 Tahun 2019</a> tentang Pedoman Pengelolaan Kerjasama Universitas Negeri Padang. Dalam kurun waktu tiga tahun terakhir, telah dijalin kerjasama antar perguruan tinggi atau lembaga terkait yang diinisiasi oleh UNP maupun FIS dan Program Studi Pendidikan Sejarah melalui MoU/sejenisnya. Hal tersebut sangat dirasakan/memberikan manfaat bagi Program Studi Pendidikan Sejarah di dalam bidang pendidikan/proses pembelajaran, penelitian dan pengabdian kepada masyarakat. Pada kerja sama tersebut masing-masing memiliki mitra luar dan dalam negeri serta regional/lokal. Kerjasama yang dilaksanakan memiliki tujuan: 1) memberikan manfaat bagi program studi dalam pemenuhan proses pembelajaran, penelitian, dan PkM; 2) memberikan peningkatan kinerja tridharma dan fasilitas pendukung program studi; dan 3) memberikan kepuasan kepada mitra industri dan mitra kerjasama lainnya, serta menjamin keberlanjutan kerjasama dan hasilnya.
            <br>Kerjasama pendidikan, penelitian dan pengabdian kepada masyarakat yang telah dilakukan dengan berbagai perguruan tinggi dan lembaga pendidikan, antara lain, Universiti of Malaya (UM) Malaysia (PT QS 100), <a href="https://www.instagram.com/p/CiH1tvApgtb/?utm_source=ig_web_copy_link&img_index=1">Universiti Pendidikan Sultan Idris (UPSI) Malaysia</a>
            , Kerjasama antar Universitas Indonesia- Philipina-Thailand-Malaysia, BPN, BIG, UI, UPI, UNNES, UM Malang, PTN Penyelenggara Pertukaran Mahasiswa dan Transfer Kredit, Ruang guru, Dinas Pendidikan Sumatera Barat, Sekolah SMA se-lingkup Sumatera Barat, English Tutorial Center (ETC) dan lain sebagainya. Berikut ini table kerjasama yang telah dilakukan oleh Prodi Pendidikan Sejarah:</p>
        </div>
        

        <!--begin::Card body-->
        <div class="card-body pt-0">
                <?php
                // Memisahkan data berdasarkan bidang
                $bidangPendidikan = [];
                $bidangPenelitian = [];
                $bidangPKM = [];

                foreach ($modelKerjasama as $a) {
                    if ($a->bidang == '1') {
                        $bidangPendidikan[] = $a;
                    } elseif ($a->bidang == '2') {
                        $bidangPenelitian[] = $a;
                    } elseif ($a->bidang == '3') {
                        $bidangPKM[] = $a;
                    }
                }
                ?>

            <!-- Tabel untuk bidang pendidikan -->
            <?php if (!empty($bidangPendidikan)) : ?>
                <br>
                <h3>Bidang Pendidikan</h3>
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table_pendidikan">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="">No</th>
                            <th class="">Nama Instansi</th>
                            <th class="">Nomor & Jenis Kerjasama</th>
                            <th class="">Mulai Kerjasama</th>
                            <th class="">Akhir Kerjasama</th>
                            <th class="">Manfaat</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="text-gray-600">
                        <?php foreach ($bidangPendidikan as $key => $a) { ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $a->nm_instansi ?></td>
                                <td><a href="<?= $a->nomor ?>"><?= $a->nomor ?></a></td>
                                <td><?= $a->mulai_kerjasama ?></td>
                                <td><?= $a->akhir_kerjasama ?></td>
                                <td><?= $a->manfaat ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            <?php else : ?>
                <p>Tidak ada data untuk bidang pendidikan.</p>
            <?php endif; ?>

            <!-- Tabel untuk bidang penelitian -->
            <?php if (!empty($bidangPenelitian)) : ?>
                <br><br><h3>Bidang Penelitian</h3>
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table_penelitian">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="">No</th>
                            <th class="">Nama Instansi</th>
                            <th class="">Nomor & Jenis Kerjasama</th>
                            <th class="">Mulai Kerjasama</th>
                            <th class="">Akhir Kerjasama</th>
                            <th class="">Manfaat</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="text-gray-600">
                        <?php foreach ($bidangPenelitian as $key => $a) { ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $a->nm_instansi ?></td>
                                <td><a href="<?= $a->nomor ?>"><?= $a->nomor ?></a></td>
                                <td><?= $a->mulai_kerjasama ?></td>
                                <td><?= $a->akhir_kerjasama ?></td>
                                <td><?= $a->manfaat ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            <?php else : ?>
                <p>Tidak ada data untuk bidang penelitian.</p>
            <?php endif; ?>

            <!-- Tabel untuk bidang PKM -->
            <?php if (!empty($bidangPKM)) : ?>
                <br><br><h3>Bidang PKM</h3>
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table_pkm">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="">No</th>
                            <th class="">Nama Instansi</th>
                            <th class="">Nomor & Jenis Kerjasama</th>
                            <th class="">Mulai Kerjasama</th>
                            <th class="">Akhir Kerjasama</th>
                            <th class="">Manfaat</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="text-gray-600">
                        <?php foreach ($bidangPKM as $key => $a) { ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $a->nm_instansi ?></td>
                                <td><a href="<?= $a->nomor ?>"><?= $a->nomor ?></a></td>
                                <td><?= $a->mulai_kerjasama ?></td>
                                <td><?= $a->akhir_kerjasama ?></td>
                                <td><?= $a->manfaat ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            <?php else : ?>
                <p>Tidak ada data untuk bidang PKM.</p>
            <?php endif; ?>
        </div>



        <!--end::Card body-->
    </div>
</div>