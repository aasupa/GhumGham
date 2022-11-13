<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `book_form` WHERE id = '$delete_id'") or die('query failed');
   header('location:my_book.php');
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<section class="header">
    <a href="index.php" class="logo">GhumGham.</a>
    <nav class="navbar">
        <div class="nav-menu">
        <a class="active" href="index.php">Home</a>
        <a href="package.php">Packages</a>
        <a href="book.php">Book</a>
        <a href="my_book.php">My bookings</a>
        </div>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

    </nav>
    
    <div class="icons">
            <div id="user-btn" class="fas fa-user"></div>
         </div>

         <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
</section>


<div class="heading" style="background:url(images/cloud1.png) no-repeat">
   <h1>My Bookings</h1>
</div>


<section class="placed-orders">

<h1 class="heading-title">Booking Placed</h1>

   <div class="box-container">
   <?php
         $order_query = mysqli_query($conn, "SELECT * FROM `book_form` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="box">
      <p> First name : <span><?php echo $fetch_orders['firstname']; ?></span> </p>
         <p> Last name : <span><?php echo $fetch_orders['lastname']; ?></span> </p>
         <p> Phone number : <span><?php echo $fetch_orders['phone']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> Address : <span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> Destination package : <span><?php echo $fetch_orders['location']; ?></span> </p>
         <p> Date of arriving : <span><?php echo $fetch_orders['arrivals']; ?>/-</span> </p>
         <p> Date of leaving : <span><?php echo $fetch_orders['leaving']; ?>/-</span> </p>
         <p> Payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
         <form action="" method="post">
            
            <a href="my_book.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">Cancel Booking</a>
         </form>
      </div>
      <?php
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

   </div>

</section>





<section class="footer" style="background:url(./images/footer-bg.jpg) no-repeat">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="Service.php"> <i class="fas fa-angle-right"></i> Service</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>


      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +977-981-234567 </a>
         <a href="#"> <i class="fas fa-phone"></i> +977-987-654321 </a>
         <a href="#"> <i class="fas fa-envelope"></i> ghumgham123@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Lakeside-6, Pokhara </a>
      </div>

      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

</section>

































<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="./js/jscript.js"></script>
</body>
</html>