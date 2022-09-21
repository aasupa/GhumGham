<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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
        <a href="register.php">Signup</a>
        </div>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

    </nav>
    
</section>



<div class="heading" style="background:url(images/sky1.png) no-repeat">
   <h1>book now</h1>
</div>



<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="bookform.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

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