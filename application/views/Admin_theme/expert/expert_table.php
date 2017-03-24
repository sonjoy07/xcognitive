<?php include_once __DIR__ . '/../header.php'; ?>
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">
        <?php include_once __DIR__ . '/../sidebar.php'; ?>
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> -
                            Dashboard</h4>
                    </div>


                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ul>


                </div>
            </div>
            <!-- /page header -->
            <div class="content">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <a href="<?= site_url('admin/add_expert'); ?>" class="btn btn-success"><i
                                    class="icon-plus3"></i>Experts Table</a>
                    </div>
                    <div class="panel-body">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="datatable-scroll">
                                <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0"
                                       >
                                    <thead>
                                    <tr role="row">
                                        <th>Sl no</th>
                                        <th>Expert Name</th>
                                        <th>Expert Designation</th>
                                        <th>Expert Image</th>
                                        <th>Language</th>
                                        <th>Facebook Link</th>
                                        <th>Twitter Link</th>
                                        <th>Award</th>
                                        <th>status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $sl = 1;
                                    foreach ($get_all_info as $expert) {
                                        ?>
                                        <tr>
                                            <td class="sorting_1"><?= $sl++ ?></td>
                                            <td><?=$expert->expert_name?></td>
                                            <td><?=$expert->expert_designation?></td>
                                            <td><img src="<?= base_url() ?>uploads/expert_image/<?= $expert->experts_image ?>" alt="" width="150"/></td>
                                            <td><?=$expert->language?></td>
                                            <td><?=$expert->facebook_link?></td>
                                            <td><?=$expert->twitter_link?></td>
                                            <td><?=$expert->award?></td>
                                            <td><?= ($expert->publication_status == 1) ? '<span class="label label-success">Published</span>' : '<span class="label label-danger">Unpublished</span>' ?></td>
                                            <td class="text-center">
                                                <ul class="icons-list">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-menu9"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="<?= site_url('admin/edit_expert/' . $expert->expert_id) ?>"><i class="icon-pencil"></i> Edit</a></li>
                                                            <li><a href="#"><i class="icon-cancel-circle2"></i> Delete</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include_once __DIR__ . '/../footer.php'; ?>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    td>p>img{
        width: 150px!important;
        height: 150px!important;
    }
</style>
<script type="text/javascript">
    $('#DataTables_Table_0').DataTable({
    });
</script>
