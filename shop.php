<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
}

if(isset($_POST['add_to_cart'])){

   $vila_name = $_POST['vila_name'];
   $vila_price = $_POST['vila_price'];
   $vila_image = $_POST['vila_image'];
   $vila_quantity = $_POST['vila_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$vila_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$vila_name', '$vila_price', '$vila_quantity', '$vila_image')") or die('query failed');
      $message[] = 'vila added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>our shop</h3>
   <p> <a href="home.php">home</a> / shop </p>
</div>

<section class="products">

   <h1 class="title">latest vila</h1>

   <div class="box-container">

      <?php  
         $select_vila = mysqli_query($conn, "SELECT * FROM `vila`") or die('query failed');
         if(mysqli_num_rows($select_vila) > 0){
            while($fetch_vila = mysqli_fetch_assoc($select_vila)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_vila['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_vila['name']; ?></div>
      <div class="price">$<?php echo $fetch_vila['price']; ?>/-</div>
      <input type="number" min="1" name="vila_quantity" value="1" class="qty">
      <input type="hidden" name="vila_name" value="<?php echo $fetch_vila['name']; ?>">
      <input type="hidden" name="vila_price" value="<?php echo $fetch_vila['price']; ?>">
      <input type="hidden" name="vila_image" value="<?php echo $fetch_vila['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      <a href="shop.php?detail=<?php echo $fetch_vila['id_detail']; ?>" class="option-btn">show detail</a>
      <!-- <a href="staff_detail">
      <a href="staff_detail.php">Detail produk</a> -->

     </form>
  
      <?php
         }
      }else{
         echo '<p class="empty">no vila added yet!</p>';
      }
      ?>
   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>