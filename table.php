<?php
include("index.php");

$response=array(); //created an array to store
$sql = "SELECT $f,$g FROM $d"; //using variables to access data
$result = mysqli_query($con, $sql);
if ($result) {
	header("Content-Type:JSON");
	$i=0;
	while ($row=mysqli_fetch_assoc($result)) {
	
		$response[$i][$f]=$row[$f];
		$response[$i][$g]=$row[$g];
		$i++;
	}
}

echo json_encode($response,JSON_PRETTY_PRINT);




mysqli_close($con);


?>