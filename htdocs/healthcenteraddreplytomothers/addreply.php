<?php
session_start();
 $host = "localhost";   //Host
$username = "root";    //User
$password = ""; //Passsword
$database = "vaccinationssystem";     // Database Name
$con=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for xampp third fild password is blank
  
$id=$_SESSION['id'];
$reply=$_POST['reply'];
   


	
$query="UPDATE  healthcentercontactmothers SET recieve='$reply' WHERE ID='$id'";
$r= mysqli_query($con,$query);
if(!$r)
{	
 echo "faild to Add Reply";  
}
else
{
 echo "success to Add Reply"; 
	}
 
mysqli_close($con);
?>