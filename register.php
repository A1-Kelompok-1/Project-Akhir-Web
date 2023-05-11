<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');
 
   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$cpass')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:index.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <style>
      *{
      margin: 0;
      padding: 0;
      outline: 0;
      font-family: 'Open Sans', sans-serif;
  }
  body{
      height: 100vh;
      background-image: url('regis.gif');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
  }
  
  .regis{
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      padding: 20px 25px;
      width: 300px;
  
      background-color: rgba(0,0,0,.7);
      box-shadow: 0 0 10px rgba(255,255,255,.3);
  }
  .regis h1{
      text-align: center;
      color: #fafafa;
      margin-bottom: 30px;
      text-transform: uppercase;
      border-bottom: 4px solid #2979ff;
  }
  .regis label{
      text-align: left;
      color: #90caf9;
  }
  .regis form input{
      width: calc(100% - 20px);
      padding: 8px 10px;
      margin-bottom: 15px;
      border: none;
      background-color: transparent;
      border-bottom: 2px solid #2979ff;
      color: #fff;
      font-size: 20px;
  }
  
  .regis form button{
      width: 100%;
      padding: 5px 0;
      border: 10px;
      background-color:#00BFFF;
      font-size: 18px;
      color: #fff;
  }
  
  .regis a {
    margin-top:5px;
    padding:5px 0;
    color: #fff;
    text-decoration: none;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .regis a:hover {
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
   
<div class="regis">

   <form action="" method="post">
      <h1>register now</h1>
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
      <br><br>
      <button type="submit" name="submit" value="register now" class="btn">register</button>
      <a href="index.php">already have an account? login now</a>
   </form>

</div>

</body>
</html>