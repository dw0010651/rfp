<!--
Filename:       Enthusiastprofilepage.php
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
        <title>Enthusiast Porfile Form | Real Fit Pro</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="shortcut icon" href="images/logo/rfpLogo.png">
        <link href="/rfp/css/style.css" rel="stylesheet">
        <style type="text/css">
            body{
                color: #fff;                
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
            .profile-form{
                width: 800px;
                margin: 0 auto;
                padding: 70px 0 30px 0;
            }
            .profile-form h3{
                color: #636363;
                margin: 0 0 15px;
                position: relative;
                text-align: center;
            }
            .profile-form .hint-text{
                color: #999;
                margin-bottom: 30px;
                text-align: center;
            }
            .profile-form form{
                color: #999;
                border-radius: 3px;
                margin-bottom: 15px;
                background: #eee;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .profile-form .form-group{
                margin-bottom: 20px;
            }
            .profile-form input[type="checkbox"]{
                margin-top: 3px;
            }
            .profile-form .btn{        
                font-size: 16px;
                font-weight: bold;      
                min-width: 140px;
                outline: none !important;
            } 
            .profile-form a{
                color: #fff;
                text-decoration: underline;
            }
            .profile-form a:hover{
                text-decoration: none;
            }
            .profile-form form a{
                color: #5cb85c;
                text-decoration: none;
            }   
            .profile-form form a:hover{
                text-decoration: underline;
            }  
            .profile-form form .error{
                color: #be2032;
                padding: 0 !important;
            }
            .profile-form form .image{
            	height: 200px;
            	margin-top: 10px;
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
        </style>
    </head>
    <body>
        
        <?php
        	session_start();

        	if (!isset($_SESSION['email']))
        		header("Location: login.php");


        	function handle_upload($uploadFile){
        		$target_dir = "image/uploads/";
				$target_file = $target_dir . basename($uploadFile["name"]);
			    move_uploaded_file($uploadFile["tmp_name"], $target_file);
			    return "/rfp/". $target_file;
        	}

	        $user_DAO = new userDAO();
	        $user = $user_DAO->getUserByEmail($_SESSION['email']);

			$user_type =$user->getUserType();
			if( $user_type == 'r')
	            header("Location: trainerprofileform.php");

	        $firstNameErr="";
	        $lastNameErr="";
	        $phoneNumberErr= "";
	        $dobErr= "";
	        $addressErr= "";
	        $cityErr= "";
	        $postalCodeErr= "";
	        $servicesErr= "";

	        $firstName= $user->getFirstName();
            $lastName = $user->getLastName();
            $phoneNumber =   $user->getPhoneNumber();
            $birth_date =   $user->getDob();
            $address =  $user->getAddress();
            $city =  $user->getCity();
            $postal_code =   $user->getPostalCode();
            $bio =   $user->getBio();
            $levelOfExperience = $user->getLevelOfExperience();
            $services = $user->getServices();
            $picture = $user->getPicture();

            $successMsg = "";

	        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	            $firstName= $_POST['firstName'];
	            $lastName =  $_POST['lastName'];
	            $phoneNumber =  $_POST['phoneNumber'];
	            $birth_date =  $_POST['birth_date'];
	            $address =  $_POST['address'];
	            $city =  $_POST['city'];
	            $postal_code =  $_POST['postal_code'];
	            $bio =  $_POST['bio'];
	            $levelOfExperience = $_POST['levelOfExperience'];

	            if (isset($_POST['services']))
	            	$services =  $_POST['services'];
	            else
	            	$services = [];

	            if (empty($firstName)) {
	                $firstNameErr = "First Name is required";
	            }
	            if (empty($lastName)) {
	                $lastNameErr = "Last Name is required";
	            }
	  
	            if (empty($phoneNumber)) {
	                $phoneNumberErr = "Phone Number is required";
	            }
	            if (empty($address)) {
	                $addressErr = "Address is required";
	            }
	            if (empty($city)) {
	                $cityErr = "City is required";
	            }
	            if (empty($postal_code)) {
	                $postalCodeErr = "Postal Code is required";
	            }
	             if (empty($services)) {
	                $servicesErr = "Interests is required";
	            }
	            $phoneRegex1 = '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/';
	            $phoneRegex2 = '/^[0-9]{3}[0-9]{3}[0-9]{4}$/';
	            if (!preg_match($phoneRegex1, $phoneNumber) && !preg_match($phoneRegex2, $phoneNumber)) { 
	                $phoneNumberErr = "Phone Number is invalid.";
	            }  
	            $dobRegex = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/';
	            if (!empty($birth_date) && !preg_match($dobRegex, $birth_date) ) { 
	                $dobErr = "DOB is invalid.";
	            } 
	            
	            $services = join(",", $services);

	            if($firstNameErr === "" &&  $lastNameErr === "" && $dobErr === "" && $phoneNumberErr === "" && $addressErr === "" && $cityErr === "" && $postalCodeErr === ""  && $servicesErr === ""){
	                $user->setDob($birth_date);
	                $user->setAddress($address);
	                $user->setCity($city);
	                $user->setPostalCode($postal_code);
	                $user->setBio($bio);
	                $user->setLevelOfExperience($levelOfExperience);
	                $user->setServices($services);
	                if (isset($_FILES["picture"])  && $_FILES["picture"]["name"]!="" ){
	                	$path = handle_upload($_FILES["picture"]);
						$user->setPicture($path);
						$picture = $path;
	                }
	                $user_DAO->updateUser($user);
	                $successMsg = "Successfully updated your profile!";

	            } 
	        }
        ?>
        <?php include("header.php"); ?>
       <div class="profile-form">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Enthusiast Profile Form</h3>
                <h4 class="text-success text-center"> <?php if ($successMsg !== "") {?> <?php echo $successMsg ?>  <?php } ?> </h4>
                <div class="form-group">
                    <div class="row">
                    	<div class="col-sm-2">
	                        First Name*: 
	                    </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="firstName" placeholder="First Name*" value="<?php echo $firstName ?>">
                            <div class="error"><?php echo $firstNameErr ?></div>
                        </div>
                        <div class="col-sm-2">
	                        Last Name*:
	                    </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="lastName" placeholder="Last Name*" value="<?php echo $lastName ?>">
                            <div class="error"><?php echo $lastNameErr ?></div>
                        </div>
                    </div>          
                </div>
                
                <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-4">
	                        Phone Number*:
	                    </div>
	                    <div class="col-sm-8">
	                   	 	<input type="input" class="form-control" name="phoneNumber" placeholder="Phone Number*" value="<?php echo $phoneNumber ?>">
	                   	 	<div class="error"><?php echo $phoneNumberErr ?></div>
	                    </div>
	                </div>
                </div>  

                 <div class="form-group">
                 	<div class="row">
	                 	<div class="col-sm-4">
	                        Picture: 
	                    </div>
	                    <div class="col-sm-8">
	                    	<input type="file" class="form-control" name="picture" placeholder="Please upload your picture"  >
	                    	<?php if (!is_null($picture)) {?>
	                    	 	<img src="<?php echo $picture ?>" class="image"/>
	                    	<?php } ?>
	                    </div>
	                </div>
                </div>  

                <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-4">
	                        DOB:
	                    </div>
	                    <div class="col-sm-8">
	                   	 	<input type="input" class="form-control" name="birth_date" placeholder="XXXX-XX-XX" value="<?php echo $birth_date ?>">
	                   	 	<div class="error"><?php echo $dobErr ?></div>
	                    </div>
	                </div>
                </div>  

                 <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-4">
	                        Address*:
	                    </div>
	                    <div class="col-sm-8">
	                   	 	<input type="input" class="form-control" name="address"  value="<?php echo $address ?>">
	                   	 	<div class="error"><?php echo $addressErr ?></div>
	                    </div>
	                </div>
                </div>  

                 <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-4">
	                        City*:
	                    </div>
	                    <div class="col-sm-8">
	                   	 	<input type="input" class="form-control" name="city"  value="<?php echo $city ?>">
	                   	 	<div class="error"><?php echo $cityErr ?></div>
	                    </div>
	                </div>
                </div>  

                 <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-4">
	                        Postal Code*:
	                    </div>
	                    <div class="col-sm-8">
	                   	 	<input type="input" class="form-control" name="postal_code" placeholder="XXX XXX" value="<?php echo $postal_code ?>">
	                   	 	<div class="error"><?php echo $postalCodeErr ?></div>
	                    </div>
	                </div>
                </div>  

                <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-4">
	                        Level of Experience
	                    </div>  
	                    <div class="col-sm-8">
	                   	 	<select name="levelOfExperience" class="form-control">
	                   	 		<option value="1" <?php if ($levelOfExperience=='novice') {?> selected="selected" <?php } ?>>Novice</option>
	                   	 		<option value="2-3" <?php if ($levelOfExperience=='beginner') {?> selected="selected" <?php } ?>>Beginner</option>
	                   	 		<option value="4-5" <?php if ($levelOfExperience=='intermediate') {?> selected="selected" <?php } ?>>Intermediate</option>
	                   	 		<option value="5-10" <?php if ($levelOfExperience=='advanced') {?> selected="selected" <?php } ?>>Advanced</option>
	                   	 		<option value="10+" <?php if ($levelOfExperience=='expert') {?> selected="selected" <?php } ?>>Expert</option>
	                   	 	</select>
	                    </div>
	                </div>
                </div>

                <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-4">
	                        Interests*
	                    </div>
	                    <div class="col-sm-8">
		                    <ul>
		                    	<li>
		                   	 		<input type="checkbox" name="services[]" value="pt"  <?php if (strpos($services, 'pt') !== false) {?> checked="checked" <?php } ?>></input> Personal Trainer
		                   	 	</li>
		                   	 	<li>
		                   	 		<input type="checkbox" name="services[]" value="pc"  <?php if (strpos($services, 'pc') !== false) {?> checked="checked" <?php } ?>></input> Prep Coach
		                   	 	</li>
		                   	 	<li>
		                   	 		<input type="checkbox" name="services[]" value="nu"  <?php if (strpos($services, 'nu') !== false) {?> checked="checked" <?php } ?>></input> Nutritionist
		                   	 	</li>
		                   	 	<li>
		                   	 		<input type="checkbox" name="services[]" value="yg"  <?php if (strpos($services, 'yg') !== false) {?> checked="checked" <?php } ?>></input> 
		                   	 		Yoga
		                   	 	</li>
		                   	 	<li>
		                   	 		<input type="checkbox" name="services[]" value="mt"  <?php if (strpos($services, 'mt') !== false) {?> checked="checked" <?php } ?>></input> Massage Therapy
		                   	 	</li>
		                   	 </ul>
		                   	 <div class="error"><?php echo $servicesErr ?></div>
	                    </div>
	                   
	                </div>
                </div>
  
                 <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-2">
	                        Bio: 
	                    </div>
	                    <div class="col-sm-10">
	                   	 	<textarea type="input" rows=5 class="form-control" name="bio" placeholder="Describe yourself" ><?php echo $bio ?></textarea>
	                    </div>
	                </div>
                </div>  
                <div class="text-center"><button type="submit" class="btn btn-lg btn-block button-red">Update Now</button></div>

            </form>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>