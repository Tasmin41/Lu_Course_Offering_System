<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Syllabus</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--data table checkbox(jquery plug-in)-->
    <link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />

    <!-- font awesom -->
    <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
    <!--main style-->
    <link rel="stylesheet" href="../assets/css/main.css">
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
    <section class="add-body-area">
      <div class="container">
        <div class="add-div">
        <h3 class="add-div-h3">Import course sheet from CSV File</h3><br />
<?php  
include '../config.php';
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename2 = explode(".", $_FILES['file']['name']);
  if($filename2[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data2 = fgetcsv($handle))
   {
    $batch_section = mysqli_real_escape_string($conn, $data2[0]);  
    $course_code = mysqli_real_escape_string($conn, $data2[1]);
    $course_title = mysqli_real_escape_string($conn, $data2[2]);  
    $credit = mysqli_real_escape_string($conn, $data2[3]); 

    $department = mysqli_real_escape_string($conn, $data2[4]);
    $no_of_students = mysqli_real_escape_string($conn, $data2[5]);


    $no_of_class = mysqli_real_escape_string($conn, $data2[6]);//
    $duration = mysqli_real_escape_string($conn, $data2[7]);
    $week_class = mysqli_real_escape_string($conn, $data2[8]);

    $query2 = "INSERT into list_of_offered_course2(batch_section,course_code,course_title,credit,conducting_department,no_of_students,no_of_class,duration,class_week)
     values('$batch_section','$course_code','$course_title','$credit','$department','$no_of_students','$no_of_class','$duration','$week_class')";//
    mysqli_query($conn, $query2);
   }
   fclose($handle);
   echo "<script>location.href='offered_course_list.php'</script>";

  }
 }
}
?> 
  <form method="post" enctype="multipart/form-data" class="add-div-form">
   <div>  
    <label>Select CSV File:</label>
    <input type="file" name="file" class="mb-3"/>
    <br />
    <input type="submit" name="submit" value="submit" class="btn theme-btn" />
   </div>
  </form>
        </div>
      </div>
    </section> 
    <footer class="footer-area">
  <div class="container">
      <p>&copy;Copyright <span>Team : Tasmin | Fahim </span>All Rights Reserved</p>
  </div>
</footer>

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <!--bootstrap js-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--jquery plugin for slide-->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!--data table-->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <!--checkbox-->
    <script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    <!--main script-->
    <script src="../assets/js/script.js"></script>
</body>
</html>