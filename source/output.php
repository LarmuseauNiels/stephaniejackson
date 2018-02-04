<?php
 class output
 {
     public static function header($active){
         ?>
         <!doctype html>
            <html class="no-js" lang="">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <title>Stephanie Jackson</title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="apple-touch-icon" href="apple-touch-icon.png">
                <link rel="stylesheet" href="/stephaniejackson/css/main.css">
                <script src="/stephaniejackson/js/vendor/modernizr-2.8.3.min.js"></script>
            </head>
            <body>
            <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Site Content -->

            <div class="footerposition">
                <header>
                    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light  ">
                        <div class="container">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index">Stephanie Jackson</a>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item <?php  if($active == "index"){print(" active");} ?>"><a class="nav-link" href="/stephaniejackson/index">Home</a></li>
                                    <li class="nav-item <?php  if($active == "about"){print(" active");} ?>"><a class="nav-link" href="/stephaniejackson/about">About</a></li>
                                    <li class="nav-item <?php  if($active == "treatments"){print(" active");} ?>">
                                        <div class="dropdown">
                                            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">Treatments</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/stephaniejackson/treatments/eyebrows">Eyebrows</a>
                                                <a class="dropdown-item" href="/stephaniejackson/treatments/eyeliner">Eyeliner</a>
                                                <a class="dropdown-item" href="/stephaniejackson/treatments/lip_blush">Lip Blush</a>
                                                <a class="dropdown-item" href="/stephaniejackson/treatments/beauty_spot">Beauty Spot</a>
                                                <a class="dropdown-item" href="/stephaniejackson/treatments/lvl">LVL</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item <?php  if($active == "pricing"){print(" active");} ?>"><a class="nav-link" href="/stephaniejackson/pricing">Pricing</a></li>
                                    <li class="nav-item <?php  if($active == "gallery"){print(" active");} ?>">
                                        <div class="dropdown">
                                            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">Gallery</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/stephaniejackson/gallery/eyebrows">Eyebrows</a>
                                                <a class="dropdown-item" href="/stephaniejackson/gallery/eyeliner">Eyeliner</a>
                                                <a class="dropdown-item" href="/stephaniejackson/gallery/lip_blush">Lip Blush</a>
                                                <a class="dropdown-item" href="/stephaniejackson/gallery/beauty_spot">Beauty Spot</a>
                                                <a class="dropdown-item" href="/stephaniejackson/gallery/lvl">LVL</a
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item <?php  if($active == "reviews"){print(" active");} ?>"><a class="nav-link" href="/stephaniejackson/reviews">Reviews</a></li>
                                    <li class="nav-item <?php  if($active == "termsandconditions"){print(" active");} ?>"><a class="nav-link" href="/stephaniejackson/termsandconditions">Terms & Conditions</a></li>
                                    <li class="nav-item <?php  if($active == "contact"){print(" active");} ?>"><a class="nav-link" href="/stephaniejackson/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>

            <main>
         <?php
     }

         public static function footer(){
         ?>
             </main>
             </div>
             <footer>
                 <div class="innerwidth">
                     <p>Stephanie Jackson - London Semi Permanent Makeup Artist</p>
                 </div>
             </footer>
             <script src="/stephaniejackson/js/vendor/jquery-1.12.0.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
             <script>window.jQuery || document.write('<script src="/stephaniejackson/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
             <script src="/stephaniejackson/js/vendor/popper.min.js"></script>
             <script src="/stephaniejackson/js/vendor/bootstrap.min.js"></script>
             <script src="/stephaniejackson/js/main.js"></script>
             <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
             <script>
                 (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                     function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                     e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                     e.src='https://www.google-analytics.com/analytics.js';
                     r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                 ga('create','UA-XXXXX-X','auto');ga('send','pageview');
             </script>
             </body>
             </html>
             <?php
     }
 }


