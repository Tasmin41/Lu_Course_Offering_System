<?php
   include '../config.php';
   session_start();
   $id = $_GET['id'];
   //echo $id;
   $dataFetchQuery = "SELECT * FROM `allTeacher` WHERE id = '$id'";
   $record = mysqli_query($conn,$dataFetchQuery);
   $data = mysqli_fetch_array($record);
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Member info edit </title>
    <!-- font awesom -->
    <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--magnific css-->
    <link rel="stylesheet" href="../assets/css/magnific.css">
    <!--owl-carosol-->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="../assets/css/main.css">

    
</head>
<body>
    <section class="header-area">
        <div class="container">
            <div class="header d-flex justify-content-between">
                <div class="logo">
                    <a href="../home.php"><img src="../assets/img/logo.png" alt="logo"></a> 
                    <span><h2>Admin Panel</h2><a href="https://www.lus.ac.bd/">www.lus.ac.bd</a></span>
                </div>
                <div class="right">
                    <ul>
                        <li><a href="../home.php"><i class="fa-sharp fa-solid fa-house"></i></a></li>
                        <li><a href="../home.php">Home</a></li>
                    </ul>
                </div>
                <div class="right">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                        <li><a href="#"><?php echo $_SESSION['r_email'] ?> | </a></li>
                        <li><a href="../login_reg/logout.php" style="color: #C3D136;;">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="body-area">
        <div class="container">
            <div class="body-wrapper row">
            <div class="side-bar col-xl-3">
            <ul class="section menu">
                        <li><a class="menuitem">Courses</a>
                             <ul class="submenu"> 
                                <li><a class="submenuitem" href="#">Batch 50</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch50_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch50_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem" href="#">Batch 51</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch51_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch51_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem" href="#">Batch 52</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch52_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch52_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem" href="#">Batch 53</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch53_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch53_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem" href="#">Batch 54</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch54_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch54_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem" href="#">Batch 55</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch55_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch55_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem" href="#">Batch 56</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch56_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch56_list.php">Course List</a> </li>
                                    </ul>
                                </li>  
                                <li><a class="submenuitem" href="#">Batch 57</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch57_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch57_list.php">Course List</a> </li>
                                    </ul>
                                </li> 
                                <li><a class="submenuitem" href="#">Batch 58</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch58_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch58_list.php">Course List</a> </li>
                                    </ul>
                                </li>
                                <li><a class="submenuitem" href="#">Batch 59</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch59_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch59_list.php">Course List</a> </li>
                                    </ul>
                                </li>
                                <li><a class="submenuitem" href="#">Batch 60</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="../students_course_disribuition/batch60_add.php">Add Course</a> </li>
                                        <li><a href="../students_course_disribuition/batch60_list.php">Course List</a> </li>
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
                                <li><a class="submenuitem" href="./allTeacher.php">Teachers List</a></li>

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
                <div class="body col-xl-9 p0">
                    <h2>Edit Faculty Members</h2>

            <!--update course php start -->
			<?php
              include '../config.php';
			    if(isset($_POST['submit'])){
                    $id = $_POST['id'];
				    $name=$_POST['name'];
                    $designation=$_POST['designation'];
                    $abbreviations=$_POST['abbreviations'];

                    // $updateQuery = "UPDATE `teacher` SET `image`='$image_des',`name`='$name',`designation`='$designation',`email`='$email',`phone`='$phone' WHERE id='$id'";
                    $updateQuery ="UPDATE allTeacher SET `name`= '$name',`designation`= '$designation',`abbreviations`= '$abbreviations' WHERE id = '$id'";
                    if(mysqli_query($conn,$updateQuery)){

                        echo "<script>location.href='allTeacher.php'</script>";
                     }else{
                        echo "<script>alert('Course not Updated!!! !!')</script>";
                     }	 
				}
			?>
			<!--update course php end -->

            <form action="" method="post" enctype="multipart/form-data" class="batch_update_form">
                <div class="mb-3 input">
                    <label>Name</label><input type="text" value="<?php echo $data['name'] ;?>" name="name" />
                </div>
                <div class="mb-3 input">
                <label>Designation</label><input type="text" value="<?php echo $data['designation'] ;?>" name="designation" />
                </div>
                <div class="mb-3 input">
                <label>Abbreviations</label><input type="text" value="<?php echo $data['abbreviations'] ;?>" name="abbreviations" /><br>
                </div>

                <input type="hidden" name='id' value="<?php echo $data['id'] ?>">
                <div class="mb-3 submit-btn">
                <input type="submit" name="submit" Value="Save" />
                </div>
            </form>
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




         

