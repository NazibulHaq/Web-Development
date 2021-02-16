<?php
    $con = new mysqli("localhost","root","","Hospital");
    if (($conn->connect_error)()){
        die("Connection failed: " . $conn->connect_error);
        }
?>