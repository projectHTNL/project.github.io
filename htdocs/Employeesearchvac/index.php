<?php
session_start();
?>


<!-- Design by foolishdeveloper.com -->

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mothers Login</title>
 
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <style>
 @import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
  background: #1bb1ec;
}

.wrapper{
  max-width: 900px;
  width: 100%;
  height: 630px;
  position: absolute;
  top: 85%;
  left:38%;
  transform: translate(-50%,-50%);
  background: #dde1e7;
  box-shadow: -3px -3px 7px rgba(68, 75, 87, 0.356),
              2px 2px 5px rgba(68, 75, 87, 0.356);
}

.container{
  padding: 35px 40px;
}

.wrapper .tabs ul{
  width: 100%;
   

  margin-bottom:30px;
   border: 2px solid #1bb1ec;
  display: flex;
}
    
    

.wrapper .tabs ul li{
  width: 100%;
  padding: 15px 0;
  text-align: center;
  font-size: 16px;
  color: #fefffe;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 2px;
  background: #1bb1ec;
  cursor: pointer;
  position: center;
  transition: all 0.5s ease;
}

.wrapper .tabs ul li.active{
  background: #e3e4e6;
  color: rgb(0, 0, 0);
 
}

.wrapper .input_field{
  margin-bottom: 25px;
  margin-top: 28px;
}

.wrapper .input_field .input{
  width: 100%;
  border: none;
  background: #dde9ecb7;
  color: black;
  font-family: sans-serif;
  border: 2px solid rgba(13, 162, 231, 0.596);
  font-size: 14px;
  padding: 17px;
  border-radius: 10px;
} 

.wrapper .btn{
  margin-top: 30px;
  background: #27a6f0;
  height: 40px;
  width: 150px;
  border-radius: 50px;
  padding: 12px;
  text-align: center;
  border-radius: 10px;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-weight: bold;
}
.wrapper .btn:hover{
 background: #1b8cce;
}

.wrapper .btn a{
  color: rgb(255, 255, 255);
  display: block;
  font-size: 16px;
  font-family: sans-serif;
}
.icon-button{
  margin-top: 45px;
}
.icon-button span{
  margin-left: 15px;
  padding-left: 60px;
  padding-right: 60px;
  padding-top: 20px;
  padding-bottom: 7px;
 
 border-radius: 5px;
  line-height: 25px;
  
  background: #b8bec7;
 
   
}
.icon-button span.facebook{
  background: #3498db;
  color: #fbfdff;
}
.icon-button span.google{
  background: #db7f34;
  color: #ffffff;
}
.icon-button span.facebook:hover{
  background: #2172a8;
}
.icon-button span.google:hover{
  background: #be6c29;
}
 
.icon-button span i{
  font-size: 18px;
   
}
li1 {<!--from  w w  w. java2  s  . c o m-->
   border: 0px;
   display: inline-block;
   position: relative;
   z-index: 1;
   border: 0px solid #000000;
   background-color: transparent;
   font-family: Futura, Tahoma, sans-serif;
   color: #ffffff;
   padding: 40px;
   margin-left: 20px;
}
li1::after {
   content: "'";
   color: transparent;
   position: absolute;
   width: 100%;
   height: 100%;
   left: 0px;
   top: 0px;
   z-index: -1;
   border-radius: 3px;
   background-color: #038adc;
   transform: skew(-30deg);
   -webkit-transform: skew(-30deg);
   -o-transform: skew(-30deg);
   -moz-transform: skew(-30deg);
   -ms-transform: skew(-30deg);
}
.img22 {
  border-radius: 750%;
 
}
.line {
   font-size: 16px;
  font-family: sans-serif;
  color:blue;
  font-weight:bold;
  margin-bottom:10px;
 
}
  </style>
</head>
 <div id="Title">
<h2>
<table    style="relative:right;top;width:500px;height:210px;" cellspacing="6" cellpadding="0" border="0" bordercolor="#FFFFFF">
 	
 <td align="left"> <img src="Logo.png" width="150" height="150" id="im1"  ></td>
  <td align="right" width="400"> <input type="Submit" value="Logout" onclick="location.href='http://localhost:8080/Home Page'" style="background-color:#f8f9fa;font-size:18px; color:#000 " onmouseover="this.style.backgroundColor='#038adc'" onmouseout="this.style.backgroundColor='#f8f9fa'" class="btn1"></td>
  <td align="right" width="400"> <input type="Submit" value="Main functions" onclick="location.href='http://localhost:8080/employeefunctions'" style="background-color:#f8f9fa;font-size:18px; color:#000 " onmouseover="this.style.backgroundColor='#038adc'" onmouseout="this.style.backgroundColor='#f8f9fa'" class="btn1"></td>
 

 	
 </table>
<table    style="relative:center;top;width:400px;height:100%;" cellspacing="0" cellpadding="2" border="0" bordercolor="#FFFFFF">
 	
 <tr align="center" width="400">   Employee Search Vaccinations</tr>
  <tr align="center" width="400"> <?php


$con=mysqli_connect("localhost","root","","vaccinationssystem") or die(mysqli_error());//for wamp third fild password is blank
if(!$con)
{
die('could not connect:'.mysqli_error());
}
$employeeid=$_SESSION['NationalID'];
$query="SELECT * FROM   healthcenter_vaccinations WHERE emloyeeid= '$employeeid'";
$r= mysqli_query($con,$query);
if(!$r)
{
echo"<script type='text/javascript'>\n";
echo"alert('you are not succesflly Search Vaccinations try again!!!!!');\n";
echo"</script>";
}
else
{echo"<script type='text/javascript'>\n";
echo"alert('you are succesflly search Vaccinations!!!!!');\n";
echo"</script>";
}
echo'<table cellpadding="2" border="3" bordercolor="#996633"  style="relative:center;top;width:1000px;height:20px;background-color:#FFFFFF;"  >';
echo'<tr style="font-weight: bold; background-color:#B6CEFF;">';
echo '<td width="100">'.'<font color="Brown" size="3">'."Vac Id".'</font>'.'</td>';
echo '<td width="100">'.'<font color="Brown" size="3">'."Vac Name".'</font>'.'</td>';

echo '<td width="100">'.'<font color="Brown" size="3">'."Number of Doses".'</font>'.'</td>';
echo '<td width="100">'.'<font color="Brown" size="3">'."Date".'</font>'.'</td>';
echo '<td width="100">'.'<font color="Brown" size="3">'."Time".'</font>'.'</td>';
echo '<td width="100">'.'<font color="Brown" size="3">'."Health Center ID".'</font>'.'</td>';
echo '<td width="100">'.'<font color="Brown" size="3">'."Ages".'</font>'.'</td>';
echo '<td width="100">'.'<font color="Brown" size="3">'."Employee ID".'</font>'.'</td>';

//echo '<td width="100">'."".'</font>'.'</td>';
echo'</tr>';
//echo'</table>';
while($row=mysqli_fetch_row($r))
{
//echo'<table cellpadding="2" border="6" bordercolor="#996633"  style="relative:left;top;width:900px;height:20px;" >';
echo'<tr>';
echo '<td width="800">'.'<font color="black" size="3">'."$row[0]\n<br>".'</font>'.'</td>';
echo '<td width="600">'.'<font color="black" size="3">'."$row[1]\n<br>".'</font>'.'</td>';
echo '<td width="500">'.'<font color="black" size="3">'."$row[2]\n<br>".'</font>'.'</td>';
echo '<td width="500">'.'<font color="black" size="3">'."$row[3]\n<br>".'</font>'.'</td>';
echo '<td width="400">'.'<font color="black" size="3">'."$row[4]\n<br>".'</font>'.'</td>';

echo '<td width="500">'.'<font color="black" size="3">'."$row[5]\n<br>".'</font>'.'</td>';
echo '<td width="500">'.'<font color="black" size="3">'."$row[6]\n<br>".'</font>'.'</td>';
echo '<td width="500">'.'<font color="black" size="3">'."$row[7]\n<br>".'</font>'.'</td>';

echo "<td width='700'><a href='http://localhost:8080/Employeesearchvac/delete.php?vac_id=" . $row[0] . "'>Delete</a></td>";

echo'</tr>';

}
echo'</table>';
mysqli_close($con);

?></tr>

 	
 </table>

</h2>
</div>
<body style="background-color:#1bb1ec;">
<div  align="right"> <!-- Block parent element -->
      <img src="images.jpeg" width="50" height="50"  class="image" >
	 
	 </div>

	
        
         
		 <div  align="center" style="relative:center;top;" >
   </div>
          

</div>		

</body>
</html>