<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
require 'db.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $price = $_POST["price"];
  $caption = $_POST["caption"];
  

 if (empty( $name)) {
    $error = 'Please enter a name.<br>';
}
else if (empty($price)) {
    $error = 'Please enter price.<br>';
}
else if (empty($caption)) {
    $error = 'Please enter a caption.<br>';
}
else{
      $query = "INSERT INTO product VALUES('$name','$price',$caption)";
      mysqli_query($conn, $query);      
        echo '<script>alert("Product added Succesfuly");
       </script> ';
       header("Location: Homepage.php");
}
    }
    
  
?>
<br>
<br>
<div class="products">
        <form action="" method="post" class="col-md-4 mx-auto">
    <h3 class="fw-bold">Add Product</h3>
    <img src="images/logo.png" alt="" class="col-md-6 rounded mx-auto d-block">
    <?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
    <?php if (isset($sucsses)) echo '<div class="alert alert-success">' . $sucsses . '</div>'; ?>
    <input type="image" placeholder="Photo" id="photo" name="photo" class="shadow-sm p-3 rounded" value="<?php if (isset($price)) echo $price; ?>"><br>
    <input type="text" placeholder="Name of product" id="name" name="name" class="shadow-sm p-3 rounded" value="<?php if (isset($name)) echo $name; ?>"><br>
    <input type="number" placeholder="Price" id="price" name="price" class="shadow-sm p-3 rounded" value="<?php if (isset($price)) echo $price; ?>"><br>
    <input type="text" placeholder="Caption" id="caption" name="caption" class="shadow-sm p-3 rounded" value="<?php if (isset($caption)) echo $caption; ?>"><br>
    <button type="submit" name="submit" class="btn btn-success col-md-2">Add User</button>

</form>
<a href="dashboard.php">
<button type="button" class="btn btn-outline-success position-absolute top-1 end-0 left-10 ">Return to Dashboard</button></a>
</div>
