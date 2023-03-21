<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>offered Course List</title>


    <!--data table css-->
    <link rel="stylesheet" href="../assets/css/datatable.min.css"/>
    <!-- font awesom -->
    <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--main css-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>



table.dataTable.nowrap th, table.dataTable.nowrap td {
    white-space: normal;
}

label {
	display: inline-block;
	margin-left: 10px;
	margin-bottom: 10px;
}
.dataTables_wrapper .dataTables_paginate {
	margin-bottom: 21px;
}
table.dataTable.nowrap th {
	white-space: nowrap;
    font-size: 14px;
    text-align: center;
}

.dataTables_wrapper .dataTables_filter {
	float: right;
	text-align: left;
	padding-right: 20px;
	margin-bottom: 10px;
}
table.dataTable thead>tr>th.sorting{
    padding-right: 0;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 5px;
    font-size: 14px;
    text-align: center;
}


    </style>
</head>
<body>

<section class="header-area">
    <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
               <div class="logo">
                    <a href="home.php" class="navbar-brand"><img src="../assets/img/logo.png" alt="logo"></a> 
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
                <div class="body col-xl-12 p0">
                    <h2 style="text-align: center;">Department of Computer Science & Engineering <br>
                    List of Offered Courses</h2>  
 
                <?php

                if(isset($_POST['deleteData'])){
       
                    include '../config.php';
                    $deleteQuery = "TRUNCATE TABLE list_of_offered_course2";
                    mysqli_query($conn,$deleteQuery);
                }
            ?>


                <form  method="post" class="deleteForm">
                    <input type="submit" name="deleteData" value="deleteData" class="deleteBtn">
                </form>


                    <table id="example" class="display nowrap order-column">
            <thead>
                <tr>
                    <!-- <th>Id</th> -->
                    <th>Batch+Section</th>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>credit</th>
                    <th>prerequisite</th>
                    <th>Department</th>
                    <th>No Of Students</th>
                    <th>Teacher</th>
                    <th>No of class</th>
                    <th>duration</th>
                    <th>class/week</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <!--update teachers php start -->
			<?php
              include '../config.php';
			    if(isset($_POST['selectsubmit'])){
                    $id = $_POST['id'];
				    $teacher=$_POST['teacher'];

                    $updateQuery ="UPDATE list_of_offered_course2 SET `teacher`='$teacher' WHERE id = '$id'";
                    if(mysqli_query($conn,$updateQuery)){
                        // echo "<script>alert('Course Updated!!! !!')</script>";
                      
                        echo "<script>location.href='offered_course_list.php' </script>";
                     }else{
                        echo "<script>alert('Course not Updated!!! !!')</script>";
                     }	 
				}
			?>
			<!--update teachers php end -->
                <?php
                include '../config.php';
                    $query = "SELECT * FROM list_of_offered_course2";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo '
                            <tr>
                                
                                <td>'.$row["batch_section"].'</td>
                                <td>'.$row["course_code"].'</td>
                                <td>'.$row["course_title"].'</td>
                                <td>'.$row["credit"].'</td>
                                <td>'.$row["prerequisite"].'</td>
                                <td>'.$row["conducting_department"].'</td>	
                                <td>'.$row["no_of_students"].'</td>
                                <td>
                                    <form method="post" enctype="multipart/form-data" class="selectsubmitForm">
                                        <select name="teacher" id="cars">
                                            <option value='.$row["teacher"].'>'.$row["teacher"].'</option>';

                                                $Selectquery = "SELECT abbreviations FROM allTeacher";
                                                $Selectresult = mysqli_query($conn, $Selectquery);
                                                $rowcount = mysqli_num_rows( $Selectresult );
                                                $x = 1;  
                                                while($x <= $rowcount) {
                                                while($Selectrow = mysqli_fetch_array($Selectresult)){
                                                    echo '<option value='.$Selectrow["abbreviations"].'>'.$Selectrow["abbreviations"].'</option>';
                                                    
                                                }
                                                $x+=1;
                                            }
                                            echo '</select>
                                            <input type="hidden" name="id" value='.$row["id"].'>
                                            <input type="submit" name="selectsubmit" Value="Save" class="selectsubmit btn-default" id="optionSubmit"/>
                                        </form>
                                    </td>
                                <td>'.$row["no_of_class"].'</td>
                                <td>'.$row["duration"].'</td>
                                <td>'.$row["class_week"].'</td>				
                                <td><a href="offeredcourse_edit.php?id='. $row['id'].'"><i class="fa-solid fa-pen-to-square"></i> </a> | <a href="offeredcourse_dlt.php?id='. $row['id'].'"> <i class="fa-solid fa-trash"></i></a></td>
                            </tr>';
                        }
                        ?>
            </tbody>
            </table>
               </div>


            </div>
           
        </div>
    </section>
    <footer class="footer-area">
        <div class="container">
            <p>&copy;Copyright <span>TFT.</span>All Rights Reserved</p>
        </div>
    </footer>

    <!--jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <!--data table js-->
    <script src="../assets/js/datatable.min.js"></script>
    <!--main js file-->
    <script src="../assets/js/script.js"></script>
</body>
</html>