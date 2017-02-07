<?php include_once __DIR__ . '/header.php'; ?>

<section class="intro">
    <div class="text-content">
        <h1><?= $settings->welcome_message ?></h1>
        <hr/>
        <h3 class="intro_head"><?= $settings->introduction ?></h3>
        <div class="intro_button">
            <?php
            if ($this->tank_auth->is_logged_in() && $this->session->userdata('user_type')==2){
            ?>
            <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i>
                Chat</a>
            <a href="" ><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                Appoinment</a>
            <?php }else{?>
                <a href="" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-comment-o" aria-hidden="true"></i>
                    Chat</a>
                <a href="" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    Appoinment</a>
            <?php }?>
        </div>
        <!--        <a href="">Universa enim illorum ratione cum tota vestra confligendum puto.</a>-->
    </div>
    <video src="<?= base_url() ?>assets/uploads/files/<?= $settings->bg_video ?>" autoplay="auto" loop="loop">
<!--    <video src="--><?//= $theme_asset_url ?><!--MP4/bd-video.mp4" autoplay="auto" loop="loop">-->
        <img src="<?= $theme_asset_url ?>images/bg.png" data-src="images/bg.png" class="img-bg">
    </video>
</section>
<section class="consoling">
    <ul>
        <?php foreach ($subjects as $subject) { ?>
            <li><a href=""><?= $subject->subject_name ?> <br>
                    <img src="<?= base_url() ?>assets/uploads/files/<?= $subject->subject_icon ?>" alt="">
                </a>
            </li>
        <?php } ?>

    </ul>
</section>
<hr>
<section class="expert">
    <div class="container">
        <h3>discovered the undoubtable</h3>
        <hr/>
        <div class="more_details">
            <?php foreach ($experts as $expert){?>
            <div class="col-sm-4">
                <img src="<?= base_url() ?>assets/uploads/files/<?=$expert->experts_image?>" alt="..." class="img-circle">
                <h4><a href="<?=site_url('website/expert_details/'.$expert->expert_id)?>"><?= $expert->expert_name?></a></h4>
                <p><?=$expert->expert_designation?></p>
                <div class="contact">
                    <a href=""><i class="fa fa-circle"></i> CHAT</a>
                    <a href="">MESSAGE</a>
                </div>
            </div>
            <?php }?>


        </div>
        <h2>discovered the undoubtable</h2>
        <div class="more_contact">
            <a href="">SEE ALL</a>
            <a href="">CHAT</a>
        </div>
    </div>
</section>
<section class="testmonial">
    <div class="container">
        <h3>Users Opinion</h3>
        <hr/>
        <div class="row">
            <div class="col-md-12" data-wow-delay="0.2s">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive "
                                                                                                src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg"
                                                                                                alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive"
                                                                                 src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg"
                                                                                 alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive"
                                                                                 src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg"
                                                                                 alt="">
                        </li>
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">

                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. !</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. </p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. .</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                                class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                                class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<br/>
<section class="blog">
    <div class="container">
        <h3>discovered the undoubtable</h3>
        <hr/>
        <ul class="flexiselDemo3">
            <li><img src="images/1.jpg" />
                <p>sdfsdf</p>
            </li>
            <li><img src="images/2.jpg" /></li>
            <li><img src="images/3.jpg" /></li>
            <li><img src="images/4.jpg" /></li>
        </ul>

    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>What we do</h3>
                <hr/>
                <p><?= $settings->works_details ?></p>
            </div>
            <div class="col-sm-6">
                <?= $settings->youtube_video ?>
            </div>
        </div>
    </div>
</section>
<hr/>
<section class="useful text-center">
    <div class="container">
        <h3>WHY XCOGNITIVE</h3>
        <hr/>
        <?php foreach($get_services as $service){?>
        <div class="col-sm-3">
            <i class="fa fa-clock-o"></i>
            <h4><?= $service->service_heading?></h4>
            <p><?= $service->service_description?> </p>
        </div>
        <?php }?>
    </div>
</section>
<section class="blog">
    <div class="container">
        <h3>Latest Article</h3>
        <hr/>
        <ul class="flexiselDemo3">
            <?php foreach ($get_blogs as $blog){?>
            <li><img src="<?=base_url()?>uploads/blog_image/<?=$blog->blog_image?>" />
                <h5><a href="<?=site_url('website/blog_details/')?><?=$blog->blog_id?>"><?=$blog->blog_title?></a></h5>
            </li>
            <?php }?>
        </ul>
    </div>
</section>
<section class="option text-center">
    <div class="guest_section">
        <a href="">Guest Blog</a>
        <p>Duo enim genera quae erant, fecit tria.</p>
    </div>
    <div class="admin_section">
        <a href="">Admin Blog</a>
        <p>Duo enim genera quae erant, fecit tria.</p>
    </div>
    <div class="savior_section">
        <a href="">Guest Blog</a>
        <p>Duo enim genera quae erant, fecit tria.</p>
    </div>
</section>
<?php include_once __DIR__ . '/footer.php'; ?>
<script>
    $('iframe').removeAttr('width');
</script>
