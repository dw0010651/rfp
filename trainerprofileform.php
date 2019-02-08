<!--
Filename:       Trainer Profile Form
Author:         Sizhe Chen, Jieli Zhang
-->
<?php
error_reporting(0);
require_once('./dao/userDAO.php');
require_once('./model/user.php');
session_start();
?>    
        
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Trainer Profile Form | Real Fit Pro</title>

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
            .profile-form form a i{
                color: #888;
                padding-top: 15px;
            } 
            .profile-form form .error{
                color: #be2032;
                padding: 0 !important;
            }
            .profile-form form .image{
            	height: 200px;
            	margin-top: 10px;
            }
            .profile-form .charge-input{
            	width: 50px;
    			height: 25px;
    			display: inline-block;
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

	        $firstNameErr="";
	        $lastNameErr="";
	        $phoneNumberErr= "";
	        $dobErr= "";
	        $addressErr= "";
	        $cityErr= "";
	        $postalCodeErr= "";
 			$certificateErr="";
 			$bioErr ="";
 			$serviceErr = "";
			$user_type =$user->getUserType();
			if( $user_type == 'e')
	            header("Location: enthusiastprofileform.php");


	        $firstName= $user->getFirstName();
            $lastName = $user->getLastName();
            $phoneNumber =   $user->getPhoneNumber();
            $birth_date =   $user->getDob();
            $address =  $user->getAddress();
            $city =  $user->getCity();
            $postal_code =   $user->getPostalCode();
            $gender =  $user->getGender();
            $cost =   $user->getCost();
            $bio =   $user->getBio();
            $experience = $user->getExperience();
            $services = $user->getServices();
            $schedule = $user->getSchedule();
            $picture = $user->getPicture();
            $certificate = $user->getCertificate();

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
	            $experience = $_POST['experience'];
	            $gender = $_POST['gender'];

	            if (isset($_POST['services']))
	            	$services =  $_POST['services'];
	            else
	            	$services = [];
	            if (isset($_POST['schedule']))
	            	$schedule =  $_POST['schedule'];
	            else
	            	$schedule = [];

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
	            $phoneRegex1 = '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/';
	            $phoneRegex2 = '/^[0-9]{3}[0-9]{3}[0-9]{4}$/';
	            if (!preg_match($phoneRegex1, $phoneNumber) && !preg_match($phoneRegex2, $phoneNumber)) { 
	                $phoneNumberErr = "Phone Number is invalid.";
	            }  
	            $dobRegex = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/';
	            if (!empty($birth_date) && !preg_match($dobRegex, $birth_date) ) { 
	                $dobErr = "DOB is invalid.";
	            } 
	            if ($_FILES["certificate"]["name"]=="" and $certificate=="") {
	                $certificateErr = "Certificate is required";
	            }
	            if (empty($bio)) {
	                $bioErr = "Bio is required";
	            }
	            
	            $cost = [];
	            foreach  ($services as $service) {
	            	if ($_POST[$service])
				    	 $cost[$service] = $_POST[$service];
					else
						$serviceErr="please enter all cost for selected services";
				}  

				$services = join(",", $services);
	            $schedule = join(",", $schedule);
	            $cost = json_encode($cost);
	            if($firstNameErr === "" &&  $lastNameErr === "" && $dobErr === "" && $phoneNumberErr === "" && $addressErr === "" && $cityErr === "" && $postalCodeErr === "" && $certificateErr === "" && $bioErr === "" && $serviceErr === ""){
	                $user->setDob($birth_date);
	                $user->setAddress($address);
	                $user->setCity($city);
	                $user->setPostalCode($postal_code);
	                $user->setCost($cost);
	                $user->setBio($bio);
	                $user->setGender($gender);
	                $user->setExperience($experience);
	                $user->setServices($services);
	                $user->setSchedule($schedule);
	                if (isset($_FILES["picture"])  && $_FILES["picture"]["name"]!="" ){
	                	$path = handle_upload($_FILES["picture"]);
						$user->setPicture($path);
						$picture = $path;
	                }
					if (isset($_FILES["certificate"]) && $_FILES["certificate"]["name"]!=""){
						$path = handle_upload($_FILES["certificate"]);
						$user->setCertificate($path);
						$certificate = $path;

					}
	                $user_DAO->updateUser($user);
	                $successMsg = "Successfully updated your profile!";
	            } 
	        }
	        if ($cost)
	       		$cost = get_object_vars(json_decode($cost));
	       	else
	       		$cost = [];
        ?>
        <?php include("header.php"); ?>
       <div class="profile-form">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Trainer Profile Form</h3>
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
	                		Gender: 
		                </div>
		                <div class="col-sm-8">
		                    <input type="radio" name="gender" value="m" <?php if ($gender === 'm'){ ?> checked="checked" <?php } ?>> Male  
		                    <input type="radio"  name="gender" value="f" <?php if ($gender === 'f'){ ?> checked="checked" <?php } ?>> Female
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
	                        Certificate*: 
	                    </div>
	                    <div class="col-sm-8">
	                	    <input type="file" class="form-control" name="certificate" placeholder="please upload your certificate*" >
	                	    <?php if (!is_null($certificate)) {?>
	                    		<?php if (pathinfo($certificate, PATHINFO_EXTENSION) == 'pdf' || pathinfo($certificate, PATHINFO_EXTENSION) == 'doc' || pathinfo($certificate, PATHINFO_EXTENSION) == 'docx' || pathinfo($certificate, PATHINFO_EXTENSION) == 'PDF' || pathinfo($certificate, PATHINFO_EXTENSION) == 'DOC' || pathinfo($certificate, PATHINFO_EXTENSION) == 'DOCX') {?>
	                    	 		<a href="<?php echo $certificate ?>"><i class="fa fa-3x fa-file"></i></a>
	                    		<?php }else{ ?>
	                    	 		<img src="<?php echo $certificate ?>" class="image"/>
	                    	 	<?php } ?>
	                    	<?php } ?>
	                    	<div class="error"><?php echo $certificateErr ?></div>
	                	    <!-- <?php if (!is_null($certificate)) {?>
	                    	 	<img src="<?php echo $certificate ?>" class="image"/>
	                    	<?php } ?> -->
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
	                        Years of Experience:
	                    </div>
	                    <div class="col-sm-8">
	                   	 	<select name="experience" class="form-control">
	                   	 		<option value="1" <?php if ($experience=='1') {?> selected="selected" <?php } ?>>1 year</option>
	                   	 		<option value="2-3" <?php if ($experience=='2-3') {?> selected="selected" <?php } ?>>2-3 years</option>
	                   	 		<option value="4-5" <?php if ($experience=='4-5') {?> selected="selected" <?php } ?>>4-5 years</option>
	                   	 		<option value="5-10" <?php if ($experience=='5-10') {?> selected="selected" <?php } ?>>5-10 years</option>
	                   	 		<option value="10+" <?php if ($experience=='10+') {?> selected="selected" <?php } ?>>10+ years</option>
	                   	 	</select>
	                    </div>
	                </div>
                </div>

                <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-4">
	                        Provided Services:
	                    </div>
	                    <div class="col-sm-8">
		                    <ul>
		                    	<li>
		                   	 		<div class="col-xs-6">
	                   	 				<input type="checkbox" name="services[]" value="pt"  <?php if (strpos($services, 'pt') !== false) {?> checked="checked" <?php } ?>></input> Personal Trainer
	                   	 			</div>
	                   	 			<div class="col-xs-6">
		                   	 		charge: $<input type="text" name="pt" class="form-control charge-input" value="<?php echo isset($cost["pt"]) ? $cost["pt"] : "" ?>"></input>
		                   	 		</div>
		                   	 	</li>
		                   	 	<li>
		                   	 		<div class="col-xs-6">
		                   	 			<input type="checkbox" name="services[]" value="pc"  <?php if (strpos($services, 'pc') !== false) {?> checked="checked" <?php } ?>></input> Prep Coach 
		                   	 		</div>
	                   	 			<div class="col-xs-6">
		                   	 		charge: $<input type="text" name="pc" class="form-control charge-input" value="<?php echo isset($cost["pc"]) ? $cost["pc"] : "" ?>"></input>
		                   	 		</div>
		                   	 	</li>
		                   	 	<li>
		                   	 		<div class="col-xs-6">
		                   	 			<input type="checkbox" name="services[]" value="nu"  <?php if (strpos($services, 'nu') !== false) {?> checked="checked" <?php } ?>></input> Nutritionist
		                   	 		</div>
	                   	 			<div class="col-xs-6">
		                   	 		charge: $<input type="text" name="nu" class="form-control charge-input" value="<?php echo isset($cost["nu"]) ? $cost["nu"] : "" ?>"></input>
		                   	 		</div>
		                   	 	</li>
		                   	 	<li>
		                   	 		<div class="col-xs-6">
		                   	 			<input type="checkbox" name="services[]" value="yg"  <?php if (strpos($services, 'yg') !== false) {?> checked="checked" <?php } ?>></input> Yoga
		                   	 		</div>
	                   	 			<div class="col-xs-6">
		                   	 		charge: $<input type="text" name="yg" class="form-control charge-input" value="<?php echo isset($cost["yg"]) ? $cost["yg"] : "" ?>"></input>
		                   	 		</div>
		                   	 	</li>
		                   	 	<li>
		                   	 		<div class="col-xs-6">
		                   	 			<input type="checkbox" name="services[]" value="mt"  <?php if (strpos($services, 'mt') !== false) {?> checked="checked" <?php } ?>></input> Massage Therapy
		                   	 		</div>
	                   	 			<div class="col-xs-6">
		                   	 		charge: $<input type="text" name="mt" class="form-control charge-input" value="<?php echo isset($cost["mt"]) ? $cost["mt"] : "" ?>"></input>
		                   	 		</div>
		                   	 	</li>
		                   	 </ul>
		                   	 <div class="error"><?php echo $serviceErr ?></div>
	                    </div>
	                </div>
                </div>

                <div class="form-group">
                	<div class="row">
	                	<div class="text-center">
	                        <h4>Schedule</h4>
	                    </div>
	                    <div >
	                   	 	<table class="table">
	                   	 		<thead>
	                   	 			<th>
	                   	 				 
	                   	 			</th>
	                   	 			<th class="text-center">
	                   	 				8:00-10:00
	                   	 			</th>
	                   	 			<th class="text-center">
	                   	 				10:00-12:00
	                   	 			</th>
	                   	 			<th class="text-center">
	                   	 				12:00-14:00
	                   	 			</th>
	                   	 			<th class="text-center">
	                   	 				14:00-16:00
	                   	 			</th>
	                   	 			<th class="text-center">
	                   	 				16:00-18:00
	                   	 			</th>
	                   	 		</thead>
	                   	 		<tbody>
	                   	 			<tr>
	                   	 				<td class="text-center">
	                   	 					Monday
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'mon-8') !== false) {?> checked="checked" <?php } ?> value="mon-8"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'mon-10') !== false) {?> checked="checked" <?php } ?> value="mon-10"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'mon-12') !== false) {?> checked="checked" <?php } ?> value="mon-12"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'mon-14') !== false) {?> checked="checked" <?php } ?> value="mon-14"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'mon-16') !== false) {?> checked="checked" <?php } ?> value="mon-16"></input>
	                   	 				</td>
	                   	 			</tr>
	                   	 			<tr>
	                   	 				<td class="text-center">
	                   	 					Tuesday
	                   	 				</td>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'tue-8') !== false) {?> checked="checked" <?php } ?> value="tue-8"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'tue-10') !== false) {?> checked="checked" <?php } ?> value="tue-10"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'tue-12') !== false) {?> checked="checked" <?php } ?> value="tue-12"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'tue-14') !== false) {?> checked="checked" <?php } ?> value="tue-14"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'tue-16') !== false) {?> checked="checked" <?php } ?> value="tue-16"></input>
	                   	 				</td>
	                   	 			</tr>
	                   	 			<tr>
	                   	 				<td class="text-center">
	                   	 					Wednesday
	                   	 				</td>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'wed-8') !== false) {?> checked="checked" <?php } ?> value="wed-8"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'wed-10') !== false) {?> checked="checked" <?php } ?> value="wed-10"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, '"wed-12') !== false) {?> checked="checked" <?php } ?> value="wed-12"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'wed-14') !== false) {?> checked="checked" <?php } ?> value="wed-14"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'wed-16') !== false) {?> checked="checked" <?php } ?> value="wed-16"></input>
	                   	 				</td>
	                   	 			</tr>
	                   	 			<tr>
	                   	 				<td class="text-center">
	                   	 					Thursday
	                   	 				</td>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'thu-8') !== false) {?> checked="checked" <?php } ?> value="thu-8"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'thu-10') !== false) {?> checked="checked" <?php } ?> value="thu-10"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'thu-12') !== false) {?> checked="checked" <?php } ?> value="thu-12"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'thu-14') !== false) {?> checked="checked" <?php } ?> value="thu-14"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'thu-16') !== false) {?> checked="checked" <?php } ?> value="thu-16"></input>
	                   	 				</td>
	                   	 			</tr>
	                   	 			<tr>
	                   	 				<td class="text-center">
	                   	 					Friday
	                   	 				</td>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'fri-8') !== false) {?> checked="checked" <?php } ?> value="fri-8"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'fri-10') !== false) {?> checked="checked" <?php } ?> value="fri-10"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'fri-1') !== false) {?> checked="checked" <?php } ?> value="fri-12"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'fri-14') !== false) {?> checked="checked" <?php } ?> value="fri-14"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'fri-16') !== false) {?> checked="checked" <?php } ?> value="fri-16"></input>
	                   	 				</td>
	                   	 			</tr>
	                   	 			<tr>
	                   	 				<td class="text-center">
	                   	 					Saturday
	                   	 				</td>
	                   	 				</td>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sat-8"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sat-10"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sat-12"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sat-14"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sat-16"></input>
	                   	 				</td>
	                   	 			</tr>
	                   	 			<tr>
	                   	 				<td class="text-center">
	                   	 					Sunday
	                   	 				</td>
	                   	 				</td>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sun-8"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sun-10"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sun-12"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sun-14"></input>
	                   	 				</td>
	                   	 				<td class="text-center">
	                   	 					<input type="checkbox" name="schedule[]"  <?php if (strpos($schedule, 'pt') !== false) {?> checked="checked" <?php } ?> value="sun-16"></input>
	                   	 				</td>
	                   	 			</tr>
	                   	 		</tbody>
	                   	 	</table>
	                    </div>
	                </div>
                </div>  
               
                 <div class="form-group">
                	<div class="row">
	                	<div class="col-sm-2">
	                        Bio*: 
	                    </div>
	                    <div class="col-sm-10">
	                   	 	<textarea type="input" rows=5 class="form-control" name="bio" placeholder="Describe yourself" ><?php echo $bio ?></textarea>
	                   	 	<div class="error"><?php echo $bioErr ?></div>
	                    </div>
	                </div>
                </div>  
                <div class="text-center"><button type="submit" class="btn btn-lg btn-block button-red">Update Now</button></div>

            </form>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>