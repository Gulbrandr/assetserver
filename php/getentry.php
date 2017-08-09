<?php 
	$ID = $_GET['entry'];
	$con = mysqli_connect("localhost","hishollo","*U7ybeezer25","hishollo_AssetServer");
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql = "SELECT * FROM Assets WHERE Id = ".$ID;
	$results = 	mysqli_query($con,$sql);
   	foreach($results as $result){
   
      echo json_encode($result);
     
    }
    

    
	mysqli_close($con);	
 ?>