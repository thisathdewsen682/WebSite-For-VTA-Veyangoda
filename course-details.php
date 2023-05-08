
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVTC | Course Details</title>
    <link rel="icon" type="image/x-icon" href="images/VTA_Sri_lanka_Logo.png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>





    <!-- <header class="header">

        <a href="#" class="logo"><img src="images/VTA_Sri_lanka_Logo.png" alt="logo" srcset="" class="vta-logo"></a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="home.html">home</a>
            <a href="about.html">about</a>
            <a href="courses.html">courses</a>
            <a href="contact.html">contact</a>
        </nav>

        <div class="icons">
            <div id="account-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

 
 header('location: Admin/dashboard.php');
    </div>
    </div>-->
    <?php include("nav.php");?>
    <?php include("function.php");?>

    <?php
      //function load course details according to the request
      loadCourseDetails();
   ?>
  <?php

include("connection.php");

$message = " ";
//inserting data online application
if(isset($_POST['submit'])){


    $name               =  $_POST['fname'];
    $gender             =  $_POST['gender'];
    $nic                =  $_POST['nic'];
    $email              =  $_POST['email'];
    $contactno          =  $_POST['mobileno'];
    $address            =  $_POST['address'];
    $olExMedium         =  $_POST['olmedium'];
    $olSub1Res          =  $_POST['s1'];
    $olSub2Res          =  $_POST['s2'];
    $olSub3Res          =  $_POST['s3'];
    $olSub4Res          =  $_POST['s4'];
    $olSub5Res          =  $_POST['s5'];
    $olSub6Res          =  $_POST['s6'];
    $olSub7Res          =  $_POST['s7'];
    $olSub8Res          =  $_POST['s8'];
    $olSub9Res          =  $_POST['s9'];
    $alExMedium         =  $_POST['almedium'];
    $alStream           =  $_POST['alstream'];
    $alSub1Res          =  $_POST['als1'];
    $alSub2Res          =  $_POST['als2'];
    $alSub3Res          =  $_POST['als3'];
    $alSub4Res          =  $_POST['alge'];
    $otherQualfication  =  $_POST['oq'];
    $coursname          =  $_POST['cname'];


    if (empty($name) || empty($gender) || empty($coursname)|| empty($nic) || empty($email)|| empty($contactno) || empty($address) || empty($olExMedium) || empty($olSub1Res) || empty($olSub2Res) || empty($olSub3Res) || empty($olSub4Res) || empty($olSub5Res)|| empty($olSub6Res) || empty($olSub7Res) || empty($olSub8Res) || empty($olSub9Res) || empty($alExMedium) || empty($alStream)|| empty($alSub1Res) || empty($alSub2Res) || empty($alSub3Res) || empty($alSub4Res) || empty($otherQualfication)){

        
    
    }else{
        $sql = "INSERT INTO `application_detals`(`fullname`,`course_name`,`gender`, `nic`, `email`, `contactno`, `address`, `ol_exam_medium`, `ol_sub1_res`, `ol_sub2_res`, `ol_sub3_res`, `ol_sub4_res`, `ol_sub5_res`, `ol_sub6_res`, `ol_sub7_res`, `ol_sub8_res`, `ol_sub9_res`, `al_exam_stream`, `al_exam_medium`, `al_sub1_res`, `al_sub2_res`, `al_sub3_res`, `al_sub4_res`, `other_qualification`) VALUES ('$name','$coursname','$gender','$nic','$email','$contactno','$address','$olExMedium','$olSub1Res','$olSub2Res','$olSub3Res','$olSub4Res','$olSub5Res','$olSub6Res','$olSub7Res','$olSub8Res','$olSub9Res','$alExMedium','$alStream','$alSub1Res','$alSub2Res','$alSub3Res','$alSub4Res','$otherQualfication')";

        $result = mysqli_query($conn,$sql);


        if($result){
            $message = "Data Inserted";
            echo "<script>alert('$message');</script>";
            $status = "success";
            header("Location: index.php?status=".$status."");
            exit;
        }else{
            die("Query Falied" . mysqli_error($conn));
        }
        
    }

    


}?>


    <!--apply form-->
    <!-- <div class="apply-form" id="fo">
        <h4>Fill All Information below to Apply National Certificate - Adobe Certified Professional at DVTI Veyangoda
        </h4>
        <form action="insert.php" method="POST">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Fill Name" name="fname">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <select id="inputState" class="form-control" name="gender">
                        <option value="male" class="gs">Male</option>
                        <option value="female" class="gs">Female</option>
                    </select>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="National Identity Card" name="nic">
                </div>


                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" class="form-control" placeholder="Mobile No" name="mobileno">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" class="form-control" placeholder="Address" name="address">
                </div>
            </div>
            <h3>OL INFORMATION</h3>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <select id="inputState" class="form-control" name="olmedium">
                        <option selected>Medium</option>
                        <option value="sinhala" class="gs">Sinhala</option>
                        <option value="emglish" class="gs">English</option>
                        <option value="tamil" class="gs">Tamil</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s1">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s2">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s3">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s4">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s5">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s6">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s7">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s8">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s9">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s9">
                </div>
            </div>
            <h3>AL INFORMATION</h3>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <select id="inputState" class="form-control" name="alstream">
                        <option selected>Select Al Stream</option>
                        <option value="Physical" class="gs">Physical Science Stream</option>
                        <option value="Bialogical" class="gs">Bialogical Science Stream</option>
                        <option value="Commerce" class="gs">Commerce Stream</option>
                        <option value="Art" class="gs">Art Stream</option>
                        <option value="Technology" class="gs">Technology Stream</option>
                    </select>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <select id="inputState" class="form-control" name="almedium">
                        <option selected>Medium</option>
                        <option value="sinhala" class="gs">Sinhala</option>
                        <option value="emglish" class="gs">English</option>
                        <option value="tamil" class="gs">Tamil</option>
                    </select>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="als1">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="als2">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="als3">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="alge">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" class="form-control" placeholder="Other Qualification" name="alge">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 hide1">
                    <input type="text" class="form-control " name="cname" value="' .$cname .'">
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="submit" class="form-control btn" name="submit">
                </div>


            </div>



    </div>
    </form>
    </div>

-->









    <?php include("footer.php")?>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>