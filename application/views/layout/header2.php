<header id="header" class="d-flex align-items-center header-inner">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <a href="<?= base_url(''); ?>" class="scrollto">&nbsp;&nbsp;&nbsp;<img src="<?= base_url(''); ?>assets/frontend/img/logo-i.png"
                    alt="" title=""></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="<?= base_url(''); ?>">Home</a></li>
				<li><a class="nav-link scrollto" href="<?= base_url(''); ?>#about">About</a></li>
				<li><a class="nav-link scrollto" href="<?= base_url(''); ?>#faq">Topics</a></li>
				<li class="dropdown"><a href="#"><span>Schedule</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
					<li><a href="<?= base_url('jadwal'); ?>">Jadwal Acara</a></li>
					<li><a href="<?= base_url('schedule'); ?>">Event Shedule</a></li>
				</ul>
				<li><a class="nav-link scrollto" href="<?= base_url(''); ?>#speakers">Speakers</a></li>
				<!-- <li><a class="nav-link scrollto" href="#gallery">Support</a></li> -->
				<li class="dropdown"><a href="#"><span>Information</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
				    <!-- <li><a href="<?= base_url('prosiding'); ?>">Prosiding</a></li> -->
					<li><a href="<?= base_url('info'); ?>">Announcement</a></li>
					<li><a href="<?= base_url('fees'); ?>">Conference Fees</a></li>
					<li><a href="<?= base_url('partners'); ?>">Journal Partners</a></li>
					<li><a href="<?= base_url('regist'); ?>">Registration</a></li>
					<li><a href="<?= base_url('#venue'); ?>" class="nav-link scrollto">Venue</a></li>
				</ul>
				<li class="dropdown"><a href="#"><span>FAQ</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
					<li><a href="<?= base_url('faq'); ?>">FAQ Indonesia</a></li>
					<li><a href="<?= base_url('faqe'); ?>">FAQ English</a></li>
				</ul>
                <!-- <li><a class="nav-link scrollto " href="<?= base_url(''); ?>">Back Home</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a class="buy-tickets scrollto" href="<?= base_url('regist'); ?>">Registration</a>

    </div>
</header>