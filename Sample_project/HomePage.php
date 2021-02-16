<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body {
  background-image: url('Doctor-Appointment-Software.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<meta charset="utf-8"/>

</head>
<body><ul>
  <li><a href="HomePage.php">Home</a></li>
  <li><a href="login.php">Appointment Info</a></li>
  <li><a href="">Doctors Info</a></li>
  <li><a href="Form.php">Sign up</a></li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Login</a>
    <div class="dropdown-content">
      <a href="doctorlogin.php">Doctor Login</a>
      <a href="patient.php">Patient Login</a>
      <a href="login.php">Receptionist Login</a>
      <a href="adminlogin.php">Admin Login</a>

    </div>
  </li>
</ul>

<div style="padding:20px;margin-top:30px;height:1500px;">


<?php
 echo readfile("file.txt");
?>
<br>
<form align = "center" action = "login.php" method="post"> 
        <br><input type="submit" name="button1" value="Login"/> 
</form>        
<form align = "center" action = "Registration.php" method="post"> 
<input type="submit" name="Registration" value="Signup" /> 
                
</form> 
</body>
</html>