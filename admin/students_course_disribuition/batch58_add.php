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
  <h3 class="add-div-h3">Import Syllabus from CSV File</h3><br />
    <?php  
    include '../config.php';
    
    if(isset($_POST["submit"]))
    {
    if($_FILES['file']['name'])
    {
      $filename = explode(".", $_FILES['file']['name']);
      if($filename[1] == 'csv')
      {
      $handle = fopen($_FILES['file']['tmp_name'], "r");
      while($data = fgetcsv($handle))
      {
        $item1 = mysqli_real_escape_string($conn, $data[0]);  
        $item2 = mysqli_real_escape_string($conn, $data[1]);
        $item3 = mysqli_real_escape_string($conn, $data[2]);    
        $query = "INSERT into batch_58(course_code, course_title,credit) values('$item1','$item2','$item3')";
        mysqli_query($conn, $query);
      }
      fclose($handle);
      echo "<script>location.href='batch58_list.php'</script>";
      }
    }
    }
    ?> 
      <form method="post" enctype="multipart/form-data" class="add-div-form">
      <div>  
        <label>Select CSV File:</label>
        <input type="file" name="file" class="mb-3" />
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