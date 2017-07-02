<?php include('../../core/int.php'); 
	
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
$forth = $_POST['forth'];

mysqli_query($con, "update international_spot set First = '$first', Second = '$second', Third = '$third', Forth = '$forth' where I_ID = 1");










?>