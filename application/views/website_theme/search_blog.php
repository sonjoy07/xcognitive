<div class="row">
    <?php foreach ($getSubjectWiseExpert as $blog) { ?>

        <div class="col-sm-4 col-lg-4 col-md-4" >
            <div class="thumbnail" >
                <img src="<?= base_url() ?>uploads/blog_image/<?= $blog->blog_image ?>" width="320"alt="">
                <div class="caption">
                    <!--<h4 class="pull-right">$24.99</h4>-->
                    <h4><a href="<?= site_url('website/blog_details/' . $blog->blog_id) ?>"><?= $blog->blog_title ?></a>
                    </h4>
                    <?= $blog->short_description ?>
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