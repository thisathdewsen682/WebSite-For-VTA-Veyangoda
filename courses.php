<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVTC | Courses</title>
    <link rel="icon" type="image/x-icon" href="images/VTA_Sri_lanka_Logo.png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include("nav.php");?>
    <!-- <header class="header">

        <a href="#" class="logo"><img src="images/VTA_Sri_lanka_Logo.png" class="vta-logo"></a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="home.html">home</a>
            <a href="about.html">about</a>
            <a href="courses.php">courses</a>
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


    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
            <div class="wave waveTop"
                style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle"
                style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom"
                style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
        </div>
    </div>
    <section class="courses courses1">

        <h1 class="heading"> our famous courses </h1>
        <div class="box-container">
            <!--inclued function file-->
            <?php include("function.php");?>

            <!-- php function for loading course according to the requst-->
            <?php

            loadAllCourseAccordingRequest();
    
            ?>

        </div>
    </section>


    <?php include "footer.php";?>

    <!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>

</html>