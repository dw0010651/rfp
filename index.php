<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Real Fit Pros</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/logo/rfpLogo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
	'use strict';
      	jQuery('body').backstretch([
	        "images/bg/bg1_1.png",
	        "images/bg/bg_2.png",
	        "images/bg/bg_3.png"
	    ], {duration: 5000, fade: 500, centeredY: true });

		$("#mapwrapper").gMap({ controls: false,
         	scrollwheel: false,
         	markers: [{ 	
              	latitude:45.419282,
				longitude: -75.702610,
          	icon: { image: "images/marker.png",
              	iconsize: [44,44],
          		iconanchor: [12,46],
          		infowindowanchor: [12, 0] } }],
          	icon: { 
              	image: "images/marker.png", 
             	iconsize: [26, 46],
              	iconanchor: [12, 46],
              	infowindowanchor: [12, 0] },
         	latitude:45.419282,
         	longitude: -75.702610,
          	zoom: 14 });
    });
    </script>
</head><!--/head-->
<body>

<div id="preloader"></div>
<header>
<?php include("header.php"); ?>
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                	<span class="home-icon fa fa- bounce-in"></span>
                                   <img src="images/logo/rfpLogo.png" alt="">
                                    <h2 class="boxed animation animated-item-1 fade-down">Real Fit Pros</h2>
                                    <p class="boxed animation animated-item-2 fade-up">Where you can find a trainer “Fit” for you!</p>
                                    <br>
                                    <a class="btn btn-md animation bounce-in" href="#services">Learn More</a>
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
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Services</h2>
                            <hr>
                            <p>Real Fit Pros connects proffessionals offeringing wellness services, with health and fitness enthusiasts.</p>
                        </div>                
                    </div>
                </div>

               
            <div class="gap"></div>
            
            <div class="serviceslist">
            
            <img class="services" src="images/services/personalTrainer@4x.png" style="width: 150px;height:150px;">
            <img class="services" src="images/services/massageTherapy@4x.png" style="width: 150px;height:150px;">
            <img class="services" src="images/services/nutrition@4x.png" style="width: 150px;height:150px;">
            <img class="services" src="images/services/yoga@4x.png" style="width: 150px;height:150px;">
            <img class="services" src="images/services/prepCoach@4x.png" style="width: 150px;height:150px;">
            
            </div>
            
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       
                       <!--
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Our Skills</h2>
                            <hr>
                            <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                        </div> 
                        -->
                                      
                                                                  
                    </div>
                </div>
            </div>
            
            
            <!-- 
            <div class="container">     
            <div class="row">            
	                <div class="col-md-3">
	                    <div class="tile-progress tile-red bounce-in">
	                        <div class="tile-header">
	                            <h3>Video Editing</h3>
	                            <span>Our cutting room floor is messy.</span>
	                        </div>
	                        <div class="tile-progressbar">
	                            <span data-fill="65.5%" style="width: 65.5%;"></span>
	                        </div>
	                        <div class="tile-footer">
	                            <h4>
	                                <span class="pct-counter counter">65.5</span>%
	                            </h4>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="tile-progress tile-cyan bounce-in">
	                        <div class="tile-header">
	                            <h3>Marketing</h3>
	                            <span>How well we can sell you and your brand.</span>
	                        </div>
	                        <div class="tile-progressbar">
	                            <span data-fill="98.5%" style="width: 98.5%;"></span>
	                        </div>
	                        <div class="tile-footer">
	                            <h4>
	                                <span class="pct-counter counter">98.5</span>%
	                            </h4>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="tile-progress tile-primary bounce-in">
	                        <div class="tile-header">
	                            <h3>Web Development</h3>
	                            <span>We love servers and stuff.</span>
	                        </div>
	                        <div class="tile-progressbar">
	                            <span data-fill="90%" style="width: 90%;"></span>
	                        </div>
	                        <div class="tile-footer">
	                            <h4>
	                                <span class="pct-counter counter">90</span>%
	                            </h4>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="tile-progress tile-pink bounce-in">
	                        <div class="tile-header">
	                            <h3>Coffee</h3>
	                            <span>We done make good joe, though.</span>
	                        </div>
	                        <div class="tile-progressbar">
	                            <span data-fill="10%" style="width: 10%;"></span>
	                        </div>
	                        <div class="tile-footer">
	                            <h4>
	                                <span class="pct-counter counter">10</span>%
	                            </h4>
	                        </div>
	                    </div>
	                </div>
	            </div><!--/.row-->
	            
	            
	            <!--
	            <div class="gap"></div>
        	</div>
        	
        	-->
        </section>


		<section id="single-quote" class="divider-section"> 	            	        
	            <div class="container">
	            	<div class="gap"></div> 
	                <div class="row">                        
	                    <div class='col-md-offset-2 col-md-8 fade-up'>
	                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	                            <div class="carousel-inner">
	                                <div class="item active">
	                                    
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                
	                                            </div>
                                                <div class="col-sm-9">
                                                <h3>“Fitness needs to be perceived as fun and games or we subconsciously avoid it.”</h3>
                                                <p>— Alan Thicke</p>
                                                
                                        </div>
	                                        </div>
	                                    
	                                </div>	                                
	                            </div>                                     
	                        </div> 
	                    </div>
	                </div>
	                <div class="gap"></div>
	      		</div>
  		</section>

        <section id="about-us" class="white">
        	<div class="container">
	            <div class="gap"></div>
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="center gap fade-down section-heading">
	                        <h2 class="main-title">About Real Fit Pros</h2>
	                        <hr>
	                        <p>Where you can find a trainer “Fit” for you!</p>
	                    </div>                
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-10 col-md-offset-1 fade-up">
	                    <p>When it's time for find a professional where do you go? You have fitness/nutrition goals who do you contact? Here at Real Fit Pros we focus on finding the right FIT with our specialized professional. </p>

	                    <p>Our mission is to help bridge the gap between wellness professional and fitness enthusiast. Real Fit Pros is determined to improve the overall quality of the fitness by connecting independent trainers, nutrition, and other health & wellness professionals in the Real Fit Community.</p>
	                </div>
	                <div class="col-md-4 fade-up">

	                </div>
	            </div>
               <div class="gap"></div>
               
               
               <!--
                <div class="row fade-up">
                    <div class="col-md-6">
                      	<div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                        <div class="testimonial-list-item">
                        <img class="pull-left img-responsive quote-author-list" src="images/team/team01.jpg">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Manager at <cite title="Source Title">Company</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
                -->
                

	            <div class="gap"></div>
	            
	            
	            <!--
	            <div class="center gap fade-down section-heading">
	                <h2 class="main-title">Meet The Team</h2>
	                <hr>
	                <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
	            </div> 
	            
	            -->
	            
	            <div class="gap"></div>
	            
	            
                <!--
	            <div id="meet-the-team" class="row">
	                <div class="col-md-3 col-xs-6">
	                    <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team01.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>  
                            </div>
	                        <div class="team-content fade-up">
	                            <h5>Daniel Jones<small class="role muted">Web Design</small></h5>
	                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
	                            <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-md-3 col-xs-6">
	                    <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team02.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>  
                            </div>
	                        <div class="team-content fade-up">
	                            <h5>John Smith<small class="role muted">Marketing Director</small></h5>
	                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
	                            <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
	                        </div>
	                    </div>
	                </div>        
	                <div class="col-md-3 col-xs-6">
	                    <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="images/team/team03.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>  
                            </div>
	                        <div class="team-content fade-up">
	                            <h5>Dave Gorman<small class="role muted">Web Design</small></h5>
	                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
	                            <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
	                        </div>
	                    </div>
	                </div>        
	                <div class="col-md-3 col-xs-6">
	                    <div class="center team-member">
                            <div class="team-image">
    	                        <img class="img-responsive img-thumbnail bounce-in" src="images/team/team04.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/team/team04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>  
                            </div>  
	                        <div class="team-content fade-up">
	                            <h5>Steve Smith<small class="role muted">Sales Assistant</small></h5>
	                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
	                            <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
	                        </div>
	                    </div>
	                </div>
	            </div><!--/#meet-the-team-->
	            
	            
	            
	            <div class="gap"></div>  
	            <div class="gap"></div>   
            </div>      
        </section>

       
       <!--
        <section id="stats" class="divider-section">
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                            <h1><span class="counter">246000</span></h1>
                            <h3>HOURS SAVED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                            <h1><span class="counter">16875</span></h1>
                            <h3>FRESH IDEAS</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">99999999</span></h1>
                            <h3>HUGE PROFIT</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-box2 bounce-in"></span></span>
                            <h1><span class="counter">54875</span></h1>
                            <h3>THINGS IN BOXES</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div> 
        </section>
        -->
        
        <!-- TRAINER CARD LIST
        
        
        <section id="portfolio" class="white">
       		<div class="container">
	        	<div class="gap"></div> 
		        	<div class="center gap fade-down section-heading">
		                <h2 class="main-title">Trainers</h2>
		                <hr>
		                <p>Find a trainer to suit your needs and help you reach your goals.</p>
		            </div> 
                        <ul class="portfolio-filter fade-down center">
                        <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">All</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".apps">Diet</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".nature">Weight Training</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".design">Other</a></li>
                    </ul><!--/#portfolio-filter-->
<!--
                    <ul class="portfolio-items col-3 isotope fade-up">
                        <li class="portfolio-item apps isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio01.jpg" alt="">
                                <h5>Trainer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>             
                                </div>           
                            </div>           
                        </li><!--/.portfolio-item-->
<!--                        <li class="portfolio-item joomla nature isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio02.jpg" alt="">
                                <h5>Trianer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>              
                                </div>           
                            </div>           
                        </li><!--/.portfolio-item-->
 <!--                       <li class="portfolio-item bootstrap design isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio03.jpg" alt="">
                                <h5>Trainer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>        
                                </div>           
                            </div>           
                        </li><!--/.portfolio-item-->
 <!--                       <li class="portfolio-item joomla design apps isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio04.jpg" alt="">
                                <h5>Trainer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>          
                                </div>           
                            </div>           
                        </li><!--/.portfolio-item-->
 <!--                       <li class="portfolio-item joomla apps isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio05.jpg" alt="">
                                <h5>Trainer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>          
                                </div>    
                            </div>       
                        </li><!--/.portfolio-item-->
<!--                        <li class="portfolio-item wordpress nature isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio06.jpg" alt="">
                                <h5>Trainer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>           
                                </div>           
                            </div>           
                        </li><!--/.portfolio-item-->
 <!--                        <li class="portfolio-item joomla design apps isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio07.jpg" alt="">
                                <h5>Trainer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>          
                                </div>           
                            </div>           
                        </li><!--/.portfolio-item-->
<!--                         <li class="portfolio-item joomla nature isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio08.jpg" alt="">
                                <h5>Trainer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>          
                                </div>    
                            </div>       
                        </li><!--/.portfolio-item-->
 <!--                        <li class="portfolio-item wordpress design isotope-item">
                            <div class="item-inner">
                                <img src="images/portfolio/folio09.jpg" alt="">
                                <h5>Trainer</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio09.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>           
                                </div>           
                            </div>           
                        </li><!--/.portfolio-item-->
 <!--                    </ul>
                </div>
            </section>

           
           
           
           -->
           
           <!--
            <section id="testimonial-carousel" class="divider-section">
            <div class="gap"></div>
	            <div class="container">
	                <div class="row">
                    	<div class="center gap fade-down section-heading">
                            <h2 class="main-title">What They Have Been Saying</h2>
                            <hr>
                            <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                            <div class="gap"></div>
                        </div>                         
	                    <div class='col-md-offset-2 col-md-8 fade-up'>
	                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	                            <!-- Bottom Carousel Indicators -->
	                            
	                            <!--
	                            <ol class="carousel-indicators">
	                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
	                                <li data-target="#quote-carousel" data-slide-to="1"></li>
	                                <li data-target="#quote-carousel" data-slide-to="2"></li>
	                            </ol>                                
	                            <!-- Carousel Slides / Quotes -->
	                            <!--
	                            <div class="carousel-inner">                                
	                              <!-- Quote 1 -->
                                <!--
	                                <div class="item active">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="images/team/team01.jpg" style="width: 100px;height:100px;">
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                                <!-- Quote 2 -->
	                                <!--
	                                <div class="item">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="images/team/team02.jpg" style="width: 100px;height:100px;">
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                                <!-- Quote 3 -->
	                                <!--
	                                <div class="item">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="images/team/team03.jpg" style="width: 100px;height:100px;">
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                            </div>                                     
	                        </div> 
	                    </div>
	                </div>
	                <div class="gap"></div>
	      		</div>
      		</section>

           
           --->
           
           
           
           <!--
            <section id="blog" class="white">
                <div class="container">
                    <div class="center gap fade-down section-heading">
                   		<div class="gap"></div>
                        <h2 class="main-title">From The Blog</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>  
                    <div class="gap"></div>
                    <div class="row">
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio02.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>          
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio06.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>          
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio11.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>          
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
                    </div> 
                    <div class="gap"></div>
                    <div class="row">
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio02.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>          
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio06.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>          
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="post">
	                            <div class="post-img-content">
	                                <img src="images/portfolio/folio11.jpg" class="img-responsive" />
	                                <div class="overlay">
	                                    <a class="preview btn btn-outlined btn-primary" href="#"><i class="fa fa-link"></i></a>          
	                                </div>
	                            </div>
	                            <div class="content">
	                                <h2 class="post-title">Post Title</h2>
	                                <div class="author">
	                                    <i class="fa fa-user"></i> By <b>Author</b> | <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
	                                </div>
	                                <div>
	                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
	                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
	                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
	                                </div>
	                                <div class="read-more-wrapper">
	                                    <a href="#" class="btn btn-outlined btn-primary">Read more</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
                    </div>                              
                </div>
       		</section>
            
            -->

           
           
           <!--
            <section id="pricing" class="white">
                <div class="container">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">So, How Much?</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>  
                    <div class="gap"></div>
                    <div id="pricing-table" class="row">
                        <div class="col-md-3 col-xs-6 flip-in">
                            <ul class="plan plan1">
                                <li class="plan-name">
                                    <h3>Basic</h3>
                                </li>
                                <li class="plan-price">
                                    <div>
                                        <span class="price"><sup>$</sup>10</span>
                                        <small>month</small>
                                    </div>
                                </li>
                                <li>
                                    <strong>5GB</strong> Storage
                                </li>
                                <li>
                                    <strong>1GB</strong> RAM
                                </li>
                                <li>
                                    <strong>400GB</strong> Bandwidth
                                </li>
                                <li>
                                    <strong>10</strong> Email Address
                                </li>
                                <li>
                                    <strong>Forum</strong> Support
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                                </li>
                            </ul>
                        </div><!--/.col-md-3-->
                        
                        <!--
                        <div class="col-md-3 col-xs-6 flip-in">
                            <ul class="plan plan2 featured">
                                <li class="plan-name">
                                    <h3>Standard</h3>
                                </li>
                                <li class="plan-price">
                                    <div>
                                        <span class="price"><sup>$</sup>20</span>
                                        <small>month</small>
                                    </div>
                                </li>
                                <li>
                                    <strong>5GB</strong> Storage
                                </li>
                                <li>
                                    <strong>1GB</strong> RAM
                                </li>
                                <li>
                                    <strong>400GB</strong> Bandwidth
                                </li>
                                <li>
                                    <strong>10</strong> Email Address
                                </li>
                                <li>
                                    <strong>Forum</strong> Support
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-outlined btn-primary btn-md">Signup</a>
                                </li>
                            </ul>
                        </div><!--/.col-md-3-->
                        <!--
                        <div class="col-md-3 col-xs-6 flip-in">
                            <ul class="plan plan3">
                                <li class="plan-name">
                                    <h3>Advanced</h3>
                                </li>
                                <li class="plan-price">
                                    <div>
                                        <span class="price"><sup>$</sup>40</span>
                                        <small>month</small>
                                    </div>
                                </li>
                                <li>
                                    <strong>50GB</strong> Storage
                                </li>
                                <li>
                                    <strong>8GB</strong> RAM
                                </li>
                                <li>
                                    <strong>1024GB</strong> Bandwidth
                                </li>
                                <li>
                                    <strong>Unlimited</strong> Email Address
                                </li>
                                <li>
                                    <strong>Forum</strong> Support
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                                </li>
                            </ul>
                        </div><!--/.col-md-3-->
                        <!--
                        <div class="col-md-3 col-xs-6 flip-in">
                            <ul class="plan plan4">
                                <li class="plan-name">
                                    <h3>Mighty</h3>
                                </li>
                                <li class="plan-price">
                                    <div>
                                        <span class="price"><sup>$</sup>100</span>
                                        <small>month</small>
                                    </div>
                                </li>
                                <li>
                                    <strong>50GB</strong> Storage
                                </li>
                                <li>
                                    <strong>8GB</strong> RAM
                                </li>
                                <li>
                                    <strong>1024GB</strong> Bandwidth
                                </li>
                                <li>
                                    <strong>Unlimited</strong> Email Address
                                </li>
                                <li>
                                    <strong>Forum</strong> Support
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                                </li>
                            </ul>
                        </div><!--/.col-md-3-->
                        <!--
                    </div>
                    <div class="gap"></div> 
                </div>
            </section>
            
            -->
            
            

			<div id="mapwrapper">
				<div id="map"></div>
			</div>

            <section id="contact" class="white">
                <div class="container">
                	<div class="gap"></div>
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Keep Connected</h2>
                        <hr>
                        <p>Stay connected with future updates on our platform.</p>
                    </div>    
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-4 fade-up">
                            <h3>Contact Information</h3>
                            <p><span class="icon icon-home"></span>Ottawa, Ontario<br/>
                                <!--<span class="icon icon-phone"></span>+36 65984 405<br/>
                                <span class="icon icon-mobile"></span>+36 65984 405<br/>-->
                                <span class="icon icon-envelop"></span> <a href="#">realfitpros@gmail.com</a> <br/>
                                <!--<span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
                                <span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>-->
                            </p>
                        </div><!-- col -->
                    
                        <div class="col-md-8 fade-up">
                            <h3>Message</h3>
                            <br>
                            <br>
                            <div id="message"></div>
                            <form method="post" action="sendemail.php" id="contactform">
                                <input type="text" name="name" id="name" placeholder="Name" />
                                <input type="text" name="email" id="email" placeholder="Email" />
                                <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                                <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                            </form>
                        </div><!-- col -->
                    </div><!-- row -->  
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

   
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script> 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    
    <script src="js/init.js"></script>
</body>
</html>