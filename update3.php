<?php
include 'config.php';
if(isset($_POST['update'])){
$id = $_POST['id'];  
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image'];
print_r($_FILES['image']);
$img_loc = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
$img_des = "uploadImage/".$img_name;
move_uploaded_file($img_loc, 'uploadImage/'.$image_name);

mysqli_query($con, "update `image2` set `name` = '$name', `price` = '$price', `image` = '$img_des' where id = '$id' ");
header("location:image2.php");
}
?>