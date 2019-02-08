<!--
Filename:       enthusiastprofilepage.php
Author:         Sizhe Chen, Jieli Zhang
-->
<?php
error_reporting(0);
require_once('./dao/userDAO.php');
require_once('./model/user.php');
?>    

 <?php
	session_start();
	
    $user_DAO = new userDAO();
    $user = $user_DAO->getUserByID($_GET['id']);

    if ($user->getUserType()!='r')
    		header("Location: enthusiastprofilepage.php?id=". $_GET['id']);

    $firstName= $user->getFirstName();
    $lastName = $user->getLastName();
    $email =   $user->getEmail();
    $gender =  $user->getGender();
    $phoneNumber =   $user->getPhoneNumber();
    $birth_date =   $user->getDob();
    $address =  $user->getAddress();
    $city =  $user->getCity();
    $postal_code =   $user->getPostalCode();
    $cost =   $user->getCost();
    $bio =   $user->getBio();
    $experience = $user->getExperience();
    $services = $user->getServices();
    $schedule = $user->getSchedule();
    $picture = $user->getPicture();
    $certificate = $user->getCertificate();
    $join_date = $user->getJoinDate();
    if ($cost)
   		$cost = get_object_vars(json_decode($cost));
   	else
   		$cost = [];

   	$days = []; 
   	$schedule = explode(",", $schedule);
   	
    foreach ($schedule as $slot) {
    	if ($slot){
		   $splits = explode("-", $slot);
		   if (!isset($days[$splits[0]]))
		   		$days[$splits[0]] = [];
		   	array_push($days[$splits[0]], ($splits[1].":00 to ".(string)((int)$splits[1] + 2).":00"));
		}
	}
	$today = new DateTime();
	$interval = $today->diff(new DateTime($birth_date));
?>     
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Trainer Profile Page | Real Fit Pro</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="shortcut icon" href="images/logo/rfpLogo.png">
        <link href="/rfp/css/style.css" rel="stylesheet">
        <style type="text/css">
            body{
                color: #333;                
                background-size: cover;
                font-family: 'Roboto', sans-serif;
            }
       		.profile-page{
       			margin-top: 50px;

       		}
            .button-red{
                background-color:#be2032;
                color:#fff;
            }
            ul{
            	padding-left: 0;
            }
            ul li{
            	list-style: none;
            	margin-left: 0;
            	padding-left: 0;
            }
            .service-icon{
            	height: 100px;
    			margin-top: 20px;

            }
            .service-icon .icon{
            	width: 70px;
			    height: 70px;
			    display: block;
			    background-size: cover;
			    float: left;
			    margin-top: 16px;
			    margin-left: 10px;
            }
            .service-icon:first-of-type{
    			margin-top: 0px;
            }
           
            .nu .icon{
            	background-image: url(/rfp/image/002-nutritionist.png);
            }
            .yg .icon{
            	background-image: url(/rfp/image/003-yoga.png);
            }
            .pt .icon{
            	background-image: url(/rfp/image/001-personal-trainer.png);
            }
            .pc .icon{
            	background-image: url(/rfp/image/004-prep-coach.png);
            }
            .mt .icon{
            	background-image: url(/rfp/image/005-massage.png);
            }
            .service-icon.nu{
            	background-color: #8cc63f;
            }
            .service-icon.yg{
            	background-color: #00a99d;
            }
            .service-icon.pt{
            	background-color: #ff303d;
            }
            .service-icon.pc{
            	background-color: #f1c40f;
            }
            .service-icon.mt{
            	background-color: #3498DB;
            }
            .service-icon .cost-text{
            	padding-top: 25px;
			    font-size: 30px;
			    margin-left: 40px;
			    text-align: center;
			    color: #fff;
			    font-weight: bold;
            }
            .image{
            	height: 340px;
            	max-width: 100%;
            }
            .avatar{
            	text-align: center;
            }
            .name{
            	margin: 40px 0;
            	padding: 0 10px;
            }
            .social-icons{
            	padding: 20px 0;
            	text-align: center;
            }
            .social-icons .fa{
            	font-size: 40px;
			    margin-right: 20px;
			    background-color: #333;
			    color: #fff;
			    width: 70px;
			    height: 70px;
			    text-align: center;
			    line-height: 70px;
			    border-radius: 70px;

            }
            .phone,.email{
            	padding: 10px 0;
            	font-size: 20px;
            	font-weight: bold;
            	text-align: center;
            }

            .details{
            	border-top: 2px solid #d4797d;
            	border-bottom: 2px solid #d4797d;
            }
            .details>div{
            	margin: 20px 0;
            	border-right: 2px solid #d4797d;
            }
            .details>div:last-of-type{
            	border-right: 0;
            }
            .details label{
            	font-size: 25px;
            }
            .sub-header{
            	padding: 20px 0 0 0;
            }
            .name{
            	font-weight: bold;
            }
            .bio{
            	padding: 0 15px;
            }
            .schedule{
            	padding: 0 15px 20px 15px;

            }
            .schedule>div{
            	background-color: #c1272d;
			    margin-right: 10px;
			    color: #fff;
			    min-height: 150px;
            }
            .round-corner{
            	border-radius: 8px;
            }
            .round-corner .clear{
            	clear: both;
            }
            .schedule .icon{
            	width: 30px;
			    height: 30px;
			    display: block;
			    background-size: cover;
			    float: left;
			    margin-top: 16px;
			    margin-left: 10px;
            }
            .sign-in-msg{
            	font-size: 13px;
            	color: #aaa;
            	font-style: italic;
            }
            .rating{
            	color: rgba(190, 32, 50, 1);
            	display: inline-block;
            	margin-left: 50px;
            }
            .member-since{
            	color: #777;
            	font-weight: bold;
            }
        </style>
    </head>
    <body>
        
       
        <?php include("header.php"); ?>
        <div class="profile-page container">
          <h1 class="name">
          	<?php echo $firstName ?> <?php echo $lastName ?>
          	<div class="rating text-center ">
      			<i class="fa fa-star"></i>
      			<i class="fa fa-star"></i>
      			<i class="fa fa-star-o"></i>
      			<i class="fa fa-star-o"></i>
      			<i class="fa fa-star-o"></i>
      		</div>
          </h1>
          <div class="row">
          	<div class="col-sm-6">
          		<div class="col-sm-4">
	          		<?php foreach ($cost as $k => $v) { ?>
					    <div class="service-icon <?php echo $k ?>">
					    	<i class="icon"></i>
					    	<div class="cost-text">$<?php echo $v ?></div>
					    </div>
					<?php }   ?>
				</div>
				<div class="col-sm-8 avatar">
					<?php if (!is_null($picture)) {?>
                	 	<img src="<?php echo $picture ?>" class="image"/>
                	<?php }else{ ?>
                		<?php if ($gender == 'm') {?>
                	 		<img src="/rfp/image/trainer-male.png" class="image"/>
	                	<?php }else{ ?>
	                		<img src="/rfp/image/trainer-female.ico" class="image"/>
	                	<?php } ?>
                	<?php } ?>
				</div>
          	</div>
          	<div class="col-sm-6">
          		<div class="member-since text-center ">
	      			 Member Since: <?php echo $join_date ?>
	      		</div>
          		<div class="social-icons">
          			<i class="fa fa-facebook"></i>
          			<i class="fa fa-linkedin"></i>
          			<i class="fa fa-youtube"></i>
          			<i class="fa fa-twitter"></i>
          		</div>
          		<div class="email">
          			<?php if (isset($_SESSION['email'])){ ?>
          			 	<?php echo $email ?>
          			  <?php }else{ ?>
          			  	<span class="sign-in-msg"> Only signed in user can see the phone number of the trainer.</span>
          			   <?php } ?>
          		</div>
          		<div class="phone">
          			<?php if (isset($_SESSION['email'])){ ?>
          				<?php echo $phoneNumber ?>
          			<?php }else{ ?>
          			  	<span class="sign-in-msg"> Only signed in user can see the email of the trainer.</span>
          			 <?php } ?>
          		</div>
          		<div class="row details">
          			<div class="col-sm-4 text-center">
          				<label>Location</label>
          				<div> <?php echo $city ?></div>
          			</div>
          			<div class="col-sm-4 text-center">
          				<label>Age</label>
          				<div> <?php echo $interval->y ?></div>
          			</div>
          			<div class="col-sm-4 text-center">
          				<label>Experience</label>
          				<div> <?php echo $experience ?> Years</div>
          			</div>
          		</div>
          	</div>
          </div>
          <h2 class="sub-header">Bio</h2>
          <div class="row bio">
          	 <?php echo $bio ?>
          </div>
          <h2 class="sub-header">Availability</h2>
          <div class="row schedule">
          	 <?php foreach ($days as $day => $times) { ?>
          	 	<div class="col-md-2 round-corner">
          	 		<?php foreach ($cost as $service => $costItem) { ?>
						    <div class=" <?php echo $service ?>">
						    	<i class="icon"></i>
						    </div>
						<?php }   ?>
          	 		<h3 class="clear"> <?php echo strtoupper($day) ?></h3>
          	 		<?php foreach ($times as $time) { ?>
	          	 		<div>
	          	 			<?php echo $time ?>
	          	 		</div>
          	 		<?php } ?>
          	 	</div>
          	 <?php } ?>
          </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>