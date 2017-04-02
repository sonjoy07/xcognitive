<?php include_once __DIR__ . '/header.php'; ?>

<section class="intro">
    <div class="text-content">
        <h1><?= $settings->welcome_message ?></h1>
        <hr/>
        <h3 class="intro_head"><?= $settings->introduction ?></h3>
        <div class="intro_button">
            <?php
            if ($this->session->userdata('user_type') == 2){
            ?>
            <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i>
                Chat</a>
            <a href="" ><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                Appointment</a>
            <?php }else{?>
            <a href="" class="chat_button" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-comment-o" aria-hidden="true"></i>
                    Chat</a>
                <a href="" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    Appointment</a>
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
                <img src="<?= base_url() ?>uploads/expert_image/<?=$expert->experts_image?>" alt="..." class="img-circle">
                <h4><a href="<?=site_url('website/expert_details/'.$expert->expert_id)?>"><?= $expert->expert_name?></a></h4>
                <p><?=$expert->expert_designation?></p>
                <div class="contact">
                   <?php if ($this->tank_auth->is_logged_in() && $this->session->userdata('user_type')==2){
                    ?>
                    <a href=""><i class="fa fa-circle"></i>
                        CHAT</a>
                    <a href="" > APPOINMENT</a>
                    <?php }else{?>
                        <a href="" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-circle"></i> CHAT</a>
                        <a href="">APPOINMENT</a>
                    <?php }?>

                </div>
            </div>

            <?php }?>

        </div>
        <h2>discovered the undoubtedly</h2>
        <div class="more_contact">
            <a href="<?=site_url('website/expert')?>">SEE ALL</a>
            <?php if ($this->tank_auth->is_logged_in() && $this->session->userdata('user_type')==2){?>
            <a href="">CHAT</a>
            <?php }else{ ?>
                <a href="" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg">CHAT</a>
            <?php }?>
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
                        <?php
                        $i = 0;
                        foreach($users_opinion as $opinion){?>
                        <li data-target="#quote-carousel" data-slide-to="<?=$i?>" class="<?= ($i == 1)?'active':''?>"><img class="img-responsive "
                                                                                                src="<?=base_url()?>uploads/user_image/<?= $opinion->user_image?>"
                                                                                                alt="<?= $opinion->user_image?>">
                        </li>
                        <?php $i++;}?>
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <?php
                        $i = 1;
                        foreach($users_opinion as $opinion){?>
                        <!-- Quote 1 -->
                        <div class="item <?= ($i == 1)?'active':''?>">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p><?= $opinion->message?> !</p>
                                        <small><?= $opinion->name?></small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <?php $i++; }?>
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
<section class="maincontent-area blog">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h3>Latest Books</h3>
                    <hr/>
                    <div class="product-carousel-download">
                        <?php foreach ($bookDownloads as $book){?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?=base_url()?>assets/uploads/files/<?=$book->book_front_image?>" alt="">
                                    <div class="product-hover">
                                        <input type="hidden" value="<?=$book->book_id?>" id="book_id">
                                        <a href="<?= base_url()?>assets/uploads/files/<?=$book->book_download_file?>" target="blank" id="download" class="add-to-cart-link"><i class="fa fa-download"></i> Download</a>                                    </div>
                                </div>
                                <h4><?=$book->book_title?></h4>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- End main content area -->
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
			<div class="why_icon">
				<img src="<?=base_url()?>assets/uploads/files/<?=$service->icon?>" alt="" />
			</div>
            <h4><?= $service->service_heading?></h4>
            <p><?= $service->service_description?> </p>
        </div>
        <?php }?>
    </div>
</section>

<section class="maincontent-area blog">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h3>Latest Article</h3>
                    <hr/>
                    <div class="product-carousel">
                        <?php foreach ($get_blogs as $blog){?>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="<?=base_url()?>uploads/blog_image/<?=$blog->blog_image?>" alt="">
                                <h2><a href="<?=site_url('website/blog_details/')?><?=$blog->blog_id?>"><?=$blog->blog_title?></a></h2>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- End main content area -->
<section class="option text-center">
    <div class="guest_section">
        <a href="<?=site_url('website/blogs_by_user/2')?>">Guest Blog</a>
        <p>Blog post by user/Guest.</p>
    </div>
    <div class="admin_section">
        <a href="<?=site_url('website/blogs_by_user/1')?>">Admin Blog</a>
        <p>Blog post by Admin.</p>
    </div>
    <div class="savior_section">
        <a href="<?=site_url('website/blogs_by_user/3')?>">Expert Blog</a>
        <p>Blog post by Expert.</p>
    </div>
</section>
<?php include_once __DIR__ . '/footer.php'; ?>
<script>
    $('iframe').removeAttr('width');
</script>
