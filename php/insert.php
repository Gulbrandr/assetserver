<?php 
	$con = mysqli_connect("localhost","hishollo","*U7ybeezer25","hishollo_AssetServer");
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql = "INSERT INTO Assets (Id,Serial, Scanned, LastScanned, Make, Model, Type, Location, Custodian) VALUES".
		"(NULL,".
		"\"".$_GET['Serial']."\",".
		"\"".$_GET['Scanned']."\",".
		"\"".$_GET['LastScanned']."\",".
		"\"".$_GET['Make']."\",".
		"\"".$_GET['Model']."\",".
		"\"".$_GET['Type']."\",".
		"\"".$_GET['Location']."\",".
		"\"".$_GET['Custodian']."\")";
//echo $sql;

	
$results = 	mysqli_query($con,$sql);
echo mysqli_error($con);
mysqli_close($con);	
 ?>