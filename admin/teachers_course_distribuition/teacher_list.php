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
         /* margin-bottom: 50px; */
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
                        <li><a href="../home.php"><i class="fa-sharp fa-solid fa-house"></i></a></li>
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
                        <h5 class="teacher_h3">Rana M Luthfur Rahman Pir</h5>
                        <p class="teacher_p">Assistant Professor</p>
                        <table id="tacher" class="teacher display nowrap order-column table table-bordered">
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
                           <tbody>
                              <?php
                                $connect = mysqli_connect("localhost", "root", "", "finalyear_project" );
                                 $query = "SELECT * FROM list_of_offered_course2 WHERE teacher = 'RLP'";
                                 $result = mysqli_query($connect, $query);
                                 while ($row = mysqli_fetch_array($result)) {
                                    echo '
                                    <tr>
                                         <td>' .$row["batch_section"] .'</td>
                                         <td>' .$row["course_code"] . '</td>
                                         <td>' .$row["course_title"] . '</td>
                                         <td>' .$row["credit"] . '</td>
                                         <td>' .$row["no_of_class"] . '</td>
                                         <td>' .$row["duration"] . '</td>
                                         <td>' .$row["class_week"] . '</td>				        
                                     </tr>';
                                    }
                                 ?>
                              <tr>
                                 <td colspan="3" class="total-cal">Total</td>
                                 <td class="credit"></td>
                                 <td class="courses"></td>
                              </tr>
                              <tr>
                                 <td colspan="2">Regular Class : <span>5 Course & No Of Class is </span><span class="regular-class">210</span></td>
                                 <td colspan="1">Total: <span class="total-class"></span></td>
                                 <td colspan="3">Extra :  <span class="extra-class"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="teacher-table">
                        <h5 class="teacher_h3">Ebrahim Hussain</h5>
                        <p class="teacher_p">Assistant Professor</p>
                        <table id="tacher" class="teacher display nowrap order-column table table-bordered">
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
                           <tbody>
                              <?php
                                $connect = mysqli_connect("localhost", "root", "", "finalyear_project" );
                                $query ="SELECT * FROM list_of_offered_course2 WHERE teacher = 'EBH'";
                                $result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                     echo '
                                        <tr>
                                            <td>' .$row["batch_section"] .'</td>
                                            <td>' .$row["course_code"] . '</td>
                                            <td>' .$row["course_title"] . '</td>
                                            <td>' .$row["credit"] . '</td>
                                            <td>' .$row["no_of_class"] . '</td>
                                            <td>' .$row["duration"] . '</td>
                                            <td>' .$row["class_week"] . '</td>				        
                                        </tr>';
                                }
                            ?>
                              <tr>
                                 <td colspan="3" class="total-cal">Total</td>
                                 <td class="credit"></td>
                                 <td class="courses"></td>
                              </tr>
                              <tr>
                                 <td colspan="2">Regular Class : <span>5 Course & No Of Class is </span><span class="regular-class">210</span></td>
                                 <td colspan="1">Total: <span class="total-class"></span></td>
                                 <td colspan="3">Extra :  <span class="extra-class"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="teacher-table">
                        <h5 class="teacher_h3">Adil Ahmed Chowdhury</h5>
                        <p class="teacher_p">Lecturer</p>
                        <table id="teacher" class="teacher display nowrap order-column table table-bordered">
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
                           <tbody>
                              <?php
                                $connect = mysqli_connect("localhost", "root", "", "finalyear_project" );
                                $query ="SELECT * FROM list_of_offered_course2 WHERE teacher = 'AAC'";
                                $result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                echo '
                                <tr>
                                     <td>' .$row["batch_section"] .'</td>
                                     <td>' .$row["course_code"] . '</td>
                                     <td>' .$row["course_title"] . '</td>
                                     <td>' .$row["credit"] . '</td>
                                     <td>' .$row["no_of_class"] . '</td>
                                     <td>' .$row["duration"] . '</td>
                                     <td>' .$row["class_week"] . '</td>				        
                                 </tr>';
                                }
                                 ?>
                              <tr>
                                 <td colspan="3" class="total-cal">Total</td>
                                 <td class="credit"></td>
                                 <td class="courses"></td>
                              </tr>
                              <tr>
                                 <td colspan="2">Regular Class : <span>5 Course & No Of Class is </span><span class="regular-class">210</span></td>
                                 <td colspan="1">Total: <span class="total-class"></span></td>
                                 <td colspan="3">Extra :  <span class="extra-class"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="teacher-table">
                        <h5 class="teacher_h3">Syeda Tamanna Alam Monisha</h5>
                        <p class="teacher_p">Lecturer</p>
                        <table id="teacher" class="teacher display nowrap order-column table table-bordered">
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
                           <tbody>
                              <?php
                                $connect = mysqli_connect("localhost", "root", "", "finalyear_project" );
                                 $query = "SELECT * FROM list_of_offered_course2 WHERE teacher = 'STA'";
                                 $result = mysqli_query($connect, $query);
                                 while ($row = mysqli_fetch_array($result)) {
                                    echo '
                                    <tr>
                                         <td>' .$row["batch_section"] .'</td>
                                         <td>' .$row["course_code"] . '</td>
                                         <td>' .$row["course_title"] . '</td>
                                         <td>' .$row["credit"] . '</td>
                                         <td>' .$row["no_of_class"] . '</td>
                                         <td>' .$row["duration"] . '</td>
                                         <td>' .$row["class_week"] . '</td>				        
                                     </tr>';
                                    }
                                 ?>
                              <tr>
                                 <td colspan="3" class="total-cal">Total</td>
                                 <td class="credit"></td>
                                 <td class="courses"></td>
                              </tr>
                              <tr>
                                 <td colspan="2">Regular Class : <span>5 Course & No Of Class is </span><span class="regular-class">210</span></td>
                                 <td colspan="1">Total: <span class="total-class"></span></td>
                                 <td colspan="3">Extra :  <span class="extra-class"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
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
      <!-- <script src="../assets/js/script.js"></script> -->
      <script>
         $(document).ready(function(){
             $('#downloadPDF').click(function () {
         domtoimage.toPng(document.getElementById('all_teacher_table'))
         .then(function (blob) {
             var pdf = new jsPDF('l', 'pt', [$('#all_teacher_table').width(), $('#all_teacher_table').height()]);
         
             pdf.addImage(blob, 'PNG', 0, 0, $('#all_teacher_table').width(), $('#all_teacher_table').height());
             pdf.save("test.pdf");
             that.options.api.optionsChanged();
         });
         });
         });
         
         /*teacher course calculation starts from here*/
         const tableList = document.querySelectorAll(".teacher");
         const creditList = document.querySelectorAll(".credit");
         const courseList = document.querySelectorAll(".courses");
         const regularCourseList = document.querySelectorAll(".regular-class");
         const extraClassList = document.querySelectorAll(".extra-class");
         const totalCourseList = document.querySelectorAll(".total-class");
         
         for (let i = 0; i < tableList.length; i++) {
         var credit=0;credit =parseInt(credit); 
         var courses=0;courses =parseInt(courses);
         
         var noOfrowTeacher = tableList[i].rows.length;
         for(var j = 1; j <noOfrowTeacher - 2; j++)
         {
         credit = credit + parseInt(tableList[i].rows[j].cells[3].innerHTML);
         courses = courses + parseInt(tableList[i].rows[j].cells[4].innerHTML);
         }
         creditList[i].innerHTML = credit;
         courseList[i].innerHTML = courses;
         
         var regularCourse = regularCourseList[i].innerHTML;
         var totalExtraClass = regularCourse - courses;
         
         if(totalExtraClass >=0){
         extraClassList[i].innerHTML = "No Extra Class";
         }
         else{
         extraCourse =Math.floor((Math.abs(totalExtraClass))/42);
         
         var extraClass =Math.floor(((Math.abs(totalExtraClass))/42 - extraCourse)*42);
         
         extraClassList[i].innerHTML =extraCourse +  " courses " + extraClass + " Classes";
         }
         
         var totalCourse = Math.floor(courses/42);
         var totalClass =Math.ceil(((courses/42) - totalCourse)*42);
         
         totalCourseList[i].innerHTML=totalCourse + " Courses " + totalClass + " Classes";
         }
         
         /*Total course + extra course calculation starts from here*/
         
         
      </script>
   </body>
</html>