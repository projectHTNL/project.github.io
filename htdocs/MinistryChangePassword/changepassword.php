<?php
session_start();
 $host = "localhost";   //Host
$username = "root";    //User
$password = ""; //Passsword
$database = "vaccinationssystem";     // Database Name
$con=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for xampp third fild password is blank
 
$oldpassword=$_POST['oldps'];
$newpassword=$_POST['newps'];
$confirmpassword=$_POST['conps'];
          $mys=" SELECT * FROM ministryofhealth WHERE password='$oldpassword'"; 
		   $result=mysqli_query($con,$mys);
		   $count=mysqli_num_rows($result);
		   if($count == 1){

	if($newpassword==$confirmpassword){
$query="UPDATE ministryofhealth SET password='$newpassword'  ";
$r= mysqli_query($con,$query);
if(!$r)
{	
 echo "faild to change account";  
}
else
{
 echo "success to change account"; 
	}}else{
			 echo "check your password and its confirm please..";		
	  
		   }}
		   else{
			 echo "This ccount not exist..";		
	  
		   }

mysqli_close($con);
?>