<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$Title?></title>

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
	
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>


	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/pages/dashboard.js"></script>
        <script type="text/javascript" src="<?=$theme_asset_url?>/assets/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="<?=$theme_asset_url?>/assets/ckfinder/ckfinder.js"></script>
        <!-- Theme JS files -->
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
<!--	<script type="text/javascript" src="--><?//=$theme_asset_url?><!--assets/js/plugins/forms/selects/select2.min.js"></script>-->

	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/pages/datatables_basic.js"></script>
        <?php
// echo "<pre>";
// print_r($asset);
// echo "</pre>";
        if (isset($glosary))
            foreach ($glosary->css_files as $file):
                ?>
                <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

            <?php endforeach; ?>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?=base_url()?>assets/website/images/logooo.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

			</ul>

			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">



				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=$theme_asset_url?>assets/images/demo/users/face11.jpg" alt="">
						<span><?=$this->session->userdata('user_name')?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                                                <li><a href="<?=  site_url('login/logout')?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->