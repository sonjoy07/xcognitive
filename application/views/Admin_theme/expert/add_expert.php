<?php include_once __DIR__ . '/../header.php'; ?>
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">
        <?php include_once __DIR__ . '/../sidebar.php';?>
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
<!--                        <h6 class="panel-title">Latest posts</h6>-->

                    </div>
                    <div class="panel-body">
                        <?php
                        $attributes = array(
                            'class' => 'form-horizontal',
                            'name' => 'form',
                            'method' => 'post');
                        echo form_open_multipart('admin/save_expert', $attributes)
                        ?>
                        <fieldset class="content-group">
                            <legend class="text-bold">Add Experts</legend>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Expert Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="expert_name" placeholder="Expert Name...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Skill List</label>
                                <div class="col-lg-10">
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">Select Skill</option>
                                        <?php foreach($get_subjects as $sub){?>
                                            <option value="<?=$sub->subject_id?>"><?=$sub->subject_name?></option>
                                        <?php }?>
                                    </select>
                                    <select class="multiselect-select-all-filtering" multiple="multiple" style="display: none;">
                                        <option value="">Select Skill</option>
                                        <?php foreach($get_subjects as $sub){?>
                                            <option value="<?=$sub->subject_id?>"><?=$sub->subject_name?></option>
                                        <?php }?>
                                    </select>
                                    <div class="btn-group">
                                        <button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" aria-expanded="false">
                                            <span class="multiselect-selected-text">None selected</span>
                                            <b class="caret"></b></button>
                                        <ul class="multiselect-container dropdown-menu">
                                            <li class="multiselect-item multiselect-filter" value="0"><i class="icon-search4"></i> <input class="form-control uniform-input text" placeholder="Search" type="text"></li>
                                            <li class="multiselect-item multiselect-all"><a tabindex="0" class="multiselect-all"><label class="checkbox"><div class="checker"><span class=""><input value="multiselect-all" type="checkbox"></span></div>  Select all</label></a></li>
                                            <li class=""><a tabindex="0"><label class="checkbox"><div class="checker"><span class=""><input value="cheese" type="checkbox"></span></div> Cheese</label></a></li>
                                            <li class=""><a tabindex="0"><label class="checkbox"><div class="checker"><span class=""><input value="tomatoes" type="checkbox"></span></div> Tomatoes</label></a></li>
                                            <li class=""><a tabindex="0"><label class="checkbox"><div class="checker"><span class=""><input value="mozarella" type="checkbox"></span></div> Mozzarella</label></a></li>
                                            <li class=""><a tabindex="0"><label class="checkbox"><div class="checker"><span class=""><input value="mushrooms" type="checkbox"></span></div> Mushrooms</label></a></li>
                                        </ul></div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Expert Designation</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="expert_designation" placeholder="Expert Designation...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Expert Image</label>
                                <div class="col-lg-10">
                                    <div class="uploader"><input class="file-styled" type="file" name="expert_image"><span class="filename" style="-moz-user-select: none;">No file selected</span><span class="action btn btn-default" style="-moz-user-select: none;">Choose File</span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Language</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="language" placeholder="Language...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Facebook</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="facebook_link" placeholder="Facebook...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Twitter</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="twitter_link" placeholder="Twitter...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Linked In</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="linkedin_link" placeholder="Linked In...">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-lg-2">Expet About</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("expert_about");?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Summary</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("summary");?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Education</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("education");?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Award</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("award");?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Experiance</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("experience");?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Publication Status</label>
                                <div class="col-lg-10">
                                    <select name="publication_status" id="" class="form-control">
                                        <option value="">Select Publication Status</option>
                                        <option value="1">Published</option>
                                        <option value="2">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
                <?php include_once __DIR__ . '/../footer.php';?>
            </div>
        </div>
    </div>
</div>
