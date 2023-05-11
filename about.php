<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/outdoor1.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> We offer a wide selection of high-quality villas in some of the most beautiful destinations around the world, as well as personalized service from our team of travel experts. </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="image">
         <img src="images/santai.jpg" alt="">
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I had an incredible experience booking my villa through this reservation service. The team was so helpful and accommodating, and the villa exceeded my expectations in every way.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I can't recommend this villa reservation service enough! The selection of villas is unbeatable, and the customer service is top-notch. I've booked multiple trips through them and have never been disappointed.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Angelica zen</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Thanks to this villa reservation service, my family and I had the best vacation of our lives. The villa was beautiful and in a stunning location, and the reservation process was smooth and stress-free. We can't wait to book our next trip!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aarav alex</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I was blown away by the level of service I received from this villa reservation service. The team went above and beyond to help me find the perfect villa for my needs, and the villa itself was even more amazing in person. I can't wait to book my next trip with them!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sandrina Lois</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Booking a villa through this reservation service was a breeze. The website was easy to use, and the customer service was fantastic. I appreciated the attention to detail and felt like every aspect of my trip was taken care of.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Abraham felix</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I had a wonderful experience booking my villa through this reservation service. The team was professional and responsive, and the villa itself was breathtaking. I would highly recommend this service to anyone looking for a luxurious and memorable vacation.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marissa clara</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Gallery</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/santai.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Santai</h3>
      </div>

      <div class="box">
         <img src="images/bathroom.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Bathroom</h3>
      </div>

      <div class="box">
         <img src="images/pantai.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sunset</h3>
      </div>

      <div class="box">
         <img src="images/coffee.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Coffee Shop</h3>
      </div>

      <div class="box">
         <img src="images/ngumpul.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Friend</h3>
      </div>

      <div class="box">
         <img src="images/resto.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Restaurant</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>