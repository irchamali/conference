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

		<!-- ======= Schedule Section ======= -->
		<section id="schedule" class="section-with-bg">
			<div class="container" data-aos="fade-up">
				<div class="section-header">
					<h2>Rundown Acara</h2>
					<p>ICALS 2024 : <?= $desc; ?></p>
				</div>

				<!-- <p class="sub-heading"><a href="https://drive.google.com/drive/folders/1nn4RKiBARe1KjSqPJSSb6-ILUIaY1iay?usp=sharing" download><i class="bi-file-earmark-arrow-down"></i>Poster</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
				<!-- <a href="https://drive.google.com/drive/folders/1CHwm_jEdzSIo-yRMyVZr8juhwU9s0JSk?usp=sharing" download><i class="bi-file-earmark-arrow-down"></i>Rundown Acara (Pdf)</a></p> -->

				<ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
					
					<li class="nav-item">
						<a class="nav-link active" href="#day-2" role="tab" data-bs-toggle="tab">Hari 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Hari 2</a>
					</li>
				</ul>

				<div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

					
					<div role="tabpanel" class="col-lg-9  tab-pane fade show active" id="day-2">

						<div class="row schedule-item">
							<div class="col-md-0"></div>
							<div class="col-md-12 text-center"><time>Rabu, 21 Agustus 2024</time>
								<!-- <div class="speaker">
									<img src="assets/img/speakers/a1.jpg" alt="Brenden Legros">
								</div> -->
								<h4>International Conference Day One</h4>
								<!-- <p>Facere provident incidunt quos voluptas.</p> -->
							</div>
						</div>

						<div class="row schedule-item">
							<div class="col-md-2"><time>09.00-10.00</time></div>
							<div class="col-md-10">
								<!-- <div class="speaker">
									<img src="assets/img/speakers/2.jpg" alt="Hubert Hirthe">
								</div> -->
								<h4>Pembukaan</h4>
								<p>Sambutan Menteri Pendidikan dan Kebudayaan<br>>> {[person]}</p><br>
								<p>Sambutan Ketua Umum PBNU<br>>> {[person]}</p><br>
								<p>Sambutan Rektor UNUSIA Jakarta <br>>> {[person]}</p><br>
								<!-- <p>Sambutan Dirjen Kebudayaan Kemendikbud<br>>> {[person]}</p> -->
							</div>
						</div>

						<div class="row schedule-item">
							<div class="col-md-2 col-sm-2"><time>10.00-11.30</time></div>
							<div class="col-md-4 col-sm-5">
								<div class="speaker">
									<img src="assets/frontend/img/speak/r1.jpg" alt="Cole Emmerich">
								</div><br>
								<div class="speaker">
									<img src="assets/frontend/img/speak/x2.jpg" alt="Cole Emmerich">
								</div>
							</div>
							<div class="col-md-6 col-sm-5">
							<h4>Keynote Speech</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
						</div>

						<div class="row schedule-item">
							<div class="col-md-2"><time>11.30-12.30</time></div>
							<div class="col-md-10">
								<h4>ISHOMA (Break and Prayer)</span></h4>
							</div>
						</div>

						<div class="row schedule-item">
							<div class="col-md-2"><time>12.30-14.30</time></div>
							<div class="col-md-5">
								<h4>Expert Panel</h4>
								<p>a. {[theme]}</p>
								<p>b. {[theme]}</p>
								<p>c. {[theme]}</p>
								<!-- <p>d. Bandar, Ports and River Estuary</p> -->
							</div>
							<div class="col-md-5">
								<h4>Panelis</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<p>3. {[person]}</p>
								<!-- <p>4. Prof. Dr. Susanto Zuhdi</p> -->
							</div>
						</div>

						<div class="row schedule-item">
							<div class="col-md-2"><time>14.30-15.00</time></div>
							<div class="col-md-10">
								<h4>Coffee Break</h4>
								<!-- <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p> -->
							</div>
						</div>

						<div class="row schedule-item">
							<!-- <div class="col-md-2"><time>15.00-17.30</time></div> -->
							<div class="col-md-12 text-center">
								<h4>Panel Paralel</h4>
							</div>
						</div>
						<!-- PanelSatu -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel I</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<!-- <h4>ISHOMA</h4> -->
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel I</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Endang Rochmiatun</p>
								<p>4. Ifan Maulana Ishak</p> -->
							</div>
						</div>
						<!-- PanelDua -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel II</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel II</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Johan Wahyudi</p>
								<p>4. Yudhi Andoni</p> -->
							</div>
						</div>
						<!-- Panel-III -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel III</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel III</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]} </p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Slamat Trisila</p>
								<p>4. Suriadi Mappangara</p> -->
							</div>
						</div>
						<!-- PanelIV -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel IV</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel IV</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Ahmad Ginandjar Sya'ban</p> -->
								<!-- <p>4. Yudhi Andoni</p> -->
							</div>
						</div>
						<!-- PanelV -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel V</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel V</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Laras Aridhini</p>
								<p>4. Ahmad Saefudin</p> -->
							</div>
						</div>
						<!-- PanelVI -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VI</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VI</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Irham</p>
								<p>4. Qonitah & Semiarto A. Purwanto</p> -->
							</div>
						</div>
						<!-- PanelVII -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VII</h4>
								<p>Manuscript and Cultural Negotiations on the Spice Route</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Hermansyah, M.A.Hum</p>
								<p>2. Dr. Muchlis Hadrawi</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VII</h4>
								<p>Manuscript and Cultural Negotiations on the Spice Route</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Hermansyah, M.A.Hum</p>
								<p>2. Dr. Muchlis Hadrawi</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. Muhammad Sarip & Nabila Nandini</p>
								<p>2. Asep Yudha Wirajaya</p>
								<p>3. Syahrul Rahmat</p>
								<p>4. Haron Daud</p>
							</div>
						</div> -->
						<!-- PanelVIII -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VIII</h4>
								<p>Searching for Creative Methodologies in Social Sciences and Humanities</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Dr. Gani Achmad Jaelani</p>
								<p>2. Dr. Wiwin Juwita</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VIII</h4>
								<p>Searching for Creative Methodologies in Social Sciences and Humanities</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Dr. Gani Achmad Jaelani</p>
								<p>2. Dr. Wiwin Juwita</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. Amin Mudzakkir</p>
								<p>2. Rendy Ananta Prasetya</p>
								<p>3. Ahmad Suaedy</p>
								<p>4. Andi Rosa</p>
							</div>
						</div> -->
						<!-- PanelIX -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>Sesi I (15.00-16.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel IX</h4>
								<p>Transmission of Oral Tradition among Nusantara Society on the Spice Route</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Dr. Chairil Effendy</p>
								<p>2. Prof. Dr. Heddy Shri Ahimsa-Putra, MA.,M.Phil.</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4></h4>
								<p></p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi II (16.15-18.15)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel IX</h4>
								<p>Transmission of Oral Tradition among Nusantara Society on the Spice Route</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Dr. Chairil Effendy</p>
								<p>2. Prof. Dr. Heddy Shri Ahimsa-Putra, MA.,M.Phil.</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. Rida K Liamsi</p>
								<p>2. Aone v Engelenhoven</p>
								<p>3. Robert Sibarani</p>
								<p>4. Yudhi Andoni</p>
							</div>
						</div>-->

					</div>
					<!-- End Schdule Day 2 -->

					<!-- Schdule Day 3 -->
					<div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

						<div class="row schedule-item">
							<div class="col-md-0"></div>
							<div class="col-md-12 text-center"><time>Kamis, 22 Agustus 2024</time>
								<h4>International Conference Day Two</h4>
							</div>
						</div>

						<!-- PanelSatu -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi III (09.00-11.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel I</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. {[person]}</p>
								<p>4. Chaerol Riezal</p> -->
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>Sesi IV (11.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel I</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>-</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>-</p>
							</div>
						</div>
						<!-- PanelDua -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi III (09.00-11.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel II</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Hamdani, Ahmad Suaedy, Adib Misbahul Islam, Amin Mudzakkir & Johan Wahyudi</p>
								<p>4. Syamsul Hadi & Anang Harris Hermawan</p> -->
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi IV (11.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel II</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
						</div>
						<!-- Panel-III -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi III (09.00-11.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel III</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. I Putu Gede Suwitha</p> -->
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi IV (11.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel III</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]} </p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
						</div>
						<!-- PanelIV -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi III (09.00-11.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel IV</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>-</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>-</p>
							</div>
						</div>
						<!-- <div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div> -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi IV (11.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel IV</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>-</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>-</p>
							</div>
						</div>
						<!-- Panel-V -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi III (09.00-11.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel V</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Ahmad Muthohar</p>
								<p>4. Jamaluddin Shiddiq</p> -->
							</div>
						</div>
						<!-- <div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div> -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi IV (11.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel V</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>-</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>-</p>
							</div>
						</div>
						<!-- PanelVI -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi III (09.00-11.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VI</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. {[person]}</p>
								<p>2. {[person]}</p>
								<!-- <p>3. Muhammad Nabil Fahmi</p>
								<p>4. Herlina & M. Mufid</p> -->
							</div>
						</div>
						<!-- <div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div> -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>Sesi IV (11.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VI</h4>
								<p>{[theme]}</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>-</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>-</p>
							</div>
						</div>
						<!-- PanelVII -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>Semua sesi (09.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VII</h4>
								<p>Manuscript and Cultural Negotiations on the Spice Route</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>-</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>-</p>
							</div>
						</div> -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div> -->
						
						<!-- PanelVIII -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>Sesi III (09.00-11.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VIII</h4>
								<p>Searching for Creative Methodologies in Social Sciences and Humanities</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Dr. Gani Achmad Jaelani</p>
								<p>2. Dr. Wiwin Juwita</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. Fariz Alnizar</p>
								<p>2. M. Lytto Syahrum Arminsa</p>
								<p>3. Muhammad Nurul Huda</p>
								<p>4. Mamlahatun Buduroh</p>
							</div>
						</div> -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div> -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>Sesi IV (11.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel VIII</h4>
								<p>Searching for Creative Methodologies in Social Sciences and Humanities</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>-</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>-</p>
							</div>
						</div> -->
						<!-- PanelIX -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>Sesi III (09.00-11.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel IX</h4>
								<p>Transmission of Oral Tradition among Nusantara Society on the Spice Route</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Dr. Chairil Effendy</p>
								<p>2. Prof. Dr. Heddy Shri Ahimsa-Putra, MA.,M.Phil.</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. Tjetjep Rohendi R</p>
								<p>2. Anwar Hafid</p>
								<p>3. Rendra Setyadiharja</p>
								<p>4. Gres Grasia Azmin</p>
							</div>
						</div> -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2 col-sm-6"><time>16.00-16.15</time></div>
							<div class="col-md-10 col-sm-6">
								<p>ISHOMA</p>
							</div>
						</div> -->
						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>Sesi IV (11.00-13.00)</time></div>
							<div class="col-md-4 col-sm-6">
								<h4>Panel IX</h4>
								<p>Transmission of Oral Tradition among Nusantara Society on the Spice Route</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Narasumber</h4>
								<p>1. Dr. Chairil Effendy</p>
								<p>2. Prof. Dr. Heddy Shri Ahimsa-Putra, MA.,M.Phil.</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h4>Presenter</h4>
								<p>1. Medri Ono</p>
								<p>2. Haliadi Sadi</p>
								<p>3. Mahmudah</p>
								<p>4. Bambang W</p>
							</div>
						</div> -->

						<!-- <div class="row schedule-item">
							<div class="col-md-2"><time>13.00-13.30</time></div>
							<div class="col-md-10">
								<h4>ISHOMA</h4>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>14.00-14.10</time></div>
							<div class="col-md-5">
								<h4>Pleno Symposium I</h4>
							</div>
							<div class="col-md-5">
								<p>Panel 1, 2 and 3</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>14.10-14.20</time></div>
							<div class="col-md-5">
								<h4>Pleno Symposium II</h4>
							</div>
							<div class="col-md-5">
								<p>Panel 4, 5 and 6</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>14.20-14.30</time></div>
							<div class="col-md-5">
								<h4>Pleno Symposium III</h4>
							</div>
							<div class="col-md-5">
								<p>Panel 7, 8 and 9</p>
							</div>
						</div>
						<div class="row schedule-item">
							<div class="col-md-2"><time>14.30-15.00</time></div>
							<div class="col-md-5">
								<h4>Pembacaan Rumusan</h4>
							</div>
							<div class="col-md-5">
								<p><i class="bi-emoji-smile-fill"></i></p>
							</div>
						</div> -->
						<div class="row schedule-item">
							<div class="col-md-2"><time>15.00-16.00</time></div>
							<div class="col-md-5">
								<h4>Closing Ceremony</h4>
							</div>
							<div class="col-md-5">
								<p><i class="bi-emoji-smile"></i></p>
							</div>
						</div>

					</div>
					<!-- End Schdule Day 3 -->
				</div>
			</div>

		</section><!-- End Schedule Section -->

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
