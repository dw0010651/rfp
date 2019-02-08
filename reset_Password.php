

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Real Fit Pro User Sign Up</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


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
            .reset-form{
               
                margin: 0 auto 200px;
                padding: 70px 0 30px 0;
            }
            .reset-form h3{
                color: #636363;
                margin: 0 0 15px;
                position: relative;
                text-align: center;
            }
            .reset-form .hint-text{
                color: #999;
                margin-bottom: 30px;
                text-align: center;
            }
            .reset-form form{
                color: #999;
                border-radius: 3px;
                margin-bottom: 15px;
                background: #f2f2f2;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .reset-form .form-group{
                margin-bottom: 20px;
            }
            .reset-form input[type="checkbox"]{
                margin-top: 3px;
            }
            .reset-form .btn{        
                font-size: 16px;
                font-weight: bold;      
                min-width: 140px;
                outline: none !important;
            }
            .reset-form .row div:first-child{
                padding-right: 10px;
            }
            .reset-form .row div:last-child{
                padding-left: 10px;
            }       
            .reset-form a{
                color: #fff;
                text-decoration: underline;
            }
            .reset-form a:hover{
                text-decoration: none;
            }
            .reset-form form a{
                color: #5cb85c;
                text-decoration: none;
            }   
            .reset-form form a:hover{
                text-decoration: underline;
            }  
            .reset-form form .error{
                color: #be2032;
                padding: 0 !important;
            }

            .button-red{
                background-color:#be2032;
                color:#fff;
            }
        </style>
        <?php
        session_start();
        $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
        if(!empty($sessData['status']['msg'])){
            $statusMsg = $sessData['status']['msg'];
            $statusMsgType = $sessData['status']['type'];
            unset($_SESSION['sessData']['status']);
        }
        ?>
        <?php include("header.php"); ?>
        <div class="reset-form container">
            
            <form action="userAccount.php" method="post">
                <h2>Reset Your Account Password</h2>
            <?php echo !empty($statusMsg)?'<p       class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

                <div>
                    <input type="password" name="password" placeholder="PASSWORD" required="">
                </div>
                <br/>
                <div>
                    <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
                </div>
                <br/>
                <div class="send-button">
                    <input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
                    <input type="submit" name="resetSubmit" value="RESET PASSWORD">
                </div>
            </form>

        </div>
        <?php include("footer.php"); ?>
