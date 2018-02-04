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
                    <nav>
                        <div class="innerwidth clearfix">
                            <h1>Stephanie Jackson</h1>
                            <ul>
                                <li <?php  if($active == "index"){print("class='active'");} ?>><a href="/stephaniejackson/index">Home</a></li>
                                <li <?php  if($active == "about"){print("class='active'");} ?>><a href="/stephaniejackson/about">About</a></li>
                                <li <?php  if($active == "treatments"){print("class='active'");} ?>>
                                    <div class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Treatments</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/stephaniejackson/treatments/eyebrows">Eyebrows</a>
                                            <a class="dropdown-item" href="/stephaniejackson/treatments/eyeliner">Eyeliner</a>
                                            <a class="dropdown-item" href="/stephaniejackson/treatments/lip_blush">Lip Blush</a>
                                            <a class="dropdown-item" href="/stephaniejackson/treatments/beauty_spot">Beauty Spot</a>
                                            <a class="dropdown-item" href="/stephaniejackson/treatments/lvl">LVL</a>
                                        </div>
                                    </div>
                                </li>
                                <li <?php  if($active == "pricing"){print("class='active'");} ?>><a href="/stephaniejackson/pricing">Pricing</a></li>
                                <li <?php  if($active == "gallery"){print("class='active'");} ?>>
                                    <div class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/stephaniejackson/gallery/eyebrows">Eyebrows</a>
                                            <a class="dropdown-item" href="/stephaniejackson/gallery/eyeliner">Eyeliner</a>
                                            <a class="dropdown-item" href="/stephaniejackson/gallery/lip_blush">Lip Blush</a>
                                            <a class="dropdown-item" href="/stephaniejackson/gallery/beauty_spot">Beauty Spot</a>
                                            <a class="dropdown-item" href="/stephaniejackson/gallery/lvl">LVL</a
                                        </div>
                                    </div>
                                </li>
                                <li <?php  if($active == "reviews"){print("class='active'");} ?>><a href="/stephaniejackson/reviews">Reviews</a></li>
                                <li <?php  if($active == "termsandconditions"){print("class='active'");} ?>><a href="/stephaniejackson/termsandconditions">Terms & Conditions</a></li>
                                <li <?php  if($active == "contact"){print("class='active'");} ?>><a href="/stephaniejackson/contact">Contact</a></li>
                            </ul>
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


