<!--
Filename:       signup.php
Author:         Sizhe Chen, Jieli Zhang
-->
<?php
error_reporting(0);
require_once('./dao/userDAO.php');
require_once('./model/user.php');
?>    
        
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Real Fit Pro User Sign Up</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="images/logo/rfpLogo.png">
        <link href="/rfp/css/style.css" rel="stylesheet">
        <style type="text/css">
            body{
                color: #fff;                
                background-image: url("image/bg1_1.png");
                background-size: cover;
                font-family: 'Roboto', sans-serif;
                background-repeat: no-repeat;
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
            .signup-form{
                width: 400px;
                margin: 0 auto;
                padding: 70px 0 30px 0;
            }
            .signup-form h3{
                color: #636363;
                margin: 0 0 15px;
                position: relative;
                text-align: center;
            }
            .signup-form .hint-text{
                color: #999;
                margin-bottom: 30px;
                text-align: center;
            }
            .signup-form form{
                color: #999;
                border-radius: 3px;
                margin-bottom: 15px;
                background: #f2f2f2;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .signup-form .form-group{
                margin-bottom: 20px;
            }
            .signup-form input[type="checkbox"]{
                margin-top: 3px;
            }
            .signup-form .btn{        
                font-size: 16px;
                font-weight: bold;      
                min-width: 140px;
                outline: none !important;
            }
            .signup-form .row div:first-child{
                padding-right: 10px;
            }
            .signup-form .row div:last-child{
                padding-left: 10px;
            }       
            .signup-form a{
                color: #fff;
                text-decoration: underline;
            }
            .signup-form a:hover{
                text-decoration: none;
            }
            .signup-form form a{
                color: #5cb85c;
                text-decoration: none;
            }   
            .signup-form form a:hover{
                text-decoration: underline;
            }  
            .signup-form form .error{
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

        $firstName="";
        $lastName="";
        $email="";
        $password="";
        $confirmPassword= "";
        $phoneNumber= "";
        $userType="";

        $firstNameErr="";
        $lastNameErr="";
        $emailErr="";
        $passwordErr="";
        $confirmPasswordErr= "";
        $phoneNumberErr= "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName= $_POST['firstName'];
            $lastName =  $_POST['lastName'];
            $email= $_POST['email'];
            $password =  $_POST['passWord'];
            $confirmPassword =  $_POST['confirmPassword'];
            $phoneNumber =  $_POST['phoneNumber'];
            $userType = $_POST['userType'];

            if (empty($firstName)) {
                $firstNameErr = "First Name is required";
            }
            if (empty($lastName)) {
                $lastNameErr = "Last Name is required";
            }
            if (empty($email)) {
                $emailErr = "Email is required";
            }
            if (empty($password)) {
                $passwordErr = "Password is required";
            }
            if (strlen($password) < 6) {
                $passwordErr = "Length of password must be at least 6";
            }
            if ($password != $confirmPassword) {
                $confirmPasswordErr = "Passwords don't match";
            }
            if (empty($phoneNumber)) {
                $phoneNumberErr = "Phone Number is required";
            }
            $phoneRegex1 = '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/';
            $phoneRegex2 = '/^[0-9]{3}[0-9]{3}[0-9]{4}$/';
            if (!preg_match($phoneRegex1, $phoneNumber) && !preg_match($phoneRegex2, $phoneNumber)) { 
                $phoneNumberErr = "Phone Number is invalid.";
            }  

            $emailRegex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
            if (!preg_match($emailRegex, $email)) { 
                $emailErr = "Email Address is invalid.";
            }   
            if($firstNameErr === "" &&  $lastNameErr === "" && $emailErr === "" && $passwordErr === "" && $confirmPasswordErr === "" && $phoneNumberErr === ""){
                $user_DAO = new userDAO();

                if (!$user_DAO->getUserByEmail($email)){
                    $password_hash = password_hash($password, PASSWORD_DEFAULT);
                    $user = new User(-1, $firstName, $lastName, $phoneNumber, $email, $password_hash, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), $userType);

                    $user_DAO->addUser($user);
                    session_start();
                    $_SESSION['email'] = $email;
                    if( $user->getUserType() == 'r')
                    header("Location: trainerprofileform.php");
                    else
                    header("Location: enthusiastprofileform.php");
                }else{
                    $emailErr = "Sorry, the email has been taken.";
                }

            } 
        }
        ?>
        <?php include("header.php"); ?>
       <div class="signup-form">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Registration</h3>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="firstName" placeholder="First Name*" value="<?php echo $firstName ?>">
                            <div class="error"><?php echo $firstNameErr ?></div>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="lastName" placeholder="Last Name*" value="<?php echo $lastName ?>">
                            <div class="error"><?php echo $lastNameErr ?></div>
                        </div>
                    </div>          
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email*" value="<?php echo $email ?>">
                    <div class="error"><?php echo $emailErr ?></div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="passWord" placeholder="Password*">
                    <div class="error"><?php echo $passwordErr ?></div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password*">
                    <div class="error"><?php echo $confirmPasswordErr ?></div>
                </div>   
                <div class="form-group">
                    <input type="input" class="form-control" name="phoneNumber" placeholder="Phone Number*" value="<?php echo $phoneNumber ?>">
                    <div class="error"><?php echo $phoneNumberErr ?></div>
                </div>  
                <div class="form-group">
                    <label>User Type: </label>
                    <input type="radio" name="userType" value="r" <?php if ($userType === 'r' || !$userType){ ?> checked="checked" <?php } ?>> Trainer  
                    <input type="radio"  name="userType" value="e" <?php if ($userType === 'e'){ ?> checked="checked" <?php } ?>> Enthusiast
                </div> 
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-block button-red">Register Now</button>
                </div>
            </form>
            <div class="text-center">Already have an account? <a href="login.php">Log in</a></div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>