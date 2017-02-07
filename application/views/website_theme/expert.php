<?php include_once __DIR__.'/header.php';?>
<section class="experts_category text-center">
    <div class="container">
        <h1>What Do You Want?</h1>
        <ul>
            <?php foreach($getSubjects as $subject){?>
            <li data-id="<?=$subject->subject_id?>"><?=$subject->subject_name?></li>
            <?php }?>
        </ul>
    </div>
</section>
<section class="experts_details">
    <div class="container">
        <div class="rows">
            <?php foreach($getAllExpertsInfo as $expert){?>
            <div class="col-sm-4 ">
                <div class="ex-one">
                    <div class="media">
                        <div class="media-left">
                            <img src="<?= base_url() ?>assets/uploads/files/<?=$expert->experts_image?>" alt="..." class="img-circle">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href=""><?=$expert->expert_name?></a></h4>
                            <p>Conversation: 3000</p>
                            <p>Last Active: Available</p>
                        </div>
                    </div>
                </div>
                <ul>
                    <li><a href=""><i class="fa fa-calendar"></i> Appoinment</a></li>
                    <li><a href=""><i class="fa fa-envelope"></i> Message</a></li>
                    <li><a href=""><i class="fa fa-comment-o"></i> Chat</a></li>
                </ul>
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
<?php include_once __DIR__.'/footer.php';?>

