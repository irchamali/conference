<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title><?= $site_title; ?></title>
    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Ircham Ali" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/frontend/images/' . $icon); ?>">
    <link href="<?= base_url(''); ?>assets/frontend/img/unu-touch-icon.png" rel="apple-touch-icon">
    <!-- SEO Tag -->
    <meta name="description" content="<?php echo $site_desc; ?>" />
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc; ?>" />
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

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

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
			<h1 class="mb-4 pb-0"><br><span>International</span> Conference</h1>
			<h3 class="mb-4 pb-0">on Accounting, Law and Sociology</h3>
			<p class="mb-4 pb-0">August 21-23, 2024</p>
			<a href="<?= base_url(''); ?>assets/frontend/img/icals-flyer.jpeg" class="glightbox play-btn mb-4"></a>
			<a href="#about" class="about-btn scrollto">About Conference</a>
		</div>
	</section><!-- End Hero Section -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-lg-6">
						<h2>Call for Presentations</h2>
						<p>We would like to invite researchers, academics, practitioners, and graduate students both
							from Indonesia and overseas to submit an abstract (in English or Indonesian), a maximum of
							500 words.<br></p>
						<p>This event is organized in collaboration between the Accounting Study Program, Legal Studies Study Program, and Sociology Study Program of Universitas Nahdlatul Ulama Indonesia (UNUSIA) Jakarta. International Conference on Financial Crime Accounting, Law, and Sociology will become an inclusive and open platform for stakeholders to share knowledge, experience and current thoughts.</p>
						<p>If you have not got any response from the conference committee (24 hours maximum), please send your questions or concerns to this email: <a href="mailto:icals@unusia.ac.id">icals@unusia.ac.id</a></p>
					</div>
					<div class="col-lg-6">
						<h2>Terms of Reference</h2>
						<p>Global financial intitutions such as banks, capital markets and other financial intitutions have key role in preventing and detecting financial crime. They must comply with anti-money laundering (AML) and anti-Fraud standards, and implementn strict reporting procedures for suspicious activity. Involmentn financial instituations in monitoring cross-border transaction is very important for stop flow of illegal funds.<br>
						Technological devolopments have brought new challengs as well as opportunities in combat financial crime globally. On the one hand, technology provides the ability to detect suspicious transaction patterns through data analysis and artificial intelligence. On the other hand, financial crimes are also increasingly adopted technology to commit criminal acts, such as data theft or use cryptocurrency for money laundering. Therefore, technological innovation and cyber security is key in efforts to prevent and detect financial crime. 
						<br> <a href="<?= base_url('/background'); ?>">Read More</a></p>
					</div>
					<!-- <div class="col-lg-3">
						<h3>When</h3>
						<p>Monday to Tuesday<br>30-31 August</p>
					</div> -->
				</div>
			</div>
		</section><!-- End About Section -->
		
		<!-- ======= Supporters Section ======= -->
		<section id="supporters" class="section-with-bg">
			<div class="container" data-aos="fade-up">
				<!-- <div class="section-header">
					<h2>Sponsors</h2>
				</div> -->

				<div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

					<div class="col-lg-3 col-md-6 col-xs-6">
						<div class="supporter-logo">
							<img src="assets/frontend/img/support/e1.png" class="img-fluid" alt="">
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-xs-6">
						<div class="supporter-logo">
							<img src="assets/frontend/img/support/ps-akn.png" class="img-fluid" alt="">
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6 col-xs-6">
						<div class="supporter-logo">
							<img src="assets/frontend/img/support/ps-ih.png" class="img-fluid" alt="">
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-xs-6">
						<div class="supporter-logo">
							<img src="assets/frontend/img/support/ps-sos.png" class="img-fluid" alt="">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Sponsors Section -->

		<!-- =======  F.A.Q Section ======= -->
		<section id="faq">
			<div class="container" data-aos="fade-up">
				<div class="section-header">
					<h2>MAIN TOPICS</h2>
				</div>
				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-9">
						<ul class="faq-list">
							<li>
								<div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Field of Accounting<i class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq1" class="collapse" data-bs-parent=".faq-list">
									<p>
									Audit, Taxation, Management Accounting, Financial Accounting, Forensic Accounting, Information Systems Accounting, Sharia Accounting, Governmental Accounting, and Non-Profit Accounting.
									</p>
								</div>
							</li>
							<li>
								<div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Field of Legal Studies<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq2" class="collapse" data-bs-parent=".faq-list">
									<p>
										Business Law, Criminal Law, Environmental Law, International Law, Health Law, Property Law, Human Rights Law, Technology and Privacy Law, Public Administration Law, and Constitutional Law.
									</p>
								</div>
							</li>
							<li>
								<div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Field of Sociology<i class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq3" class="collapse" data-bs-parent=".faq-list">
									<p>
										Family Sociology, Organizational Sociology, Educational Sociology, Environmental Sociology, Criminal Sociology, Political Sociology, Economic Sociology, Cultural Sociology, and Urban-Rural Sociology.
									</p>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>

		</section><!-- End  F.A.Q Section -->

		<!-- ======= Schedule Section ======= -->
		<section id="schedule" class="section-with-bg">
			<div class="container" data-aos="fade-up">
				<div class="section-header">
					<h2>Event Schedule</h2>
					<p>Here is our conference schedule</p>
				</div>

				<h4 class="sub-heading">This conference will be held in "hybrid" (offline and online). Offline sessions
					will be held at <a href="#venue">Auditorium UNUSIA Tower A Jakarta</a>, while online sessions are held via video conference (zoom platform). </h4>
				
				<!-- <p class="sub-heading"><a href="https://drive.google.com/drive/folders/1nn4RKiBARe1KjSqPJSSb6-ILUIaY1iay?usp=sharing" download><i class="bi-file-earmark-arrow-down"></i>Poster</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
				<!-- <a href="https://drive.google.com/drive/folders/1CHwm_jEdzSIo-yRMyVZr8juhwU9s0JSk?usp=sharing" download><i class="bi-file-earmark-arrow-down"></i>Event schedule (Pdf)</a></p> -->

				<ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('jadwal'); ?>" role="tab">Ind schedule</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="<?=base_url('schedule'); ?>" role="tab">Eng schedule</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 2</a>
					</li> -->
				</ul>

			</div>

		</section><!-- End Schedule Section -->

		<!-- ======= Speakers Section ======= -->
		<section id="speakers">
			<div class="container" data-aos="fade-up">
				<div class="section-header">
					<h2>Event Speakers</h2>
					<p>Here are some of our speakers</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="100">
							<img src="assets/frontend/img/speak/r1.jpg" alt="Speaker 9" class="img-fluid">
							<div class="details">
								<h3><a href="#">Juri Ardiantoro, M.Si., Ph.D</a></h3>
								<div class="social">
									<p>Rector of UNUSIA</p>
								</div>
							</div>
						</div>
					</div>
				    <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="100">
							<img src="assets/frontend/img/speak/x1.jpg" alt="Speaker 9" class="img-fluid">
							<div class="details">
								<h3><a href="#">Nur Ashikin Mokhtar, Ph.D</a></h3>
								<div class="social">
									<p>Deputy Public Prosecutor, Malaysian Attorney General</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="200">
							<img src="assets/frontend/img/speak/x2.jpg" alt="Speaker 10" class="img-fluid">
							<div class="details">
								<h3><a href="#">Dr. Fitra Roman Cahaya </a></h3>
								<div class="social">
									<p>Lecturer University of Essex UK</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="100">
							<img src="assets/frontend/img/speak/x3.jpg" alt="Speaker 11" class="img-fluid">
							<div class="details">
								<h3><a href="#">Mohamed Abdiaziz Muse</a></h3>
								<div class="social">
									<p>African Diaspora Policy Center Netherlands</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="200">
							<img src="assets/frontend/img/speak/x4.jpg" alt="Speaker 12" class="img-fluid">
							<div class="details">
								<h3><a href="#">Prof. Drs. H. Mohamad Nasir, M.Si., Ph.D</a></h3>
								<div class="social">
									<p>Independent commissioner of BSI</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="100">
							<img src="assets/frontend/img/speak/x5.jpg" alt="Speaker 1" class="img-fluid">
							<div class="details">
								<h3><a href="#">Prof. Ainun Na'im, Ph.D., M.B.A</a></h3>
								<div class="social">
									<p>Chief of LPTNU</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="200">
							<img src="assets/frontend/img/speak/y7.jpg" alt="Speaker 2" class="img-fluid">
							<div class="details">
								<h3><a href="#">Antonius Widodo Mulyono</a></h3>
								<div class="social">
									<p>Director of PT Bank Central Asia Tbk</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="300">
							<img src="assets/frontend/img/speak/n8.jpg" alt="Speaker 3" class="img-fluid">
							<div class="details">
								<h3><a href="#">Dr. Muhammad, M.H</a></h3>
								<div class="social">
									<p>Dean of FH UNUSIA</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="200">
							<img src="assets/frontend/img/speak/x6.jpg" alt="Speaker 2" class="img-fluid">
							<div class="details">
								<h3><a href="#">Taufik Hidayadi, M.Si</a></h3>
								<div class="social">
									<p>Dean of FEB UNUSIA</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="speaker" data-aos="fade-up" data-aos-delay="300">
							<img src="assets/frontend/img/speak/n10.jpg" alt="Speaker 3" class="img-fluid">
							<div class="details">
								<h3><a href="#">Naeni Amanulloh, M.Si</a></h3>
								<div class="social">
									<p>Dean of FIS UNUSIA</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>

			</div>

		</section><!-- End Speakers Section -->
		
		<!-- ======= Gallery Section ======= -->
		<!-- <section id="gallery">

			<div class="container" data-aos="fade-up">
				<div class="section-header">
					<h2>Supported By</h2>
				</div>
			</div>

			<div class="gallery-slider swiper-container">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide"><a href="assets/frontend/img/gallery/s01.jpg" class="gallery-lightbox"><img
								src="assets/frontend/img/gallery/s01.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="assets/frontend/img/gallery/s02.jpg" class="gallery-lightbox"><img
								src="assets/frontend/img/gallery/s02.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="assets/frontend/img/gallery/s03.jpg" class="gallery-lightbox"><img
								src="assets/frontend/img/gallery/s03.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="assets/frontend/img/gallery/s04.jpg" class="gallery-lightbox"><img
								src="assets/frontend/img/gallery/s04.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="assets/frontend/img/gallery/s05.jpg" class="gallery-lightbox"><img
								src="assets/frontend/img/gallery/s05.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="assets/frontend/img/gallery/s06.jpg" class="gallery-lightbox"><img
								src="assets/frontend/img/gallery/s06.jpg" class="img-fluid" alt=""></a></div>
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</section> -->
		<!-- End Gallery Section -->

		<!-- ======= Venue Section ======= -->
		<section id="venue" class="section-with-bg">

			<div class="container-fluid" data-aos="fade-up">

				<div class="section-header">
					<h2>Event Venue</h2>
					<p>Conference location</p>
				</div>

				<div class="row g-0">
					<div class="col-lg-6 venue-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.459455539967!2d106.84844107546937!3d-6.2029609937848145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f46f1aa68feb%3A0x1025d8e539e14ede!2sNahdlatul%20Ulama%20University%20of%20Indonesia!5e0!3m2!1sen!2sid!4v1719149397112!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>

					<div class="col-lg-6 venue-info">
						<div class="row justify-content-center">
							<div class="col-11 col-lg-8 position-relative">
                                <br><br>
                                <h3>Tower A,<br>Unusia</h3>
                                <p>August 21-23, 2024</p>
                                <br>
                                <br>
							</div>
						</div>
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