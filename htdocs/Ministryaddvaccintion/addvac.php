<?php
 $host = "localhost";   //Host
$username = "root";    //User
$password = ""; //Passsword
$database = "vaccinationssystem";     // Database Name
$con=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for xampp third fild password is blank
  
$vaccname=$_POST['vaccname'];
$reason=$_POST['reason'];
$dosesnum=$_POST['dosesnum'];
$ages=$_POST['ages'];

 $prev=$_POST['prev'];     


	
$query="INSERT INTO vaccinations (vac_name,reasontaking,dosesnumber,ages,prevents)VALUES
('$vaccname','$reason','$dosesnum','$ages','$prev')";
$r= mysqli_query($con,$query);
if(!$r)
{	
 echo "faild to Add Vaccination";  
}
else
{
 echo "success to Add Vaccination"; 
	}
 
mysqli_close($con);
?>