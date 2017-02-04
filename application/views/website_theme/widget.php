<div class="col-sm-3">
    <div class="aside-widget">
        <header>
            <h3>Latest Post</h3>
        </header>
        <div class="body">
            <ul class="tales-list">
                <?php foreach ($latest_post as $post){?>
                <li><a href="<?= site_url('website/blog_details/' . $post->blog_id) ?>"><?= $post->blog_title ?></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="aside-widget">
        <header>
            <h3>Category</h3>
        </header>
        <div class="body">
            <ul class="tales-list">
                <?php foreach ($latest_category as $category){?>
                <li><?= $category->category_name?></li>
                <?php }?>
            </ul>
        </div>
    </div>
<!--    <div class="aside-widget">
        <header>
            <h3>Archives</h3>
        </header>
        <div class="body">
            <ul class="tales-list">
                <li><a href="index.html">Email Encryption Explained</a></li>
                <li><a href="#">Selling is a Function of Design.</a></li>
                <li><a href="#">It’s Hard To Come Up With Dummy Titles</a></li>
                <li><a href="#">Why the Internet is Full of Cats</a></li>
                <li><a href="#">Last Made-Up Headline, I Swear!</a></li>
            </ul>
        </div>
    </div>-->
</div>