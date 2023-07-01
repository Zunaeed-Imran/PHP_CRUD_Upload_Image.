<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  include 'config.php';
  $id = $_GET['id'];
  $record = mysqli_query($con, "select * from `image2` where id = $id");
  $data = mysqli_fetch_array($record);

  ?>

  <center>
    <div class="main">
      <form action="" method="post" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" value="<?php echo $data['name'] ?>" name="name"></br>
        <label for="">Price</label>
        <input type="text" value="<?php echo $date['price'] ?>" name="price" id=""><br>
        <label for="">Image</label>
        <input type="file" value="<?php echo $data['image'] ?>" name="image" id=""><img src="<?php echo $data['image'] ?>" width='200px' height='70px' alt=""><br>
        <input type="hidden" value="<?php echo $data['id'] ?>" name="id" id="">
        <button type="submit" name="uplaod" class="btn btn-success">Upload</button>
      </form>
    </div>
  </center>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>