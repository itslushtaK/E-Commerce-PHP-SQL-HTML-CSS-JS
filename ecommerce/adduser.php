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
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $role = 'user';

  if (empty($name)) {
    $error = 'Please enter your name.<br>';
}

  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    $error = 'Email or username already taken';
  }if (empty($username)) {
    $error = 'Please enter a username.<br>';
}
else if (empty($email)) {
    $error = 'Please enter your email address.<br>';
}
else if (empty($password)) {
    $error = 'Please enter a password.<br>';
}
else if (empty($confirmpassword)) {
    $error= 'Please confirm your password.<br>';
}
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password' ,'$role')";
      mysqli_query($conn, $query);      
        echo '<script>alert("User added Succesfuly");
       </script> ';
       header("Location: dashboard.php");

    }
    else{
      $error = 'Password must match!';
    }
  }
}
?>
<br>
<br>
<div class="register">
        <form action="" method="post" class="col-md-4 mx-auto">
    <h3 class="fw-bold">Add User</h3>
    <img src="images/logo.png" alt="" class="col-md-6 rounded mx-auto d-block">
    <?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
    <?php if (isset($sucsses)) echo '<div class="alert alert-success">' . $sucsses . '</div>'; ?>

    <input type="text" placeholder="Full Name" id="name" name="name" class="shadow-sm p-3 rounded" value="<?php if (isset($name)) echo $name; ?>"><br>
    <input type="text" placeholder="username" id="username" name="username" class="shadow-sm p-3 rounded" value="<?php if (isset($surname)) echo $surname; ?>"><br>
    <input type="email" placeholder="Email" id="email" name="email" class="shadow-sm p-3 rounded" value="<?php if (isset($email)) echo $email; ?>"><br>
    <input type="password" placeholder="Password" id="password" name="password" class="shadow-sm p-3 rounded"><br>
    <input type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" class="shadow-sm p-3 rounded"><br>
    <button type="submit" name="submit" class="btn btn-success col-md-2">Add User</button>

</form>
<a href="dashboard.php">
<button type="button" class="btn btn-outline-success position-absolute top-1 end-0 left-10 ">Return to Dashboard</button></a>
</div>
