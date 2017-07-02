<?php include('../../core/int.php'); 
include('../../abeautifulsite/SimpleImage.php');

if(isset($_FILES["destImage"]["type"])) {
	
$img = new abeautifulsite\SimpleImage();
	
$image = rand().$_FILES["destImage"]["name"];
$image_tmp = $_FILES["destImage"]["tmp_name"];
$SDT = $_POST['select_dest_type'];
$dest_name = $_POST['destName'];	
$des = $_POST['des'];
$rand = rand();

$image_path = '../../dist/img/package-images/'.$image;

$img->load($image_tmp);
$img->resize(1300, 812);
$img->save($image_path);

if(!mysqli_query($con, "insert into destination(Dest_Name, Dest_Type, Dest_Image, Des, Dest_Rand) values('$dest_name', '$SDT', '$image', '$des', '$rand')")) {
	echo 'Error :- '.mysqli_error($con);
}

}





?>