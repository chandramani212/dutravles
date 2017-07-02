<?php include('../../core/int.php'); 
$ID = $_POST['ID'];

mysqli_query($con, "update pancard set Status = 1 where id = '$ID'");
?>