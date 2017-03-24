<?php include_once __DIR__ . '/header.php'; ?>
<section class="expert_home">
    <div class="expert_header">
        <h1>BECOME AN EXPERT AT XCOGNITIVE <br /> AND MAKE A DIFFERENCE</h1>
		<div class="joinUsExperts-header-subtitle center">
At XCOGNITIVE, we are committed to building a leading platform that breaks all barriers for people who want to seek guidance at the right time.
</div>
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
				<div class="col-md-6">
				<div class="joinUsExperts-left-pane">
<div class="joinUsExperts-left-pane-title">
HERE'S WHAT YOU CAN DO ON XCOGNITIVE:
</div>
<div class="joinUsExperts-left-pane-description">
<div class="row joinUsExperts-left-pane-each-description">

<div class="col s12 joinUsExperts-left-pane-description-container">
<div class="joinUsExperts-icon-container z-depth-1">
<img src="https://d1hny4jmju3rds.cloudfront.net/join_us_experts/bulb.svg" class="joinUsExperts-icon-img">
</div>
<div class="joinUsExperts-left-pane-description-title">SOLVE THEIR PROBLEMS</div>
<div class="joinUsExperts-left-pane-description-divider"></div>
<div class="joinUsExperts-left-pane-description-explanation">Have an online presence and be accessible to all who seek solutions to their problems.</div>
</div>
</div>
<div class="row joinUsExperts-left-pane-each-description">

<div class="col s12 joinUsExperts-left-pane-description-container">
<div class="joinUsExperts-icon-container z-depth-1">
<img src="https://d1hny4jmju3rds.cloudfront.net/join_us_experts/clock.svg" class="joinUsExperts-icon-img">
</div>
<div class="joinUsExperts-left-pane-description-title">ONLINE APPOINTMENTS</div>
<div class="joinUsExperts-left-pane-description-divider"></div>
<div class="joinUsExperts-left-pane-description-explanation">Schedule appointments online and connect with them via text chats/ audio calls/ video sessions or emails.</div>
</div>
</div>
<div class="row joinUsExperts-left-pane-each-description">

<div class="col s12 joinUsExperts-left-pane-description-container">
<div class="joinUsExperts-icon-container z-depth-1">
<img src="https://d1hny4jmju3rds.cloudfront.net/join_us_experts/sms-email.svg" class="joinUsExperts-icon-img">
</div>
<div class="joinUsExperts-left-pane-description-title">SMS &amp; EMAIL REMINDERS</div>
<div class="joinUsExperts-left-pane-description-divider"></div>
<div class="joinUsExperts-left-pane-description-explanation">Get free SMS and email reminders for key events.</div>
</div>
				</div>
				<div class="row joinUsExperts-left-pane-each-description">

<div class="col s12 joinUsExperts-left-pane-description-container">
<div class="joinUsExperts-icon-container z-depth-1">
<img src="https://d1hny4jmju3rds.cloudfront.net/join_us_experts/history.svg" class="joinUsExperts-icon-img">
</div>
<div class="joinUsExperts-left-pane-description-title">CLIENT HISTORY</div>
<div class="joinUsExperts-left-pane-description-divider"></div>
<div class="joinUsExperts-left-pane-description-explanation">Access history of client, so you can serve them better over time - no 'flash' advice!</div>
</div>
</div>
<div class="row joinUsExperts-left-pane-each-description">

<div class="col s12 joinUsExperts-left-pane-description-container">
<div class="joinUsExperts-icon-container z-depth-1">
<img src="https://d1hny4jmju3rds.cloudfront.net/join_us_experts/business.svg" class="joinUsExperts-icon-img">
</div>
</div>
<div class="joinUsExperts-left-pane-description-title">FELLOW INTERACTION</div>
<div class="joinUsExperts-left-pane-description-divider"></div>
<div class="joinUsExperts-left-pane-description-explanation">Discuss cases, exhange ideas and much more with fellow counselors on the platform.</div>
</div>
</div>
<div class="row joinUsExperts-left-pane-each-description">

<div class="col s12 joinUsExperts-left-pane-description-container">
<div class="joinUsExperts-icon-container z-depth-1">
<img src="https://d1hny4jmju3rds.cloudfront.net/join_us_experts/money.svg" class="joinUsExperts-icon-img">
</div>
<div class="joinUsExperts-left-pane-description-title">EARN MONEY</div>
<div class="joinUsExperts-left-pane-description-divider"></div>
<div class="joinUsExperts-left-pane-description-explanation">Offer premium services and earn money.</div>

				</div>
				</div>
				</div>
				</div>
				<div class="col-md-6" style="border-left: 1px dashed #9E9E9E">
				<div class="joinUsExperts-right-pane-title">
HERE'S WHAT YOU CAN DO ON XCOGNITIVE:
</div>
                <div class="form-group" style="margin-top: 40px">
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
						<textarea class="form-control" name="expert_about" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">       
                        <label for="">Expert Education</label>
                        <textarea class="form-control" name="expert_education" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">       
                        <label for="">Expert CV</label>
                        <input type="file" name="expert_cv"/>
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
<script type="text/javascript" src="<?=$theme_asset_url?>js/selects/bootstrap_multiselect.js"></script>
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