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
                        <li class="active text-color-primary">Quality assurance</li>
                    </ul>
                    <br>
                    <h1 class="d-block text-color-light font-weight-bold text-center text-12 positive-ls-1 line-height-2 mb-0">Quality assurance</h1>
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
                    <h3 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Quality assurance</h3>
                </div>
            </div>
        </div>
        <p class="pt-3 pb-2 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Quality assurance for graduates of the UNP History Education Study Program is carried out by the History Department by monitoring the evaluation (monev) of the learning process carried out every semester. This monitoring and evaluation was carried out both on the learning process in e-learning and face-to-face learning by looking at learning tools, the presence of lecturers and students. Quality assurance at the Study Program level is also carried out by the University by conducting monitoring and evaluation twice a year or every semester. The results of monitoring and evaluation both at the study program level and at the university level are followed up by the Department through lecturer council meetings to make improvements to the deficiencies found in the results of the monitoring and evaluation. The success of this quality assurance can be seen from the accreditation ranking of the UNP History study program which has been <b>Excellent Accredited</b> by the Independent Education Accreditation Institute (LAMDIK) since March 2023, which was previously accredited with an A rating from BAN PT.</p>
        <b class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Internal Quality Assurance System</b>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">In accordance with UNP's SOTK (Organization and Governance Standards), Hosts at the university level are under <b>Learning Development and Quality Assurance (LP3M)</b>. The quality assurance function at the university level is emphasized on the integrated quality management (Total Quality Management/TQM) function. In carrying out its duties and functions, UPM refers to the UNP quality management system. For quality assurance at the faculty level an <b>Internal Quality Assurance Group (GPMI)</b> was formed. Quality assurance at the study program level is carried out by the Internal Quality Assurance Unit (UPMI). The quality assurance function at the study program level is a quality control function, especially related to the implementation of lectures, internships and Field Work Lectures.</p>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">For continued quality assurance related to the implementation of lectures, monitoring and evaluation is carried out in an integrated manner by the Host, GPMI and UPMI. Monitoring and evaluation of lecture implementation includes: (1) completeness of learning tools for each course, and (2) percentage of lecturer attendance. Monitoring and evaluation of these two aspects is carried out twice per semester, namely at the middle and end of the semester. The results of monitoring carried out by UPMI at the study program level are reported to the Host via GPMI.</p>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter"><b>Quality standards</b> UNP adopted 24 National Higher Education Standards as follows : (<a href="https://s.id/-19RP4">https://s.id/-19RP4</a>)</p>
        <ol class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">
            <li>Graduate Competency Standards (SM-UNP-01)</li>
            <li>Learning Content Standards (SM-UNP-02)</li>
            <li>Learning Process Standards (SM-UP-03)</li>
            <li>Learning Assessment Standards (SM-UNP-04)</li>
            <li>Standards for Lecturers and Education Personnel (SM-UNP-05)</li>
            <li>Facilities and Infrastructure Standards (SM-UNP-06)</li>
            <li>Learning Management Standards (SM-UNP-07)</li>
            <li>Learning Financing Standards (SM-UNP-08)</li>
            <li>Research Results Standards (SM-UNP-09)</li>
            <li>Research Content Standards (SM-UNP-10)</li>
            <li>Research Process Standards (SM-UNP-11)</li>
            <li>Research Assessment Standards (SM-UNP-12)</li>
            <li>Research Standards (SM-UNP-13)</li>
            <li>Research Facilities and Infrastructure Standards (SM-UNP-14)</li>
            <li>Research Management Standards (SM-UNP-15)</li>
            <li>Research Funding and Financing Standards (SM-UNP-16)</li>
            <li>PKM Result Standards (SM-UNP-17)</li>
            <li>PKM Content Standards (SM-UNP-18)</li>
            <li>Standard Community Service Process (SM-UNP-19)</li>
            <li>PKM Assessment Standards (SM-UNP-20)</li>
            <li>PKM Implementation Standards (SM-UNP-21)</li>
            <li>PKM Facilities and Infrastructure Standards (SM-UNP-22)</li>
            <li>PKM Management Standards (SM-UNP-23)</li>
        </ol>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">As a follow-up to the learning process, feedback is provided to students. Feedback is carried out online by filling out an evaluation questionnaire via the university website <a href="http://evaluasi.unp.ac.id">http://evaluasi.unp.ac.id</a> which is integrated with lecture evaluation by PPM at university level. Feedback is carried out periodically at the end of each semester.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">The results of the self-evaluation from the unit are reported to the unit leadership and unit staff concerned, as well as the UNP leadership. Based on the results of the self-evaluation, UPMI leadership prepared a report of findings to be followed up to make improvements. In implementing the PPEPP model, all units must be open and cooperative and ready to be audited by UNP internal auditors.</p>
        <p class="pb-1 mb-2 appear-animation text-justify" data-appear-animation="fadeInUpShorter">Implementation of quality assurance at the study program level by the Internal Quality Assurance Unit (UPMI) team through periodic evaluation of learning implementation, four times per semester, including: (a) preparation, (b) implementation, (c) learning evaluation. Data and information about learning implementation can be accessed on the DTPS E-Learning Portal. The evaluation report was ratified by the Chair of UPMI and approved by the Chair of the Study Program to be forwarded to GPMI FIS for further processing as a UPPS report to SPMI UNP. The Head of the Study Program informs the evaluation results to the lecturers through a study program meeting. Some forms used by GPMI can be found at the following link:</p>
        <ol class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">
            <li>Learning Preparation Monitoring and Evaluation Form: <a href="https://bit.ly/MonevPembelajaranGPM-UPM">https://bit.ly/MonevPembelajaranGPM-UPM</a></li>
            <li>Learning Implementation Monitoring and Evaluation Form: <a href="https://bit.ly/MonevPembelajaranGPM-UPM">https://bit.ly/MonevPembelajaranGPM-UPM</a></li>
            <li>Learning Evaluation Monitoring and Evaluation Form: <a href="https://bit.ly/MonevPenilaianPembelajaran">https://bit.ly/MonevPenilaianPembelajaran</a></li>
            <li>SPMI Monitoring and Evaluation Results Data: <a href="https://bit.ly/RekapHasilEvaluasiPBM">https://bit.ly/RekapHasilEvaluasiPBM</a></li>
            <li>Faculty of Social Sciences GPM Monitoring and Evaluation Report: <a href="https://bit.ly/LaporanMonevGPM-FIS">https://bit.ly/LaporanMonevGPM-FIS</a></li>
        </ol>
        <b class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Quality assurance</b>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">1. <b>Policy</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Written policies in the form of statutory regulations and/or university leadership regulations that regulate quality assurance in HEIs and/or UPPS.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">The quality assurance policy at PSPS FIS UNP follows the UNP quality assurance policy which is under the coordination of the Quality Assurance Institute (Penjamu) and refers to:</p>
        <ol class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">
            <li><a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1b_qXIFIWaSXQbPqSufw8WLuRCM2XeSlx/view%3Fusp%3Dsharing&q=EgQkRQzKGI6JhK4GIjDuRmBPn5aZEP0MTOdIg1dvXQXW_2GytngB1DZVFB7O-MguTFqQfGB4P1jzQhoNwwQyAXJaAUM">Statuta UNP</a> Chapter XII Article 91 concerning UNP Internal Quality Assurance System (SPMI).</li>
            <li><a href="https://drive.google.com/file/d/1AfzXTCGUlIibobWJcKobRvOUhWbrDonK/view">SK Rektor No.06 Tahun 2022</a> tentang Penetapan Pedoman Sistem Penjaminan Mutu Internal (SPMI) UNP</li>
            <li><a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1Z5kQa_yQOvKwpK6q_OsNSnlLOgSPcoTM/view%3Fusp%3Dsharing&q=EgQkRQzKGMuJhK4GIjAl8rRGZRbCNYz0l_xjAYJOV1cIPpKTfsDja58xfkX-P6C2uiljGdUcayMnNIbvZN4yAXJaAUM">SK Rektor No.07 Tahun 2022</a> regarding the implementing elements of UNP quality assurance</li>
            <li><a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1Z7-YLn8AbhFK0L0Im_a5NMIKGJ_NB6Xp/view%3Fusp%3Dsharing&q=EgQkRQzKGJCKhK4GIjDab1yGXoQr3b2uDN3dB98VYpj3_TQkntK4A0ohUMoDqMrmVpjgbKmdiH6MpwvmQe8yAXJaAUM">Keputusan Rektor UNP No.123/UN35/KP/2020</a> regarding the determination and appointment of the 2020 UNP Environmental Quality Assurance Unit and Cluster Team</li>
            <li>Document <a href="https://drive.google.com/file/d/1UnZKQmvDmEyzV0isPa-pwWaZTjew0Omg/view">Standar Mutu UNP</a> 01.001.00 1 December 2019</li>
            <li>Document <a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1_LTuvu-4PWqRCLGNsiPzwZU5Sp-ov8ry/view%3Fusp%3Dsharing&q=EgQkRQzKGOmKhK4GIjDYEmPk1_oupCjrnk0lLMdjW8bBBFDrRpFIS87U7geEv6PGopraU13SXj4_ICQGj0wyAXJaAUM">Prosedur Mutu UNP</a> 01.004.00 1 December 2019</li>
            <li>Letter <a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1-t5fGPRxLEZaNeUi8H6JgJFZP8Z-ULSa/view%3Fusp%3Dsharing&q=EgQkRQzKGPyKhK4GIjCWH85OoR04iQak_BNtLUfxPVJAwFZFULWX2YxEKJv7ENLGVwLIMcjc3IEKknuIzU0yAXJaAUM">Keputusan Dekan FIS UNP</a> No.303a/UN35.6/KP/2001 Regarding the Establishment of the Department's Internal Quality Assurance Group at FIS UNP in 2021</li>
        </ol>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">2. <b>implementation</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Implementation of quality assurance at PS reflects the embodiment of the quality assurance policy that has been established by PT, which shows the existence of a quality assurance unit/group, implementation of the PPEPP cycle, availability of quality assurance implementation documentation, and implementation of quality assurance external benchmarking.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">a. <b>Quality assurance unit/group</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Implementation of quality assurance in the History Education Study Program is carried out by the Head of the Study Program together with the Internal Quality Assurance Unit (UPMI) of the History Education Study Program in accordance with the Decree <a href="https://www.google.com/sorry/index?continue=https://drive.google.com/file/d/1AfzXTCGUlIibobWJcKobRvOUhWbrDonK/view%3Fusp%3Dsharing&q=EgQkRQzKGIyPhK4GIjBGywd0H_GyZk9sDo4tvZWAyYTT2lNPKoPzjfQgcTn4-v-ezEcm_DFfSAPEodlIr0MyAXJaAUM">SK Rektor No.06 Tahun 2022</a> concerning Ratification of the Organizational Structure, Functions and Main Duties of the Quality Assurance Implementation Unit UNP. The function of the Study Program quality assurance unit is to guarantee the quality of the implementation of the Tri Dharma of Higher Education (Education, Research and Community Service) which is managed by the Study Program so that it meets the standards that have been set through the systemic, consistent and sustainable implementation of the SPMI (PPEPP) cycle.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">A systemic SPMI cycle implementation mechanism (PPEPP) is integrated into the implementation
            The tasks of the UJM study program are as follows:</p>
        <ol>
            <li>Prepare, complete and develop standard operational procedures or SPMI forms at study program level (Determination, P1)</li>
            <li>Carry out the SPMI PPEPP cycle at the study program level (Implementation, P2)</li>
            <li>Monitoring and evaluating the learning process, research and community service in the study program (Evaluation)</li>
            <li>Monitor and evaluate the achievement of study program KPIs at the end of each academic year and provide recommendations to the head of study program (Evaluation)</li>
            <li>Prepare analysis reports and recommendations for follow-up on the implementation of regular internal quality audits to be submitted to the Head of Study Program during the Faculty RTM (Control, P3 and Improvement, P4).</li>
            <li>Collect and manage physical documents as evidence of the implementation of the PPEPP cycle for the purposes of internal quality audits, institutional development and accreditation (Control, P3 and Improvement, P4).</li>
        </ol>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">b. <b>Implementation of the PPEPP Cycle</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">1). <b>Determination</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">In the Determination phase, the Study Program refers to the SPMI policy, UNP Quality Manual, UNP Quality Standards, and UNP Quality Procedures, as well as the faculty's strategic plan, which also sets quality targets as key performance indicators (KPIs). The History Education program sets quality targets at the beginning of each academic year and prepares a self-assessment using SWOT analysis (Strengths, Weaknesses, Opportunities, and Threats) as the basis for developing strategies for that year. A series of activities from setting targets to detailing all activities are integrated into the <a href="http://penjamu.unp.ac.id/">penjamu.unp.ac.id</a> system and serve as the official reference for activities throughout the academic year.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">2). <b>Implementation</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">The History Education Study Program implements the Tri Dharma of Higher Education based on established standards with documented evidence, and activities and implementations are reported by the History Education Study Program through the <a href="http://penjamu.unp.ac.id/">penjamu.unp.ac.id</a> page.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Quality assurance activities include education, research, publication, community service, and infrastructure. In the field of education, quality assurance activities include holding initial semester coordination meetings and preparing teaching and learning activities for one semester. In the field of research and publication, the Study Program conducts workshops related to the preparation of scientific articles three times each semester. Similarly, in the field of community service, the Study Program holds Group Discussion Forums related to the preparation of PKM grant proposals from external funding.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">3). <b>Evaluation</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">The History Education Study Program conducts regular evaluations in the middle and at the end of the academic year. Evaluation activities are carried out through Internal Quality Audit (AMI) activities. AMI is conducted by the head of the study program together with internal auditors appointed by UNP to evaluate the quality management of the Teaching and Learning Process (PBM) and identify areas for improvement in the Internal Quality Assurance System at the study program level.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">This evaluation activity is carried out to assess graduate competency standards (related to learning process planning), Learning Process Standards, and Learning Process Standards. In addition, through AMI activities, an evaluation is also conducted on the achievement of KPIs and Study Program Development Plans (RPPS). This audit is conducted through the <a href="http://penjamu.unp.ac.id/">penjamu.unp.ac.id</a> system. The implementation audit of the RPPS is conducted through the penjamu.unp.ac.id page. The results of the AMI are well-documented in the AMI system at <a href="http://penjamu.unp.ac.id/ami/site/login">http://penjamu.unp.ac.id/ami/site/login</a> and <a href="https://sejarah.fis.unp.ac.id/">sejarah.fis.unp.ac.id</a>. Additionally, evaluation is also conducted through monitoring of research, community service, and publication activities conducted by lecturers. Evaluation of research, community service, and publication activities is conducted through <a href="http://sim.lp2m.unp.ac.id/">http://sim.lp2m.unp.ac.id/</a> as seen in the following figure.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Evaluation of lectures is done by requesting feedback from students to assess learning evaluation activities, student services, academic services, IT services. Evaluation of Lecturers by Students is done through <a href="http://evaluasi.unp.ac.id/">http://evaluasi.unp.ac.id/</a> where students will evaluate lecturers related to class organization, lecture material, teaching methods, interaction with students, feedback to students, learning media, references and supporting materials, and satisfaction levels. Evaluation of Lecturers by Students is done and is mandatory for students before receiving study result sheets (LHS).</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">4). <b>Control</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Control is done by looking at the results of identification of improvement areas and Requests for Improvement and Prevention Actions (PTPP) at the end of each audit. The History Education Study Program then discusses the audit results through Management Review Meetings (RTM) held once a year. If there are monitoring and audit results showing non-compliance with UNP quality standards, the head of the study program will carry out control activities by implementing improvements. For example, from the results of the Internal Quality Audit (AMI) 2020/2021, it was found that the evaluation of lecturers by students indicated that online learning was less optimal in almost every course. Therefore, the History Education Study Program coordinated with UPPS and then held workshops related to methods and strategies for distance learning to improve the quality of online learning.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Additionally, control is also done by providing training on the use of <a href="https://elearning2.unp.ac.id/login/index.php">https://elearning2.unp.ac.id/login/index.php</a> to support online learning. <a href="https://elearning2.unp.ac.id/login/index.php">https://elearning2.unp.ac.id/login/index.php</a> used by History Education Lecturers.
        </p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">5). <b>Improvement</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Improvement is carried out based on monitoring and evaluation results of study program performance indicators, which are then analyzed and standards are improved in the following year. For example, the research and community service outputs produced by DTPS have already reached the target by being published in various nationally accredited scientific journals. This indicator is enhanced to be published in more journals accredited at least at level 2 in SINTA and Sc

        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">c. <b>Quality Assurance Services</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">The History Education Study Program utilizes various quality assurance systems used in implementation, recording, and documentation of quality assurance results captured in the following table:</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Table. Quality Assurance Services</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">d. <b>External Benchmarking</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">External benchmarking is an activity carried out by the History Education Study Program to improve quality related to education, research and publication, and community service aspects. External benchmarking efforts are made by inviting experts from within or outside the country. Some of them are: 1). Rob Hammink, Journalist at De Telegraaf Netherlands, Novelist, Actor in the Movie "Bumi Manusia." Speaking about the role of history in delving into film actors. 2). Prof. Dr. Erwiza Erman, MA on History in Theory and Practice. 3). Prof. Dr. Drs. Ersis Warmansyah Abbas, BA, M. Pd on History Education in Welcoming Society. 4). Dr. Ismi Rajiani, M.M on History Education in Welcoming Society. 5). Prof. Dr. Nana Supriatna, M. Ed on History Education in Welcoming Society. 6). David Pickus, Ph.D on Comparing History Teaching Models in Europe and America. 7). Prof. Dr. H. Said Hamid Hasan, M.A on history education curriculum. 8). Prof. Dr. Jumadi, M. Si on the MBKM curriculum. 9). Arda Sani, S. Pd on Journalism Training. 10). Annisa Junaidi, SS on English Corner Training. 11). Hadiyatullah ML on Building a Business at a Young Age. 12). Gian Kurniadi on Building a Business at a Young Age. 13). Prof. Dr. Aminudin Kasdi, MS on the Perspective of Heroes' Meaning in the Modern Era. 14). Marfuah Panji Astuti on Tracing the Trail of Islamic Civilization's Glory in Indonesia. 15). Dedi Arsa, M. Hum on Academic Writing Training. 16). Dr. Helen Sabera Adib, M.Pd. I on Tricks to Quickly Get a Job.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">3. <b>Evaluation</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Evaluation of policies and implementation of quality assurance carried out in the Study Program. Evaluation of quality assurance at the program level is conducted by the Internal Quality Assurance Group (GPMI) at the faculty level. The Study Program has an internal quality assurance unit (UPMI), has implemented the PPEPP cycle, has well-documented evidence of quality assurance implementation, and has conducted external benchmarking of quality assurance. For the flow of implementing quality assurance evaluation in the Study Program, it can be seen in the SWOT Analysis.</p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">4. <b>Follow-Up</b></p>
        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter">Follow-up actions taken to improve the quality of quality assurance implementation in the Study Program.</p>

    </div>
</div>