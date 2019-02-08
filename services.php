<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Services | Real Fit Pros</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" href="images/logo/rfpLogo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "https://images.unsplash.com/photo-1503824475106-01c19f544ebf?auto=format&fit=crop&w=3149&q=80",
            "https://images.unsplash.com/photo-1503824475106-01c19f544ebf?auto=format&fit=crop&w=3149&q=80",
            "https://images.unsplash.com/photo-1503824475106-01c19f544ebf?auto=format&fit=crop&w=3149&q=80"
        ], {duration: 5000, fade: 500});

        $("#mapwrapper").gMap({ controls: false,
            scrollwheel: false,
            markers: [{     
                latitude:40.7566,
                longitude: -73.9863,
            icon: { image: "images/marker.png",
                iconsize: [44,44],
                iconanchor: [12,46],
                infowindowanchor: [12, 0] } }],
            icon: { 
                image: "images/marker.png", 
                iconsize: [26, 46],
                iconanchor: [12, 46],
                infowindowanchor: [12, 0] },
            latitude:40.7566,
            longitude: -73.9863,
            zoom: 14 });
    });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
   <header>
<?php include("header.php"); ?>
    </header><!--/header-->
    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                   <img src="../realFitPros/images/logo/rfpLogo.png" alt="">
                                    <h2 class="main-title">Our Services</h2>
                                    <hr>
                                    <p>Real Fit Pros focuses on viable and valuable services</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="services" class="white">
           
            <div class="container">
            <div class="gap"></div>             
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <img class="about-services" src="images/services/personalTrainer@4x.png" style="width: 75px;height:75px;">
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Personal Trainer</h3>
                                <p>This is a very detailed description of the service RealFit Pros will offer.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <img class="about-services" src="images/services/massageTherapy@4x.png" style="width: 75px;height:75px;">
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Massage Therapy</h3>
                                <p>This is a very detailed description of the service RealFit Pros will offer.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <img class="about-services" src="images/services/nutrition@4x.png" style="width: 75px;height:75px;">
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Nutritionist</h3>
                                <p>This is a very detailed description of the service RealFit Pros will offer.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <img class="about-services" src="images/services/yoga@4x.png" style="width: 75px;height:75px;">
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Yoga</h3>
                                <p>This is a very detailed description of the service RealFit Pros will offer.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <img class="about-services" src="images/services/prepCoach@4x.png" style="width: 75px;height:75px;">
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Prep Coach</h3>
                                <p>This is a very detailed description of the service RealFit Pros will offer.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    
                </div><!--/.row-->
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Training</h2>
                        <hr>
                        <p>Training methods the popluation prefers.</p>
                    </div>               
                </div>
            </div>
            <div class="container">     
            <div class="row">            
                    <div class="col-md-3">
                        <div class="tile-progress tile-red bounce-in">
                            <div class="tile-header">
                                <h3>Personal Trainer</h3>
                                <span>Having a personal trainer to help reach your goals.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="65%" style="width: 70%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">65</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tile-progress tile-cyan bounce-in">
                            <div class="tile-header">
                                <h3>Nutritionist</h3>
                                <span>Having a personal nutritionist to help you reach your goals.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="55.5%" style="width: 55.5%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">45</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tile-progress tile-primary bounce-in">
                            <div class="tile-header">
                                <h3>Yoga Instructor</h3>
                                <span>Learning the art and techiques of Yoga.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="90%" style="width: 85%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">80</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tile-progress tile-pink bounce-in">
                            <div class="tile-header">
                                <h3>Prep Coach</h3>
                                <span>A Prep Coach to fully push you to reach your goals.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="45%" style="width: 45%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">25</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
                <div class="gap"></div>
            </div>
        </section>
    </div>

    <div id="footer-wrapper">
       
       
       
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 about-us-widget">
                        <h4>Platform Vision</h4>
                        <p>RealFit Pros envisions a service that connects trainers with fitness trainees.</p>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Company</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Events</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="images/portfolio/folio01.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Algonquin College ARI</a></span>
                                    <small class="muted">11 January 2018</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="images/portfolio/folio02.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">AC Applied Research</a></span>
                                    <small class="muted">11 January 2018</small>
                                </div>
                            </div>
                        </div>  
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Location</h4>
                        <address>
                            <strong>Algonquin College</strong><br>
                            Ottawa<br>
                            Ontario, Canada<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 613.123.4567
                        </address>
                    </div> <!--/.col-md-3-->
                    
                </div>
            </div>
        </section><!--/#bottom-->
        
        

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2018 <a target="_blank" href="http://www.distinctivethemes.com" title="Premium Themes and Templates">RealFit Pros</a>. All Rights Reserved.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/init.js"></script>
</body>
</html>