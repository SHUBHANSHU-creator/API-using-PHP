<?php

$serverName='127.0.0.1';
$userName='root';
$password='';
$dbName='oyster';
$con=new mysqli($serverName,$userName,$password,$dbName);
if (mysqli_connect_errno()){
	echo"Failed";
	exit();
}

$website =  $_REQUEST['website'];
        
        

$a=strpos($website,".");  //first position of "."
$b=strrpos($website,".");  //last position of "."
$c=substr($website,$a+1,$b-12); //characters between $a and $b



$sql="SELECT column2, column3 FROM keyword WHERE column1='$c'"; //column2 and column 3 are required 



$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $d= $row["column2"];
     $e=$row["column3"];
     $f=substr($e,1,7);
     $g=substr($e,9,7);

    
  }
} else {
  echo "0 results";
}



?>