<?php include('../../core/int.php'); 
$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$country = $_POST['country'];
	$date = date('Y-m-d');
	mysqli_query($con, "insert into visa (Name, Mobile, Email, Message, Date, Country) values('$name', '$mobile', '$email', '$message', '$date','$visa')");

?>