<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Xcongnitive</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?=$theme_asset_url?>css/normalize.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/main.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/style.css">
        <script src="<?=$theme_asset_url?>js/vendor/modernizr-2.8.3.min.js"></script>
        <!--<script src="<?=$theme_asset_url?>js/vendor/jquery.min.js"></script>-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

                <div class="container">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="<?=$theme_asset_url?>images/logo.png" alt="" height="80"/></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="<?= site_url('website/expert')?>">Experts <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Discussions</a></li>
                                <li><a href="<?= site_url('website/blog')?>">Blog</a></li>
                                <li><a href="#">Self Test</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>
        </header>