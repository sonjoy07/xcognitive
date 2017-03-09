<?php include_once __DIR__ . '/header.php'; ?>
<section class="blog_home">
    <div class="container">
        <h1 class="text-center">Expert Registration</h1>
        <hr />  
        <div class="panel-body">

            <?php
            $attributes = array(
                'class' => 'form-horizontal',
                'name' => 'form',
                'id' => 'expert_form',
                'method' => 'post');
            echo form_open_multipart('website/save_expert', $attributes)
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
                    <label class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" name="expert_email" placeholder="Expert Email...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="expert_password" placeholder="Expert Password...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Skill List</label>
                    <div class="col-lg-10">
                        <select class="multiselect-select-all-filtering form-control" multiple="multiple"  name="skills[]">
                            <option value="">Select Skill</option>
                            <?php foreach ($get_subjects as $sub) { ?>
                                <option value="<?= $sub->subject_id ?>"><?= $sub->subject_name ?></option>
                            <?php } ?>
                        </select>

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
                        <div class="uploader"><input class="file-styled" type="file" name="experts_image"></div>
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
                        <?php echo $this->ckeditor->editor("expert_about"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Summary</label>
                    <div class="col-lg-10">
                        <?php echo $this->ckeditor->editor("summary"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Education</label>
                    <div class="col-lg-10">
                        <?php echo $this->ckeditor->editor("education"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Award</label>
                    <div class="col-lg-10">
                        <?php echo $this->ckeditor->editor("award"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Experiance</label>
                    <div class="col-lg-10">
                        <?php echo $this->ckeditor->editor("experience"); ?>
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
            </fieldset>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</section>
<?php include_once __DIR__ . '/footer.php'; ?>
<style type="text/css">
    .inline-error{
        color: red;
    }
</style> 
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?= $theme_asset_url ?>js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.multiselect-select-all-filtering').multiselect();
        $("#expert_form").validate({
            rules: {
                expert_name: {
                    required: true
                },
                expert_email: {
                    required: true
                },
                expert_password: {
                    required: true
                },
                expert_image: {
                    required: true
                },
            },
            errorElement: "span",
            errorClass: "inline-error",
        });
    });
</script>