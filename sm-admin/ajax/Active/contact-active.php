<?php include('../../core/int.php'); 
$ID = $_POST['ID'];

mysqli_query($con, "update contact set Status = 1 where id = '$ID'");
?>