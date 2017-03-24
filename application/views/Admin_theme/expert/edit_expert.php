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
                        <h6 class="panel-title">Expert Update</h6>

                    </div>
                    <div class="panel-body">
                        <?php
                        $attributes = array(
                            'class' => 'form-horizontal',
                            'name' => 'form',
                            'method' => 'post');
                        echo form_open_multipart('admin/update_expert', $attributes)
                        ?>
                        <fieldset class="content-group">
                            <legend class="text-bold">Edit Experts</legend>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Expert Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="expert_name" value="<?=$get_all_info->expert_name?>" placeholder="Expert Name...">
                                    <input type="hidden" name="expert_id" value="<?=$get_all_info->expert_id?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Skill List</label>
                                <div class="col-lg-10">
                                    <select class="multiselect-select-all-filtering form-control" multiple="multiple"  name="skills[]">
                                        <option value="">Select Skill</option>
                                        <?php
                                        $skills = explode(',',$get_all_info->skills);
                                        foreach($get_subjects as $sub){?>
                                            <option value="<?=$sub->subject_id?>"
                                                <?php foreach ($skills as $skill){
                                                    if($skill == $sub->subject_id){
                                                        echo 'Selected';
                                                    }
                                                }?>
                                            ><?=$sub->subject_name?></option>
                                        <?php }?>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Expert Designation</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="<?=$get_all_info->expert_designation?>" name="expert_designation" placeholder="Expert Designation...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Expert Image</label>
                                <div class="col-lg-10">
                                    <div class="uploader"><input class="file-styled" type="file" name="experts_image"><span class="filename" style="-moz-user-select: none;">No file selected</span><span class="action btn btn-default" style="-moz-user-select: none;">Choose File</span></div>
                                    <img src="<?= base_url() ?>uploads/expert_image/<?= $get_all_info->experts_image ?>" alt="" width="150"/>
                                </div>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label class="control-label col-lg-2">Language</label>-->
<!--                                <div class="col-lg-10">-->
<!--                                    <select class="multiselect-select-all-filtering form-control"  multiple="multiple"  name="language[]">-->
<!--                                        <option value="">Select Language</option>-->
<!--                                        <option value="english">English</option>-->
<!--                                        <option value="hindi">Hindi</option>-->
<!--                                        <option value="bangla">Bangla</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group">
                                <label class="control-label col-lg-2">Facebook</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="facebook_link" value="<?=$get_all_info->facebook_link?>" placeholder="Facebook...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Twitter</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="twitter_link" value="<?=$get_all_info->twitter_link?>" placeholder="Twitter...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Linked In</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="linkedin_link" value="<?=$get_all_info->linkedin_link?>" placeholder="Linked In...">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-lg-2">Expet About</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("expert_about",$get_all_info->expert_about);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Summary</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("summary",$get_all_info->summary);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Education</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("education",$get_all_info->education);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Award</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("award",$get_all_info->award);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Experiance</label>
                                <div class="col-lg-10">
                                    <?php echo $this->ckeditor->editor("experience",$get_all_info->experience);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Practise Time:</label>
                                <div class="col-sm-9">
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <input type="checkbox" id="inlineCheckbox1" class="day" name="sun" value="sun" <?php
                                            foreach($geExpertSchedule as $schedule){
                                                echo ($schedule->day_name == 'sun')? 'checked' : '';
                                            }  ?>>
                                            Sun
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                                   name="sun_time" value="<?php
                                            foreach($geExpertSchedule as $schedule){
                                                 if($schedule->day_name == 'sun'){
                                                     echo $schedule->time ;
                                                 }
                                            }  ?>
">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <input type="checkbox" id="inlineCheckbox2" class="day" name="mon" value="mon" <?php
                                            foreach($geExpertSchedule as $schedule){
                                                echo ($schedule->day_name == 'mon')? 'checked' : '';
                                            }  ?>>
                                            Mon
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                                   name="mon_time" value="<?php
                                            foreach($geExpertSchedule as $schedule){
                                                if($schedule->day_name == 'mon'){
                                                    echo $schedule->time ;
                                                }
                                            }  ?>
">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <input type="checkbox" id="inlineCheckbox3" class="day" name="tue" value="tue" <?php
                                            foreach($geExpertSchedule as $schedule){
                                                echo ($schedule->day_name == 'tue')? 'checked' : '';
                                            }  ?>>
                                            Tue
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                                   name="tue_time" value="<?php
                                            foreach($geExpertSchedule as $schedule){
                                                if($schedule->day_name == 'tue'){
                                                    echo $schedule->time ;
                                                }
                                            }  ?>
">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <input type="checkbox" id="inlineCheckbox1" class="day" name="wed" value="wed" <?php
                                            foreach($geExpertSchedule as $schedule){
                                                echo ($schedule->day_name == 'wed')? 'checked' : '';
                                            }  ?>>
                                            Wed
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                                   name="wed_time" value="<?php
                                            foreach($geExpertSchedule as $schedule){
                                                if($schedule->day_name == 'wed'){
                                                    echo $schedule->time ;
                                                }
                                            }  ?>
">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <input type="checkbox" id="inlineCheckbox2" class="day" name="thu" value="thu" <?php
                                                foreach($geExpertSchedule as $schedule){
                                                    echo ($schedule->day_name == 'thu')? 'checked' : '';
                                                }  ?>>
                                            Thu
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                                   name="thu_time" value="<?php
                                            foreach($geExpertSchedule as $schedule){
                                                if($schedule->day_name == 'thu'){
                                                    echo $schedule->time ;
                                                }
                                            }  ?>
">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <input type="checkbox" id="inlineCheckbox3" class="day" name="fri" value="fri" <?php
                                            foreach($geExpertSchedule as $schedule){
                                                echo ($schedule->day_name == 'fri')? 'checked' : '';
                                            }  ?>>
                                            Fri
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                                   name="fri_time" value="<?php
                                            foreach($geExpertSchedule as $schedule){
                                                if($schedule->day_name == 'fri'){
                                                    echo $schedule->time ;
                                                }
                                            }  ?>
">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-3">
                                            <input type="checkbox" id="inlineCheckbox3" class="day" name="sat" value="sat" <?php
                                            foreach($geExpertSchedule as $schedule){
                                                echo ($schedule->day_name == 'sat')? 'checked' : '';
                                            }  ?>>
                                            Sat
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="inputEmail3" id="time" placeholder="eg:10:00AM - 12:00PM"
                                                   name="sat_time" value="<?php
                                            foreach($geExpertSchedule as $schedule){
                                                if($schedule->day_name == 'sat'){
                                                    echo $schedule->time ;
                                                }
                                            }  ?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Publication Status</label>
                                <div class="col-lg-10">
                                    <select name="publication_status" id="" class="form-control">
                                        <option value="">Select Publication Status</option>
                                        <option value="1" <?= ($get_all_info->publication_status==1)?'selected':''?>>Published</option>
                                        <option value="2" <?= ($get_all_info->publication_status==2)?'selected':''?>>Unpublished</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Update <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
                <?php include_once __DIR__ . '/../footer.php';?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/core/libraries/jquery.min.js"></script>
	
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.multiselect-select-all-filtering').multiselect();
    });
</script>
