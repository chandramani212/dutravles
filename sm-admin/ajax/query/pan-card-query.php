<?php include('../../core/int.php'); 
$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	mysqli_query($con, "insert into pancard  (Name, Mobile, Email, Message) values('$name', '$mobile', '$email', '$message')");

?>