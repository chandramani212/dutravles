<?php include('../../core/int.php'); 
$ID = $_POST['ID'];

mysqli_query($con, "update travel_insu set Status = 1 where id = '$ID'");
?>