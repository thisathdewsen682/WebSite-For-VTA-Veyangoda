<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DVTC | Contact</title>
   <link rel="icon" type="image/x-icon" href="images/VTA_Sri_lanka_Logo.png">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->


<?php include("nav.php");?>

<!-- account form section ends -->

<!-- header section ends -->

<section class="heading-link">
   <h3>contact us</h3>
   <p> <a href="index.php">home</a> / contact </p>
</section>

<!-- contact section starts  -->

<section class="contact">

   <h1 class="heading1"> get in touch </h1>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours :</h3>
         <p>08:30am to 04:15pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone :</h3>
         <p>0332 294 790</p>
         <p></p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> email : </h3>
         <p>veyangodavta@gov.lk</p>
         <p>veyangodavta@gmail.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address :</h3>
         <p> 5345+QC5, Sirimawo Bandaranayake Rd, Veyangoda 11100</p>
      </div>

   </div>

   <div class="row">

      <div class="image">
         <img src="images/contact-img.png" alt="">
      </div>

      <form action ="" method = "POST">
         <h3>send us a message</h3>
         <input type="text" placeholder="name" class="box" name = "name" required >
         <input type="email" placeholder="email" class="box" name = "email" required>
         <input type="number" placeholder="phone" class="box" name = "number"required>
         <textarea name="msg" class="box" placeholder="message"  cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="btn" name = "submit">
      </form>

   </div>

</section>

<?php
   include ("connection.php");
   if(isset($_POST['submit'])){

      

      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $message = $_POST['msg'];

      $sql = "INSERT INTO `recived_message`(`name`, `emal`, `phone`, `message`) VALUES ('$name','$email','$number','$message')";
   

      $result = mysqli_query($conn,$sql);
    
      if(!$result){
         die("Query Failed" . mysqli_error($conn));
         echo "failed" . mysqli_error($conn);
        
      }else{
         $message = "Your Message Recived";
         echo "<script>alert('$message');</script>";
        
      }


      }
      
      mysqli_close($conn); 
?>

<!-- contact section ends -->

<!-- faq section starts  -->
<!-- 
<section class="faq">

   <h1 class="heading1">frequently asked questions</h1>

   <div class="accordion-container">

      <div class="accordion active">
         <div class="accordion-heading">
            <h3>how to contact for help?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>what is the best career in 2022?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>how much fees for web development?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>can I choose my own tutor?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>what payment methods are availabe?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>can I have free trial for a month?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

   </div>

</section> -->

<!-- faq section ends -->

<!-- logo slider starts  -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide"> <img src="images/ora.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/cis.png" alt=""> </div>
 
        
      </div>
   </div>
</section>

<!-- logo slider ends -->







<!-- footer section starts  -->

<?php include("footer.php");?>

<!-- footer section ends -->





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>