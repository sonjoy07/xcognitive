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
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/normalize.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/main.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/datepicker.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/login-register.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/owl.carousel.css">
        <link rel="stylesheet" href="<?=$theme_asset_url?>css/style.css">
        <script src="<?=$theme_asset_url?>js/vendor/modernizr-2.8.3.min.js"></script>
        <!--<script src="<?=$theme_asset_url?>js/vendor/jquery.min.js"></script>-->
    </head>
    <body>
    <div id="myDiv" style="position: fixed;top: 50%;left: 40%;">
        <img id="loading-image" src="<?=$theme_asset_url?>images/ajax-loader.png" style="display: none;"/>
    </div>
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
                            <a class="navbar-brand" href="<?=  site_url('website')?>"><img src="<?=$theme_asset_url?>images/logo.png" alt=""/></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main_menu" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="<?= site_url('website/expert')?>">Experts <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Discussions</a></li>
                                <li><a href="<?= site_url('website/blog')?>">Blog</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <?php
                                if ($this->tank_auth->is_logged_in() && $this->session->userdata('user_type')==2){
									if(isset($blog)=='blog'){
                                ?>
                                <li><a href="<?= site_url('user_controller/add_blog')?>">Add Blog</a></li>
									<?php }?>
                                    <li><a class="dropdown-toggle drop" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-unlock"></i> <?=$this->session->userdata('username')?> <i class="caret"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="<?=site_url('user_controller/userProfile')?>">Profile</a></li>
                                            <li><a href="<?=site_url('user_controller/resetPasswords')?>">Reset Password</a></li>
                                            <li><a href="<?=site_url('user_login/logout')?>">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php
                                }else if ($this->tank_auth->is_logged_in() && $this->session->userdata('user_type')==3){
                                ?>
                                <li><a href="<?= site_url('expert_controller/add_blog')?>">Add Blog</a></li>
                                    <li><a class="dropdown-toggle drop" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-unlock"></i> <?=$this->session->userdata('username')?> <i class="caret"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="<?=site_url('user_controller/userProfile')?>">Profile</a></li>
                                            <li><a href="<?=site_url('user_controller/resetPasswords')?>">Reset Password</a></li>
                                            <li><a href="<?=site_url('user_login/logout')?>">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php }else{?>
                                    <li><a href="<?=site_url('website/expert_registration')?>">Become An Expert</a></li>
                                    <li><a href="#"  type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-lock"></i> Login</a></li>                                    
                                <?php }?>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>
        </header>
<!--    chat section-->
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-md-3 chat_position">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-circle text-green"></i> Jane Smith</h4>
                        </div>
                        <div class="portlet-widgets">
                            <div class="btn-group">
                                <button type="button" class="btn btn-white dropdown-toggle btn-xs" data-toggle="dropdown">
                                    <i class="fa fa-circle text-green"></i> Status
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle text-orange"></i> Away</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                                    </li>
                                </ul>
                            </div>
                            <span class="divider"></span>
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#chat" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="chat" class="panel-collapse collapse">
                        <div>
                            <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="media chat-media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="http://lorempixel.com/30/30/people/1/" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Jane Smith
                                                    <span class="small pull-right">12:23 PM</span>
                                                </h4>
                                                <p>Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="media chat-media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="http://lorempixel.com/30/30/people/7/" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Smith
                                                    <span class="small pull-right">12:28 PM</span>
                                                </h4>
                                                <p>Yeah I did. Everything looks good.</p>
                                                <p>Did you have an update on purchase order #302?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="media chat-media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="http://lorempixel.com/30/30/people/7/" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Jane Smith
                                                    <span class="small pull-right">12:39 PM</span>
                                                </h4>
                                                <p>No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="portlet-footer">
                            <form role="form">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter message..."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-default pull-right">Send</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
    </div>