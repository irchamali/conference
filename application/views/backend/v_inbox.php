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
            <div id="main-wrapper">
                <div class="row m-t-md">
                    <div class="col-md-12">
                        <div class="row mailbox-header">
                            <div class="col-md-6">
                                <h2>Inbox</h2>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <form action="<?php echo site_url('backend/inbox/result'); ?>" method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search_query" class="form-control input-search" placeholder="Search..." required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div><!-- Input Group -->
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mailbox-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-right" colspan="5">
                                            <div class="btn-group">
                                                <?php echo $page; ?>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data->result() as $row) : ?>
                                        <?php if ($row->inbox_status == '0') : ?>
                                            <tr class="unread">
                                                <td class="hidden-xs">
                                                    <span><a href="javascript:void(0);" class="btn-delete" data-inbox_id="<?php echo $row->inbox_id; ?>"><span class="icon icon-trash"></span></a></span>
                                                </td>
                                                <td class="hidden-xs" data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                    <i class="fa fa-star icon-state-warning"></i>
                                                </td>
                                                <td class="hidden-xs" data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                    <?php echo $row->inbox_name; ?>
                                                </td>
                                                <td data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                    <?php echo $row->inbox_subject; ?>
                                                </td>
                                                <td data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                </td>
                                                <td data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                    <?php echo date('d M Y H:i:s', strtotime($row->inbox_created_at)); ?>
                                                </td>
                                            </tr>
                                        <?php else : ?>
                                            <tr class="read">
                                                <td class="hidden-xs">
                                                    <span><a href="javascript:void(0);" class="btn-delete" data-inbox_id="<?php echo $row->inbox_id; ?>"><span class="icon icon-trash"></span></a></span>
                                                </td>
                                                <td class="hidden-xs" data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td class="hidden-xs" data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                    <?php echo $row->inbox_name; ?>
                                                </td>
                                                <td data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                    <?php echo $row->inbox_subject; ?>
                                                </td>
                                                <td data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                </td>
                                                <td data-inbox_id="<?php echo $row->inbox_id; ?>">
                                                    <?php echo date('d M Y H:i:s', strtotime($row->inbox_created_at)); ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
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

    <!--DELETE RECORD MODAL-->
    <form action="<?php echo site_url('backend/inbox/delete'); ?>" method="post">
        <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete Message</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            Anda yakin mau menghapus message ini?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Delete</button>
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
    <script src="<?php echo base_url() . 'assets/backend/plugins/jquery-mockjax-master/jquery.mockjax.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/moment/moment.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/datatables/js/jquery.datatables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/js/modern.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/backend/plugins/toastr/jquery.toast.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.mailbox-content table tr td').not(":first-child").on('click', function(e) {
                e.stopPropagation();
                e.preventDefault();
                var inbox_id = $(this).data('inbox_id');

                window.location = "<?php echo site_url('backend/inbox/read/'); ?>" + inbox_id;
            });

            $('.btn-delete').on('click', function() {
                var inbox_id = $(this).data('inbox_id');
                $('#DeleteModal').modal('show');
                $('[name="id"]').val(inbox_id);
            });
        });
    </script>
    <!--Toast Message-->
    <?php if ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Message Deleted.",
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
                text: "Not Found",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php else : ?>

    <?php endif; ?>

</body>

</html>