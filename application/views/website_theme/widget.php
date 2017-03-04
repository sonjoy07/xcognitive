<div class="col-sm-3">
    <div class="widget-search">
        <form action="">
            <div class="form-group">
                <label class="control-label" for="inputGroupSuccess1">Search</label>
                <div class="input-group">
                    <span class="input-group-addon" id="search"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" id="search_item"
                           aria-describedby="inputGroupSuccess1Status">
                </div>
            </div>
        </form>
    </div>
    <div class="aside-widget">
        <header>
            <h3>Latest Post</h3>
        </header>
        <div class="body">
            <ul class="tales-list">
                <?php foreach ($latest_post as $post) { ?>
                    <li><a href="<?= site_url('website/blog_details/' . $post->blog_id) ?>"><?= $post->blog_title ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="aside-widget">
        <header>
            <h3>Category</h3>
        </header>
        <div class="body">
            <ul class="tales-list">
                <?php foreach ($latest_category as $category) { ?>
                    <li><a href="<?= site_url('website/categoryWiseBlog/'.$category->category_id)?>"><?= $category->category_name ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="aside-widget">
        <header>
            <h3>Archives</h3>
        </header>
        <div class="body">
            <ul class="tales-list archive">
                <?php foreach ($archives as $archive){?>
                <li><a href=""><?= $monthName =date("F", mktime(0, 0, 0, $archive->month, 10)).' ('.$archive->year.')'?></a>
                    <ul class="monthlist">
                        <?php foreach ($archive->posts as $post){?>
                        <li><a href=""><?=$post->blog_title?></a></li>
                        <?php }?>
                    </ul>

                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<style>
    #search{
        cursor: pointer;
    }
</style>
