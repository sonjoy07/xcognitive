<?php include_once __DIR__ . '/header.php'; ?>
<section class="blog_home">
    <div class="container">
        <div class="col-sm-9" id="blog_search">
            <!-- Blog Post -->

            <!-- Title -->
            <!--<h1>Blog Post Title</h1>-->

            <!--&lt;!&ndash; Author &ndash;&gt;-->
            <!--<p class="lead">-->
            <!--by <a href="#">Start Bootstrap</a>-->
            <!--</p>-->

            <!--<hr>-->

            <!--&lt;!&ndash; Date/Time &ndash;&gt;-->
            <!--<p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>-->

            <!--<hr>-->

            <!-- Preview Image -->
            <img class="img-responsive" src="<?= base_url() ?>uploads/blog_image/<?= $get_last_blog->blog_image ?>" alt="">
            <hr>
            <h1 class="lead"><a href="<?= site_url('website/blog_details/' . $get_last_blog->blog_id) ?>"><?= $get_last_blog->blog_title ?></a></h1>

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted on <?= date('F d, Y H:i A ', strtotime($get_last_blog->published_date)) ?></p>
            <p class="lead">
                by <?= $get_last_blog->auther_name ?>
            </p>
            <hr>
            <div class="row"> 
                <?php foreach ($get_some_blog as $blog) { ?> 

                <div class="col-sm-4 col-lg-4 col-md-4" >
                    <div class="thumbnail" >
                            <img src="<?= base_url() ?>uploads/blog_image/<?= $blog->blog_image ?>" width="320"alt="">
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="<?= site_url('website/blog_details/' . $blog->blog_id) ?>"><?= $blog->blog_title ?></a>
                                </h4>
                                <?php echo  substr($blog->short_description,0,100).'<a href="'.site_url('website/blog_details/' . $blog->blog_id).' "> Read More...</a>'; ?>
                            </div>
<!--                                                    <div class="ratings">
                                                        <p class="pull-right">15 reviews</p>
                                                        <p>
                                                            <span class="glyphicon glyphicon-star"></span>
                                                            <span class="glyphicon glyphicon-star"></span>
                                                            <span class="glyphicon glyphicon-star"></span>
                                                            <span class="glyphicon glyphicon-star"></span>
                                                            <span class="glyphicon glyphicon-star"></span>
                                                        </p>
                                                    </div>-->
                        </div>
                    </div>

                <?php } ?>
            
    </div>
</div>
<?php include_once __DIR__ . '/widget.php';?>
</div>
</section>

<?php include_once __DIR__ . '/footer.php'; ?>