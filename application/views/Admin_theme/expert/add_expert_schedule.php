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
                        <h6 class="panel-title">Latest posts</h6>
                        <hr>
                        <?php
                        $attributes = array(
                            'class' => 'form-horizontal',
                            'name' => 'form',
                            'method' => 'post');
                        echo form_open_multipart('admin/save_expert', $attributes)
                        ?>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Expert Name</label>
                            <div class="col-lg-10">
                                <select name="expert_id" id="select2" class="form-control">
                                    <option value="">Select Expert</option>
                                    <?php foreach ($experts as $expert) {
                                        ?>
                                        <option value="<?= $expert->expert_id ?>"><?= $expert->expert_name ?></option>
                                        <?php
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Practise Time:</label>
                            <div class="col-sm-9">
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <input type="checkbox" id="inlineCheckbox1" class="day" name="sun" value="sun">
                                        Sun
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                               name="sun_time">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <input type="checkbox" id="inlineCheckbox2" class="day" name="mon" value="mon">
                                        Mon
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                               name="mon_time">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <input type="checkbox" id="inlineCheckbox3" class="day" name="tue" value="tue">
                                        Tue
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                               name="tue_time">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <input type="checkbox" id="inlineCheckbox1" class="day" name="wed" value="wed">
                                        Wed
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                               name="wed_time">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <input type="checkbox" id="inlineCheckbox2" class="day" name="thu" value="thu">
                                        Thu
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                               name="thu_time">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <input type="checkbox" id="inlineCheckbox3" class="day" name="fri" value="fri">
                                        Fri
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                               name="fri_time">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <input type="checkbox" id="inlineCheckbox3" class="day" name="sat" value="sat">
                                        Sat
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                               name="sat_time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success pull-right">Save</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                    <div class="panel-body"></div>
                </div>
                <?php include_once __DIR__ . '/../footer.php'; ?>
            </div>
        </div>
    </div>
</div>
