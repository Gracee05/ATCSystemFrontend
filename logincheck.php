<?php



if(!isset($_POST["text1"]))
{
	header("location:");
}

else
{

 $con = mysqli_connect("localhost","root","","vehicle_log");

 if(mysqli_connect_errno()){
  
  echo"Failed to connect : " . mysqli_connect_error(); 
  
}
$m ='';
$n ='';

$type=$_POST["type"];
$uid=$_POST["text1"];
$pwd=$_POST["password1"];

if($type=="admin"){
$qry="select * from user where user_type='$type'and email='$uid' and password='$pwd'";

$result=mysqli_query($con,$qry);

$m=mysqli_num_rows($result);
}

else if($type=="normal"){
$qry="select * from user where user_type='$type'and email='$uid' and password='$pwd'";

$result1=mysqli_query($con,$qry);

$n=mysqli_num_rows($result1);
}


if($m>0)
{
    header("location:index_admin.php?tn=$uid");
    
}


else if ($n>0) {
	header("location:admin_area/index.php?tn=$uid");
}

else
{
	echo "<script>alert('Username or password is incorrect!')</script>";
	 echo "<script>window.open('login.html','_self')</script>";
}

}
?>