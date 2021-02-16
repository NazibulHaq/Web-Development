<!DOCTYPE html>
<html lang="en">
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
    <script src="validator.js">
    </script>

    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="validator.js"></script>
</head>
<body>

<ul>
  <li><a class="active" href="HomePage.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<div style="padding:20px;margin-top:30px;height:1500px;">
<center>

<?php

    include('db.php');
   if (isset($_REQUEST['name'])) {
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $mobile    = stripslashes($_REQUEST['mobile']);
        $mobile    = mysqli_real_escape_string($con, $mobile);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, mobile,  create_datetime)
                     VALUES ('$name', '" . $password . "', '$email', '$mobile' , '$create_datetime')";
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


<form align = "center" name="contactForm" onsubmit="return validateForm()" action="" method="post">
    <h2>Registration Form</h2>
    <div class="row">
        <label>Full Name</label><br>
        <input type="text" name="name">
        <div class="error" id="nameErr"></div>
    </div>
    <br><br>
    <div class="row">
        <label>Email Address</label><br>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
    <br><br>
    <div class="row">
        <label>Password</label><br>
        <input type="text" name="password">
        <div class="error" id="passwordErr"></div>
    </div>
    <br><br>
    <div class="row">
        <label>Mobile Number</label><br>
        <input type="text" name="mobile" >
        <div class="error" id="mobileErr"></div>
    </div>
    <br><br>
    <div class="row">
        <label>Gender</label><br>
        <div class="form-inline">
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label> 
        </div>
        <div class="error" id="genderErr"></div>
    </div>     
    <br><br>   
    <div class="row"><br>
    <input type="submit" name="submit" value="Register" class="login-button"><br><br>
    </div>
    <p class="link"><a href="login.php">Click to Login</a></p>

</form>
<?php
    }
?>
</body>
</html>