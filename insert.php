<?php
include 'config.php';

if (isset($_POST)) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_FILES['image'];

  $img_tmp_name = $image['tmp_name'];
  $img_name = $image['name'];
  $img_destination = 'uploadimage/' . $img_name;

  // Move the uploaded file to the desired destination
  move_uploaded_file($img_tmp_name, $img_destination);

  // Insert the file details into the database
  $query = "INSERT INTO `image2` (`name`, `price`, `image`) VALUES ('$name', '$price', '$img_destination')";
  mysqli_query($con, $query);
}
