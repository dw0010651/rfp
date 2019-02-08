<!--
Filename:       forgot_password.php
Author:         DongWooKang
Student Number: 040846528
Course Name:    Software Development Project
Course Number:  CST8334_310
Reference: Forgot Password Recovery in Login System with PHP and MySQL - codexworld. https://www.codexworld.com/login-system-forgot-password-recovery-email-php-mysql
-->


<?php
    session_start();
?>
   
   
           
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Forgot Password | Real Fit Pro </title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="shortcut icon" href="images/logo/rfpLogo.png">
        <link href="/rfp/css/style.css" rel="stylesheet">
        <style type="text/css">
            body{
                color: #fff;                
                background-image: url("image/bg1_1.png");
                background-size: cover;
                font-family: 'Roboto', sans-serif;
            }
            .form-control{
                height: 40px;
                box-shadow: none;
                color: #969fa4;
            }
            .form-control:focus{
                border-color: #5cb85c;
            }
            .form-control, .btn{        
                border-radius: 3px;
            }
            .forgot-form{
                
                margin: 0 auto 200px;
                padding: 70px 0 30px 0;
            }
            .forgot-form h3{
                color: #636363;
                margin: 0 0 15px;
                position: relative;
                text-align: center;
            }
            .forgot-form .hint-text{
                color: #999;
                margin-bottom: 30px;
                text-align: center;
            }
            .forgot-form form{
                color: #999;
                border-radius: 3px;
                margin-bottom: 15px;
                background: #f2f2f2;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .forgot-form .form-group{
                margin-bottom: 20px;
            }
            .forgot-form input[type="checkbox"]{
                margin-top: 3px;
            }
            .forgot-form .btn{        
                font-size: 16px;
                font-weight: bold;      
                min-width: 140px;
                outline: none !important;
            }
            .forgot-form .row div:first-child{
                padding-right: 10px;
            }
            .forgot-form .row div:last-child{
                padding-left: 10px;
            }       
            .forgot-form a{
                color: #fff;
                text-decoration: underline;
            }
            .forgot-form a:hover{
                text-decoration: none;
            }
            .forgot-form form a{
                color: #5cb85c;
                text-decoration: none;
            }   
            .forgot-form form a:hover{
                text-decoration: underline;
            }  
            .forgot-form form .error{
                color: #be2032;
                padding: 0 !important;
            }

            .button-red{
                background-color:#be2032;
                color:#fff;
            }
        </style>
    </head>
    <body>
    <?php
         $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
            if(!empty($sessData['status']['msg'])){
                $statusMsg = $sessData['status']['msg'];
                $statusMsgType = $sessData['status']['type'];
                unset($_SESSION['sessData']['status']);
            }

    ?>
    <?php include("header.php"); ?>
    <div class="forgot-form container">
    <form action="userAccount.php" method="post">
    <h3>Request for new password</h3>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <hr>
    <p>Enter your email address</p>
            <div>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required="">
            <br/>
            <br/>
            </div>
            <div>
                <input type="submit" name="forgotSubmit" value="Request" />
            </div>
          </form>
        </div>
        <?php include("footer.php"); ?>
    </body> 
 