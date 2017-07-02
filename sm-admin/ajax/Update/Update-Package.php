<?php include('../../core/int.php'); 
include('../../abeautifulsite/SimpleImage.php');
	
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
$package_id = $_POST['package_id'];
$package_image = $_POST['package_image'];

$image_path = '../../dist/img/package-images/'.$image;
$imgae_delete = '../../dist/img/package-images/'.$package_image;



if(empty($_FILES["packageImage"]["name"]) === true) {
	
	mysqli_query($con, "update package set D_ID = '$select_dest', Package_Name = '$package_name', Days = '$days', Nights = '$nights', Fake_Price = '$fake_price', Original_Price = '$original_price',  Des = '$description', Inclusions = '$inclusions', Exclusions = '$exclusions', Itinerary = '$itinerary' where P_ID = '$package_id'");
	
} else {
	
	unlink($imgae_delete);
	
	$img->load($image_tmp);
	$img->resize(1300, 926);
	$img->save($image_path);
	
	mysqli_query($con, "update package set D_ID = '$select_dest', Package_Name = '$package_name', Days = '$days', Nights = '$nights', Fake_Price = '$fake_price', Original_Price = '$original_price',  Des = '$description', Inclusions = '$inclusions', Exclusions = '$exclusions', Itinerary = '$itinerary', Package_Image = '$image' where P_ID = '$package_id'");
	

}











?>