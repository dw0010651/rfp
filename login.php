<?php
//Authors: Victoria Hentschel, Dong Woo Kang
// Include config file
require_once 'config.php';
require_once('./dao/userDAO.php');

session_start();
// Define variables and initialize with empty values
$email = $password = $userType = "";
$email_err = $password_err = "";
//$_SESSION['email'] = $_POST['email'];
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = 'Please enter email.';
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT email_id, password FROM user_master WHERE email_id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            //mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_pass, $param_type);
            $stmt->bind_param('s',
                $param_email
                //$param_pass
                //$param_type
            );
            // Set parameters
            $param_email = $email;
            //$param_pass = $password;
            //$param_type = $userType;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if username exists, if yes then verify password
                //changed to check password too in select statement above
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    //changed $hashed_password to just $password in bind below
                    //removed userType check , $userType
                    mysqli_stmt_bind_result($stmt, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['email'] = $email;
                            $user_DAO = new userDAO();
                            $user = $user_DAO->getUserByEmail($email);
                            if( $user->getUserType() == 'r')
                                header("Location: trainerprofileform.php");
                            else
                                header("Location: enthusiastprofileform.php");
                            
                            
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The email/password you entered was not valid.';
                        }
                        //$_SESSION['email'] = $email;
                        //header("location: success.php");
                        //if($userType == 'r')
                        //    header("Location: trainerprofileform.php");
                        //else
                        //    header("Location: enthusiastprofileform.php");
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = 'The email/password you entered was not valid.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);    }
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
            background-image: url("image/bg_3.png");
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
            margin: 50px auto 0;
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
        .loginBtn--facebook {
            background-color: #4C69BA;
            background-image: linear-gradient(#4C69BA, #3B55A0);
            /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
            text-shadow: 0 -1px 0 #354C8C;
        }
        .loginBtn--facebook:before {
            border-right: #364e92 1px solid;
            background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
        }
        .loginBtn--facebook:hover,
        .loginBtn--facebook:focus {
            background-color: #5B7BD5;
            background-image: linear-gradient(#5B7BD5, #4864B1);
        }
        /* Google */
        .loginBtn--google {
            /*font-family: "Ro   boto", Roboto, arial, sans-serif;*/
            background: #DD4B39;
        }
        .loginBtn--google:before {
            border-right: #BB3F30 1px solid;
            background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
        }
        .loginBtn--google:hover,
        .loginBtn--google:focus {
            background: #E74B37;
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>
<div class="signup-form">
    <form action="#" method="post" enctype="multipart/form-data">
        <h3>Log In</h3>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email*" value="<?php echo $email ?>">
            <div class="error"><?php echo $email_err ?></div>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password*" value="<?php echo $password ?>">
            <div class="error"><?php echo $password_err ?></div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-block button-red">Log In</button>
        </div>
        <div class="form-group">
            <button class="loginBtn loginBtn--facebook">Login with Facebook</button>
        </div>
        <div class="form-group">
            <button class="loginBtn loginBtn--google">Login with Google</button>
        </div>
        <div><a href="forgot_password.php">Forgot password?</a></div>
        <div>Not yet a RFP member? <a href="signup.php">JOIN NOW!</a></div>
    </form>
</div>
<?php include("footer.php"); ?>
</body>
</html>