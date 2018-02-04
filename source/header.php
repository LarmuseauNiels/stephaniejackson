<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stephanie Jackson</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Site Content -->

<?php
$path = $_SERVER['REQUEST_URI'];
?>
<div class="wrapper">
    <header>
        <nav>
            <div class="innerwidth clearfix">
                <h1>Stephanie Jackson</h1>
                <ul>
                    <li <?php  if($path == "/stephaniejackson/index"){print("class='active'");} ?>><a href="index">Home</a></li>
                    <li <?php  if($path == "/stephaniejackson/about"){print("class='active'");} ?>><a href="about">About</a></li>
                    <li>
                        <div class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Treatments</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="eyebrows">Eyebrows</a>
                                <a class="dropdown-item" href="eyeliner">Eyeliner</a>
                                <a class="dropdown-item" href="lip-blush">Lip Blush/a>
                                <a class="dropdown-item" href="beauty-spot">Beauty Spot</a>
                                <a class="dropdown-item" href="lvl">LVL</a>
                            </div>
                        </div>
                    </li>
                    <li <?php  if($path == "/stephaniejackson/pricing"){print("class='active'");} ?>><a href="pricing">Pricing</a></li>
                    <li>
                        <div class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                    </li>
                    <li <?php  if($path == "/stephaniejackson/reviews"){print("class='active'");} ?>><a href="reviews">Reviews</a></li>
                    <li <?php  if($path == "/stephaniejackson/termsandconditions"){print("class='active'");} ?>><a href="termsandconditions">Terms & Conditions</a></li>
                    <li <?php  if($path == "/stephaniejackson/contact"){print("class='active'");} ?>><a href="contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>