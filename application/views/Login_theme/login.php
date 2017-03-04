<?php
$login = array(
    'name'	=> 'login',
    'id'	=> 'login',
    'value' => set_value('login'),
    'maxlength'	=> 80,
    'size'	=> 30,
    'class' =>'form-control',
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email or login';
} else if ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name'	=> 'password',
    'id'	=> 'password',
    'size'	=> 30,
    'class' =>'form-control'
);
$remember = array(
    'name'	=> 'remember',
    'id'	=> 'remember',
    'value'	=> 1,
    'checked'	=> set_value('remember'),
    'style' => 'margin:0;padding:0',
);
$captcha = array(
    'name'	=> 'captcha',
    'id'	=> 'captcha',
    'maxlength'	=> 8,
);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=$theme_asset_url?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=$theme_asset_url?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=$theme_asset_url?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=$theme_asset_url?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=$theme_asset_url?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">

	<!-- Main navbar -->
<!--	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?=$theme_asset_url?>assets/images/logooo.png" alt=""></a>
    <h2>Xcognetive</h2>
			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>-->

<!--		<div class="navbar-collapse collapse" id="navbar-mobile">-->
<!--			<ul class="nav navbar-nav navbar-right">-->
<!--				<li>-->
<!--					<a href="#">-->
<!--						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>-->
<!--					</a>-->
<!--				</li>-->
<!---->
<!--				<li>-->
<!--					<a href="#">-->
<!--						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>-->
<!--					</a>-->
<!--				</li>-->
<!---->
<!--				<li class="dropdown">-->
<!--					<a class="dropdown-toggle" data-toggle="dropdown">-->
<!--						<i class="icon-cog3"></i>-->
<!--						<span class="visible-xs-inline-block position-right"> Options</span>-->
<!--					</a>-->
<!--				</li>-->
<!--			</ul>-->
<!--		</div>-->
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
<!--					<form action="http://demo.interface.club/limitless/layout_1/LTR/default/index.html">-->
                    <?php echo form_open($this->uri->uri_string()); ?>
						<div class="panel panel-body login-form">
							<div class="text-center">
                                                            <div class="icon-object border-slate-300 text-slate-300" style="height: 140px;width:140px;"></i>
                                                            <img src="<?=$theme_asset_url?>assets/images/logooo.png" alt="" style="width: 100%;">
                                                            </div>
                                                                
                                                                
								<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
                                <?php echo form_input($login); ?>
<!--								<input type="text" class="form-control" placeholder="Username">-->
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
                                <?php echo form_password($password); ?>
<!--								<input type="password" class="form-control" placeholder="Password">-->
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
<!--                                --><?php //echo form_submit('submit', 'Let me in'); ?>
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div>
						</div>

                    <?php echo form_close(); ?>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; <?= date("Y") ?> <?= anchor($SITE['website'], $SITE['name'], 'target="_blank"') ?> by <?= anchor($DEVELOPER['website'], $DEVELOPER['name'], 'target="_blank"') ?>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_1/LTR/default/login_simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jan 2017 05:16:56 GMT -->
</html>
