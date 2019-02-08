<?php
//Created by PhpStorm.
//User: CM
//Date: 06/04/2018
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="">
        <title>Real Fit Pros</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="shortcut icon" href="images/logo/rfpLogo.png">
        <link href="/rfp/css/style.css" rel="stylesheet">
        <style type="text/css">
            body{
                color: #fff;
                background-image: url("image/bg5.jpg");
                background-size: cover;
                font-family: 'Roboto', sans-serif;
            }
            .error404 h3{
                color: #636363;
                margin: 0 0 15px;
                position: relative;
                text-align: center;
            }
            .error404{
                color: #999;
                width: 600px;
                position: relative;
                border-radius: 3px;
                margin: 180px auto 0;
                background: #f2f2f2;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="error404">
          
                <img src="image/undercon.png" alt="underconstruction" height="309" width="539">
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>