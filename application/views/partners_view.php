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
		<section id="speakers-details">
			<div class="container">
				<div class="section-header">
					<h2><?= $title; ?></h2>
					<p><?= $desc; ?></p>
				</div>

				<div class="row mt-4">
                    <div class="col-12">
                        <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="mytable" class="display table table-hover" style="width: 100%; ">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Jurnal</th>
                                                <th>Link</th>                    
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="body-table">
                                            <?php
                                            $no = 0;
                                            foreach ($members as $row) :
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $no; ?></td>
                                                    <td style="vertical-align: middle;"><?= $row['member_name']; ?></td>
                                                    <td style="vertical-align: middle;"><?= $row['member_link']; ?></td>
                                                    
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
