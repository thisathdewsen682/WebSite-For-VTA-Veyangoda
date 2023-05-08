
<header class="header">

<a href="index.php" class="logo"><img src="images/VTA_Sri_lanka_Logo.png" alt="logo" srcset="" class="vta-logo"></a>

<nav class="navbar">
    <div id="close-navbar" class="fas fa-times"></div>
    <a href="index.php">home</a>
    <a href="about.php">about</a>
    <a href="courses.php?request=course">courses</a>
    <a href="contact.php">contact</a>
</nav>

<div class="icons">
    <div id="account-btn" class="fas fa-user"></div>
    <div id="menu-btn" class="fas fa-bars"></div>
</div>

</header>

<!-- account form section starts  -->

<div class="account-form">

<div id="close-form" class="fas fa-times"></div>

<div class="buttons">
    <span class="btn active login-btn">login</span>
    <span class="btn register-btn"></span>
</div>

<form class="login-form active" action="log.php" method = "POST">
    <h3>login now</h3>
    <input type="text" placeholder="enter your email" class="box" name = "username">
    <input type="password" placeholder="enter your password" class="box" name = "password">
    <div class="flex">
        <input type="checkbox" name="" id="remember-me">
        <label for="remember-me">remember me</label>
        <a href="#">forgot password?</a>
    </div>
    <input type="submit" value="login now" class="btn">

      <!--<?//php if ($errorMsg != "") { ?>
        <p><?//php echo $errorMsg; ?></p>
    <?php //} ?>
</form>



</div>






























