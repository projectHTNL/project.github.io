<?php
session_start();
 $host = "localhost";   //Host
$username = "root";    //User
$password = ""; //Passsword
$database = "vaccinationssystem";     // Database Name
$con=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for xampp third fild password is blank
  $childid=$_POST['childid'];
$childname=$_POST['childname'];
$motherid=$_POST['motherid'];
$ages=$_POST['ages'];
$vacname=$_POST['vacname'];
$numberofdoses=$_POST['numberofdoses'];
 $date=$_POST['date'];     
$employeeid=$_SESSION['NationalID'];

	
$query="INSERT INTO children_vaccinations (child_id,vacinationName,date,motherid,numberofdoses,childname,childage,employeeid)VALUES
('$childid','$vacname','$date','$motherid','$numberofdoses','$childname','$ages','$employeeid')";
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