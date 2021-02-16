<?php

$conn = mysqli_connect("localhost","root","","Hospital") or die("Connection Failed");

$sql = "SELECT * FROM appoinment info";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Name</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["name"]}</td><td>{$row["doctor's name"]}</td><td>{$row["appointment date"]}</td><td>{$row["appointment time"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["name"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["name"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>s
