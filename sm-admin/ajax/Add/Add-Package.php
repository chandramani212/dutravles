<?php include('../../core/int.php'); 
include('../../abeautifulsite/SimpleImage.php');

if(isset($_FILES["packageImage"]["type"])) {
	
$img = new abeautifulsite\SimpleImage();
	
$image = rand().$_FILES["packageImage"]["name"];
$image_tmp = $_FILES["packageImage"]["tmp_name"];
$select_dest = $_POST['select_dest'];
$package_name = $_POST['package_name'];
$days = $_POST['days'];
$nights = $_POST['nights'];
$fake_price = $_POST['fake_price'];
$original_price = $_POST['original_price'];
$description = $_POST['description'];
$inclusions = $_POST['inclusions'];
$exclusions = $_POST['exclusions'];
$itinerary = $_POST['itinerary'];
$date = date('Y-m-d');

$image_path = '../../dist/img/package-images/'.$image;

$img->load($image_tmp);
$img->resize(1300, 926);
$img->save($image_path);

mysqli_query($con, "insert into package(D_ID, Package_Name, Package_Image, Days, Nights, Fake_Price, Original_Price, Des, Inclusions, Exclusions, Itinerary, Date) values('$select_dest', '$package_name', '$image', '$days', '$nights', '$fake_price', '$original_price', '$description', '$inclusions', '$exclusions', '$itinerary', '$date')");


}





?>