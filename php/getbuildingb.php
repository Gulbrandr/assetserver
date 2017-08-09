<?php 
	$con = mysqli_connect("localhost","hishollo","*U7ybeezer25","hishollo_AssetServer");
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$output= array();
	$sql = "SELECT * FROM Assets WHERE Location=\"Building B\"";
	$results = 	mysqli_query($con,$sql);
	foreach($results as $result){
   
      array_push($output,$result);
     
    }
    echo json_encode($output);  
	mysqli_close($con);	
 ?>