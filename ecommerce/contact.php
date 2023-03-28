<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">    
    
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="container">
          <div class="navbar">
            <div class="logo">
              <a href="homepage.php"><img src="images/logo.png" alt="lushtakuSHOP" width="125px" /></a>
            </div>
            <nav>
              <ul id="MenuItems">
                <a href="homepage.php">
                <li>Home</li></a>
                <li id="item2" onclick="changeActive(this)"><a href="#products">Products</a></li>
                <li id="item3" onclick="changeActive(this)"><a href="#">About</a></li>
                <li id="item4" onclick="changeActive(this)"><a href="contact.html">Contact</a></li>
                <?php
    
                require 'db.php';
            
            
                    
                if(isset($_SESSION['id'])){
                  // user is logged in
                  $id = $_SESSION['id'];
               
                  // fetch user role from database
                  $query = "SELECT * FROM tb_user WHERE id = $id";
                  // execute query and fetch role
                  $result = mysqli_query($conn, $query);
                  $tb_user = mysqli_fetch_assoc($result); // assign result to $tb_user
                  
                  echo '<li>' . $tb_user['username'] . '</li>';
                  echo'<li><a href="logout.php">LogOut</a></li>';
            
                  // check if user is admin
                  if(!empty($tb_user) && $tb_user['role'] == 'admin'){
                      // user is admin
                      echo '<li><a href="dashboard.php">Dashboard</a></li>';
                      echo '<li><a href="addproduct.php">Add Product</a></li>';
                  }
                  
              } else {
                  //not logged in show register button
                  echo '<li><a href="register.php">Register here</a></li>';
              }
              
            ?></ul>
                </nav>
                </div>
                </div>
 
                <div class="background">
                    <div class="container mt-30">
                      <div class="screen">
                        <div class="screen-header">
                          <div class="screen-header-left">
                            <div class="screen-header-button close"></div>
                            <div class="screen-header-button maximize"></div>
                            <div class="screen-header-button minimize"></div>
                          </div>
                          <div class="screen-header-right">
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                          </div>
                        </div>
                        <div class="screen-body">
                          <div class="screen-body-item left">
                            <div class="app-title">
                              <span>CONTACT</span>
                              <span>US</span>
                            </div>
                            <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
                          </div>
                          <div class="screen-body-item">
                            <div class="app-form">
                              <div class="app-form-group">
                                <input class="app-form-control" placeholder="NAME" name="name" value="Gentuar Lushtaku">
                              </div>
                              <div class="app-form-group">
                                <input class="app-form-control" name="email" placeholder="EMAIL">
                              </div>
                              <div class="app-form-group">
                                <input class="app-form-control" name="coontact" placeholder="CONTACT NO">
                              </div>
                              <div class="app-form-group message">
                                <input class="app-form-control" name="mesage" placeholder="MESSAGE">
                              </div>
                              <div class="app-form-group buttons">
                                <button class="app-form-button">SEND</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>

                  <?php
                  

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $coontact = $_POST["coontact"];
  $mesage = $_POST["mesage"];

  if (empty($name)) {
    $error = 'Please enter your name.<br>';
}


else if (empty($email)) {
    $error = 'Please enter your email address.<br>';
}
else if (empty($coontact)) {
    $error = 'Please enter a password.<br>';
}
else if (empty($mesage)) {
    $error= 'Please confirm your password.<br>';
}
  else{
  
      $query = "INSERT INTO contact VALUES('$name','$email','$coontact' ,'$mesage')";
      mysqli_query($conn, $query);      
      $sucsses = 'Message send Succesfuly!';
    }
    
  }

?>
                  
</div>
</body>
<div class="footer">
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

  <!-- js for toggle menu -->
   <script src="index.js"></script>
</body>

</html>