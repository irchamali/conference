<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="Unusia, Symposium, International Symposium">

    <!-- SEO Tags -->
	<link rel="canonical" href="<?php echo site_url('post/' . $slug); ?>" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta property="og:url" content="<?php echo site_url('post/' . $slug); ?>" />
	<meta property="og:site_name" content="<?php echo $site_name; ?>" />
	<meta property="article:publisher" content="<?php echo $site_facebook; ?>" />
	<meta property="article:section" content="<?php echo $category; ?>" />
	<meta property="og:image" content="<?php echo base_url() . 'assets/backend/images/' . $image; ?>" />
	<meta property="og:image:secure_url" content="<?php echo base_url() . 'assets/backend/images/' . $image; ?>" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="<?php echo $description; ?>" />
	<meta name="twitter:title" content="<?php echo $title; ?>" />
	<meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
	<meta name="twitter:image" content="<?php echo base_url() . 'assets/backend/images/' . $image; ?>" />

    <!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/' . $icon); ?>">
    <link href="<?= base_url(''); ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">
	<!--<link href="<?= base_url() . 'theme/css/jssocials.css' ?>" rel="stylesheet">-->
	<!--<link href="<?= base_url() . 'theme/css/jssocials-theme-flat.css' ?>" rel="stylesheet">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(''); ?>assets/post/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/post/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/post/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/post/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/post/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/post/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/post/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(''); ?>assets/post/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <?= $header; ?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Road to Symposium</h2>

                    <ol>
                        <li><a href="<?= base_url(''); ?>">Home</a></li>
                        <li><a href="<?= base_url(''); ?>post">Post</a></li>
                        <!--<li>#</li>-->
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="blog-media">
                            <img src="<?= base_url() . 'assets/backend/images/' . $image; ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#"><?= $title; ?></a>
                            </h2>

                            <div class="entry-meta col-md-12 col-sm-12">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i><?= $author; ?></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01"><?= date('d M Y', strtotime($date)); ?></time></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-eye"></i><?php echo number_format($views) . ' views'; ?></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i><?php echo number_format($comment); ?></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <?php echo $content; ?>
                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                <a href="<?php echo site_url('category/' . $category_slug); ?>">
                                    <?= $category; ?>
                                </a>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <?php
										$split_tag = explode(",", $tags);
										foreach ($split_tag as $tag) :
										?>
											<a href="<?php echo site_url('tag/' . $tag); ?>"><?php echo $tag; ?></a> &vert;
									<?php endforeach; ?>
                                </ul>
                            </div>

                        </article><!-- End blog entry -->

                        <!-- <div class="blog-author d-flex align-items-center">
                            <img src="<?= base_url() . 'assets/backend/images/' . $photo; ?>" class="rounded-circle float-left" alt="">
                            <img src="<?php echo base_url() . 'assets/backend/images/' . $row->user_photo; ?>" alt="">
                            <div>
                                <h4><?= $author; ?></h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus
                                    accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse
                                    et accusantium ut unde voluptas.
                                </p>
                            </div>
                        </div> -->
                        <!-- End blog author bio -->

                        <div class="blog-comments">

                            <h4 class="comments-count"><?php echo $comment; ?> Comments</h4>

                            <div id="comment-2" class="comment">
                                <?php foreach ($show_comments->result() as $row) : ?>
                                <div class="d-flex">
                                    <div class="comment-img"><img alt="" src="<?php echo base_url() . 'assets/backend/images/' . $row->comment_image; ?>"></div>
                                    <div>
                                        <h5><a href="javascript:void(0)"><?php echo $row->comment_name; ?></a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01"><?php echo date('d M Y H:i:s', strtotime($row->comment_date)); ?></time>
                                        <p>
                                            <?php echo $row->comment_message; ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
									$comment_id = $row->comment_id;
									$query = $this->db->query("SELECT * FROM tbl_comment WHERE comment_status='1' AND comment_parent='$comment_id'");
									foreach ($query->result() as $i) :
								?>
                                <div id="comment-reply-1" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img alt="" src="<?php echo base_url() . 'assets/backend/images/' . $i->comment_image; ?>"></div>
                                        <div>
                                            <h5><a href="javascript:void(0)"><?php echo $i->comment_name; ?></a> <a href="#" class="reply"><i
                                                        class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="2020-01-01"><?php echo date('d M Y H:i:s', strtotime($i->comment_date)); ?></time>
                                            <p>
                                                <?php echo $i->comment_message; ?>
                                            </p>
                                        </div>
                                    </div>

                                </div><!-- End comment reply #1-->
                                <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div><!-- End comment #2-->


                            <div class="reply-form">
                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <?php echo $this->session->flashdata('msg'); ?>
                                <form method="post" action="<?php echo site_url('send_comment'); ?>" role="form">
                                    <div class="row">
                                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>" required>
										<input type="hidden" name="slug" value="<?php echo $slug; ?>" required>
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" maxlength="100" required="" class="form-control"
                                                placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="email" maxlength="100" required="" class="form-control"
                                                placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control"
                                                placeholder="Your Comment*" maxlength="400" required></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post Comment</button>

                                </form>

                            </div>

                        </div><!-- End blog comments -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="<?= site_url('search'); ?>" method="GET">
                                    <input type="text" name="search_query" placeholder="Search..." required>
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <!-- <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">General <span>(25)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                    <li><a href="#">Travel <span>(5)</span></a></li>
                                    <li><a href="#">Design <span>(22)</span></a></li>
                                    <li><a href="#">Creative <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul>
                            </div> -->
                            <!-- End sidebar categories-->

                            <h3 class="sidebar-title">Related Posts</h3>
                            <?php foreach ($related_post->result() as $row) : ?>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                <a href="<?php echo site_url('post/' . $row->post_slug); ?>" title="">
                                    <img src="<?php echo base_url() . 'assets/backend/images/thumb/' . $row->post_image; ?>" alt="">
                                    <h4><a href="<?= site_url('post/' . $row->post_slug); ?>"><?php echo $row->post_title; ?></a></h4>
                                    <time datetime="2021-01-01"><?php echo date('d M Y', strtotime($row->post_date)); ?></time>
                                </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <?php foreach ($all_tags->result() as $row) : ?>
                                        <li><a href="<?= site_url('tag/' . $row->tag_name); ?>"><?= $row->tag_name; ?></a></li>
                                    <?php endforeach; ?>
                                    <!--<li><a href="#">Islam Nusantara</a></li>-->
                                    <!--<li><a href="#">Cosmopolitanisme</a></li>-->
                                    <!--<li><a href="#">Symposium</a></li>-->
                                    <!--<li><a href="#">Global Issue</a></li>-->
                                    <!--<li><a href="#">Religion</a></li>-->
                                    <!--<li><a href="#">Nahdlatul Ulama</a></li>-->
                                    <!--<li><a href="#">International</a></li>-->
                                    <!--<li><a href="#">Indonesia</a></li>-->
                                    <!--<li><a href="#">Unusia</a></li>-->
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><a href="#">UNUSIA</a></span></strong> <?= date('Y'); ?>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(''); ?>assets/post/vendor/aos/aos.js"></script>
    <script src="<?= base_url(''); ?>assets/post/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(''); ?>assets/post/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(''); ?>assets/post/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(''); ?>assets/post/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(''); ?>assets/post/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url(''); ?>assets/post/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(''); ?>assets/post/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(''); ?>assets/post/js/main.js"></script>

</body>

</html>