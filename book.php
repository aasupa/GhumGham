
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
$result = mysqli_query($conn, "SELECT name FROM packages");
?>

<?php
   include 'config.php';
   $sy=date("Y-m-d");
  
   
   
   if(isset($_POST['send']))
   {
      
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $method = $_POST['method'];

      if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
         $message[] ="name not valid";
       }
       else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $message[] ="Email not valid!!";
        }
      else if (strlen($phone) < 10) { 
         $message[] ="Phone number not valid!!";
       }
      else if($method == "esewa" || $method == "credit card" ){

         $message[] ="Online payment not available yet!";
       }
       else if($arrivals > $leaving || $sy > $arrivals) {
         $message[] ="Arrival date not valid!";
       }
     
     else{
      $request = " insert into book_form(user_id, firstname, lastname, email, phone, address, location, guests, arrivals, leaving, method) values('$user_id','$firstname','$lastname','$email','$phone','$address','$location','$guests','$arrivals','$leaving', '$method') ";
      mysqli_query($conn, $request);
      
      header('location:book.php');
     }
     
   }
   

?>


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
        <a href="my_book.php">My Bookings</a>
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
         <?php
include 'config.php';
?>
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
    
</section>



<div class="heading" style="background:url(images/sky1.png) no-repeat">
   <h1>book now</h1>
</div>





<section class="booking">
<style>
body {
  background-image: url('images/luggage.png');
  background-size:11rem;
  background-position-x: 22rem;
  background-position-y: 21rem;
  background-repeat: no-repeat;
}
</style>
   <h1 class="heading-title">book your trip!</h1>
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
   <form action="" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>First name :</span>
            <input type="text" placeholder="enter your firstname" name="firstname"  required class="box">
            
         </div>
         <div class="inputBox">
            <span>Last name :</span>
            <input type="text" placeholder="enter your lastname" name="lastname" required class="box">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required class="box">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone" required class="box">
         </div>
         <div class="inputBox">
         <span>Where to :</span>
         <select name = 'location'>
         <option>Select the package name</option>
            <?php 
            if($result)
            {
               while($row = mysqli_fetch_array($result))
               {
                  $pname=$row["name"];
                  echo"<option>$pname</option>";
               }
            }
            ?>
         </select>
            
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="enter your address" name="address" required class="box">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" required class="box">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required class="box">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required class="box">
         </div>
         <div class="inputBox">
            <span>payment method :</span>
            <select name="method">
               <option value="cash on delivery">cash on delivery</option>
               <option value="credit card">credit card(not available yet!)</option>
               <option value="esewa">esewa(not available yet!)</option>
            </select>
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