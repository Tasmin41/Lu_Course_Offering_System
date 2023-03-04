<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>All Teacher List</title>

      <!--data table css-->
      <link rel="stylesheet" href="../assets/css/datatable.min.css"/>
      <!-- font awesom -->
      <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
      <!-- bootsrap -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <!--main css-->
      <link rel="stylesheet" href="../assets/css/main.css">

   </head>
   <body>
      <section class="header-area">
         <div class="container">
            <div class="header d-flex justify-content-between">
               <div class="logo">
                  <a href="../home.php"><img src="../assets/img/logo.png" alt="logo"></a> 
                  <span>
                     <h2>Admin Panel</h2>
                     <a href="https://www.lus.ac.bd/">www.lus.ac.bd</a>
                  </span>
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
            <div class="row">
            <!--add course php start -->
			<?php
                include '../config.php';
                if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $designation = $_POST['designation'];
                    $abbroviation= $_POST['abbreviations'];
    
                    $insertQuery = "INSERT INTO `allTeacher`(`name`,`designation`,`abbreviations`) VALUES ('$name','$designation','$abbroviation')";
    
                    if(mysqli_query($conn,$insertQuery)){
                        echo "<script>location.href='allTeacher.php'</script>";
         }
                }

			?>
                <div class="col-xl-5">
                    <div class="new-teacher-add">
                    <h2>Add New Teacher</h2>
                    <form action="" method="POST" enctype="multipart/form-data" class="form-w-600">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Abbreviations</label>
                                    <input type="text" name="abbreviations" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="submit" class="btn btn-dark">Add Member</button>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="body col-xl-7 p0 ">
                  <div id="all_teacher_table">
                     <div class="teacher-table">
                        <table id="tacher" class="teacher display nowrap order-column table table-bordered">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Designation</th>
                                 <th>Abbreviations</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                $connect = mysqli_connect("localhost", "root", "", "finalyear_project" );
                                 $query = "SELECT * FROM allTeacher";
                                 $result = mysqli_query($connect, $query);
                                 while ($row = mysqli_fetch_array($result)) {
                                    echo '
                                    <tr>
                                         <td>' .$row["name"] .'</td>
                                         <td>' .$row["designation"] . '</td>
                                         <td>' .$row["abbreviations"] . '</td>
                                         <td><a href="allTeacher_edit.php?id='. $row['id'].'"><i class="fa-solid fa-pen-to-square"></i> </a> | <a href="allTeacher_dlt.php?id='. $row['id'].'"> <i class="fa-solid fa-trash"></i></a></td>			        
                                     </tr>';
                                    }
                                 ?>
                           </tbody>
                        </table>
                     </div>

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
      <!--jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
      <!--data table js-->
      <script src="../assets/js/datatable.min.js"></script>
      <!--pdf downlood-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
         integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
      <!--main js file-->
      <script src="../assets/js/script.js"></script>

         
      </script>
   </body>
</html>