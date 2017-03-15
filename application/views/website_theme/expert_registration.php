<?php include_once __DIR__ . '/header.php'; ?>
<section class="expert_home">
    <div class="expert_header">
        <h1>BECOME AN EXPERT AT XCOGNITIVE <br /> AND MAKE A DIFFERENCE</h1>
    </div>
    <div class="container">
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
                <legend class="text-bold">TO MAKE THIS HAPPEN, WE INVITE YOU TO JOIN OUR NETWORK OF EXPERTS.</legend>
                <?php
                if ($this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                }
                ?>
                <div class="form-group">
                    <div class="col-lg-12">
                        <input type="text"  name="expert_name" placeholder="Expert Name...">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <input type="email"  name="expert_email" placeholder="Expert Email...">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="">Skills</label>
                        <select class="multiselect-select-all-filtering form-control" multiple="multiple"  name="skills[]">
                            <option value="">Select Skill</option>
                            <?php foreach ($get_subjects as $sub) { ?>
                                <option value="<?= $sub->subject_id ?>"><?= $sub->subject_name ?></option>
                            <?php } ?>
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        <input type="text" name="expert_designation" placeholder="Expert Designation...">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">                        
                        <label for="">Expert Image</label>
                        <div class="uploader"><input class="file-styled" type="file" name="experts_image"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <input type="text" name="facebook_link" placeholder="Facebook...">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <input type="text"  name="twitter_link" placeholder="Twitter...">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <input type="text"  name="linkedin_link" placeholder="Linked In...">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-12">       
                        <label for="">Expert About</label>
                        <?php echo $this->ckeditor->editor("expert_about"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">       
                        <label for="">Expert Education</label>
                        <?php echo $this->ckeditor->editor("education"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">       
                        <label for="">Expert CV</label>
                        <input type="file" name="expert_cv"/>
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