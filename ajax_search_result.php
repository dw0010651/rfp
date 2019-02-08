<?php 
	error_reporting(0);
	$servername = "localhost";
	$username = "root";
	$password = "root";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password ,'rfp');

	// Check connection
	if ($conn === false) {
    die("ERROR: Could not connect. ".mysqli_connect_error());
	}
	$sql = "SELECT user_id,first_name,last_name,services,rating,picture,cost,birth_date FROM user_master where user_type='r'";  		
	if(isset($_POST['q'])){
		$q = $_POST['q'];
		$sql = $sql ." AND (first_name LIKE '%".$q."%' OR last_name LIKE '%".$q."%' OR email_id LIKE '%".$q."%')";

		if(!empty($_POST['query'])){
			$sql = $sql . $_POST['query'];
		}
	}

	//die($sql);
	$result = mysqli_query($conn,$sql);
	    // output data of each row
	    //echo('<pre>');
	    $data = [];
	    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

	        array_push($data, $row);
	    }
	    echo json_encode($data);	
 ?>
