<?php include('../../core/int.php'); 
$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$deprature = $_POST['deprature'];
	$return = $_POST['return'];
	$address = $_POST['address'];
	$vehicle = $_POST['vehicle'];
	$passenger = $_POST['passenger'];
	
	if(!mysqli_query($con, "insert into car_rent (Name, Mobile, Email, Message,  From_City, To_City, Deprature, Return, Address, Vehicle, Passenger) values('$name', '$mobile', '$email', '$message', '$from', '$to', '$deprature', '$return', '$address', '$vehicle', '$passenger' )")) {
	echo 'Error :- '.mysqli_error($con);
}

?>