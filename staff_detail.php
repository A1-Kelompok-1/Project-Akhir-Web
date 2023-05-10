<?php
include 'config.php';

session_start();

$staff_id = $_SESSION['staff_id'];

if(!isset($staff_id)){
   header('location:index.php');
}

if(isset($_POST['add_detail'])){
   $nama_vila = mysqli_real_escape_string($conn, $_POST['nama_vila']);
   $kota = $_POST['kota'];
   $deskripsi = $_POST['deskripsi'];
   $select_vila_detail = mysqli_query($conn, "SELECT nama_vila FROM `detail_vila` WHERE nama_vila = '$nama_vila'") or die('query failed');
   if(mysqli_num_rows($select_vila_detail) > 0){
      $message[] = 'vila name already added';
      header('location:staff_detail.php');
   }else{
      $add_vila_query = mysqli_query($conn, "INSERT INTO `detail_vila`(nama_vila, kota, deskripsi) VALUES('$nama_vila', '$kota', '$deskripsi')") or die('query failed');
   }
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `detail_vila` WHERE id = '$delete_id'") or die('query failed');
    // Shift IDs down by 1
    $update_query = mysqli_query($conn, "UPDATE `detail_vila` SET id = id - 1 WHERE id > '$delete_id'") or die('query failed');

   header('location:staff_detail.php');
}

if(isset($_POST['update_detail_vila'])){
   $update_detail_id_p = $_POST['update_detail_id_p'];
   $update_nama_vila = $_POST['update_nama_vila'];
   $update_kota = $_POST['update_kota'];
   $update_deskripsi = $_POST['update_deskripsi'];
   mysqli_query($conn, "UPDATE `detail_vila` SET nama_vila = '$update_nama_vila', kota = '$update_kota', deskripsi = '$update_deskripsi' WHERE id = '$update_detail_id_p'") or die('query failed');
   header('location:staff_detail.php');
}

if(isset($_POST['close-update-detail'])){
   header('location:staff_detail.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>detail</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin1.css">

</head>
<body>
   
<?php include 'staff_header.php'; ?>

<!-- product CRUD section starts  -->

<section class="add-products">

   <h1 class="title">shop details</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>add detail</h3>
      <input type="text" name="nama_vila" class="box" placeholder="enter nama vila" required>
      <input type="text" name="kota" class="box" placeholder="enter nama kota" required>
      <textarea name="deskripsi" class="box" placeholder="enter deskripsi" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="add detail" name="add_detail" class="btn">
   </form>

</section>

<section class="show-products">

   <div class="box-container">

      <?php
         $select_detail_vila = mysqli_query($conn, "SELECT * FROM `detail_vila`") or die('query failed');
         
         if(mysqli_num_rows($select_detail_vila) > 0){
            while($fetch_detail_vila = mysqli_fetch_assoc($select_detail_vila)){
      ?>
      <div class="box">
          <div class="nama_vila"><label style="font-size:10px">Id :</label><?php echo $fetch_detail_vila['id']; ?></div>
         <div class="nama_vila"><label style="font-size:10px">Nama :</label><?php echo $fetch_detail_vila['nama_vila']; ?></div>
         <div class="kota"><label style="font-size:10px">Kota </label><?php echo $fetch_detail_vila['kota']; ?></div>
         <div class="deskripsi"><label style="font-size:10px">Deskripsi </label><?php echo $fetch_detail_vila['deskripsi']; ?></div>

         <a href="staff_detail.php?delete=<?php echo $fetch_detail_vila['id']; ?>" class="delete-btn" onclick="return confirm('delete this vila?');">delete</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no detail added yet!</p>';
      }
      ?>
   </div>

</section>

<!-- custom admin js file link  -->
<script src="js/page_script.js"></script>

</body>
</html>