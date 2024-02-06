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
                        <li class="active text-color-primary">Jaminan Mutu</li>
                    </ul>
                    <br>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Jaminan Mutu</h1>
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
                    <h3 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Jaminan Mutu</h3>
                </div>
            </div>
        </div>
        <p class="pt-3 pb-2 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Untuk Penjaminan mutu lulusan Program Studi Pendidikan Sejarah UNP dilaksanakan oleh Departemen Sejarah dengan melakukan monitoring evaluasi (monev) proses pembelajaran yang dilakukan setiap semserter. Monev ini dilakukan baik terhadap proses pembelajaran di elearning maupun pembelajaran tatap muka dengan melihat perangkat pembelajaran, kehadiran dosen dan mahasiswa. Penjaminan mutu di tingkat Program Studi juga dilakukan oleh Universitas dengan melakukan monev 2 kali dalam setahun atau dilakukan tiap semester. Hasil monev baik di tingkat Prodi maupun di tingkat Universitas ditindaklanjuti oleh Departemen melalui pertemuan dewan dosen untuk melakukan perbaikan–perbaikan terhadap kekurangan-kekurangan yang ditemukan dari hasil monev tersebut. Keberhasilan Penjaminan mutu ini dapat dilihat dari peringkat akreditasi Program studi Sejarah UNP yang sudah <b>Terakreditasi Unggul</b> oleh Lembaga Akreditasi Mandiri Kependidikan (LAMDIK) sejak bulan Maret 2023 yang sebelumnya juga sudah terakreditasi peringkat A dari BAN PT.</p>
        <b class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Sistem Penjaminan Mutu Internal (SPMI)</b>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Sesuai dengan SOTK (Standar Organisasi dan Tata Kelola) UNP, Penjamu di tingkat universitas berada di bawah <b>Pengembangan Pembelajaran dan Penjaminan Mutu (LP3M)</b>. Fungsi penjamin mutu di tingkat universitas ditekankan pada fungsi manajemen mutu terpadu (Total Quality Management/TQM). Dalam melaksanakan tugas dan fungsi UPM mengacu pada sistem manajemen mutu UNP. Untuk penjaminan mutu di tingkat fakultas dibentuk <b>Gugus Penjamin Mutu Internal (GPMI)</b>. Untuk penjaminan mutu di tingkat program studi dilakukan oleh <b>Unit Penjamin Mutu Internal (UPMI)</b>. Fungsi penjaminan mutu di tingkat program studi adalah fungsi pengendalian mutu (Quality Control) terutama terkait dengan pelaksanaan perkuliahan, magang, dan Kuliah Kerja Lapangan (KKL).</p>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Untuk keberlanjutan penjaminan mutu terkait dengan pelaksanaan perkuliahan, maka dilakukan monitoring dan evaluasi dilakukan secara terintegrasi oleh Penjamu, GPMI dan UPMI. Monitoring dan evaluasi pelaksanaan perkuliahan meliputi: (1) kelengkapan perangkat pembelajaran untuk setiap mata kuliah, dan (2) persentase kehadiran dosen. Monitoring dan evaluasi terhadap kedua aspek tersebut dilakukan sebanyak 2 kali untuk setiap semester, yakni pada pertengahan dan akhir semester. Hasil monitoring yang dilakukan oleh UPMI di tingkat program studi, dilaporkan ke Penjamu melalui GPMI.</p>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter"><b>Standar mutu</b> UNP mengadopsi 24 Standar Nasional Pendidikan Tinggi sebagai berikut: (<a href="https://s.id/-19RP4">https://s.id/-19RP4</a>)</p>
        <ol class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">
            <li>Standar Kompetensi Lulusan (SM-UNP-01)</li>
            <li>Standar Isi Pembelajaran (SM-UNP-02)</li>
            <li>Standar Proses Pembelajaran (SM-UP-03)</li>
            <li>Standar Penilaian Pembelajaran (SM-UNP-04)</li>
            <li>Standar Dosen dan Tenaga Kependidikan (SM-UNP-05)</li>
            <li>Standar Sarana dan Prasarana (SM-UNP-06)</li>
            <li>Standar Pengelola Pembelajaran (SM-UNP-07)</li>
            <li>Standar Pembiayaan Pembelajaran (SM-UNP-08)</li>
            <li>Standar Hasil Penelitian (SM-UNP-09)</li>
            <li>Standar Isi Penelitian (SM-UNP-10)</li>
            <li>Standar Proses Penelitian (SM-UNP-11)</li>
            <li>Standar Penilaian Penelitian (SM-UNP-12)</li>
            <li>Standar Penelitian (SM-UNP-13)</li>
            <li>Standar Sarana dan Prasarana Penelitian (SM-UNP-14)</li>
            <li>Standar Pengelola Penelitian (SM-UNP-15)</li>
            <li>Standar Pendanaan dan Pembiayaan Penelitian (SM-UNP-16)</li>
            <li>Standar Hasil PKM (SM-UNP-17)</li>
            <li>Standar Isi PKM (SM-UNP-18)</li>
            <li>Standar Proses Pengabdian Kepada Masyarakat (SM-UNP-19)</li>
            <li>Standar Penilaian PKM (SM-UNP-20)</li>
            <li>Standar Pelaksanaan PKM (SM-UNP-21)</li>
            <li>Standar Sarana dan Prasarana PKM (SM-UNP-22)</li>
            <li>Standar Pengelolaan PKM (SM-UNP-23)</li>
        </ol>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Sebagai tindak lanjut dari proses pembelajaran maka dilakukan umpan balik terhadap mahasiswa. Umpan balik dilakukan secara online dengan mengisi kuisioner evaluasi melalui web universitas <a href="http://evaluasi.unp.ac.id">http://evaluasi.unp.ac.id</a> yang terintegrasi dengan evaluasi perkuliahan oleh PPM di tingkat universitas. Pelaksanaan umpan balik dilakukan secara berkala pada setiap akhir semester.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Hasil evaluasi diri dari unit dilaporkan ke pimpinan unit dan staf unit yang bersangkutan, serta pimpinan UNP. Berdasarkan hasil evaluasi diri tersebut, pimpinan UPMI membuat laporan temuan untuk ditindaklanjuti guna melakukan perbaikan. Dalam pelaksanaan model PPEPP, maka semua unit harus bersikap terbuka dan kooperatif serta siap diaudit oleh auditor internal UNP.</p>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Keterlaksanaan penjaminan mutu di tingkat program studi oleh tim Unit Penjamin Mutu Internal (UPMI) melalui evaluasi keterlaksanaan pembelajaran secara periodik, sebanyak empat kali per semester, meliputi: (a) persiapan, (b) pelaksanaan, (c) evaluasi pembelajaran. Data dan informasi tentang keterlaksanaan pembelajaran dapat diakses pada Portal E-Learning DTPS. Laporan evaluasi disahkan oleh Ketua UPMI dan disetujui oleh Ketua Prodi untuk diteruskan ke GPMI FIS untuk diproses lebih lanjut sebagai laporan UPPS ke SPMI UNP. Ketua Prodi menginformasikan hasil evaluasi kepada dosen melalui rapat prodi. Beberapa form yang digunakan oleh GPMI terdapat pada link berikut:</p>
        <ol class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">
            <li>Form Monev Persiapan Pembelajaran: <a href="https://bit.ly/MonevPembelajaranGPM-UPM">https://bit.ly/MonevPembelajaranGPM-UPM</a></li>
            <li>Form Monev Pelaksanaan Pembelajaran: <a href="https://bit.ly/MonevPembelajaranGPM-UPM">https://bit.ly/MonevPembelajaranGPM-UPM</a></li>
            <li>Form Monev Evaluasi Pembelajaran: <a href="https://bit.ly/MonevPenilaianPembelajaran">https://bit.ly/MonevPenilaianPembelajaran</a></li>
            <li>Data Hasil Monitoring dan Evaluasi SPMI: <a href="https://bit.ly/RekapHasilEvaluasiPBM">https://bit.ly/RekapHasilEvaluasiPBM</a></li>
            <li>Laporan Monev GPM Fakultas Ilmu Sosial: <a href="https://bit.ly/LaporanMonevGPM-FIS">https://bit.ly/LaporanMonevGPM-FIS</a></li>
        </ol>
        <b class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Penjaminan Mutu</b>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">1. <b>Kebijakan</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Kebijakan tertulis dalam bentuk peraturan perundang-undangan dan/atau peraturan pimpinan perguruan tinggi yang mengatur penjaminan mutu di PT dan/atau di UPPS.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Kebijakan penjaminan mutu di PSPS FIS UNP mengikuti kebijakan penjaminan mutu UNP yang berada di bawah koordinasi Lembaga Penjaminan Mutu (Penjamu) dan mengacu pada: </p>
        <ol class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">
            <li><a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1b_qXIFIWaSXQbPqSufw8WLuRCM2XeSlx/view%3Fusp%3Dsharing&q=EgQkRQzKGI6JhK4GIjDuRmBPn5aZEP0MTOdIg1dvXQXW_2GytngB1DZVFB7O-MguTFqQfGB4P1jzQhoNwwQyAXJaAUM">Statuta UNP</a> Bab XII Pasal 91 tentang Sistim Penjaminan Mutu Internal (SPMI) UNP</li>
            <li><a href="https://drive.google.com/file/d/1AfzXTCGUlIibobWJcKobRvOUhWbrDonK/view">SK Rektor No.06 Tahun 2022</a> tentang Penetapan Pedoman Sistem Penjaminan Mutu Internal (SPMI) UNP</li>
            <li><a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1Z5kQa_yQOvKwpK6q_OsNSnlLOgSPcoTM/view%3Fusp%3Dsharing&q=EgQkRQzKGMuJhK4GIjAl8rRGZRbCNYz0l_xjAYJOV1cIPpKTfsDja58xfkX-P6C2uiljGdUcayMnNIbvZN4yAXJaAUM">SK Rektor No.07 Tahun 2022</a> tentang unsur pelaksana penjamin mutu UNP</li>
            <li><a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1Z7-YLn8AbhFK0L0Im_a5NMIKGJ_NB6Xp/view%3Fusp%3Dsharing&q=EgQkRQzKGJCKhK4GIjDab1yGXoQr3b2uDN3dB98VYpj3_TQkntK4A0ohUMoDqMrmVpjgbKmdiH6MpwvmQe8yAXJaAUM">Keputusan Rektor UNP No.123/UN35/KP/2020</a> tentang penetapan dan penunjukan Tim Gugus dan Unit Penjaminan Mutu Selingkungan UNP Tahun 2020</li>
            <li>Dokumen <a href="https://drive.google.com/file/d/1UnZKQmvDmEyzV0isPa-pwWaZTjew0Omg/view">Standar Mutu UNP</a> 01.001.00 1 Desember 2019</li>
            <li>Dokumen <a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1_LTuvu-4PWqRCLGNsiPzwZU5Sp-ov8ry/view%3Fusp%3Dsharing&q=EgQkRQzKGOmKhK4GIjDYEmPk1_oupCjrnk0lLMdjW8bBBFDrRpFIS87U7geEv6PGopraU13SXj4_ICQGj0wyAXJaAUM">Prosedur Mutu UNP</a> 01.004.00 1 Desember 2019</li>
            <li>Surat <a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1-t5fGPRxLEZaNeUi8H6JgJFZP8Z-ULSa/view%3Fusp%3Dsharing&q=EgQkRQzKGPyKhK4GIjCWH85OoR04iQak_BNtLUfxPVJAwFZFULWX2YxEKJv7ENLGVwLIMcjc3IEKknuIzU0yAXJaAUM">Keputusan Dekan FIS UNP</a> No.303a/UN35.6/KP/2001 Tentang Pembentukan Gugus Penjamin Mutu Internal Jurusan di FIS UNP Tahun 2021</li>
        </ol>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">2. <b>Pelaksanaan</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Pelaksanaan penjaminan mutu di PS yang merefleksikan perwujudan dari kebijakan penjaminan mutu yang telah ditetapkan oleh PT, yang menunjukkan adanya unit/gugus penjaminan mutu, terlaksananya siklus PPEPP, tersedianya dokumentasi pelaksanaan penjaminan mutu, dan pelaksanaan external benchmarking penjaminan mutu.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">a. <b>Unit / gugus penjaminan mutu</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Pelaksanaan penjaminan mutu di Program Studi Pendidikan Sejarah dilakukan oleh Ketua Program Studi bersama Unit Penjaminan Mutu Internal (UPMI) prodi Pendidikan Sejarah sesuai Keputusan <a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1AfzXTCGUlIibobWJcKobRvOUhWbrDonK/view%3Fusp%3Dsharing&q=EgQkRQzKGIyPhK4GIjBGywd0H_GyZk9sDo4tvZWAyYTT2lNPKoPzjfQgcTn4-v-ezEcm_DFfSAPEodlIr0MyAXJaAUM">SK Rektor No.06 Tahun 2022</a> tentang Pengesahan Struktur Organisasi, Fungsi dan Tugas Pokok Unit Pelaksana Penjaminan Mutu UNP. Fungsi unit penjaminan mutu Program Studi yaitu menjamin kualitas pelaksanaan tri dharma Perguruan Tinggi (Pendidikan, Penelitian, dan Pengabdian Kepada Masyarakat) yang dikelola oleh Program Studi agar memenuhi standar yang telah ditetapkan melalui penerapan siklus SPMI (PPEPP) yang sistemik, konsisten dan berkelanjutan.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Mekanisme pelaksanaan siklus SPMI (PPEPP) yang sistemik diintegrasikan dalam pelaksanaan
            tugas UJM prodi sebagai berikut:</p>
        <ol>
            <li>Menyusun, melengkapi, dan mengembangkan standar operasional prosedur atau formulir SPMI tingkat Program studi (Penetapan, P1)</li>
            <li>Menjalankan siklus SPMI PPEPP di level program studi (Pelaksanaan, P2)</li>
            <li>Melakukan monitoring dan evaluasi proses pembelajaran, penelitian dan pengabdian kepada masyarakat di program studi (Evaluasi)</li>
            <li>Memonitor dan mengevaluasi pencapaian KPI prodi setiap akhir tahun ajaran dan memberikan rekomendasi kepada kaprodi (Evaluasi)</li>
            <li>Menyusun laporan analisis dan rekomendasi tindak lanjut atas pelaksanaan audit mutu internal secara berkala untuk disampaikan ke Kaprodi saat RTM Fakultas (Pengendalian, P3 dan Peningkatan, P4).</li>
            <li>Mengumpulkan dan mengelola dokumen fisik bukti keterlaksanaan siklus PPEPP untuk kepentingan audit mutu internal, pengembangan kelembagaan maupun akreditasi (Pengendalian, P3 dan Peningkatan, P4).</li>

        </ol>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">b. <b>Terlaksananya Siklus PPEPP</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">1). <b> Penetapan</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Pada tahap Penetapan, Program Studi mengacu pada kebijakan SPMI, Manual Mutu UNP, Standar Mutu UNP, dan Prosedur Mutu UNP, serta renstra fakultas yang juga menetapkan sasaran mutu sebagai panduan kinerja kunci (Key Performance Indicators/KPI). Pendidikan Sejarah menetapkan sasaran mutu pada tiap awal tahun akademik dan menyusun evaluasi diri menggunakan analisis SWOT (Strengths, Weaknesses, Opportunities, dan Threats) sebagai dasar menetapkan strategi pengembangan pada tahun tersebut. Serangkaian kegiatan mulai dari penetapan sasaran hingga detail aktivitas semua terintegrasi dalam system <a href="http://penjamu.unp.ac.id/">penjamu.unp.ac.id</a> dan menjadi acuan kegiatan resmi selama satu tahun akademik.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">2). <b> Pelaksanaan</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">PS Pendidikan Sejarah pelaksanakan Tri Dharma Perguruan Tinggi berdasarkan standar yang ditetapkan dengan bukti yang terdokumentasi baik aktivitas dan pelaksanaan dilaporkan PS Pendidikan Sejarah melalui laman <a href="http://penjamu.unp.ac.id/">penjamu.unp.ac.id</a>.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Pelaksanaan penjaminan mutu meliputi kegiatan pendidikan, penelitian, publikasi, pengabdian kepada masyarakat, dan sarana prasarana. Dalam bidang pendidikan, kegiatan penjaminan mutu yang dilakukan diantaranya melakukan rapat koordinasi awal semester dan persiapan kegiatan belajar mengajar satu semester. Dalam bidang penelitian dan publikasi, Program Studi melaksanakan workshop berkaitan penyusunan artikel ilmiah yang dilakukan tiga kali setiap satu semester. Begitu halnya dalam bidang pengabdian kepada masyarakat, Program Studi melakukan Forum Group Discussion terkait penyusunan proposal Hibah PKM dari pendanaan eksternal. </p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">3). <b> Evaluasi</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">PS Pendidikan Sejarah melakukan evaluasi secara rutin pada tengah dan akhir tahun akademik. Kegiatan evaluasi dilakukan melalui kegiatan Audit Mutu Internal (AMI). AMI dilakukan oleh kaprodi bersama auditor internal yang ditunjuk oleh UNP untuk mengevaluasi manajemen mutu Proses Belajar Mengajar (PBM) serta mengidentifikasi ruang perbaikan Sistem Penjaminan Mutu Internal pada tingkat prodi.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Kegiatan evaluasi ini dilakukan untuk mengevaluasi standar kompetensi lulusan (berkaitan perencanaan proses pembelajaran), Standar Proses Pembelajaran, serta Standar Proses Pembelajaran. Selain itu, melalui kegiatan AMI, juga dilakukan evaluasi terhadap ketercapaian KPI dan Rencana Pengembangan Program Studi (RPPS). Audit ini dilakukan melalui sistem <a href="http://penjamu.unp.ac.id/">penjamu.unp.ac.id</a>. Audit keterlaksanaan RPPS dilaksanakan melalui laman penjamu.unp.ac.id..dan hasil AMI terdokumentasi dengan baik dalam sistem AMI <a href="http://penjamu.unp.ac.id/ami/site/login">http://penjamu.unp.ac.id/ami/site/login</a> dan <a href="https://sejarah.fis.unp.ac.id/">sejarah.fis.unp.ac.id</a>
            Selain itu, evaluasi juga dilakukan melalui monitoring kegiatan penelitian, pengabdian kepada masyarakat, dan publikasi yang dilakukan oleh dosen. Kegiatan evaluasi penelitian, pengabdian masyarakat, dan publikasi dilakukan melalui <a href="http://sim.lp2m.unp.ac.id/">http://sim.lp2m.unp.ac.id/</a> seperti terlihat pada gambar berikut.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Evaluasi terkait perkuliahan dilakukan dengan meminta feedback kepada mahasiswa untuk menilai kegiatan evaluasi pembelajaran, pelayanan kemahasiswaan, pelayanan akademik, pelayanan IT. Evaluasi Dosen oleh Mahasiswa dilakukan melalui <a href="http://evaluasi.unp.ac.id/">http://evaluasi.unp.ac.id/</a> dimana mahasiswa akan mengevaluasi dosen berkaitan dengan organisasi kelas, materi perkuliahan, metode pembelajaran, interaksi dengan mahasiswa, umpan balik kepada mahasiswa, media pembelajaran, pustaka dan bahan pendukung, dan tingkat kepuasan. Evaluasi Dosen oleh Mahasiswa dilakukan dan menjadi kewajiban mahasiswa sebelum menerima lembaran hasil studi (LHS).</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">4). <b> Pengendalian</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Pengendalian dilakukan dengan melihat hasil identifikasi ruang perbaikan dan Permohonan Tindakan Perbaikan dan Pencegahan (PTPP) pada tiap akhir audit. Program Studi Pendidikan Sejarah kemudian membahas hasil audit melalui Rapat Tinjauan Manajemen (RTM) yang dilaksanakan satu kali dalam satu tahun. Jika terdapat hasil monitoring dan audit yang menunjukan ketidaksesuaian dengan standar mutu UNP, maka pimpinan PS akan melakukan kegiatan pengendalian dengan melakukan kegiatan perbaikan. Sebagai contoh, dari hasil Audit Mutu Internal (AMI) 2020/2021 didapatkan hasil bahwa evaluasi dosen dari mahasiswa menunjukan pembelajaran secara daring berlangsung kurang optimal hampir di setiap mata kuliah. Oleh karena itu, Program Studi Pendidikan Sejarah berkoordinasi dengan UPPS dan kemudian menyelenggarakan workshop berkaitan dengan metode dan strategi pembelajaran jarak jauh untuk meningkatkan kualitas pembelajaran secara daring.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Selain itu, pengendalian juga dilakukan dengan memberikan pelatihan pemanfaatan <a href="https://elearning2.unp.ac.id/login/index.php">https://elearning2.unp.ac.id/login/index.php</a> untuk mendukung pembelajaran secara daring. Gambar 2.6 merupakan tampilan <a href="https://elearning2.unp.ac.id/login/index.php">https://elearning2.unp.ac.id/login/index.php</a> yang digunakan oleh Dosen Pendidikan Sejarah.
            Gambar . Tampilan <a href="https://elearning2.unp.ac.id/login/index.php">https://elearning2.unp.ac.id/login/index.php</a>.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">5). <b> Peningkatan</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Peningkatan dilakukan berdasarkan hasil monitoring dan evaluasi indikator kinerja program studi yang kemudian dianalisis dan ditingkatkan standarnya pada tahun berikutnya. Sebagai contoh, luaran penelitian dan PkM yang dihasilkan DTPS sudah mencapai target dengan terbit pada berbagai jurnal ilmiah terakreditasi nasional. Indikator ini ditingkatkan untuk dapat terbit di lebih banyak pada jurnal terakreditasi minimal sinta 2 dan scopus. Melalui pemberian pelatihan-pelatihan penulisan artikel ilmiah dan kolaborasi dengan berbagai peneliti yang sudah melakukan publikasi pada jurnal ilmiah bereputasi, diharapkan data dosen PS Pendidikan Sejarah yang publish pada jurnal ilmiah internasional bereputasi meningkat.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">c. <b>Layanan Penjaminan Mutu</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Program Studi Pendidikan Sejarah memanfaatkan berbagai sistem penjaminan mutu yang digunakan dalam pelaksanaan, perekaman, dan dokumentasi hasil penjaminan mutu yang ditangkap pada tabel
            berikut:</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Tabel. Layanan Penjaminan Mutu</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">d. <b><i>External Benchmarking</i></b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter"><i>External benchmarking</i> menjadi kegiatan yang dilakukan PS Pendidikan Sejarah untuk meningkatkan mutu terkait dengan aspek pendidikan, penelitian dan publikasi, serta pengabdian kepada masyarakat. Upaya external benchmarking dilakukan dengan mengundang pakar dari dalam ataupun luar negeri. Beberapa diantaranya adalah mengundang: 1). Rob Hammink Jurnalis di De Telegraaf Belanda, Novelis, Aktor Film Bumi Manusia. Berbicara tentang peran sejarah dalam mendalami aktor perfilman. 2). Prof. Dr. Erwiza Erman, MA tentang Sejarah dalam Teori dan Praktek. 3). Prof. Dr. Drs. Ersis Warmansyah Abbas, BA, M. Pd tentang Pembelajaran Sejarah dalam Menyambut Masyarakat. 4). Dr. Ismi Rajiani, M.M tentang Pembelajaran Sejarah dalam Menyambut Masyarakat. 5). Prof. Dr. Nana Supriatna, M. Ed tentang Pembelajaran Sejarah dalam Menyambut Masyarakat. 6). David Pickus, Ph. D tentang Komparasi Model Pembelajaran Sejarah Di Eropa dan Amerika. 7). Prof. Dr. H. Said Hamid Hasan, M.A tentang kurikulum pendidikan sejarah. 8). Prof. Dr. Jumadi, M. Si tentang kurikulum MBKM. 9). Arda Sani, S. Pd tentang Pelatihan Jurnalistik. 10). Annisa Junaidi, SS tentang Pelatihan <i>English Corner</i>. 11). Hadiyatullah ML tentang Membangun Bisnis di Usia Muda. 12). Gian Kurniadi tentang Membangun Bisnis di Usia Muda. 13). Prof. Dr. Aminudin Kasdi, MS tentang Perspektif Makna Pahlawan di Era Modern. 14). Marfuah Panji Astuti tetnang Menyusuri Jejak Kejayaan Peradaban Islam di Indonesi. 15). Dedi Arsa, M. Hum tentang Pelatihan Penulisan Karya Ilmiah. 16). Dr. Helen Sabera Adib, M.Pd. I tentang Trik Untuk Cepat Mendapatkan Pekerjaan.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">3. <b>Evaluasi</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Evaluasi terhadap kebijakan dan pelaksanaan penjaminan mutu yang dilaksanakan di PS.
            Evaluasi penjaminan mutu ditingkat Prodi dilakukan oleh Gugus Penjaminan Mutu Internal (GPMI) ditingkat fakultas. PS telah memiliki unit penjaminan mutu internal (UPMI), telah melaksanakan siklus PPEPP, memiliki bukti pelaksanaan penjaminan mutu yang terdokumentasi dengan baik, melaksanakan
            external benchmarking penjaminan mutu. Untuk alur pelaksanaan evaluasi penjaminan mutu PS dapat dilihat pada Analisa S.W.O.T </p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">4. <b>Tindak Lanjut</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Tindak lanjut yang telah diambil untuk meningkatkan kualitas pelaksanaan penjaminan mutu di PS.</p>

    </div>
</div>