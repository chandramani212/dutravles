<?php include('../../core/int.php'); 
$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	
	$adult = $_POST['adult'];
	$child = $_POST['child'];
	$sr_citizen = $_POST['sr_citizen'];
	$return = $_POST['return'];
	$deprature = $_POST['deprature'];
	$des = $_POST['des'];
	$p_name = $_POST['pack_name'];
	
	if(!mysqli_query($con, "insert into package_query (Name, Mobile, Email, Adult, Child, Sr_Citizen, Deprature, Return_Date, Des) values('$name', '$mobile', '$email',  '$adult', '$child', '$sr_citizen' ,'$deprature', '$return', '$des')")) {
	echo 'Error :- '.mysqli_error($con);
}

?>