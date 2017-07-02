<?php include('../../core/int.php'); 
include('../../abeautifulsite/SimpleImage.php');
  
$img = new abeautifulsite\SimpleImage();
  
$image = rand().$_FILES["destImage"]["name"];
$image_tmp = $_FILES["destImage"]["tmp_name"];
$STT = $_POST['select_dest_type'];
$dest_name = $_POST['destName']; 
$des = $_POST['des']; 
$rand = rand();
$dest_id = $_POST['dest_id'];
$dest_image = $_POST['dest_image'];

$image_path = '../../dist/img/package-images/'.$image;
$imgae_delete = '../../dist/img/package-images/'.$dest_image;



if(empty($_FILES["destImage"]["name"]) === true) {
  
 if(! mysqli_query($con, "update destination set Dest_Name = '$dest_name', Dest_Type = '$STT', Des = '$des' where D_ID = '$dest_id'")) {
 	echo 'Error :- '.mysqli_error($con);
}
  
} else {
  
  unlink($imgae_delete);
  
  $img->load($image_tmp);
  $img->resize(1300, 812);
  $img->save($image_path);
  
 if(! mysqli_query($con, "update destination set Dest_Name = '$dest_name', Dest_Type = '$STT', Dest_Image = '$image' , Des = '$des' where D_ID = '$dest_id'")) {
 	echo 'Error :- '.mysqli_error($con);
}

}




?>