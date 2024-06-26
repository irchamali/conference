<!DOCTYPE html>
<html>

<?= $head; ?>

<body class="page-header-fixed  compact-menu  pace-done page-sidebar-fixed">
    <div class="overlay"></div>
    <main class="page-content content-wrap">
        <!-- Navbar -->
        <?= $navbar; ?>
        <!-- Page Sidebar -->
        <?= $sidebar; ?>

        <div class="page-inner">
            <div class="page-title">
                <h3>Comments</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                        <li><a href="#">Comment</a></li>
                        <li class="active">All</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <div class="search p bg-light m-b-sm">
                                    <form action="<?php echo site_url('backend/comment/results'); ?>" method="GET" data-default="150">
                                        <div class="input-group">
                                            <input type="text" name="search_query" class="form-control input-search" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div><!-- Input Group -->
                                    </form><!-- Search Form -->
                                </div>
                                <div role="tabpanel">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab" aria-expanded="false">All<span class="badge badge-success pull-right m-l-xs"><?php echo $total_rows; ?></span></a></li>
                                        <li role="presentation"><a href="<?php echo site_url('backend/comment/unpublish'); ?>">Unpublish<span class="badge badge-danger pull-right m-l-xs"><?php echo $total_unpublish; ?></span></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in p-v-lg" id="all">
                                            <?php foreach ($data->result() as $row) : ?>
                                                <div class="search-item">
                                                    <div class="pull-left m-r-md">
                                                        <a href="javascript:void(0);" class="btn-image" data-comment_id="<?php echo $row->comment_id; ?>" data-name="<?php echo $row->comment_name; ?>" data-email="<?php echo $row->comment_email; ?>">
                                                            <?php if (!empty($row->comment_image)) : ?>
                                                                <img src="<?php echo base_url() . 'assets/backend/images/' . $row->comment_image; ?>" class="img-circle" width="50" height="50" alt="<?php echo $row->comment_name ?>">
                                                            <?php else : ?>
                                                                <img src="<?php echo base_url() . 'assets/backend/images/user_blank.png' ?>" class="img-circle" width="50" alt="<?php echo $row->comment_name ?>">
                                                            <?php endif; ?>
                                                        </a>
                                                    </div>
                                                    <div class="pull-right m-r-md">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <?php if ($row->comment_status == '0') : ?>
                                                                    <li><a href="javascript:void(0);" class="btn-publish" data-comment_id="<?php echo $row->comment_id; ?>"><span class="fa fa-send"></span> Publish</a></li>
                                                                    <li><a href="javascript:void(0);" class="btn-edit" data-comment_id="<?php echo $row->comment_id; ?>" data-comment_msg="<?php echo $row->comment_message; ?>"><span class="fa fa-edit"></span> Edit</a></li>
                                                                    <li><a href="javascript:void(0);" class="btn-delete" data-comment_id="<?php echo $row->comment_id; ?>"><span class="fa fa-trash"></span> Delete</a></li>
                                                                <?php else : ?>
                                                                    <li><a href="javascript:void(0);" class="btn-reply" data-comment_id="<?php echo $row->comment_id; ?>" data-post_id="<?php echo $row->post_id; ?>"><span class="fa fa-reply"></span> Reply</a></li>
                                                                    <li><a href="javascript:void(0);" class="btn-edit" data-comment_id="<?php echo $row->comment_id; ?>" data-comment_msg="<?php echo $row->comment_message; ?>"><span class="fa fa-edit"></span> Edit</a></li>
                                                                    <li><a href="javascript:void(0);" class="btn-delete" data-comment_id="<?php echo $row->comment_id; ?>"><span class="fa fa-trash"></span> Delete</a></li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h3 class="no-m"><a href="<?php echo site_url('blog/' . $row->post_slug); ?>" target="_blank"><?php echo $row->post_title; ?></a></h3>
                                                    <a href="javascript:void(0);" class="search-link"><b><?php echo $row->comment_name ?></b>, <?php echo $row->comment_date; ?></a> <?php if ($row->comment_status == '0') {
                                                                                                                                                                                            echo "<span class='label label-danger'>Unpublish</span>";
                                                                                                                                                                                        } else {
                                                                                                                                                                                        } ?>
                                                    <div style="margin-left: 6.5%;">
                                                        <p><?php echo $row->comment_message; ?></p>
                                                    </div>
                                                </div>
                                                <?php
                                                $comment_id = $row->comment_id;
                                                $result = $this->db->query("SELECT comment_id,DATE_FORMAT(comment_date,'%d %M %Y %H:%i') AS comment_date,comment_name,comment_email,comment_message,post_id,post_title,post_slug FROM tbl_comment JOIN tbl_post ON comment_post_id=post_id WHERE comment_parent='$comment_id' ORDER BY comment_id ASC");
                                                foreach ($result->result() as $row) :
                                                ?>
                                                    <div class="col-md-offset-1">
                                                        <div class="search-item">
                                                            <div class="pull-left m-r-md">
                                                                <?php
                                                                $user_id = $this->session->userdata('id');
                                                                $query = $this->db->get_where('tbl_user', array('user_id' => $user_id));
                                                                if ($query->num_rows() > 0) :
                                                                    $i = $query->row_array();
                                                                ?>
                                                                    <img src="<?php echo base_url() . 'assets/backend/images/' . $i['user_photo']; ?>" class="img-circle" width="50" alt="<?php echo $row->comment_name ?>">
                                                                <?php else : ?>
                                                                    <img src="<?php echo base_url() . 'assets/backend/images/user_blank.png' ?>" class="img-circle" width="50" alt="<?php echo $row->comment_name ?>">
                                                                <?php endif; ?>

                                                            </div>
                                                            <div class="pull-right m-r-md">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Action <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                                        <li><a href="javascript:void(0);" class="btn-edit" data-comment_id="<?php echo $row->comment_id; ?>" data-comment_msg="<?php echo $row->comment_message; ?>"><span class="fa fa-edit"></span> Edit</a></li>
                                                                        <li><a href="javascript:void(0);" class="btn-delete" data-comment_id="<?php echo $row->comment_id; ?>"><span class="fa fa-trash"></span> Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h3 class="no-m"><a href="<?php echo site_url('blog/' . $row->post_slug); ?>" target="_blank"><?php echo $row->post_title; ?></a></h3>
                                                            <a href="javascript:void(0);" class="search-link"><b><?php echo $row->comment_name ?></b>, <?php echo $row->comment_date; ?></a>
                                                            <div style="margin-left: 7%;">
                                                                <p><?php echo $row->comment_message; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endforeach; ?>

                                            <?php echo $page; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s"><?php echo date('Y'); ?> &copy; Powered by Ircham Ali.</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <div class="cd-overlay"></div>

    <!-- MODAL REPLY -->
    <form action="<?php echo site_url('backend/comment/reply'); ?>" method="post">
        <div class="modal fade" id="ReplyModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Reply Comment</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea name="comments" class="form-control" rows="5" placeholder="Reply..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="comment_id" required>
                        <input type="hidden" name="post_id" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Reply</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- MODAL EDIT -->
    <form action="<?php echo site_url('backend/comment/edit'); ?>" method="post">
        <div class="modal fade" id="EditModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Comment</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea name="comments2" id="comment" class="form-control comment" rows="6" placeholder="Edit..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="comment_id2" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--PUBLISH MODAL-->
    <form action="<?php echo site_url('backend/comment/publish'); ?>" method="post">
        <div class="modal fade" id="PublishModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Publish Comment</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            Anda yakin mau mempublish komentar ini?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="comment_id4" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Publish</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--DELETE RECORD MODAL-->
    <form action="<?php echo site_url('backend/comment/delete'); ?>" method="post">
        <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete Comment</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            Anda yakin mau menghapus komentar ini?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="comment_id3" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--DELETE RECORD MODAL-->
    <form action="<?php echo site_url('backend/comment/change'); ?>" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="ImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Change Image</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" readonly>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" readonly>
                        </div>

                        <div class="form-group">
                            <input type="file" name="file" class="form-control-file" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="comment_id5" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Change</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- Javascripts -->
    <script src="<?php echo base_url() . 'assets/backend/plugins/jquery/jquery-2.1.4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/pace-master/pace.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/jquery-blockui/jquery.blockui.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/bootstrap/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/switchery/switchery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/uniform/jquery.uniform.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/offcanvasmenueffects/js/classie.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/offcanvasmenueffects/js/main.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/waves/waves.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/3d-bold-navigation/js/main.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/js/modern.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/summernote-master/summernote.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/toastr/jquery.toast.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn-reply').on('click', function() {
                var comm_id = $(this).data('comment_id');
                var post_id = $(this).data('post_id');
                $('#ReplyModal').modal('show');
                $('[name="comment_id"]').val(comm_id);
                $('[name="post_id"]').val(post_id);
            });

            $('.btn-edit').on('click', function() {
                var comm_id = $(this).data('comment_id');
                var msg = $(this).data('comment_msg');
                $('#EditModal').modal('show');
                $('[name="comment_id2"]').val(comm_id);
                $('.comment').val(msg);
                $('.comment').code(msg);
            });

            $('.btn-delete').on('click', function() {
                var comm_id = $(this).data('comment_id');
                $('#DeleteModal').modal('show');
                $('[name="comment_id3"]').val(comm_id);
            });

            $('.btn-publish').on('click', function() {
                var comm_id = $(this).data('comment_id');
                $('#PublishModal').modal('show');
                $('[name="comment_id4"]').val(comm_id);
            });

            $('.btn-image').on('click', function() {
                var comm_id = $(this).data('comment_id');
                var name = $(this).data('name');
                var email = $(this).data('email');
                $('#ImageModal').modal('show');
                $('[name="comment_id5"]').val(comm_id);
                $('[name="name"]').val(name);
                $('[name="email"]').val(email);
            });


        });
    </script>
    <!--Toast Message-->
    <?php if ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Comments replied",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "Comments not found.",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-delete') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Comment Deleted!.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-edit') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Comment Updated!.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-publish') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Comment Published!.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-change') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Image Changed!.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php else : ?>

    <?php endif; ?>
</body>

</html>