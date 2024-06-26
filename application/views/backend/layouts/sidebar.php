<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <?php
                $user_id = $this->session->userdata('id');
                $query = $this->db->get_where('tbl_user', array('user_id' => $user_id));
                if ($query->num_rows() > 0) :
                    $row = $query->row_array();
                ?>
                    <a href="javascript:void(0);">
                        <div class="sidebar-profile-image">
                            <img src="<?php echo base_url() . 'assets/backend/images/' . $row['user_photo']; ?>" class="img-circle img-responsive" alt="">
                        </div>
                        <div class="sidebar-profile-details">
                            <span><?php echo $this->session->userdata('name'); ?><br>
                                <?php if ($row['user_level'] == '1') : ?>
                                    <small>Administrator</small>
                                <?php else : ?>
                                    <small>Author</small>
                                <?php endif; ?>
                            </span>
                        </div>
                    </a>
                <?php else : ?>
                    <a href="javascript:void(0);">
                        <div class="sidebar-profile-image">
                            <img src="<?php echo base_url() . 'assets/backend/images/user_blank.png'; ?>" class="img-circle img-responsive" alt="">
                        </div>
                        <div class="sidebar-profile-details">
                            <span><?php echo $this->session->userdata('name'); ?><br>
                                <?php if ($row['user_level'] == '1') : ?>
                                    <small>Administrator</small>
                                <?php else : ?>
                                    <small>Author</small>
                                <?php endif; ?>
                            </span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li class="<?= ($title === "Dashboard") ? 'active' : '' ?>"><a href="<?php echo site_url('backend/dashboard'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-home"></span>
                    <p>Dashboard</p>
                </a></li>
            <li class="droplink <?= ($title === "Add New") ? 'active open' : '' ?><?= ($title === "Post List") ? 'active open' : '' ?><?= ($title === "Category") ? 'active open' : '' ?><?= ($title === "Tags") ? 'active open' : '' ?>"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pin"></span>
                    <p>Post</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?= ($title === "Add New") ? 'active' : '' ?>"><a href="<?= site_url('backend/post/add_new'); ?>">Add New</a></li>
                    <li class="<?= ($title === "Post List") ? 'active' : '' ?>"><a href="<?= site_url('backend/post'); ?>">Post List</a></li>
                    <li class="<?= ($title === "Category") ? 'active' : '' ?>"><a href="<?= site_url('backend/category'); ?>">Category</a></li>
                    <li class="<?= ($title === "Tags") ? 'active' : '' ?>"><a href="<?= site_url('backend/tag'); ?>">Tag</a></li>
                </ul>
            </li>
            <li class="<?= ($title === "Inbox") ? 'active' : '' ?>"><a href="<?= site_url('backend/inbox'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-envelope"></span>
                    <p>Inbox</p>
                </a></li>
            <li class="<?= ($title === "Comments") ? 'active' : '' ?>"><a href="<?= site_url('backend/comment'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-bubbles"></span>
                    <p>Comments</p>
                </a></li>
            <?php if ($this->session->userdata('access') == '1') : ?>
                <li class="droplink <?= ($title === "Basic") ? 'active open' : '' ?><?= ($title === "Home") ? 'active open' : '' ?><?= ($title === "Sliders") ? 'active open' : '' ?><?= ($title === "About") ? 'active open' : '' ?><?= ($title === "Members") ? 'active open' : '' ?><?= ($title === "Testimonials") ? 'active open' : '' ?><?= ($title === "Teams") ? 'active open' : '' ?>"><a href="<?= site_url('backend/settings'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-settings"></span>
                        <p>Settings</p><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="<?= ($title === "Basic") ? 'active' : '' ?>"><a href="<?= site_url('backend/settings'); ?>">Basic</a></li>
                        <li class="<?= ($title === "Home") ? 'active' : '' ?>"><a href="<?= site_url('backend/home_setting'); ?>">Home</a></li>
                        <li class="<?= ($title === "About") ? 'active' : '' ?>"><a href="<?= site_url('backend/about_setting'); ?>">About</a></li>
                        <li class="<?= ($title === "Members") ? 'active' : '' ?>"><a href="<?php echo site_url('backend/member'); ?>">Partners</a></li>
                        <li class="<?= ($title === "Testimonials") ? 'active' : '' ?>"><a href="<?php echo site_url('backend/testimonial'); ?>">Testimonials</a></li>
                        <!-- <li class="<?= ($title === "Sliders") ? 'active' : '' ?>"><a href="<?= site_url('backend/slider'); ?>">Slider</a></li> -->
                        <!-- <li class="<?= ($title === "Teams") ? 'active' : '' ?>"><a href="<?php echo site_url('backend/team'); ?>">Pimpinan</a></li> -->
                        <!-- <li><a href="<?php echo site_url('backend/navbar'); ?>">Navbar</a></li> -->
                    </ul>
                </li>
                <li class="<?= ($title === "Users") ? 'active' : '' ?>"><a href="<?php echo site_url('backend/users'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                        <p>Users</p>
                    </a></li>

            <?php else : ?>
            <?php endif; ?>
            <li class="<?= ($title === "Subscribers") ? 'active' : '' ?>"><a href="<?php echo site_url('backend/subscriber'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-users"></span>
                    <p>Subscribers</p>
                </a></li>
            <li><a href="<?php echo site_url('logout'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-logout"></span>
                    <p>Log Out</p>
                </a></li>

        </ul>
    </div><!-- Page Sidebar Inner -->
</div>