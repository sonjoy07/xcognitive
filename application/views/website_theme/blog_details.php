<?php include_once __DIR__ . '/header.php'; ?>
<section class="blog_home" >
    <div class="container">
        <!-- Blog Post Content Column -->
        <div class="col-lg-9" id="blog_search">

            <!-- Blog Post -->
<!--            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=--><?php //echo site_url('website/blog_details/'.$blog_details->blog_id);?><!--">Share</a></div>-->
<!--            <div class="fb-share-button" data-href="http://localhost/xcognitive/index.php/website/blog_details/--><?//=$blog_details->blog_id?><!--" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fxcognitive%2Findex.php%2Fwebsite%2Fblog_details%2F9&amp;src=sdkpreparse">Share</a></div>-->
            <!-- Title -->
            <div class="fb-share-button" data-href="http://friendsitltd.com/xcognitive/index.php/website/blog_details/<?=$blog_details->blog_id?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ffriendsitltd.com%2Fxcognitive%2Findex.php%2Fwebsite%2Fblog_details%2F9&amp;src=sdkpreparse">Share</a></div>
            <h1><?= $blog_details->blog_title ?></h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#"><?= $blog_details->auther_name ?></a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted
                on <?= date('F d, Y H:i A ', strtotime($blog_details->published_date)) ?></p>

            <hr>

            <!-- Preview Image -->
            <img class="img-responsive" src="<?= base_url() ?>uploads/blog_image/<?= $blog_details->blog_image ?>"
                 alt="">

            <hr>

            <!-- Post Content -->
            <div class="lead"><?= $blog_details->short_description ?></div>
            <?= $blog_details->long_description ?>
            <hr>
            <?php
            if ($this->tank_auth->is_logged_in() && $this->session->userdata('user_type') == 2) {
                ?>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <input type="hidden" value="<?= $blog_details->blog_id ?>" id="blog_id">
                            <textarea class="form-control" rows="3" id="comment"></textarea>
                        </div>
                        <button type="button" id="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div id="comments_details"></div>
                <?php foreach ($comments_by_blog_id as $comment) { ?>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Start Bootstrap
                                <small><?= date('F d, Y H:i A ', strtotime($comment->comments_date)) ?></small>
                            </h4>
                            <?= $comment->comments ?>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <p>If you want to give some comments click <a href="" type="button" data-toggle="modal"
                                                              data-target=".bs-example-modal-lg">Login</a> or <a
                            href="javascript: showRegisterForm();" type="button" data-toggle="modal"
                            data-target=".bs-example-modal-lg">Register</a></p>
            <?php } ?>
            <!-- Comment -->
            <!--            <div class="media">-->
            <!--                <a class="pull-left" href="#">-->
            <!--                    <img class="media-object" src="http://placehold.it/64x64" alt="">-->
            <!--                </a>-->
            <!--                <div class="media-body">-->
            <!--                    <h4 class="media-heading">Start Bootstrap-->
            <!--                        <small>August 25, 2014 at 9:30 PM</small>-->
            <!--                    </h4>-->
            <!--                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
            <!--                    <!-- Nested Comment -->
            <!--                    <div class="media">-->
            <!--                        <a class="pull-left" href="#">-->
            <!--                            <img class="media-object" src="http://placehold.it/64x64" alt="">-->
            <!--                        </a>-->
            <!--                        <div class="media-body">-->
            <!--                            <h4 class="media-heading">Nested Start Bootstrap-->
            <!--                                <small>August 25, 2014 at 9:30 PM</small>-->
            <!--                            </h4>-->
            <!--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <!-- End Nested Comment -->
            <!--                </div>-->
            <!--            </div>-->

        </div>
        <?php include_once __DIR__ . '/widget.php'; ?>
    </div>
</section>
<?php include_once __DIR__ . '/footer.php'; ?>
<script>
    $('#submit').on('click', function () {
        var comment = $('#comment').val();
        var blog_id = $('#blog_id').val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('website/save_comments'); ?>",
//            dataType: 'json',
            data: {comment: comment, blog_id: blog_id},
            success: function (res) {
                $('#comments_details').html(res);
                $('#comments_details').fadeIn();
            }
        });
    });

</script>
