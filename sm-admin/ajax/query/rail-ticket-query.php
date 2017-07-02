<?php include('../../core/int.php'); 
$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$date = $_POST['booking_date'];
	mysqli_query($con, "insert into rail_ticket (Name, Mobile, Email, Message, Date, From_City,To_City) values('$name', '$mobile', '$email', '$message', '$date','$from', '$to')");

?>