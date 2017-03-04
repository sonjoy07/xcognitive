<?php include_once __DIR__ . '/header.php'; ?>
<section class="user_profile">
    <div class="container">
        <div class="user_intro">
            <div class="col-md-8">
                <div class="profile">
                    <div class="col-md-3 user_image">
                        <img src="<?=base_url()?>uploads/user_image/<?=$user_info->user_image?>" alt="">
                    </div>
                    <div class="col-md-9">
                        <h3><?= $user_info->username?></h3>
                        <p id="email"><?=$user_info->email?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 edit_user_name">
                <a href="" type="button"  data-toggle="modal" data-target="#myModal" class="pull-right"><i class="fa fa-pencil"></i></a>
            </div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div style="color: #000" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" >Profile Info</h2>
                        </div>
                        <div class="modal-body">
                            <?php
                            $attributes = array(
                                    'class' => 'form-horizontal',
                                'method' => 'post');
                            echo form_open_multipart('user_login/edit_user_info', $attributes)
                            ?>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?=isset($user_info->username)?$user_info->username:''?>" name="username" id="inputEmail3" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" value="<?=isset($user_info->email)?$user_info->email:''?>" name="email" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">User Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="user_image">
                                        <img class="edit_user_img" src="<?=base_url()?>uploads/user_image/<?=isset($user_info->user_image)?$user_info->user_image:''?>" alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Save</button>
                                    </div>
                                </div>
                            <?= form_close(); ?>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <h2>Personal Details</h2>
        <div class="permission_user">
            <div class="col-md-8">
                <div class="show_details">
                    <label for="">Date of Birth:</label> <?=isset($user_profile->dob)?$user_profile->dob:''?> <br>
                    <label for="">Gender:</label> <?php if(isset($user_profile->gender)){
                        ($user_profile->gender == 1)?"Male":"Female";
                    } ?><br>
                    <label for="">Occupation:</label> <?=isset($user_profile->occupation)?$user_profile->occupation:''?>
                </div>

            </div>
            <div class="col-md-4 edit_user_details">
                <a href="" class="pull-right" type="button"  data-toggle="modal" data-target="#Modal"><i class="fa fa-pencil"></i></a>
            </div>
            <div class="modal fade" id="Modal" tabindex="-1" role="dialog">
                <div style="color: #000" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" >Personal Details</h2>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="<?=site_url('user_login/update_user_profile')?>">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">DOB</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="dob" value="<?=isset($user_profile->dob)?$user_profile->dob:''?>" id="inputEmail3" placeholder="DOB">
                                        <input type="hidden" name="user_info_id" value="<?=isset($user_profile->user_info_id)?$user_profile->user_info_id:''?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-10">
                                        <?php if(isset($user_profile->gender)){?>
                                        <label class="checkbox-inline">
                                            <input type="radio" name="gender" <?=($user_profile->gender == 1)?'checked':''?> value="1"> Male
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="radio" name="gender" <?=($user_profile->gender == 2)?'checked':''?>  value="2"> Female
                                        </label>
    <?php } else{?>
                                            <label class="checkbox-inline">
                                                <input type="radio" name="gender"  value="1"> Male
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="radio" name="gender" value="2"> Female
                                            </label>
    <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Occupation</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="occupation" value="<?=isset($user_profile->occupation)?$user_profile->occupation:''?>" class="form-control" placeholder="Occupation">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>


        </div>
        <!--<h2>Personal Details</h2>-->
        <!--<div class="permission_user">-->

        <!--</div>-->
        <!--<h2>Activity</h2>-->
        <!--<div class="permission_user">-->

        <!--</div>-->

    </div>
</section>
<?php include_once __DIR__ . '/footer.php'; ?>