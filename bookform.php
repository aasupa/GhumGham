<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>
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

<?php
   $connection = mysqli_connect('localhost','root','','shop_db');
   if(isset($_POST['send'])){
      
      $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $method = $_POST['method'];

      if (strlen($phone) <= 10) { 
         $message[] ="Phone not valid";
     }
     else{
      $request = " insert into book_form(user_id, firstname, lastname, email, phone, address, location, guests, arrivals, leaving, method) values('$user_id','$firstname','$lastname','$email','$phone','$address','$location','$guests','$arrivals','$leaving', '$method') ";
      mysqli_query($connection, $request);
      
      header('location:book.php');
     }
     }
   else{
      echo'Something went wrong';
   }

?>

