<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a target="_blank" href="https://www.facebook.com/theri.pasange" class="fab fa-facebook-f"></a>
            <a target="_blank" href="https://twitter.com/ArivindhaanY" class="fab fa-twitter"></a>
            <a target="_blank" href="https://www.instagram.com/arivindhaan_1507_/" class="fab fa-instagram"></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCaVHysc1HWPGv0nkWd7nqsA" class="fab fa-youtube"></a>
         </div>
      
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
      <img src="images/favicons.png" style="width:50px;height:50px;"/>
         <a href="index.php" class="logo">WONDERLAND BOOKSTORE<br><p style="font-size: 14px;text-align: center;color:black;"><b>ECOMMERCE BOOKSTORE & MEMBERSHIP</b><p></a>

         <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="indexabout.php">About Us</a>
            <a href="indexshop.php">Shop</a>
            <a href="indexcontact.php">Contact Us</a>
            <a href="orders.php">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="index_search_page.php" class="fas fa-search"></a>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> </a>
            <div id="user-btn" class="fas fa-user"></div>
         </div>

         <div class="user-box">
         <p> <a href="login.php">Login</a> | <a href="register.php">Register</a> </p>
         </div>
      </div>
      
   </div>

</header>