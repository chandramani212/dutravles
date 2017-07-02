<?php include('../../core/int.php'); 

	$ID = $_POST['ID'];
	$TI = '../../dist/img/package-images/'.$_POST['TI'];
	
	
	mysqli_query($con, "delete from destination where D_ID = '$ID'");
	unlink($TI);

?>