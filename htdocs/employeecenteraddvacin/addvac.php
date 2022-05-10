<?php
session_start();
 $host = "localhost";   //Host
$username = "root";    //User
$password = ""; //Passsword
$database = "vaccinationssystem";     // Database Name
$con=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for xampp third fild password is blank
  $healthcenterid=$_POST['healthcenterid'];
$vaccname=$_POST['vaccname'];
$employeeid=$_SESSION['NationalID'];
$dosesnum=$_POST['dosesnum'];
$ages=$_POST['ages'];
$date=$_POST['date'];
 $time=$_POST['time'];     


	
$query="INSERT INTO healthcenter_vaccinations (vac_name,numberofdoses,date,time,healthcenterid,Age,emloyeeid)VALUES
('$vaccname','$dosesnum','$date','$time','$healthcenterid','$ages','$employeeid')";
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