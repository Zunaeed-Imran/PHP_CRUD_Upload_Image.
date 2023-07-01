<?php
include 'config.php';

if(isset($_POST['upload'])){
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_FILES['image'];
  print_r($_FILES['image']);
  $img_loc = $_FILES['image']['tmp_name'];
  $img_name = $_FILES['image']['name'];
  $img_des = "uploadimage/".$img_name;
  move_uploaded_file($img_loc, 'uploadimage/'.$img_name);


  mysqli_query($con, "insert into `image2`(`name`, `price`, `image`) values ('$name', '$price', '$img_des')");
}
