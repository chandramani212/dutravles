<?php include('../../core/int.php'); 
$ID = $_POST['ID'];

mysqli_query($con, "update bus_ticket set Status = 1 where id = '$ID'");
?>