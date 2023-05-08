<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Distric Vocational Training Center - Veyangoda</title>
   <link rel="icon" type="image/x-icon" href="images/VTA_Sri_lanka_Logo.png">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   <?php include("nav.php");?>
   <?php
   if(isset($_GET['status']) && $_GET['status'] == "success"){

      $message = "Your Application Sent Succesfully";
      echo "<script>alert('$message');</script>";
      
}else{
   $message = "Somethng Wrong apply again";
   
}
?>
<!-- header section starts  -->
<!-- 
<header class="header">

   <a href="#" class="logo"><img src="images/VTA_Sri_lanka_Logo.png" alt="logo" srcset="" class="vta-logo"></a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="index.php">home</a>
      <a href="about.html">about</a>
      <a href="courses.php?request=course">courses</a>
      <a href="contact.html">contact</a>
   </nav>

   <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</header>

 account form section starts  

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">login</span>
      <span class="btn register-btn">register</span>
   </div>

   <form class="login-form active" action="">
      <h3>login now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
   </form>

   <form class="register-form" action="">
      <h3>register now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <input type="password" placeholder="confirm your password" class="box">
      <input type="submit" value="register now" class="btn">
   </form>

</div> -->

<!-- account form section ends -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <h3>Welcom District Vocational Training Center</h3>
               <h2>Veyangoda</h2>
               <p>The best courses you will find find here!</p>
               <a href="#co" class="yellow">see courses</a>
               
           
            </div>
         </section>

       

         <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <h3>best training place</h3>
               <p>For Your Better Future</p>
               <a href="#co" class="yellow">see courses</a>
            </div>
         </section>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- home section ends -->

<!-- subjects section starts  -->

<section class="subjects">

   <h1 class="heading1">categories</h1>

   <div class="box-container">
<a href="courses.php?request=level4">
      <div class="box">
         <img src="images/award.png" alt="">
         <h3>NVQ 4</h3>
         <p>12 COURSES</p>
      </div>
   </a>

   <a href="courses.php?request=level5">
      <div class="box">
         <img src="images/certificate.png" alt="">
         <h3>NVQ 5</h3>
         <p>1 COURSES</p>
      </div>
   </a>
      

    

   </div>

</section>

<!-- subjects section ends -->

<!-- home courses slider section starts  -->
<!--
<section class="home-courses">

   <h1 class="heading" > our popular courses </h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/nvq5inict.jpg" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more & apply</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/emily-bernal-v9vII5gV8Lw-unsplash.jpg" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more & apply</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/louis-hansel-jRKqqyKA0T4-unsplash.jpg" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more & apply</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-4.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more & apply</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-5.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more & apply</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-6.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more & apply</a>
            </div>
         </div>

      </div>

   </div>

</section>

 home courses slider section ends -->
<section class="courses" id = "co">

   <h1 class="heading1" > our famous courses </h1>
   <?php include("function.php");?>
   
   <div class="box-container">

      <div class="box-container">
      <?php loadCourse();?>

         </div>

        

    

</section>

<section id=promo>
   
   <div class="video">
       <iframe width="300" height="340" src="https://www.youtube.com/embed/UniHiSyd2v4"
           title="YouTube video player" frameborder="0"
           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
           allowfullscreen></iframe>
   </div>
   <div class="vm">
       <div class="vission">
           <h3>Vission</h3>
           <p>To be the most dynamic and innovative vocational training provider in Sri Lanka, catering to the
               global employment market.</p>
       </div>

       <div class="mission">
           <h3>Mission</h3>
           <p>To facilitate the fulfilment of the global skilled employment demand by developing competencies in
               individuals through modern methods and technologies in vocational training and education..
           </p>
       </div>
   </div>
</section>



<section class = "joinus">

   <h2>Want to Join With Us</h2>
   <h1>SEE WHAT WE HAVE</h1>
   <p>The Vocational Training Authority of Sri Lanka (VTA) under the Ministry of Education, is in the process of implementing the NVQ system very successfully in Sri Lanka.

      Many developed and developing countries in the world have introduced vocational skills certification systems similar to the NVQ system. As such, the NVQ system is in real practice and quite familiar to the authorities in most of the countries. Therefore, the National Vocational Qualification System is nationally and internationally recognised in order to enter the global job market as qualified professionals.</p>

      <a href="about.php" class = "yellow"> Read More</a>

</section>








<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>DVTC </h3>
         <p>Vocational Training Authority of Sri Lanka</p>
         <p>Ministry of Skill Development and Vocational Training</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="home.html" class="link">home</a>
         <a href="about.html" class="link">about</a>
         <a href="courses.html" class="link">courses</a>
         <a href="contact.html" class="link">contact</a>
      </div>

      <div class="box">
         <h3>useful links</h3>
         <a href="#" class="link">help center</a>
         <a href="#" class="link">ask questions</a>
         <a href="#" class="link">send feedback</a>
         <a href="#" class="link">private policy</a>
         <a href="#" class="link">terms of use</a>
      </div>

      <div class="box">
         <h3>newsletter</h3>
         <p>subscribe for latest upadates</p>
         <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
         </form>
      </div>

   </div>

   <div class="credit"> created by <span>Thisath Dewsen</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>