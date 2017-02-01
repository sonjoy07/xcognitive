<?php include_once __DIR__ . '/header.php'; ?>
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">
        <?php include_once __DIR__ . '/sidebar.php';?>
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
                        <h6 class="panel-title">Latest posts</h6>
                            <?php echo $glosary->output;
            ;
            ?>
                    </div>
                    <div class="panel-body"></div>
                </div>
                <?php include_once __DIR__ . '/footer.php';?>
            </div>
        </div>
    </div>
</div>