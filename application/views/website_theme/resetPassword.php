<?php include_once __DIR__.'/header.php';?>
<section class="expert_description">
    <div class="container">
        <form method="post" action="<?=site_url('user_login/change_password')?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Current Password</label>
                <input type="password" class="form-control" name="old_password" id="exampleInputEmail1" placeholder="Current Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">New Password</label>
                <input type="password" class="form-control" name="new_password" id="exampleInputPassword2" placeholder="New Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword3">Retype Password</label>
                <input type="password" class="form-control" name="confirm_new_password" id="exampleInputPassword3" placeholder="Retype Password">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
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
<style>
</style>
<?php include_once __DIR__.'/footer.php';?>
