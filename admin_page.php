<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
    
</head>

<body>
   
<?php include 'admin_header.php'; ?>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

      

      

      <div class="box">
         <?php 
            $select_book = mysqli_query($conn, "SELECT * FROM `book_form`") or die('query failed');
            $number_of_books = mysqli_num_rows($select_book);
         ?>
         <h3><?php echo $number_of_books; ?></h3>
         <p>Booking placed</p>
      </div>

      <div class="box">
         <?php 
            $select_package = mysqli_query($conn, "SELECT * FROM `packages`") or die('query failed');
            $number_of_package = mysqli_num_rows($select_package);
         ?>
         <h3><?php echo $number_of_package; ?></h3>
         <p>Total packages</p>
      </div>


      <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p>Normal users</p>
      </div>

      <div class="box">
         <?php 
            $select_admins = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'admin'") or die('query failed');
            $number_of_admins = mysqli_num_rows($select_admins);
         ?>
         <h3><?php echo $number_of_admins; ?></h3>
         <p>Admin users</p>
      </div>

      <div class="box">
         <?php 
            $select_account = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
            $number_of_account = mysqli_num_rows($select_account);
         ?>
         <h3><?php echo $number_of_account; ?></h3>
         <p>Total accounts</p>
      </div>

      <div class="box">
         <?php 
            $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <h3><?php echo $number_of_messages; ?></h3>
         <p>New messages</p>
      </div>

   </div>

   <style>
body {
  background-image: url('images/compass.png');
  background-size: 75rem;
  background-position-x: 90rem;
  background-position-y: 35rem;
  background-repeat: no-repeat;
}
</style>
</section>


<!-- admin dashboard section ends -->








<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>