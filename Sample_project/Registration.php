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
</style>
<style>
.error {color: #FF0000;}
body {
  background-image: url('Doctor-Appointment-Software.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
  
}
</style>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <script src="validator.js"></script>

</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<div style="padding:20px;margin-top:30px;height:1500px;">
<center>
<?php

    include('db.php');
   if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $mobile    = stripslashes($_REQUEST['mobile']);
        $mobile    = mysqli_real_escape_string($con, $mobile);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, mobile,  create_datetime)
                     VALUES ('$username', '" . $password . "', '$email', '$mobile' , '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>


    <form align = "center"name ="Registration" class="form" action="" onsubmit="return validateForm()" method="post">
    <br><br><br><br><br><h1 class="login-title">Registration</h1><br><br>

        <input type="text" class="login-input" id="username" name="username" placeholder="Username"  />
        <div class="error" id="nameErr"></div>
        <br><br>

        <input type="text" class="login-input" id="email" name="email" placeholder="Email Adress"  >
        <div class="error" id="emailErr"></div>
        <br><br>

        <input type="password" class="login-input" id="password" name="password" placeholder="Password" >
        <div class="error" id="passwordErr"></div>

        <br><br>

        <input type="text" class="login-input" id="mobile" name="mobile" maxlength="11" placeholder="Mobile Number"  >
        <div class="error" id="mobileErr"></div>
        <br><br>

        <input type="submit" name="submit" value="Register" class="login-button"><br><br>
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</center>
</body>
</html>