<?php
session_start();
 $host = "localhost";   //Host
$username = "root";    //User
$password = ""; //Passsword
$database = "vaccinationssystem";     // Database Name
$con=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for xampp third fild password is blank
  $patientid=$_POST['patientid'];
$vaccname=$_POST['vaccname'];
$employeeid=$_SESSION['NationalID'];
$dosesnum=$_POST['dosesnum'];
    
$date=$_POST['date'];

	
$query="INSERT INTO patients_vaccinations (patient_id,vacinationName,vaccinatondate,numberofdoses,employeeid)VALUES
('$patientid','$vaccname','$date','$dosesnum','$employeeid')";
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