<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>All Teacher List</title>
      <!--bootstrap css-->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
      <!--data table css-->
      <link rel="stylesheet" href="../assets/css/datatable.min.css"/>
      <!-- font awesom -->
      <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
      <!-- bootsrap -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <!--main css-->
      <link rel="stylesheet" href="../assets/css/main.css">
      <style>
         p#val {
         color: #1B548D;
         padding: 15px;
         display: flex;
         justify-content: flex-end;
         font-weight: bold;
         max-width: 218px;
         border: 1px solid;
         margin: 10px 20px 20px auto;
         }
         a{
         text-decoration: none;
         }
         a:hover{
         text-decoration: none;
         }
         table {
         caption-side: bottom;
         border-collapse: collapse;
         /* max-width: 95%; */
         margin: 0 auto;
         }
         table.dataTable.nowrap th, table.dataTable.nowrap td {
         white-space: normal;
         }
         table.dataTable thead>tr>th.sorting:before, table.dataTable thead>tr>th.sorting_asc:before, table.dataTable thead>tr>th.sorting_desc:before, table.dataTable thead>tr>th.sorting_asc_disabled:before, table.dataTable thead>tr>th.sorting_desc_disabled:before, table.dataTable thead>tr>td.sorting:before, table.dataTable thead>tr>td.sorting_asc:before, table.dataTable thead>tr>td.sorting_desc:before, table.dataTable thead>tr>td.sorting_asc_disabled:before, table.dataTable thead>tr>td.sorting_desc_disabled:before {
         bottom: 50%;
         content: "";
         }
         table.dataTable thead>tr>th.sorting:after, table.dataTable thead>tr>th.sorting_asc:after, table.dataTable thead>tr>th.sorting_desc:after, table.dataTable thead>tr>th.sorting_asc_disabled:after, table.dataTable thead>tr>th.sorting_desc_disabled:after, table.dataTable thead>tr>td.sorting:after, table.dataTable thead>tr>td.sorting_asc:after, table.dataTable thead>tr>td.sorting_desc:after, table.dataTable thead>tr>td.sorting_asc_disabled:after, table.dataTable thead>tr>td.sorting_desc_disabled:after {
         top: 50%;
         content: "";
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
         }
         .body h2{
         justify-content: center;
         }
         .dataTables_wrapper .dataTables_filter {
         float: right;
         text-align: left;
         padding-right: 20px;
         margin-bottom: 10px;
         }
         .teacher_p{
         margin-bottom: 20px;
         }
         .teacher-table{
         margin-bottom: 50px;
         padding: 10px 20px;
         }
         .button{
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .total-cal{
         text-align: end;
         }
         .new-teacher-add {
    background: #fff;
    border-radius: 8px;
    height: 100%;
    padding: 20px;
}
      </style>
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
                        <li><a href="#"><i class="fa-sharp fa-solid fa-house"></i></a></li>
                        <li><a href="../home.php">Home</a></li>
                    </ul>
                </div>
               <div class="right">
                  <ul>
                     <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                     <li><a href="#">Hello Admin | </a></li>
                     <li><a href="../logout.php" style="color: #C3D136;;">Logout</a></li>
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
                    <form action="" method="POST" enctype="multipart/form-data">
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