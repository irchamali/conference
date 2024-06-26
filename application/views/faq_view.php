<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $desc; ?>" />
    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="author" content="Ircham Ali" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/frontend/images/' . $icon); ?>">
	<link href="<?= base_url(''); ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- SEO Tag -->
    <link rel="canonical" href="<?= site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:description" content="<?= $desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?= $desc; ?>" />
    <meta name="twitter:title" content="<?= $title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url() . 'assets/frontend/vendor/aos/aos.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/frontend/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/frontend/vendor/glightbox/css/glightbox.min.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/frontend/vendor/swiper/swiper-bundle.min.css' ?>" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url() . 'assets/frontend/css/style.css'; ?>" rel="stylesheet">

</head>

<body>

	<!-- ======= Header ======= -->
	<?= $header; ?>
	<!-- End Header -->

	<main id="main" class="main-page">

		<!-- ======= Speaker Details Sectionn ======= -->
		<section id="faq">
			<div class="container">
				<div class="section-header">
					<h2>FAQ</h2>
					<p>Frequently Asked Questions</p>
					<!-- <p>"Cosmopolitanism of Islam Nusantara: <br>Spiritual Traces and Intellectual Networks on The Spice Route”</p><br> -->
				</div>

				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-9">
						<ul class="faq-list">

							<li>
								<div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Q: Bagaimana cara saya mengirim abstrak?<i class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq1" class="collapse" data-bs-parent=".faq-list">
									<p>
										A : Kirimkan Abstrak Anda ke alamat email: <a href="mailto:icals@unusia.ac.id">icals@unusia.ac.id</a> 
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Q: Kapan tenggat waktu pengiriman abstrak? <i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq2" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Pengiriman abstrak akan ditutup pada <b>{dd-mm-yyyy}</b>. Anda dapat mengirimkan abstrak Anda <a href="https://bit.ly/PaperICALS2024">di sini</a>.
									</p>
								</div>
							</li>

							<!-- <li>
								<div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Q: Apakah ada biaya yang harus saya bayar ketika mengirimkan abstrak?<i class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq3" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Tidak, kegiatan ini tidak dipungut biaya.
									</p>
								</div>
							</li> -->

							<li>
								<div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Q: Berapa jumlah kata yang harus ditulis pada Abstrak?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq4" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Abstrak yang ditulis tidak kurang dari 500 kata (tidak termasuk spasi). Naskah tidak akan dipertimbangkan jika abstrak melebihi batas karakter maksimum.
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Q: Unsur apa yang harus ada di dalam Abstrak?<i class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq5" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Abstrak harus berisi fokus kajian, masalah, metode, argumentasi, dan temuan.
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Q: Kapan saya dapat mengetahui apakah abstrak Saya diterima untuk presentasi?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq6" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Panitia akan mengirimkan e-mail pemberitahuan kepada penulis/penyaji pada hari <b>Sabtu, 31 Juli 2024</b>. Hanya yang terdaftar sebagai penulis/penyaji yang akan menerima pemberitahuan ini. 
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq7" class="collapsed question">Q: Dimana Konferensi akan dilaksanakan?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq7" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Konferensi akan dilaksanakan secara offline di Universitas Nahdlatul Ulama Indonesia, Jakarta, sedangkan sebagiannya akan dilakukan melalui video conference (platform zoom).
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq8" class="collapsed question">Q: Kapan pendaftaran dibuka?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq8" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Pendaftaran dibuka sejak <b>1 Juni 2024</b>, dan peserta dapat mendaftar secara online di <a href="https://bit.ly/PaperICALS2024">https://bit.ly/PaperICALS2024</a>
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq9" class="collapsed question">Q: Sesi apa yang akan ada di platform virtual?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq9" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Semua sesi akan berada di platform virtual, silakan periksa ke situs kami; <a href="https://conference.unusia.ac.id">www.conference.unusia.ac.id</a> untuk daftar sesi.
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq10" class="collapsed question">Q: Apakah saya akan mendapatkan sertifikat untuk presentasi/menghadiri konferensi?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq10" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Ya, Anda akan mendapatkan sertifikat jika mengikuti acara secara penuh.
									</p>
								</div>
							</li>

                            <li>
								<div data-bs-toggle="collapse" href="#faq11" class="collapsed question">Q: Apakah semua makalah yang diterima akan dimuat di Jurnal Scopus?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq11" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Kualitas artikel Anda menentukan apakah layak dipublikasikan di Jurnal Scopus atau tidak. Untuk itu akan ada proses seleksi yang ketat untuk menentukan rekomendasi jurnal yang sesuai dengan artikel/makalah Anda. 
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq12" class="collapsed question">Q: Dalam bentuk apa makalah konferensi akan diterbitkan?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq12" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Makalah akan diterbitkan dalam bentuk prosiding atau buku melalui proses review yang ketat dan akan terindeks di <b>Google Scholar</b> dan <b>academia.edu</b>
									</p>
								</div>
							</li>

                            <li>
								<div data-bs-toggle="collapse" href="#faq13" class="collapsed question">Q: Jika saya tidak mengirimkan abstrak, apakah boleh mengikuti konferensi?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq13" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Ya, Anda dapat menghadiri konferensi dengan mendaftar melalui website kami, dan Anda dapat memilih paralel yang sesuai dengan minat Anda.</a>
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq14" class="collapsed question">Q: Siapa yang harus saya hubungi jika ada pertanyaan tambahan?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq14" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Silakan ajukan pertanyaan Anda ke email ini: <a href="mailto:icals@unusia.ac.id">icals@unusia.ac.id</a>. Kami akan senang untuk melayani Anda.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?= $footer; ?>
	<!-- End  Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url() . 'assets/frontend/vendor/aos/aos.js' ?>"></script>
	<script src="<?= base_url() . 'assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
	<script src="<?= base_url() . 'assets/frontend/vendor/glightbox/js/glightbox.min.js' ?>"></script>
	<script src="<?= base_url() . 'assets/frontend/vendor/php-email-form/validate.js' ?>"></script>
	<script src="<?= base_url() . 'assets/frontend/vendor/swiper/swiper-bundle.min.js' ?>"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url() . 'assets/frontend/js/main.js'; ?>"></script>


</body>

</html>
