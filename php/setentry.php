<?php 
$con = mysqli_connect("localhost","hishollo","*U7ybeezer25","hishollo_AssetServer");
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$sql = "UPDATE Assets "
	."SET Make=\"".$_GET['Make']."\","
	."Model=\"".$_GET['Model']."\","
	."Type=\"".$_GET['Type']."\","
	."Custodian=\"".$_GET['Custodian']."\","
	."Location=\"".$_GET['Location']."\""
	."WHERE Id=\"".$_GET['Id']."\"";


//echo $sql;
$results = mysqli_query($con,$sql);
$output= array();
$sql = "SELECT * FROM `Assets`";
$results = 	mysqli_query($con,$sql);
foreach($results as $result){
   
   array_push($output,$result);
     
}
echo json_encode($output);

mysqli_close($con);	
?>