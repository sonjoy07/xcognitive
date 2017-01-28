<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$root=$_SERVER['HTTP_HOST'];
$config['SITE'] = array(
    "name" => "XCOGNITIVE",
    'website' => $root,
    'logo' => 'jamuna logo.gif');
$config['SITETITLE'] = 'XCOGNITIVE';

$config['main_sidebar_title'] = "XCOGNITIVE <br>";

$config['DEVELOPER'] = array(
    "name" => "Friends IT",
    'website' => "http://friendsitltd.com/");



$config['ASSET_FOLDER'] = "assets/";
$config['ADMIN_THEME'] = 'Admin_theme/'; //Theme location on view folder
$config['WEBSITE_THEME'] = 'website_theme/'; //Theme location on view folder
$config['ADMIN_ASSET'] = 'ADMIN_ASSETS/'; //Theme location on view folder
$config['WEBSITE_ASSET'] = 'website/'; //Theme location on view folder
$config['THEME_ASSET'] = $config['ASSET_FOLDER'] . $config['ADMIN_ASSET'];
$config['WEBSITE_ASSET'] = $config['ASSET_FOLDER'] . $config['WEBSITE_ASSET'];
$config['LOGIN_THEME'] = 'Login_theme/'; //Theme location on view folder


