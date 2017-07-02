<?php include('../../core/int.php'); 
$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$date = date('Y-m-d');
	mysqli_query($con, "insert into contact (Name, Mobile, Email, Message, Date) values('$name', '$mobile', '$email', '$message', '$date')");

?>