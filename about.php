<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
       <img src="images/aboutt.gif" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to Shop Electron !!! We are a team of tech enthusiasts who are passionate about the latest innovations in wearable technology. We understand that in today's fast-paced world, time is of the essence, and staying connected has never been more critical. That's why we are committed to providing you with the best selection of smartwatches that can keep up with your busy lifestyle. Our goal is to provide you with a one-stop-shop for all your smartwatch needs. We carefully curate our product selection to ensure that you have access to the latest and greatest smartwatches on the market. Whether you are looking for a fitness tracker to help you monitor your daily activity or a sleek and stylish smartwatch that can keep you connected on the go, we've got you covered. We believe that every customer deserves exceptional service, and that's why we strive to provide you with a seamless shopping experience. Our knowledgeable and friendly customer service team is always available to answer your questions and provide you with the guidance you need to find the perfect smartwatch for your needs. At our smartwatch website, we are committed to providing you with quality products, excellent customer service, and competitive prices. We are confident that you will love our selection of smartwatches, and we look forward to helping you find the perfect wearable device to fit your lifestyle. Thank you for choosing us as your smartwatch destination!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/vaibhav.jpeg" alt="">
         <p>I recently purchased a smartwatch from this website, and I couldn't be happier with my purchase. And with long battery life, I can easily wear the watch all day without worrying about running out of power. Overall, I would highly recommend this smartwatch to anyone in the market for a reliable and feature-packed wearable device. The customer service from this website was also top-notch, making the purchasing process easy and stress-free.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vaibhav Mail</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/jayesh.jpeg" alt="">
         <p>I've been using the Cobra smartwatch for the past few weeks, and I must say I'm thoroughly impressed with its features and performance. The watch pairs seamlessly with my phone via Bluetooth, and I can receive notifications and calls without having to pull out my phone. The fitness tracking features are exceptional, and I love that it tracks my daily activity levels, including my steps, calories burned, and heart rate. It also has a GPS feature that comes in handy when I'm running outdoors, and I need to track my route. Another feature that I love is the music control. I can easily skip tracks, adjust the volume, and play/pause my music right from my wrist. Plus, with the option to store music on the watch, I can listen to my favorite songs without having to bring my phone. Overall,I highly recommend it!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jayesh Wankhede</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/bunny.jpeg" alt="">
         <p>Design: Smartwatches come in various shapes and sizes, from round faces to square faces, and from small to large. Consider what style fits your wrist best and whether you want a sporty or dressy look.

Features: Depending on your needs, look for a smartwatch with features that suit your lifestyle. If you're into fitness, look for a watch with built-in GPS, heart rate monitoring, and fitness tracking. If you need to stay connected, consider a watch with cellular capabilities or the ability to receive notifications.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mrudul Bangaiya</h3>
      </div>

      <!-- <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div> -->

      <!-- <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div> -->

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>