<?php


include 'config.php';

session_start();

$user_id = 'unknown';

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

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
   <title>Contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'indexheader.php'; ?>

<div class="heading">
   <h3>Contact us</h3>
   <p> <a href="index.php">Home</a> / Contact Us </p>
</div>

<section class="contact">

   <form action="" method="post">
      <h3>say something!</h3>
      <input type="text" name="name" required placeholder="enter your name..." class="box">
      <input type="email" name="email" required placeholder="enter your email..." class="box">
      <input type="number" name="number" required placeholder="enter your number..." class="box">
      <textarea name="message" class="box" placeholder="enter your message..." id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

</section>








<?php include 'indexfooter.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>