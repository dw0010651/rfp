<?php
require 'contactus_send.php';
?>
<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Contact | Real Fit Pros</title>
             <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">

            
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

        </head><!--/head-->
        <body>
            <?php include("header.php"); ?>

            <div id="content-wrapper">
 
                <section id="contact" class="white">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-md-4 fade-up">
                                <h2>Contact Information</h2>
                                <p><span class="icon icon-home"></span>Ottawa, Ontario<br/>
                                    <!--<span class="icon icon-phone"></span>+36 65984 405<br/>
<span class="icon icon-mobile"></span>+36 65984 405<br/>-->
                                    <span class="icon icon-envelop"></span> <a href="#">wearerealfitpro@gmail.com</a> <br/>
                                    <!--<span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
<span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>-->
                                </p>
                            </div><!-- col -->
                            <?php

                            $emailErr = $nameErr = $titleErr = $commentErr = $statusErr ="";
                            $email = $name = $title = $comment = $status = "";


                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["email"])) {
                                    $emailErr = "Email is required";
                                } else {
                                    $email = test_input($_POST["email"]);
                                }

                                if (empty($_POST["name"])) {
                                    $nameErr = "Name is required";
                                } else {
                                    $name = test_input($_POST["name"]);
                                }

                                if (empty($_POST["title"])) {
                                    $titleErr = "Title is required";
                                } else {
                                    $title = test_input($_POST["title"]);
                                }

                                if (empty($_POST["comments"])) {
                                    $commentErr = "";
                                } else {
                                    $comment = test_input($_POST["comments"]);
                                }

                                if (empty($_POST["status"])) {
                                    $statusErr = "Status is required";
                                } else {
                                    $status = test_input($_POST["status"]);
                                }

                            }

                            function test_input($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }

                            if((isset($_POST['submit'])) && (!empty($_POST['email'])) && (!empty($_POST['name'])) && (!empty($_POST['status']))){

                                emailAdmin();
                            }


                            ?>
                            <div class="col-md-8 fade-up">
                               
                                <br>
                                <br>
                                <div id="message"></div>
                                <form method="post" id="contactform"
                                      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                                 
                                            <input type="email" id="email" name="email" placeholder="Email*" value="" size="4"><span class="error"><?php echo $emailErr;?></span>
                             
                                            <input type="name" id="name" name="name" 
                                                   placeholder="Name*" value=""><span class="error"><?php echo $nameErr;?></span>
                                   
                                            <input type="title" id="name" name="title" 
                                                   placeholder="Title*" value=""><span class="error"><?php echo $titleErr;?></span>
                                      
                                            Comments<textarea id="comments" name="comments" placeholder=""></textarea>
                                
                                            Status: <input type="radio" name="status"               value="Enthusiast">Enthusiast
                                            <input type="radio" name="status" value="Trainer">Trainer<br><span class="error"><?php echo $statusErr;?></span>
                                        
                                        <input class="submit" type="submit" name="submit" value="Submit" />
                                        <!--                                btn btn-outlined btn-primary-->
                                     
                                </form>
                            </div><!-- col -->
                        </div><!-- row -->  
                        <div class="gap"></div>         
                    </div>
                </section>
            </div>
        </body>
        <?php include("footer.php"); ?>
<!--
            <div id="footer-wrapper">
                <footer id="footer" class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <font color="white">&copy; 2018 RealFit Pros. All Rights Reserved.</font>

                            </div>
                        </div>
                    </div>

                </footer>
            </div>
-->


    </html>