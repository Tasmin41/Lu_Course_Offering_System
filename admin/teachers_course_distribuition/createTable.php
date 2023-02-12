<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Teacher List</title>
      <!--bootstrap css-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <!--data table css-->
      <!-- <link rel="stylesheet" href="../assets/css/datatable.min.css"/> -->
      <!-- font awesom -->
      <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
      <!-- bootsrap -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <!--main css-->
      <link rel="stylesheet" href="../assets/css/main.css">
      <style>

         a{
         text-decoration: none;
         }
         a:hover{
         text-decoration: none;
         }
         table {
         caption-side: bottom;
         /* border-collapse: collapse; */
         /* max-width: 95%; */
         margin: 0 auto 50px !important;
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
         /* margin-bottom: 50px; */
         padding: 10px 20px;
         }
         .button{
         display: flex;
         justify-content: center;
         align-items: center;
         margin-bottom: 50px !important;
         }
         .total-cal{
         text-align: end;
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
            <div class="body-wrapper row">
               <div class="body col-xl-9 p0 mx-auto">
                  <div id="all_teacher_table">
                     <h2 style="text-align: center;">Department of Computer Science & Engineering <br>
                        List of Offered Courses for Spring 2023
                     </h2>
                     <div class="teacher-table">
                        <?php
                             $connect = mysqli_connect("localhost", "root", "", "finalyear_project" );


                            $sql = "SELECT * from allTeacher";

                            if ($result = mysqli_query($connect, $sql)) {
                            
                                $rowcount = mysqli_num_rows( $result );

                                
                             }
                             $x = 1;  
                             while($x <= $rowcount) {
                              while ($row = mysqli_fetch_array($result)) {   
                                  echo "<h5 class='teacher_h3'>$row[1]</h5>";
                                  echo "<p class='teacher_p'>$row[2]</p>";
                       

                                  $teacherQuery = "SELECT * FROM list_of_offered_course2 WHERE
                                  list_of_offered_course2.teacher ='$row[3]'";
     
                                  $teacherresult = mysqli_query($connect, $teacherQuery);


                                  echo
                                  "<table border='1' id='tacher' class='teacher display nowrap order-column table table-bordered' >
                                     <thead>
                                         <tr>
                                             <th>Batch+Section</th>
                                             <th>Course Code</th>
                                             <th>Course Title</th>
                                             <th>credit</th>
                                             <th>No of class</th>
                                             <th>duration</th>
                                             <th>class/week</th>
                                         </tr>
                                     </thead>
                                     <tbody>";
                                     while ($Trow= mysqli_fetch_row($teacherresult)) {    
                                          echo 
                                          "<tr>
                                             <td> $Trow[1]</td>
                                             <td>$Trow[2]</td>
                                             <td>$Trow[3]</td>
                                             <td>$Trow[4]</td>
                                             <td>$Trow[9]</td>
                                             <td>$Trow[10]</td>
                                             <td>$Trow[11]</td>				        
                                          </tr>"
                                          ;  
                                       }
                                       echo "
                                       <tr>
                                          <td colspan='3' class='total-cal'>Total</td>
                                          <td class='credit'></td>
                                          <td class='courses'></td>
                                       </tr>
                                       ";
                                       echo "
                                       <tr>
                                          <td colspan='2'>Regular Class : <span>5 Course & No Of Class is </span><span class='regular-class'>210</span></td>
                                          <td colspan='1'>Total: <span class='total-class'></span></td>
                                          <td colspan='3'>Extra :  <span class='extra-class'></span></td>
                                       </tr>
                                       ";
                                      echo 
                                      "
                                      
                                       </tbody>
                                      </table>";
                                    
                                      $x += 1; 
                                    
                                    }
                                 }      
                              ?>
                           </div>
                        </div>
               <div class="button">
                  <button class="btn btn-info" id="downloadPDF">Download PDF</button>
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
      <!-- <script src="../assets/js/datatable.min.js"></script> -->
      <!--pdf downlood-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
         integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
      <!--main js file-->
      <script src="../assets/js/script.js"></script>
      <script>

 
         
      </script>
   </body>
</html>