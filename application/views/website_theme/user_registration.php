<?php include_once __DIR__ . '/header.php'; ?>
<section class="user_home">
    <div class="container">
        <div class="user_top">
            <div class="box login_area">
                <h3 class="text-center">Login with</h3>
                <div class="content">
                    <div class="social">
                        <a id="google_login" class="circle google" href="<?= $authUrl ?>">
                            <i class="fa fa-google-plus fa-fw"></i>
                        </a>
                        <a id="facebook_login" class="circle facebook" href="<?= $facebookUrl; ?>">
                            <i class="fa fa-facebook fa-fw"></i>
                        </a>
                    </div>

                    <div class="error"></div>
                    <div class="form loginBox">
                        <form method="post" action="<?= site_url('user_login') ?>" accept-charset="UTF-8">
                            <input id="email"  type="text" placeholder="Email" name="login">
                            <input id="password"  type="password" placeholder="Password"
                                   name="password">
                            <button class="btn  btn-register" type="submit">Login</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="box login_area">
                <div class="content registerBox" style="display:none;">
                    <div class="form">
                        <?php
                        $attributes = array(
                            'data-remote' => 'true',
                            'accept-charset' => 'UTF-8',
                            'class' => 'loginbox',
                            'method' => 'post');
                        echo form_open_multipart('user_login/save_info', $attributes)
                        ?>
                        <input id="email" type="text" placeholder="Email" name="email">
                        <input id="email" type="text" placeholder="Username" name="username">
                        <span class="heading">Picture :</span>
                        <input type="file" name="user_image">
                        <input id="password"  type="password" placeholder="Password"
                               name="password">
                        <input id="password_confirmation"  type="password"
                               placeholder="Repeat Password" name="confirm_password">
                        <span class="heading">Gender :</span> <label class="radio-inline">
                            <input type="radio" name="gender" id="inlineRadio1" value="male"> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                        </label>
                        <br />
                        <br />
                        <br />
                        <span class="heading">Dob :</span> <select name="dd" id="dd">
                            <option value="">-Day-</option>
                            <?php for($i = 1;$i <= 31 ; $i++ ){?>
                            <option value="<?=$i?>"><?=$i?></option>
                            <?php }?>
                        </select>
                        <select name="mm" id="mm">
                            <option value="">-Month-</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        <select name="yy" id="yy">
                            <option value="">-Year-</option>
                            <?php for($i = date('Y');$i >= 1940; $i--){?>
                            <option value="<?= $i?>"><?= $i?></option>
                            <?php }?>
                        </select>
                        <br />
                        <br />
                        <br />
                        <input id="age" type="text" placeholder="Age" name="age">
                        <button class="btn  btn-register" type="submit">Create account</button>
                        <?= form_close(); ?>
                    </div>
                </div>
                <div class="forgot login-footer">
                    <span>Looking to
                        <a href="javascript: showRegisterForm();">create an account</a>
                        ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="javascript: showLoginForm();" id="hide_login">Login</a>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include_once __DIR__ . '/footer.php'; ?>
<script type="text/javascript">
    $(function () {
        $('#hide_login').click(function () {
            $('.registerBox').hide();
            $('.register-footer').hide();
            $('.loginBox').show();
            $('.login-footer').show();
        });
        $('#age').change(function(){
            var age = $(this).val();
            var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
             
            var d = new Date();
            var dif = d.getFullYear()- age;
           $('#dd').val(d.getDay()) ;
           $('#mm').val(months[d.getMonth()]) ;
           $('#yy').val(dif) ;
        });
        $('#yy').change(function(){
           var year = $(this).val();
           var d = new Date();
           var dif = d.getFullYear()- year;
           $('#age')val(dif);
        });
    });
</script>