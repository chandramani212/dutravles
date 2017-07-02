<?php include('../../core/int.php'); 
	
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
$forth = $_POST['forth'];
$fifth = $_POST['fifth'];
$sixth = $_POST['sixth'];

mysqli_query($con, "update special_tour set first = '$first', second = '$second', third = '$third', forth = '$forth', fifth = '$fifth', sixth = '$sixth' where ST_ID = 1");










?>