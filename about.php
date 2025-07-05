<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel = "icon" href = "images/favicons.png" 
        type = "image/x-icon">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Wonderland Bookstore helping you discover and buy the things you love. Trusted independent sellers from around the world offer for sale millions of new, used and rare books.</p>
         <p>The magic of Wonderland Bookstore is filling your shelves with affordable books, discovering that long-lost title, finding an out-of-print or collectible book that's become hard to find, or discovering something magical from the past that you simply did not know existed.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/chinese.jpg" alt="">
         <p>Excellent Service. Wide selection of Malay and English books. Fully recommended for book lovers and students. Fast delivery and they also sending books without any shipping fees. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Loh Chee Hong</h3>
      </div>

      <div class="box">
         <img src="images/client 2.jpg" alt="">
         <p>One of the best online bookstores. There is a large selection of books and you will be spoiled for choice. The bookstore website is extremely well-organized. While the cost of books appears to be different for the user and member, as a member, you may occasionally receive an additional discount. I've purchased other online book stores as well, but this one is truly worth to buy.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Joseph Vijay</h3>
      </div>

      <div class="box">
         <img src="images/malay.jpg" alt="">
         <p>Never stepped into a online bookstore before. But lately, it becomes more famous with the millions of new, used and rare book collections. Become a member and get more discounts! Love to purchase here. Keep it up!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sofia</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Best Selling authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/JKRowling" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/jk_rowling" class="fab fa-twitter"></a>
			<a href="https://www.instagram.com/robertgalbraith/" class="fab fa-instagram"></a>
         </div>
         <h3>J.K. Rowling</h3>
		 <h4>A British author and philanthropist known by her pen name J. K. Rowling. She wrote a seven-volume children's fantasy series, Harry Potter, published from 1997 to 2007.</h4><br>
      </div>

      <div class="box">
         <img src="images/author2.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/LeeChildOfficial" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/leechildreacher?lang=en" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/jackreacherbooks/?hl=en" class="fab fa-instagram"></a>
         </div>
         <h3>James Dover Grant</h3>
		 <h4>Primarily known by his pen name Lee Child, is a British author who writes thriller novels, and is best known for his Jack Reacher novel series. The books follow the adventures of a former American military policeman, Jack Reacher, who wanders the United States.</h4><br>
      </div>

      <div class="box">
         <img src="images/author3.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/DanielleSteelOfficial" class="fab fa-facebook-f"></a>
            <a href="https://mobile.twitter.com/daniellesteel" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/officialdaniellesteel/" class="fab fa-instagram"></a>
         </div>
         <h3>Danielle Steel</h3>
		 <h4>An American writer, best known for her romance novels. She is the bestselling author alive and the fourth-bestselling fiction author of all time, with over 800 million copies sold. As of 2021, she has written 190 books, including over 141 novels.</h4><br>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>