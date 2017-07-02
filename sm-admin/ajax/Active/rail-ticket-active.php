<?php include('../../core/int.php'); 
$ID = $_POST['ID'];

mysqli_query($con, "update rail_ticket set Status = 1 where id = '$ID'");
?>