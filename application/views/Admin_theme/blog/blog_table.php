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
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
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
                        <h6 class="panel-title">Blogs Table</h6>
                        <a href="<?= site_url('admin/add_blog');?>" class="btn btn-success"><i class="icon-plus3"></i> Add Blog</a>
                    </div>
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                        <div class="datatable-scroll">
                            <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th>Sl no</th>
                                        <th>Blog Title</th>
                                        <th>Author Name</th>
                                        <th>Author Email</th>
                                        <th>Blog Image</th>
                                        <th style="max-width: 400px;">Short Description</th>
                                        <th>status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sl = 1;
                                    foreach ($get_all_info as $info) {
                                        ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?= $sl ?></td>
                                            <td><?= $info->blog_title ?></td>
                                            <td><?= $info->auther_name ?></td>
                                            <td><?= $info->author_email ?></td>
                                            <td><img src="<?= base_url() ?>uploads/blog_image/<?= $info->blog_image ?>" alt="" width="150"/></td>
                                            <td><?= $info->short_description ?></td>
                                            <td><?= ($info->publication_status == 1) ? '<span class="label label-success">Published</span>' : '<span class="label label-danger">Unpublished</span>' ?></td>
                                            <td class="text-center">
                                                <ul class="icons-list">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-menu9"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="<?= site_url('admin/edit_blog/' . $info->blog_id) ?>"><i class="icon-pencil"></i> Edit</a></li>
                                                            <li><a href="#"><i class="icon-cancel-circle2"></i> Delete</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <?php
                                        $sl ++;
                                    }
                                    ?>
                                </tbody>
                            </table>
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
        $('#DataTables_Table_0').DataTable();
    </script>