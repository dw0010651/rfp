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
	$sql = "SELECT * FROM service";
	$result = mysqli_query($conn,$sql);
	    // output data of each row
	    //echo('<pre>');
	    $data = [];
	    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	    	//die($row['id']);
	      array_push($data, $row);
	    }
	    // echo $data;
	    // print_r($data);
	    echo json_encode($data);	
 ?>