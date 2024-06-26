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

				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-9">
						
					<div class="section-header">
						<h2>Registration</h2>
						<p>Let's apply your paper!</p>
						
					</div>
                        <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSduNeSzH_YZsFsAE1jsi-2I8GOKIcZusN48-dIZK0G4kkvxTw/viewform?embedded=true" width="100%" height="510" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
							<ul class="faq-list">
								<li>
									<div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Registration Co-host ICALS:<i class="bi bi-chevron-down icon-show"></i><i
											class="bi bi-chevron-up icon-close"></i></div>
									<div id="faq1" class="collapse show" data-bs-parent=".faq-list">
										<p>
											<a href="https://bit.ly/FormCoHostICALS">bit.ly/FormCoHostICALS</a> 
										</p>
									</div>
								</li>
								<li>
									<div data-bs-toggle="collapse" class="collapsed question" href="#faq2">ICALS' Paper Submission:<i class="bi bi-chevron-down icon-show"></i><i
											class="bi bi-chevron-up icon-close"></i></div>
									<div id="faq2" class="collapse show" data-bs-parent=".faq-list">
										<p>
											<a href="https://bit.ly/PaperICALS2024">bit.ly/PaperICALS2024</a> 
										</p>
									</div>
								</li>
								<li>
									<div data-bs-toggle="collapse" class="collapsed question" href="#faq3">Publication Collaboration:<i class="bi bi-chevron-down icon-show"></i><i
											class="bi bi-chevron-up icon-close"></i></div>
									<div id="faq3" class="collapse" data-bs-parent=".faq-list">
										<p>
											1. International Chapter Books; <br>
											2. International Journal;<br>
											3. Nationally Reputable Journal;<br>
											4. National Journal. 
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
