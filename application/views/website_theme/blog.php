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
                            <!--                        <div class="ratings">
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
<?php include_once __DIR__ . '/footer.php'; ?>