<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
 
};

?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>search page</title>
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- datatables --> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 
       <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style1.css">
</head> 
<body> 
<?php include 'header.php'; ?>
<div class="heading">
   <h3>search page</h3>
   <p> <a href="home.php">home</a> / search </p>
</div>

<table id="example" class="display" style="width:100%"> 
    <thead> 
        <tr> 
            <th>Id</th> 
            <th>Id_Detail</th> 
            <th>Nama</th> 
            <th>Price</th> 
            <th>Image</th> 
        </tr> 
    </thead> 
    <tbody> 
        <?php 
        $conn = mysqli_connect("localhost", "root", "", "shop_db"); 
        $query = mysqli_query($conn, "SELECT * FROM vila"); 
        $no=0; 
        while($data = mysqli_fetch_array($query)){ 
            $no++; 
        ?> 
        <tr> 
            <td><?= $no ?></td> 
            <td><?= $data['id_detail'] ?></td> 
            <td><?= $data['name'] ?></td> 
            <td><?= $data['price'] ?></td> 
            <td><img src="uploaded_img/<?= $data['image'] ?>" alt="<?= $data['name'] ?>" style="width: 100px; height: 100px;"></td>
        </tr> 
        <?php } ?> 
    </tbody> 
</table> 
    <script> 
        $(document).ready(function () { 
            $('#example').DataTable(); 
        }); 
    </script> 
</body> 
</html>