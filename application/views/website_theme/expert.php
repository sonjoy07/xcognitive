<?php include_once __DIR__.'/header.php';?>
<section class="experts_category text-center">
    <div class="container">
        <h1>What Do You Want?</h1>
        <ul>
            <?php foreach($getSubjects as $subject){?>
            <li class="subject" data-id="<?=$subject->subject_id?>" data-subject="<?=$subject->subject_name?>"><?=$subject->subject_name?></li>
            <?php }?>
        </ul>
    </div>
</section>

<section class="experts_details">
    <div class="container">
        <div class="search_item">
            <div class="items">
                <p id="item" style="">ksdjf </p>
            </div>
        </div>
        <div class="rows" id="expert">
            <?php foreach($getAllExpertsInfo as $expert){?>
            <div class="col-sm-4 ">
                <div class="ex-one">
                    <div class="media">
                        <div class="media-left">
                            <img src="<?= base_url() ?>assets/uploads/files/<?=$expert->experts_image?>" alt="..." class="img-circle">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="<?=site_url('website/expert_details/'.$expert->expert_id)?>"><?=$expert->expert_name?></a></h4>
                            <p>Conversation: 3000</p>
                            <p>Last Active: Available</p>
                        </div>
                    </div>
                </div>
                <?php
            if ($this->session->userdata('user_type')==2){
            ?>
                <ul>
                    <li><a href="<?=site_url('user_controller/appoinment')?>"><i class="fa fa-calendar"></i> Appointment</a></li>
                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>
                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>
                </ul>
                <?php }else{?>
                <ul>
                    <li><a href=""  type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-calendar"></i> Appointment</a></li>
                    <li><a href=""  type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-envelope"></i> Message</a></li>
                    <li><a href=""  type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-comment-o"></i> Chat</a></li>
                </ul>
                 <?php }?>
            </div>
            <?php }?>
        </div>

<!--        <div class="rows">-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="rows">-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <a href="#">-->
<!--                                <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="rows">-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-sm-4 ">-->
<!--                <div class="ex-one">-->
<!--                    <div class="media">-->
<!--                        <div class="media-left">-->
<!--                            <img src="--><?//=$theme_asset_url?><!--images/logo.png" alt="..." class="img-circle">-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <h4 class="media-heading"><a href="">Media heading</a></h4>-->
<!--                            <p>Conversation: 3000</p>-->
<!--                            <p>Last Active: Available</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>-->
<!--                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>-->
<!--                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>
<style>
    .search_item{
        border: 1px solid #d6e0e1;
        margin-bottom: 50px;
        display: none;
    }
    .items{
        display: inline-block;
        margin: 5px;
    }
    .items p{
        padding: 3px 10px;
        border: 1px solid #d6e0e1;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 5px;
    }
</style>
<?php include_once __DIR__.'/footer.php';?>
<script>
    $('.subject').on('click',function(){
       var sub = $(this).data('id');
       var name = $(this).data('subject');
       $('#item').html(name+' <i class="fa fa-times"></i>');
       $.ajax({
           type: "POST",
           url: "<?php echo site_url('website/getSubjectWiseExpert'); ?>",
//            dataType: 'json',
           data: {subject: sub},
           beforeSend: function() {
               $("#loading-image").show();
           },
           success: function (res) {
               $('#expert').html(res);
              $("#loading-image").hide();
           }
       });
    });
</script>

