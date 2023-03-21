<?php
   include '../config.php';
   session_start();
   $id = $_GET['id'];
   //echo $id;
   $dataFetchQuery = "SELECT * FROM `batch_52` WHERE id = '$id'";
   $record = mysqli_query($conn,$dataFetchQuery);
   $data = mysqli_fetch_array($record);
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch 50 edit course</title>
    <!-- font awesom -->
    <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--magnific css-->
    <link rel="stylesheet" href="../assets/css/magnific.css">
    <!--owl-carosol-->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <!--custom style-->
    <link rel="stylesheet" href="../assets/css/main.css">

    
</head>
<body>
<section class="header-area">
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
               <div class="logo">
                    <a href="../home.php" class="navbar-brand"><img src="../assets/img/logo.png" alt="logo"></a> 
                    <span><h2>Admin Panel</h2><a href="https://www.lus.ac.bd/" target="_blank">www.lus.ac.bd</a></span>
                </div>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon _header_navbar_toggle_icon"></span>
               </button>
               <div class="collapse navbar-collapse right" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto system-nav">
                     <li class="nav-item">
                        <a href="../home.php"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
                     </li>
                  </ul>
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="../home.php"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['r_email'] ?></a>
                     </li>
                     <li class="nav-item">
                        <a href="../login_reg/logout.php" style="color: #C3D136;;">Logout</a>
                     </li>
                  </ul>
            </div>
      </div>
   </nav>
</section> 
    <section class="body-area">
        <div class="container">
            <div class="body-wrapper row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="side-bar">
                <ul class="section menu">
                        <li><a class="menuitem">Courses</a>
                             <ul class="submenu"> 
                                <li><a class="submenuitem" href="#">Batch 50</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch50_add.php">Add Course</a> </li>
                                        <li><a href="batch50_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem" href="#">Batch 51</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch51_add.php">Add Course</a> </li>
                                        <li><a href="batch51_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem" href="#">Batch 52</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch52_add.php">Add Course</a> </li>
                                        <li><a href="batch52_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem" href="#">Batch 53</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch53_add.php">Add Course</a> </li>
                                        <li><a href="batch53_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem" href="#">Batch 54</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch54_add.php">Add Course</a> </li>
                                        <li><a href="batch54_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem" href="#">Batch 55</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch55_add.php">Add Course</a> </li>
                                        <li><a href="batch55_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem" href="#">Batch 56</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch56_add.php">Add Course</a> </li>
                                        <li><a href="batch56_list.php">Course List</a> </li>
                                    </ul>
                                </li>  
                                <li><a class="submenuitem" href="#">Batch 57</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch57_add.php">Add Course</a> </li>
                                        <li><a href="batch57_list.php">Course List</a> </li>
                                    </ul>
                                </li> 
                                <li><a class="submenuitem" href="#">Batch 58</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch58_add.php">Add Course</a> </li>
                                        <li><a href="batch58_list.php">Course List</a> </li>
                                    </ul>
                                </li>
                                <li><a class="submenuitem" href="#">Batch 59</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch59_add.php">Add Course</a> </li>
                                        <li><a href="batch59_list.php">Course List</a> </li>
                                    </ul>
                                </li>
                                <li><a class="submenuitem" href="#">Batch 60</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch60_add.php">Add Course</a> </li>
                                        <li><a href="batch60_list.php">Course List</a> </li>
                                    </ul>
                                </li> 
                             </ul>
                         </li> 
                         <li><a class="menuitem" href="#">Teacher Course Disribuition</a>
                            <ul class="submenu">
                                <li><a class="submenuitem" href="../teachers_course_distribuition/addOffered_csv.php">Add offered List(CSV)</a></li>
                                <li><a class="submenuitem" href="../teachers_course_distribuition/addOffered_single.php">Add offered List(single)</a></li>
                                <li><a class="submenuitem" href="../teachers_course_distribuition/offered_course_list.php">Offered Course List</a></li>
                                <li><a class="submenuitem" href="../teachers_course_distribuition/createTable.php">Teacher Course Disribuition Table</a></li>
                            </ul>
                        </li> 
                        <li><a class="menuitem" href="#">Previous Question</a></li> 
                        <li><a class="menuitem" href="#">Notes</a></li>
                        <li><a class="menuitem" href="#">Faculty Members</a>
                            <ul class="submenu">
                                <li><a class="submenuitem" href="../faculty_members/allTeacher.php">Teachers List</a></li>

                            </ul>
                        </li>
                        <li><a class="menuitem" href="#">Advisor</a>
                            <ul class="submenu">
                                <li><a class="submenuitem" href="../advisor/advisor_add.php">Add Advisor</a></li>
                                <li><a class="submenuitem" href="../advisor/advisor_list.php">Advisor List</a></li>
                            </ul>
                        </li>
                     </ul>
                </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="body">
                    <h2>Edit Course</h2>

<!--update course php start -->
<?php
  include '../config.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $courseCode=$_POST['course_code'];
        $courseTitle=$_POST['course_title'];
        $credit=$_POST['credit'];
        $offered=$_POST['offer'];
        $semester=$_POST['semester'];
        // $updateQuery = "UPDATE `teacher` SET `image`='$image_des',`name`='$name',`designation`='$designation',`email`='$email',`phone`='$phone' WHERE id='$id'";
        $updateQuery ="UPDATE batch_52 SET `course_code`= '$courseCode',`course_title`= '$courseTitle',`credit`= '$credit',`offer`= '$offered',`semester`='$semester' WHERE id = '$id'";
        if(mysqli_query($conn,$updateQuery)){
            echo "<script>location.href='batch52_list.php'</script>";
         }else{
            echo "<script>alert('Course not Updated!!! !!')</script>";
         }	 
    }
?>
<!--update course php end -->

<form action="" method="post" enctype="multipart/form-data" class="batch_update_form">
    <div class="mb-3 input">
        <label>course Code:</label><input type="text" value="<?php echo $data['course_code'] ;?>" name="course_code" />
    </div>
    <div class="mb-3 input">
    <label>course Title:</label><input type="text" value="<?php echo $data['course_title'] ;?>" name="course_title" />
    </div>
    <div class="mb-3 input">
    <label>Credit:</label><input type="text" value="<?php echo $data['credit'] ;?>" name="credit" /><br>
    </div>
    <div class="mb-3 input">
    <label>Offered</label><input type="text" value="<?php echo $data['offer'] ;?>" name="offer"/>
    </div>
    <div class="mb-3 input">
    <label>Semester</label><input type="text" value="<?php echo $data['semester'] ;?>" name="semester" />
    </div>
    <input type="hidden" name='id' value="<?php echo $data['id'] ?>">
    <div class="mb-3 submit-btn">
    <input type="submit" name="submit" Value="Save" />
    </div>

</form>
                    </div>
               </div>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="container">
            <p>&copy;Copyright <span>TFT.</span>All Rights Reserved</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/magnific.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>




         

