<?php 
	$con = mysqli_connect("localhost","hishollo","*U7ybeezer25","hishollo_AssetServer");
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$output= array();
	$sql = "SELECT Count(*) FROM Assets WHERE Custodian=\"inventory\" AND Type=\"Kit\"";
	//echo $sql;
	$results = 	mysqli_query($con,$sql);
	
	foreach($results as $result){
   
      echo $result['Count(*)'];
     
    }
    
	mysqli_close($con);	
 ?>