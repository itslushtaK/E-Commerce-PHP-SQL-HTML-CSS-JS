
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" />
  <title>lushtakuSHOP</title>
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
            <li id="item4" onclick="changeActive(this)"><a href="contact.php">Contact</a></li>
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
      
      echo '<details><summary><li>' . $tb_user['username'] . '</li></summary>';
      echo ' <li><a href="logout.php">LogOut</a></li>';
      // check if user is admin
      if(!empty($tb_user) && $tb_user['role'] == 'admin'){
          // user is admin
          
          echo '<li><a href="dashboard.php">Dashboard</a></li>';
          echo '<li><a href="addproduct.php">Add Product</a></li> </details>';
      }
      
  } else {
      //not logged in show register button
      echo '<li><a href="register.php">Register here</a></li>';
  }
  
?>

          </ul>
        </nav>
        <a href="cart.html"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px" height="30px" /></a>
        <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
      </div>
      <div class="row">
        <div class="col-2">
          <h1>
            Give Your Workout <br />
            A New Style!
          </h1>
          <p>
            Success isn't always about greatness. It's about consistency.
            Consistent <br />hard work gains success. Greatness will come.
          </p>
          <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="https://i.ibb.co/QpTmdX5/image1.png" alt="" />
        </div>
      </div>
    </div>
  </div>

  <!-- Featured categories -->
  <div class="categories" >
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="https://i.ibb.co/sqnY1pG/category-1.jpg" alt="" />
        </div>
        <div class="col-3">
          <img src="https://i.ibb.co/GCJLQRQ/category-2.jpg" alt="" />
        </div>
        <div class="col-3">
          <img src="https://i.ibb.co/wYsXqP5/category-3.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>

  <!-- Featured products -->
  <div class="small-container" id="products">
    <h2 class="title">Featured Products</h2>
    <div class="row">
      <div class="col-4">
        <a href="product_details.html"><img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" /></a>
        <a href="product_details.html">
          <h4>Red Printed T-shirt</h4>
        </a>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/0cMfpcr/product-4.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
      <div class="col-4">
        <img src="https://i.ibb.co/bQ5t8bR/product-5.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/vVpTyBD/product-6.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/hR5FGwH/product-7.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/QfCgdXZ/product-8.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <img src="https://i.ibb.co/nw5xZwk/product-9.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/9HCsmjf/product-10.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/JQ2MBHR/product-11.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹500.00</p>
      </div>

      <div class="col-4">
        <img src="https://i.ibb.co/nRZMs6Y/product-12.jpg" alt="" />
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
    </div>
  </div>
  <!-- offer -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="https://i.ibb.co/HF5TncZ/exclusive.png" alt="" class="offer-img" />
        </div>
        <div class="col-2">
          <p>Exclusively Available on RedStore</p>
          <h1>Smart Band 4</h1>
          <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3)
            AMOLED color full-touch display with adjustable brightness, so
            everything is clear as can be.</small>
          <br />
          <a href="#" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonial -->
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis, quae molestias error id est voluptatibus quos amet
            numquam aspernatur nam cumque ullam? Veritatis eveniet et, maxime
            eaque soluta quas modi.
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="images/me.png" alt="" />
          <h3>Gentuar Lushtaku</h3>
        </div>

        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis, quae molestias error id est voluptatibus quos amet
            numquam aspernatur nam cumque ullam? Veritatis eveniet et, maxime
            eaque soluta quas modi.
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="images/person1.png" alt="" />
          <h3>Hashim Thaçi</h3>
        </div>

        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis, quae molestias error id est voluptatibus quos amet
            numquam aspernatur nam cumque ullam? Veritatis eveniet et, maxime
            eaque soluta quas modi.
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="images/personi2.png" alt="" />
          <h3>Kadri Veseli</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- brands -->
  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5"><a href="samsung.com">
          <img src="https://logos-world.net/wp-content/uploads/2020/04/Samsung-Logo.png" alt="" />
        </a>
        </div>

        <div class="col-5"><a href="https://www.albigroup.com/">
          <img src="https://imgs.search.brave.com/Rbr9I438VPD9t2GMHkMVaFs4adbumKINtSPBUfqzsps/rs:fit:601:301:1/g:ce/aHR0cHM6Ly9ncmFm/aWthLmFsL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDIwLzEwL2Fs/YmltYWxsLnBuZw" alt="" />
        </a>
        </div>

        <div class="col-5"><a href="https://us.coca-cola.com/">
          <img src="https://i.ibb.co/3zs234S/logo-coca-cola.png" alt="" /></a>
        </div>

        <div class="col-5"><a href="https://www.paypal.com/rs/home">
          <img src="https://i.ibb.co/7Wt343W/logo-paypal.png" alt="" /></a>
        </div>

        <div class="col-5">
          <a href="https://www.usa.philips.com/">
          <img src="https://i.ibb.co/GVSNwJD/logo-philips.png" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
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