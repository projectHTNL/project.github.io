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
$age=$_POST['age'];
$address=$_POST['address'];
$Password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];      
 $query1="SELECT * FROM  patient  WHERE national_id='$nationalid'";
$r1= mysqli_query($con,$query1);	
$count=mysqli_num_rows($r1);
if($count==1)
{
	echo "please enter correct account this account exist..";
}
else {
	if($confirmpassword==$Password){
$query="INSERT INTO patient (national_id,email,phone,name,password,Address,age)VALUES
('$nationalid','$emil','$Phone','$Name','$Password','$address','$age')";
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