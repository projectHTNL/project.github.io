<?php
session_start();
 $host = "localhost";   //Host
$username = "root";    //User
$password = ""; //Passsword
$database = "vaccinationssystem";     // Database Name
$conn=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for xampp third fild password is blank
             
            $NationalID = $_POST['NationalID'];
$_SESSION['NationalID']=$NationalID;			
            $Email = $_POST['Email'];
			   $password = $_POST['password'];
           $mys=" SELECT * FROM mothers WHERE national_id='$NationalID' AND email='$Email' AND password='$password'"; 
		  $result=mysqli_query($conn,$mys);
		   $count=mysqli_num_rows($result);
		   if($count == 1){
						header("location:http://localhost:8080/MothersFunctions/");   
		   }
		   else{
			   echo "faild There are Wrong Username Or Password";
		   }
          mysqli_close($conn); 
?>