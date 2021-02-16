<!DOCTYPE html>
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
    <title>Login</title>
</head>
<body>

<ul>
  <li><a href="HomePage.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="new/index.php">Appointment Info</a></li>
  <li><a href="">Doctors Info</a></li>
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

<center>
<?php
    require('db.php');
    session_start();
    
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . $password . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location:new/index.php");
        } else {
            echo "<div class='form'>
            <br><h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form align = "center" class="form" method="post" name="login">
    <br><br><br><br><br><h1 class="login-title">Login</h1><br><br>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/><br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"/><br><br>
        <input type="submit" value="Login" name="submit" class="login-button"/><br><br>
        <p class="link"><a href="Registration.php">New Registration</a></p>
  </form>
<?php
    }
?>

</center>
</body>
</html>