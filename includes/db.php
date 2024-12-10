<?php

$con = mysqli_connect("localhost","root","","vehicle_log");

if(mysqli_connect_errno()){
	
    
	echo"Failed to connect : " . mysqli_connect_error(); 
	
}

?>