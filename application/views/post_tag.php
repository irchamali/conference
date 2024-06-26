<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $judul; ?> | International Symposium</title>
    <meta name="description" content="Kumpulan artikel <?php echo $meta_description; ?> dan banyak lagi..." />
    <meta content="" name="keywords">

    <!-- SEO Tags -->
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <?php error_reporting(0);
	if (empty($url_prev)) : ?>
    <?php else : ?>
    <link rel="prev" href="<?php echo $url_prev; ?>" />
    <?php endif; ?>
    <link rel="next" href="<?php echo $url_next; ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $judul; ?>" />
    <meta property="og:description" content="Kumpulan artikel <?php echo $meta_description; ?> dan banyak lagi..." />
    <meta property="og:url" content="<?php echo $canonical; ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Kumpulan artikel <?php echo $meta_description; ?> dan banyak lagi..." />
    <meta name="twitter:title" content="<?php echo $judul; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'assets/frontend/images/' . $site_image ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/' . $icon); ?>">
    <link href="assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(''); ?>assets/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(''); ?>assets/frontend/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <?= $header; ?>
    <!-- End Header -->

    <main id="main" class="main-page">

        <!-- ======= Hotels Section ======= -->
        <section id="hotels" class="section-with-bg">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Result</h2>
                    <p>Tag: <?= $judul; ?></p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                <?php foreach ($data->result() as $row) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="<?= site_url('post/' . $row->post_slug); ?>" title="">
                            <div class="hotel">
                                <div class="hotel-img">
                                    <img src="<?= base_url() . 'assets/backend/images/thumb/' . $row->post_image; ?>"
                                        alt="Hotel 1" class="img-fluid">
                                </div>
                                <h3><a href="#"><?php echo $row->post_title; ?></a></h3>
                                <div class="stars">
                                    <i class="bi bi-person-circle"> <?php echo $row->user_name; ?></i>
                                </div>
                                <div class="date">
                                    <p> <?php echo date('d M Y', strtotime($row->post_date)); ?> | <a
                                            href="javascript:void(0)"></a>
                                        <?php echo $row->post_views . ' views'; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!--pagination-->
                <?= $page; ?>
            </div>

        </section>
        <!-- End Hotels Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $footer; ?>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(''); ?>assets/frontend/vendor/aos/aos.js"></script>
    <script src="<?= base_url(''); ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(''); ?>assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(''); ?>assets/frontend/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(''); ?>assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(''); ?>assets/frontend/js/main.js"></script>

</body>

</html>