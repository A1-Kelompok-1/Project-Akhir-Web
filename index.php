<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Login admin sukses',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'admin_page.php';
                });
                </script></body>";
               exit;

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
         <script>
         Swal.fire({
             position: 'top-center',
             icon: 'success',
             title: 'Login user sukses',
             showConfirmButton: false,
             timer: 1500
         }).then(() => {
             window.location.href = 'home.php';
         });
         </script></body>";
        exit;

       

      }elseif($row['user_type'] == 'staff'){

         $_SESSION['staff_name'] = $row['name'];
         $_SESSION['staff_email'] = $row['email'];
         $_SESSION['staff_id'] = $row['id'];
         echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
         <script>
         Swal.fire({
             position: 'top-center',
             icon: 'success',
             title: 'Login staff sukses',
             showConfirmButton: false,
             timer: 1500
         }).then(() => {
             window.location.href = 'staff_home.php';
         });
         </script></body>";
        exit;
         

      }

   }else{
      echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
         <script>
         Swal.fire({
             position: 'top-center',
             icon: 'error',
             title: 'incorrect email or password!',
             showConfirmButton: false,
             timer: 1500
         }).then(() => {
             window.location.href = 'index.php';
         });
         </script></body>";
        exit;
      
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <style>
      *{
      margin: 0;
      padding: 0;
      outline: 0;
      font-family: 'Open Sans', sans-serif;
  }
  body{
      height: 100vh;
      background-image: url('bg.gif');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
  }
  
  .login{
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      padding: 20px 25px;
      width: 300px;
      background-color: rgba(0,0,0,.7);
      box-shadow: 0 0 10px rgba(255,255,255,.3);
  }
  .login h1{
      text-align: center;
      color: #fafafa;
      margin-bottom: 30px;
      text-transform: uppercase;
      border-bottom: 4px solid #2979ff
  }
  .login label{
      text-align: left;
      color: #90caf9;
  }
  .login form input{
      width: calc(100% - 20px);
      padding: 8px 10px;
      margin-bottom: 15px;
      border: none;
      background-color: transparent;
      border-bottom: 2px solid #2979ff;
      color: #fff;
      font-size: 20px;
  }
  .login form button{
      width: 100%;
      padding: 5px 0;
      border: 10px;
      background-color:#00BFFF;
      font-size: 18px;
      color: #fff;
  }
  
  .login a {
    margin-top:5px;
    padding:5px 0;
    color: #fff;
    text-decoration: none;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .login a:hover {
    text-decoration: underline;
    cursor: pointer;
  }
    </style>
</head>
<body>

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
   
<div class="login">

   <form action="" method="post">
      <h1>login now</h1>
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <button input type="submit" name="submit" value="login now" class="btn">Login</button>
      <a href="register.php">don't have an account? register now </a>
   </form>

</div>


</body>
</html>
