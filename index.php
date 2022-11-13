<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
            <div>new <a href="login.php">login</a> | <a href="register.php">register</a></div>
         </div>
</section>


<section class="home">

    <div class ="swiper home-slider">

       <div class="swiper-wrapper">

             <div class="swiper-slide slide" style="background:url(./images/stupa2.jpg) no-repeat">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Pokhara</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
             </div>

             <div class="swiper-slide slide" style="background:url(./images/parasuit.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(./images/boat1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>
    



<!-- services section starts  -->

<section class="services">



   <h1 class="heading-title"> our services! </h1>

   <div class="box-container">

      <div class="box" data-aos="fade-right">
         <img src="images/paragliding.png" alt="">
         <h3>Paragliding</h3>
      </div>

      <div class="box" data-aos="fade-right">
         <img src="images/bunjee2.png" alt="">
         <h3>Bunjee jump</h3>
      </div>

      <div class="box" data-aos="fade-right">
         <img src="images/camp.jpg" alt="">
         <h3>Camping</h3>
      </div>

      <div class="box" data-aos="fade-left">
         <img src="images/trekking.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box" data-aos="fade-left">
         <img src="images/zipflyer.png" alt="">
         <h3>Zip flyer</h3>
      </div>

      <div class="box" data-aos="fade-left">
         <img src="images/bus.png" alt="">
         <h3>City sight seeing</h3>
      </div>

   </div>

</section>


<!-- services section ends -->







<!-- home about section starts  -->
<section class="home-about">

   <div class="image" data-aos="fade-right">
      <img src="images/mardi1.jpg" alt="">
   </div>

   <div class="content" data-aos="fade-left">
      <h3>About Us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
   </div>
          
</section>

<!-- home about section ends -->

<section class="map">
       <h1 class="heading-title">
      Search your destination!
      <div class="map-wrapper" data-aos="fade-left">
         <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56252.87395635391!2d83.968!3d28.213248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1667200795038!5m2!1sen!2snp"
          width="700vh" height="400vh" style="border:1vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>  
       <!--   <div class="content">
      <h3> search where u like to visit</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
   </div> -->

</section>



<section class="home-contact">

   <div class="content" data-aos="fade-left">
      <h3>have any questions?</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque exercitationem repellendus, amet ullam voluptatibus?</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>














<section class="footer" style="background:url(./images/footer-bg.jpg) no-repeat" >

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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 200, duration: 1000
    }
     
    );
  </script>
</body>
</html>