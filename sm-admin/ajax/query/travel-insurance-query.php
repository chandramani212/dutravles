<?php include('../../core/int.php'); 
$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$dob = $_POST['dob'];
	$dot = $_POST['dot'];
	$doa = $_POST['doa'];
	$days = $_POST['days'];
	if(!mysqli_query($con, "insert into travel_insu (Name, Mobile, Email, Message, DOB, DOT, DOA, Days) values('$name', '$mobile', '$email', '$message', '$dob','$dot', '$doa', '$days')")){
		echo 'Error :- '.mysqli_error($con);
	}

?>