


<?php  include("connection.php")?>

<?php

//function for load best courses
function loadCourse(){

    global $conn;

    $sql ="SELECT * FROM `course_details` WHERE rating > 7;";

    $result = mysqli_query($conn, $sql);
    
    if(!$result){
        die("Query Failde" . mysqli_error($conn));
    
    }

    while($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        $cname = $row['course_name'];
        $ccategory = $row['course_category'];
        $cdesc = $row['course_desc'];
        $clevel = $row['course_level'];
        $cprice = $row['course_price'];
        $ceq = $row['entry_qualifcation'];
        $module = $row['module'];
        $time = $row['time'];
        $imageData = $row['course_img1'];
    
        $encoded = base64_encode($imageData);
    
    
        echo '
              
            <div class="box">
                <div class="image">
                <img src="data:images/jpeg;base64,' . $encoded . '">
                    <h3>' .$ccategory.'</h3>
                </div>
                <div class="content">
                    <h3>' .$cname.'</h3>
                    <p>' .$clevel.'</p>
                    <a href="course-details.php?id='.$id.'" class="btn">read more & apply</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i>' .$module.'</span>
                        <span> <i class="fas fa-clock"></i>' .$time.'</span>
                    </div>
                </div>
            </div>
            ';
    
    
    }

    mysqli_close($conn);
}

?>

<?php

//function for load course in course page accornding to the request

function loadAllCourseAccordingRequest(){


    global $conn;

    $sql ="SELECT * FROM `course_details` ";
    if (isset($_GET["request"])) {
      $request = $_GET["request"];

      if($request == "level4"){
          $sql ="SELECT * FROM `course_details` WHERE course_level = 'NVQ 4' ";
      }else if($request == "level5"){
          $sql ="SELECT * FROM `course_details` WHERE course_level = 'NVQ 5'";
      }else{
         $sql ="SELECT * FROM `course_details`";
      }
  } else {

      $request = "";
  }

  $result = mysqli_query($conn, $sql);

  if(!$result){
    die("Query Failde" . mysqli_error);

  }
  while($row = mysqli_fetch_assoc($result)) {

      $id = $row['id'];
      $cname = $row['course_name'];
      $ccategory = $row['course_category'];
      $cdesc = $row['course_desc'];
      $clevel = $row['course_level'];
      $cprice = $row['course_price'];
      $ceq = $row['entry_qualifcation'];
      $module = $row['module'];
      $time = $row['time'];
      $imageData = $row['course_img1'];
  
      $encoded = base64_encode($imageData);
  
  
      echo '
            
          <div class="box">
              <div class="image">
              <img src="data:images/jpeg;base64,' . $encoded . '">
                  <h3>' .$ccategory.'</h3>
              </div>
              <div class="content">
                  <h3>' .$cname.'</h3>
                  <p>' .$clevel.'</p>
                  <a href="course-details.php?id='.$id.'" class="btn">read more & apply</a>
                  <div class="icons">
                      <span> <i class="fas fa-book"></i>' .$module.'</span>
                      <span> <i class="fas fa-clock"></i>' .$time.'</span>
                  </div>
              </div>
          </div>
          ';
    }
mysqli_close($conn);
 
}

?>


<?php

//function for load details in course details page according to the request

function loadCourseDetails(){
    global $conn;

    if(isset($_GET['id'])){

        $cid = $_GET['id'];
        
          
           $sql ="SELECT * FROM `course_details` WHERE id = '$cid';";
           $result = mysqli_query($conn, $sql);
        
           if(!$result){
              die("Query Failde" . mysqli_error($conn));
        
          }
        
           while($row = mysqli_fetch_assoc($result)) {
        
              $id = $row['id'];
              $cname = $row['course_name'];
              $ccategory = $row['course_category'];
              $cdesc = $row['course_desc'];
              $cprice = $row['course_price'];
              $ceq = $row['entry_qualifcation'];
              $module = $row['module'];
              $time = $row['time'];
              $clevel = $row['course_level'];
            $imageData = $row['course_img1'];
               $encoded = base64_encode($imageData);
              echo '
              
              
              <div class="course-heading">
              <div class="course-title-head">
                 <h1>' .$cname.'</h1>
                 <a href="#fo" class="yellow bt">Apply Online</a>
              </div>
           </div>
              <div class="container1">
              <section class="course-inner">
                 <div class="overview">
                    
                    <img src="data:images/jpeg;base64,' . $encoded . '" class="cour-img">
                    <div class="course-head">
                       <div class="c-name">
                          <h2>' .$cname.'</h2>
                          <div class="star">
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                          <p>' .$cdesc.'</p>
        
                       </div>
                       <span>' .$cprice.'</span>
                    </div>
                 </div>
        
                 <section class="faq  c-details">
        
                    <h1 class="heading1">Entry Qualification</h1>
        
                    <div class="accordion-container">
        
                       <div class="accordion active">
                          <div class="accordion-heading">
                             <h3>Requirements</h3>
                             <i class="fas fa-angle-down"></i>
                          </div>
                          <p class="accordion-content">
                          ' .$ceq .'
                          </p>
                       </div>
                    </div>
                 </section>
              </section>
           </div>
           
           <div class="apply-form" id="fo">
        <h4>Fill All Information below to Apply '.$clevel.' - '.$cname.' at DVTC Veyangoda</h4>
        <form action="course-details.php?id=' .$cid.'" method="POST">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Fill Name" name="fname" required>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <select id="inputState" class="form-control" name="gender">
                        
                        <option selected value ="male" class="gs">Male</option>
                        <option value="female" class="gs">Female</option>
                    </select>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="National Identity Card" name="nic" required>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" class="form-control" placeholder="Mobile No" name="mobileno" required>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" class="form-control" placeholder="Address" name="address" required>
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
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s1" required>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s2" required>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s3" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s4" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s5" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s6" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s7" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s8" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s9" required>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="s9" required>
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
                    <input type="text" class="form-control" placeholder="Subject & Result" name="als1" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="als2" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="als3" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject & Result" name="alge" required>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <input type="text" class="form-control" placeholder="Other Qualification" name="oq" required>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 hide1">
                    <input type="text" class="form-control " name="cname" value="'.$cname.'">
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="submit" class="form-control btn" name="submit">
                </div>


            </div>



    </div>
    </form>
    </div>';
              
              
              
        
        
        
           }
           mysqli_close($conn);
        
        }

      
           
}
?>

