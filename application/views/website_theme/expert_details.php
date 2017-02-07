<?php include_once __DIR__.'/header.php';?>
<section class="expert_description">
    <div class="container">
        <div class="row exper_shadow">
            <div class="col-sm-8">
                <div class="col-sm-3">
                    <img src="<?= base_url() ?>assets/uploads/files/<?=$get_expert_info->experts_image?>" alt="..." class="img-circle  expert_image" width="140" height="140">
                </div>
                <div class="col-sm-9">
                    <h1><?=$get_expert_info->expert_name?></h1>
                    <p><?=$get_expert_info->expert_designation?></p>
                    <p><?=$get_expert_info->expert_about?></p>
                    <div class="details_button ">
                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>
                            Message</a>
                        <a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 expert_scoal_details">
                <span><strong>Conversations:</strong>423</span> <br>
                <span><strong>Last Active:</strong>45 minutes ago</span> <br>
                <span><strong>Language:</strong> </span> <br>
                <span><strong>Share profile on
:</strong>
               <a href="<?=$get_expert_info->facebook_link?>"> <i class="fa fa-facebook"></i></a>
               <a href="<?=$get_expert_info->twitter_link?>"><i class="fa fa-twitter"></i></a>
                <a href="<?=$get_expert_info->linkedin_link?>"><i class="fa fa-linkedin"></i></a>
            </span>
            </div>
        </div>
    </div>
</section>

<section class="other_expert_info">
    <div class="container">
        <div class="col-sm-8">
            <div class="expert_skill">
                <h2><i class="fa fa-lightbulb-o"></i> Skills</h2>
                <hr>
                <div class="expert_category_tags">
                    <ul>
                        <li><a href="">sdfsdf</a></li>
                        <li><a href="">sdfsdf</a></li>
                        <li><a href="">sdfsdf</a></li>
                        <li><a href="">sdfsdf</a></li>
                        <li><a href="">sdfsdf</a></li>
                    </ul>
                </div>
            </div>
            <?php if(!empty($get_expert_info->summary)){?>
            <div class="expert_summary">
                <h2><i class="fa fa-lightbulb-o"></i> Summary</h2>
                <hr>
                <p><?=$get_expert_info->summary?> </p>
            </div>
            <?php }?>
            <?php if(!empty($get_expert_info->education)){?>
            <div class="expert_summary">
                <h2><i class="fa fa-graduation-cap"></i> Education</h2>
                <hr>
<!--                <ul>-->
<!--                    <li>8 Years</li>-->
<!--                    <li>8 Years</li>-->
<!--                    <li>8 Years</li>-->
<!--                </ul>-->
                <?=$get_expert_info->education?>
            </div>
            <?php }?>
            <?php if(!empty($get_expert_info->award)){?>
            <div class="expert_summary">
                <h2><i class="fa fa-star"></i> Award</h2>
                <hr>
<!--                <ul>-->
<!--                    <li>8 Years</li>-->
<!--                    <li>8 Years</li>-->
<!--                    <li>8 Years</li>-->
<!--                </ul>-->
                <?=$get_expert_info->award?>
            </div>
            <?php }?>

            <?php if(!empty($get_expert_info->experience)){?>
            <div class="expert_summary">
                <h2><i class="fa fa-certificate"></i> Experience</h2>
                <hr>
<!--                <ul>-->
<!--                    <li>8 Years</li>-->
<!--                    <li>8 Years</li>-->
<!--                    <li>8 Years</li>-->
<!--                </ul>-->
                <?=$get_expert_info->experience?>
            </div>
            <?php }?>
        </div>
        <div class="col-sm-4">
            <div class="similar_experts">
                <h2><i class="fa fa-lightbulb-o"></i> Skills</h2>
                <hr>
                <div class="similar_experts_list">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="images/bg.jpg" alt="..." class="img-circle  expert_image" width="60">
                        </div>
                        <div class="col-sm-9">
                            <h4>Tom Henry</h4>
                            <span>Dentist</span><br>
                            <span><strong>Conversation: </strong>545</span>
                        </div>
                    </div>

                    <div class="similar_list_button">
                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>
                            Message</a>
                        <a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            Appoinment</a>
                    </div>
                </div><div class="similar_experts_list">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="images/bg.jpg" alt="..." class="img-circle  expert_image" width="60">
                        </div>
                        <div class="col-sm-9">
                            <h4>Tom Henry</h4>
                            <span>Dentist</span><br>
                            <span><strong>Conversation: </strong>545</span>
                        </div>
                    </div>

                    <div class="similar_list_button">
                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>
                            Message</a>
                        <a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            Appoinment</a>
                    </div>
                </div><div class="similar_experts_list">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="images/bg.jpg" alt="..." class="img-circle  expert_image" width="60">
                        </div>
                        <div class="col-sm-9">
                            <h4>Tom Henry</h4>
                            <span>Dentist</span><br>
                            <span><strong>Conversation: </strong>545</span>
                        </div>
                    </div>

                    <div class="similar_list_button">
                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>
                            Message</a>
                        <a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            Appoinment</a>
                    </div>
                </div><div class="similar_experts_list">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="images/bg.jpg" alt="..." class="img-circle  expert_image" width="60">
                        </div>
                        <div class="col-sm-9">
                            <h4>Tom Henry</h4>
                            <span>Dentist</span><br>
                            <span><strong>Conversation: </strong>545</span>
                        </div>
                    </div>

                    <div class="similar_list_button">
                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>
                            Message</a>
                        <a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            Appoinment</a>
                    </div>
                </div><div class="similar_experts_list">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="images/bg.jpg" alt="..." class="img-circle  expert_image" width="60">
                        </div>
                        <div class="col-sm-9">
                            <h4>Tom Henry</h4>
                            <span>Dentist</span><br>
                            <span><strong>Conversation: </strong>545</span>
                        </div>
                    </div>

                    <div class="similar_list_button">
                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>
                            Message</a>
                        <a href=""><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="useful_information">
    <div class="container">
        <div class="col-md-4">
            <h3>USEFUL LINKS</h3>
            <hr/>
            <ul style="list-style-type:square">
                        <span class="col-md-6">
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                        </span>
                <span class="col-md-6">
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                        </span>

            </ul>
        </div>
        <div class="col-sm-4">
            <h3>STAY IN TOUCH</h3>
            <hr/>
            <p>Subscribe to our Newsletter</p>
            <form action="">
                <input type="email" placeholder="Email" class="form-control"/>
                <button>SUBSCRIBE</button>
            </form>
            <hr/>
            <a href="" class="contact_link">Contact Us</a>
        </div>
        <div class="col-sm-4">
            <h3>FOLLOW US</h3>
            <hr/>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHuman.Development.Hub%2F&tabs=timeline&width=340&height=550&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=124690277922354"
                    width="100%" height="210" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowTransparency="true"></iframe>

        </div>
    </div>
</section>
<?php include_once __DIR__.'/footer.php';?>
