<?php
include 'database.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$doctors_name=$_POST['doctors_name'];
		$appointment_date=$_POST['appointment_date'];
		$appointment_time=$_POST['appointment_time'];
		$sql = "INSERT INTO `appointment_Info`( `name`, `doctors_name`,`appointment_date`,`appointment_time`) 
		VALUES ('$name','$doctors_name','$appointment_date','$appointment_time')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$doctors_name=$_POST['doctors_name'];
		$appointment_date=$_POST['appointment_date'];
		$appointment_time=$_POST['appointment_time'];
		$sql = "UPDATE `appointment_Info` SET `name`='$name',`doctors_name`='$doctors_name',`appointment_date`='$appointment_date',`appointment_time`='$appointment_time' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `appointment_Info` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM appointment_Info WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>