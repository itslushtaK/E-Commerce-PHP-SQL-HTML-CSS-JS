<?php
require 'db.php';
if(!empty($_SESSION["id"])){
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $sucsses = 'u kyqe me sukses';
      header('Location: homepage.php');
    }
    else{
            $error = 'wrong password!';
    }
  }
  else{
    $error = 'user doesnt exist!';
  }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
          <div class="navbar">
            <div class="logo">
              <a href="homepage.php"><img src="images/logo.png" alt="lushtakuSHOP" width="125px" /></a>
            </div>
            <nav >
              <ul id="MenuItems" >
                <a href="homepage.php">
                <li>Home</li></a>
                <li ><a href="#products">Products</a></li>
                <li ><a href="#">About</a></li>
                <li ><a href="#">Contact</a></li>
                <li ><a href="register.php">Register</a></li>
              </ul>
            </nav>
            <a href="cart.html"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px" height="30px" /></a>
            <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
          </div>
        <div class="register" >
        <form method="post"  class=" col-md-4 mx-auto " autocomplete="off">
            <img src="images/logo.png" alt="" class="col-md-6 rounded mx-auto d-block"> 
            <?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
            <?php if (isset($sucsses)) echo '<div class="alert alert-success">' . $sucsses . '</div>'; ?>

            <input type="text" placeholder="Email" id="usernameemail" name="usernameemail" class="shadow-sm p-3 rounded"><br>
            <input type="password" placeholder="Password" id="password" name="password" class="shadow-sm p-3 rounded"><br>
            <button type="submit" name="submit" class="btn btn-success">Login</button>
            <div class="login text-center mt-3">New User?<a href="Register.php" >Register Here</a></div>
            </div>

            <p class="text-center mt-2">OR</p> 
            <p class="text-center pb-9">Login with:</p>
            <div class="d-flex justify-content-center gap-3 mb-2">
                <img class="gg" src="https://imgs.search.brave.com/ixMn5-g4U2JZXnVwf1mBm9c0dH6jGDXoc54snSeY-HA/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9pbWFn/ZXBuZy5vcmcvd3At/Y29udGVudC91cGxv/YWRzLzIwMTkvMDgv/Z29vZ2xlLWljb24u/cG5n" alt="google">
                <img class="fb" src="https://imgs.search.brave.com/ZTfGUsbXOPHsrvWH4XSPFDZqLIsQdWuAaGsxujU2Ahw/rs:fit:1000:1000:1/g:ce/aHR0cDovL3BuZ2lt/Zy5jb20vdXBsb2Fk/cy9mYWNlYm9va19s/b2dvcy9mYWNlYm9v/a19sb2dvc19QTkcx/OTc1MC5wbmc" alt="google">
            </div>
            </form>
    </div>
    <div class="footer pt-40">
        <div class="container">
          <div class="row">
            <div class="footer-col-1">
              <h3>Download Our App</h3>
              <p>Download App for Android and is mobile phone.</p>
              <div class="app-logo">
                <img src="https://i.ibb.co/KbPTYYQ/play-store.png" alt="" />
                <img src="https://i.ibb.co/hVM4X2p/app-store.png" alt="" />
              </div>
            </div>
    
            <div class="footer-col-2">
              <a href="index.html">
              <img src="images/logo.png"  alt="" /></a>
              <p>
                Our Purpose Is To Sustainably Make the Pleasure and Benefits of
                Sports Accessible to the Many.
              </p>
            </div>
    
            <div class="footer-col-3">
              <h3>Useful Links</h3>
              <ul>
                <li>Coupons</li>
                <li>Blog Post</li>
                <li>Return Policy</li>
                <li>Join Affiliate</li>
              </ul>
            </div>
    
            <div class="footer-col-4">
              <h3>Follow us</h3>
              <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>YouTube</li>
              </ul>
            </div>
          </div>
          <hr />
          <p class="copyright">Copyright &copy; 2023 - lushtakuSHOP</p>
        </div>
      </div>
</body>
</html>