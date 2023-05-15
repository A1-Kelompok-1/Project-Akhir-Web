<?php

include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:index.php');
};
if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'User Already Exist',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'admin_add_users.php';
                });
                </script></body>";
               exit;
   }else{
      mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$password', '$user_type')") or die('query failed');
      echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'User Successfully Added',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'admin_add_users.php';
                });
                </script></body>";
               exit;
      // header('location:admin_users.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin - Add User</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin1.css">
   <?php include 'admin_header.php'; ?>
</head>
<body>
<link rel="stylesheet" href="css/style1.css">
<?php

?>

<div class="form-container">

   <form action="" method="post">
      <h1>Add User</h1>
      <input type="text" name="name" placeholder="Enter Name" required class="box">
      <input type="email" name="email" placeholder="Enter Email" required class="box">
      <input type="password" name="password" placeholder="Enter Password" required class="box">
      <select name="user_type" class="box">
         <option value="user">User</option>
         <option value="admin">Admin</option>
         <option value="staff">Staff</option>
      </select>
      <button type="submit" name="submit">Add User</button>
   </form>

</div>
<!-- custom admin js file link  -->
<script src="js/page_script.js"></script>
</body>

</html>
