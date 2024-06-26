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
								<div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Q: How do I submit my Abstract?<i class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq1" class="collapse" data-bs-parent=".faq-list">
									<p>
										A : Send your Abstract as per the guideline on email: <a href="mailto:icals@unusia.ac.id">icals@unusia.ac.id</a> 
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Q: When is the submission deadline?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq2" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Abstract submission will  be closed  on Sunday, June 30 , 2024. You can submit your abstract by clicking <a href="https://bit.ly/PaperICALS2024">here</a>.
									</p>
								</div>
							</li>

							<!-- <li>
								<div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Q: Is there any charge if I submit an abstract?  <i class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq3" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : No, it is free of charge.
									</p>
								</div>
							</li> -->

							<li>
								<div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Q: How many words should I write for my abstract?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq4" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Your abstract may contain no more than 500 words, not including spaces. The submission will not be considered if the abstract exceeds the maximum character limit.
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Q: What should my abstract contain?<i class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq5" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Your abstract should contain; focus of study, problem, method, arguments, and findings.
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Q:  When will I find out if my abstract has been accepted for presentation?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq6" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : The Committee will send an e-mail notification to the presenting author on <b>Saturday, July 31, 2024</b>. Only the person listed as the presenting author will receive this notification. 
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq7" class="collapsed question">Q: Where will the Conference take place?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq7" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : The Conference will take place at Nahdlatul Ulama University of Indonesia, Jakarta and will be conducted through virtual platform as well.
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq8" class="collapsed question">Q: When will registration open?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq8" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Registration open on <b>June 1st 2024</b>, and participants may register online in <a href="https://bit.ly/PaperICALS2024">https://bit.ly/PaperICALS2024</a>
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq9" class="collapsed question">Q: What sessions will be in the virtual component?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq9" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : All session will be in the virtual platform, please check to our website; <a href="https://conference.unusia.ac.id">www.conference.unusia.ac.id</a> for list of sessions.
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq10" class="collapsed question">Q: Shall I get the certificate for presenting/attending the conference?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq10" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Yes, you will get a certificate.
									</p>
								</div>
							</li>

                            <li>
								<div data-bs-toggle="collapse" href="#faq11" class="collapsed question">Q: Do all papers that are accepted will be published in Scopus Journal?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq11" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : The quality of your article takes a vital role to be published in Scopus Journal. There will be a rigorous scientific review process to decide the journal recommendation that suits your article/ paper. 
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq12" class="collapsed question">Q: In what form will the conference papers be published?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq12" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : The papers will be published in the form of proceedings or books through a rigorous review process and will be indexed in google scholar and academia.edu.
									</p>
								</div>
							</li>

                            <li>
								<div data-bs-toggle="collapse" href="#faq13" class="collapsed question">Q: If I don’t submit an abstract, is it okay to attend the conference?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq13" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Yes, you can attend the conference by registering through our website, and you may choose any parallel that suits to your interests.</a>
									</p>
								</div>
							</li>

							<li>
								<div data-bs-toggle="collapse" href="#faq14" class="collapsed question">Q: Whom do I contact with additional questions?<i
										class="bi bi-chevron-down icon-show"></i><i
										class="bi bi-chevron-up icon-close"></i></div>
								<div id="faq14" class="collapse" data-bs-parent=".faq-list">
									<p>
                                    A : Please direct your questions or concerns to this email: <a href="mailto:kosmopolitanisme.fin@unusia.ac.id">kosmopolitanisme.fin@unusia.ac.id</a>. We would love to serve you.
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
