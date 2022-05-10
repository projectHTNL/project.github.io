<?php
 $host = "localhost";   //Host
$username = "root";    //User
$password = ""; //Passsword
$database = "vaccinationssystem";     // Database Name
$con=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for xampp third fild password is blank
  
$nationalid=$_POST['nationalid'];
$Name=$_POST['Name'];
$Phone=$_POST['Phone'];
$emil=$_POST['emil'];

$Password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];      
 $query1="SELECT * FROM  mothers  WHERE national_id='$nationalid'";
$r1= mysqli_query($con,$query1);	
$count=mysqli_num_rows($r1);
if($count==1)
{
	echo "please enter correct account this account exist..";
}
else {
	if($confirmpassword==$Password){
$query="INSERT INTO mothers (national_id,email,phone,name,password)VALUES
('$nationalid','$emil','$Phone','$Name','$Password')";
$r= mysqli_query($con,$query);
if(!$r)
{	
 echo "faild to create account";  
}
else
{
 echo "success to create account"; 
	}}else{
			 echo "check your password and its confirm please..";		
	}  
} 
mysqli_close($con);
?>