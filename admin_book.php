<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `book_form` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'payment status has been updated!';

}
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `book_form` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_book.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
    
</head>

<body>
   
<?php include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">Placed bookings</h1>

   <div class="box-container">
      <?php
      $select_orders = mysqli_query($conn, "SELECT * FROM `book_form`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
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
         <form action="" method="post">
         <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
            <select name="update_payment">
               <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
               <option value="canceled">canceled</option>
            </select>
            <input type="submit" value="update" name="update_order" class="option-btn">
            <a href="admin_book.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
         </form>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

</section>










<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>