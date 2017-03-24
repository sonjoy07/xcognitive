<section class="useful_information">
    <div class="container">
        <div class="col-md-4">
            <h3>USEFUL LINKS</h3>
            <hr/>
            <ul style="list-style-type:square">
                        <span class="col-md-8">
                            <li><a href="">Experts</a></li>
                            <li><a href="">Discussions</a></li>
                            <li><a href="">Most Asked Questions</a></li>
                            <li><a href="">Motivational Quotes</a></li>
                            <li><a href="">Articles</a></li>
                        </span>
<!--                <span class="col-md-6">
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                            <li><a href="">link</a></li>
                        </span>-->

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
<section class="footer-about-container">


    <div class="row footer-about-yourdost">
        <div class="col l12 s12 padding0">
            <div class="footer-about-border">
                <h6 class="font-w300">About Xcognitive</h6>
            </div>
        </div>
        <div class="container">
            <div class="col l12 s12 padding0">

                <div class="col l12 s12 footer-yd-about ">
                    <p class="lh-footer"><?=$settings->about_section?></p><br>
                                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <p>&copy 2017, All Rights Reserved</p>
    </div>
</footer>
<!--login modal///////////////-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog login animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login with</h4>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="social">
                            <a class="circle github" href="/auth/github">
                                <i class="fa fa-github fa-fw"></i>
                            </a>
                            <a id="google_login" class="circle google" href="<?= $authUrl ?>">
                                <i class="fa fa-google-plus fa-fw"></i>
                            </a>
                            <a id="facebook_login" class="circle facebook" href="<?= $facebookUrl; ?>">
                                <i class="fa fa-facebook fa-fw"></i>
                            </a>
                        </div>
                        <div class="division">
                            <div class="line l"></div>
                            <span>or</span>
                            <div class="line r"></div>
                        </div>
                        <div class="error"></div>
                        <div class="form loginBox">
                            <form method="post" action="<?= site_url('user_login') ?>" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="login">
                                <input id="password" class="form-control" type="password" placeholder="Password"
                                       name="password">
                                <input class="btn  btn-login" type="submit" value="Login"
                                >
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <?php
                            $attributes = array(
                                'data-remote' => 'true',
                                'accept-charset' => 'UTF-8',
                                'method' => 'post');
                            echo form_open_multipart('user_login/save_info', $attributes)
                            ?>
                            <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                            <input id="email" class="form-control" type="text" placeholder="Username" name="username">
                            <input class="form-control" type="file" name="user_image">
                            <input id="password" class="form-control" type="password" placeholder="Password"
                                   name="password">
                            <input id="password_confirmation" class="form-control" type="password"
                                   placeholder="Repeat Password" name="confirm_password">
                            <input class="btn  btn-register" type="submit" value="Create account"
                                   name="commit">
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="javascript: showLoginForm();">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--////////////////////-->
<!--feedback option-->
<div class="feedback_form">
    <a href="" type="button" data-toggle="modal" data-target="#myModal">Feedback Form</a>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Share your Feedback</h3>
                <p class="modal-title">We would love to hear your thoughts, concerns or problems with anything so we can
                    improve!</p>
            </div>
            <div class="modal-body">
                <div class="margin feedback">
                    <form id="feedbackForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"
                                   value="<?= $this->session->userdata('username'); ?>" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email"  value="<?= $this->session->userdata('email'); ?>" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="10" class="form-control">
                            </textarea>
                        </div>
                        <button type="submit" id="submit" class="btn btn-warning btn-lg btn-block ">Share Feedback
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/////////////////////-->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=$theme_asset_url?>js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="<?= $theme_asset_url ?>js/plugins.js"></script>
<script src="<?= $theme_asset_url ?>js/main.js"></script>
<script src="<?= $theme_asset_url ?>js/bootstrap.min.js"></script>
<script src="<?= $theme_asset_url ?>js/bootstrap-datepicker.js"></script>
<script src="<?= $theme_asset_url ?>js/login-register.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>js/selects/bootstrap_multiselect.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>/ckfinder/ckfinder.js"></script>
<!-- jQuery sticky menu -->
<script src="<?= $theme_asset_url ?>js/owl.carousel.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
<script type="text/javascript">
    $('#myCarousel').carousel({
        interval: 4000
    });
    $('.product-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:3,
            }
        }
    });
    $('.product-carousel-download').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:5,
            }
        }
    });
    //jQuery is required to run this code
    $(document).ready(function () {

        scaleVideoContainer();

        initBannerVideoSize('.video-container .poster img');
        initBannerVideoSize('.video-container .filter');
        initBannerVideoSize('.video-container video');

        $(window).on('resize', function () {
            scaleVideoContainer();
            scaleBannerVideoSize('.video-container .poster img');
            scaleBannerVideoSize('.video-container .filter');
            scaleBannerVideoSize('.video-container video');
        });

    });

    function scaleVideoContainer() {

        var height = $(window).height() + 5;
        var unitHeight = parseInt(height) + 'px';
        $('.homepage-hero-module').css('height', unitHeight);

    }

    function initBannerVideoSize(element) {

        $(element).each(function () {
            $(this).data('height', $(this).height());
            $(this).data('width', $(this).width());
        });

        scaleBannerVideoSize(element);

    }

    function scaleBannerVideoSize(element) {

        var windowWidth = $(window).width(),
            windowHeight = $(window).height() + 5,
            videoWidth,
            videoHeight;

//        console.log(windowHeight);

        $(element).each(function () {
            var videoAspectRatio = $(this).data('height') / $(this).data('width');

            $(this).width(windowWidth);

            if (windowWidth < 1000) {
                videoHeight = windowHeight;
                videoWidth = videoHeight / videoAspectRatio;
                $(this).css({'margin-top': 0, 'margin-left': -(videoWidth - windowWidth) / 2 + 'px'});

                $(this).width(videoWidth).height(videoHeight);
            }

            $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

        });

    }
    $(".flexiselDemo3").flexisel({
        visibleItems: 3,
        itemsToScroll: 1,
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }
    });
    //    archives
    $('.archive li').click(function (e) {
        e.preventDefault();
        $('.monthlist').toggle();
    });
    $('.archive li ul li ').click(function (e) {
        e.preventDefault();
        $('.archive li ul li ul').toggle();
    });
    $('#search').click(function (e) {
//        e.preventDefault();
//        if (e.which == 13) {
            var search = $('#search_item').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('website/getSearchDetails'); ?>",
//            dataType: 'json',
                data: {search: search},
                beforeSend: function () {
                    $("#loading-image").show();
                },
                success: function (res) {
                    $('#blog_search').html(res);
                    $("#loading-image").hide();
                }
            });
//        }
    });
//    feedback
    $(function () {
        $('form#feedbackForm').submit(function (e) {
            var form = $(this).serialize();
            e.preventDefault();
            $.ajax({
                url: '<?php echo site_url('website/save_feedback'); ?>',
                data: form,
                type: 'post',
                success: function (res) {
                    $('#myModal').modal('hide');
                }
            })
        });
    });
</script>
</body>
</html>