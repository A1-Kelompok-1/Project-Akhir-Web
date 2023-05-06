<?php

include 'config.php';

session_start();

$staff_id = $_SESSION['staff_id'];

if(!isset($staff_id)){
   header('location:login.php');
};

if(isset($_POST['add_vila'])){

   $id_detail = $_POST['id_detail'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $price = $_POST['price'];
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select_vila_name = mysqli_query($conn, "SELECT name FROM `vila` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_vila_name) > 0){
      $message[] = 'vila name already added';
   }else{
      $add_vila_query = mysqli_query($conn, "INSERT INTO `vila`(id_detail, name, price, image) VALUES('$id_detail', '$name', '$price', '$image')") or die('query failed');

      if($add_vila_query){
         if($image_size > 2000000){
            $message[] = 'image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'vila added successfully!';
         }
      }else{
         $message[] = 'vila could not be added!';
      }
   }
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($conn, "SELECT image FROM `vila` WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM `vila` WHERE id = '$delete_id'") or die('query failed');
   header('location:staff_products.php');
}

if(isset($_POST['update_vila'])){

   $update_p_id = $_POST['update_p_id'];
   $update_id_detail = $_POST['update_id_detail'];
   $update_name = $_POST['update_name'];
   $update_price = $_POST['update_price'];

   mysqli_query($conn, "UPDATE `vila` SET id_detail = '$update_id_detail', name = '$update_name', price = '$update_price' WHERE id = '$update_p_id'") or die('query failed');

   $update_image = $_FILES['update_image']['name'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_folder = 'uploaded_img/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image file size is too large';
      }else{
         mysqli_query($conn, "UPDATE `vila` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
         move_uploaded_file($update_image_tmp_name, $update_folder);
         unlink('uploaded_img/'.$update_old_image);
      }
   }

   header('location:staff_products.php');

}
if(isset($_POST['detail'])){
   $detail_id = $_POST['detail_id'];
   $detail_nama_vila = $_POST['detail_nama_vila'];
   $detail_kota = $_POST['detail_kota'];
   $detail_deskripsi = $_POST['detail_deskripsi'];
   header('location:staff_detail.php');
}
if(isset($_POST['close-update-vila'])){
   header('location:staff_products.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poducts</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin1.css">
   <link rel="stylesheet" href="css/staff_detail1.css">
   
</head>
<body>
   
<?php include 'staff_header.php'; ?>

<!-- product CRUD section starts  -->

<section class="add-products">

   <h1 class="title">shop products</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>add vila</h3>
      <input type="number" min="0" name="id_detail" class="box" placeholder="enter detail vila" required>
      <input type="text" name="name" class="box" placeholder="enter vila name" required>
      <input type="number" min="0" name="price" class="box" placeholder="enter vila price" required>
      <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
      <input type="submit" value="add vila" name="add_vila" class="btn">
   </form>

</section>

<!-- product CRUD section ends -->

<!-- show products  -->

<section class="show-products">

   <div class="box-container">

      <?php
         $select_vila = mysqli_query($conn, "SELECT * FROM `vila`") or die('query failed');
         if(mysqli_num_rows($select_vila) > 0){
            while($fetch_vila = mysqli_fetch_assoc($select_vila)){
      ?>
      <div class="box">
         <img src="uploaded_img/<?php echo $fetch_vila['image']; ?>" alt="" class="product-image">
         <div class="name"><?php echo $fetch_vila['name']; ?></div>
         <div class="price">$<?php echo $fetch_vila['price']; ?>/-</div>
         <a href="staff_products.php?update=<?php echo $fetch_vila['id']; ?>" class="option-btn">update</a>
         <a href="staff_products.php?delete=<?php echo $fetch_vila['id']; ?>" class="delete-btn" onclick="return confirm('delete this vila?');">delete</a>
         <a href="staff_products.php?detail=<?php echo $fetch_vila['id']; ?>" class="option-btn">show detail</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no vila added yet!</p>';
      }
      ?>
   </div>

</section>

<section class="edit-product-form">
   <?php
      if(isset($_GET['update'])){
         $update_id = $_GET['update'];
         $update_query = mysqli_query($conn, "SELECT * FROM `vila` WHERE id = '$update_id'") or die('query failed');
         if(mysqli_num_rows($update_query) > 0){
            while($fetch_update = mysqli_fetch_assoc($update_query)){
   ?>
   <form action="staff_products.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
      <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
      <img src="uploaded_img/<?php echo $fetch_update['image']; ?>" alt="">
      <input type="number" name="update_id_detail" value="<?php echo $fetch_update['id_detail']; ?>" min="0" class="box" required placeholder="enter detail vila">
      <input type="text" name="update_name" value="<?php echo $fetch_update['name']; ?>" class="box" required placeholder="enter vila name">
      <input type="number" name="update_price" value="<?php echo $fetch_update['price']; ?>" min="0" class="box" required placeholder="enter vila price">
      <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" value="update" name="update_vila" class="btn">
      <input type="submit" value="cancel" id="close-update-vila" class="option-btn">
   </form>
   <?php
         }
      }
      }else{
         echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
      }
   ?>
</section>
<section class="edit-detail-form">
   <?php
      if(isset($_GET['detail'])){
         $detail_id = $_GET['detail'];
         $detail_query = mysqli_query($conn, "SELECT * FROM `detail_vila` WHERE id = '$detail_id'") or die('query failed');
         if(mysqli_num_rows($detail_query) > 0){
            while($fetch_detail = mysqli_fetch_assoc($detail_query)){
   ?>
   <form action="staff_products.php" method="post" enctype="multipart/form-data">
       <label style="font-size:20px">Nama </label>
    <input type="text" name="detail_nama_vila" value="<?php echo $fetch_detail['nama_vila']; ?>"disabled class="box" placeholder="enter nama_vila">
    <label style="font-size:20px">Kota </label>
      <input type="text" name="detail_kota" value="<?php echo $fetch_detail['kota']; ?>" class="box" disabled placeholder="enter kota">
      <label style="font-size:20px">Deskrpsi </label>
      <input type="text" name="detail_deskripsi" value="<?php echo $fetch_detail['deskripsi']; ?>" class="box"   disabled placeholder="enter deskripsi_vila">
      <input type="submit" value="close" id="close-update-vila" class="option-btn">
   </form>
   <?php
         }
      }
      }else{
         echo '<script>document.querySelector(".edit-detail-form").style.display = "none";</script>';
      }
   ?>
</section>
<style>
  .product-image {
    max-width: 100%;
    height: auto;
  }
</style>
<!-- custom admin js file link  -->
<script src="js/page_script.js"></script>

</body>
</html>