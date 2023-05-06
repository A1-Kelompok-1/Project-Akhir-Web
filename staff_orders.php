<?php

include 'config.php';

session_start();

$staff_id = $_SESSION['staff_id'];

if(!isset($staff_id)){
   header('location:login.php');
}

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `reservasi` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'payment status has been updated!';

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `reservasi` WHERE id = '$delete_id'") or die('query failed');
   header('location:staff_orders.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'staff_header.php'; ?>

<section class="orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">
      <?php
      $select_reservasi = mysqli_query($conn, "SELECT * FROM `reservasi`") or die('query failed');
      if(mysqli_num_rows($select_reservasi) > 0){
         while($fetch_reservasi = mysqli_fetch_assoc($select_reservasi)){
      ?>
      <div class="box">
         <p> user id : <span><?php echo $fetch_reservasi['user_id']; ?></span> </p>
         <p> placed on : <span><?php echo $fetch_reservasi['placed_on']; ?></span> </p>
         <p> name : <span><?php echo $fetch_reservasi['name']; ?></span> </p>
         <p> number : <span><?php echo $fetch_reservasi['number']; ?></span> </p>
         <p> email : <span><?php echo $fetch_reservasi['email']; ?></span> </p>
         <p> address : <span><?php echo $fetch_reservasi['address']; ?></span> </p>
         <p> total products : <span><?php echo $fetch_reservasi['total_products']; ?></span> </p>
         <p> total price : <span>$<?php echo $fetch_reservasi['total_price']; ?>/-</span> </p>
         <p> payment method : <span><?php echo $fetch_reservasi['method']; ?></span> </p>
         <form action="" method="post">
            <input type="hidden" name="order_id" value="<?php echo $fetch_reservasi['id']; ?>">
            <select name="update_payment">
               <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <input type="submit" value="update" name="update_order" class="option-btn">
            <a href="staff_orders.php?delete=<?php echo $fetch_reservasi['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
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
<script src="js/page_script.js"></script>

</body>
</html>