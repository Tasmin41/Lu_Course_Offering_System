<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Teacher List</title>


      <!-- font awesom -->
      <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
      <!-- bootsrap -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <!--main css-->
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
      <section class="body-area">
         <div class="container">
            <div class="body-wrapper row">
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
                  <div class="body">
                  <div id="all_teacher_table">
                     <h2 style="text-align: center;">Department of Computer Science & Engineering <br>
                     Teachers-Course-Distribution
                     </h2>
                     <div class="teacher-table">
                        <?php
                             include '../config.php';


                            $sql = "SELECT * from allTeacher";

                            if ($result = mysqli_query($conn, $sql)) {
                            
                                $rowcount = mysqli_num_rows( $result );

                                
                             }
                             $x = 1;  
                             while($x <= $rowcount) {
                              while ($row = mysqli_fetch_array($result)) {   
                                  echo "<h5 class='teacher_h3'>$row[1]</h5>";
                                  echo "<p class='teacher_p'>$row[2]</p>";
                       

                                  $teacherQuery = "SELECT * FROM list_of_offered_course2 WHERE
                                  list_of_offered_course2.teacher ='$row[3]'";
     
                                  $teacherresult = mysqli_query($conn, $teacherQuery);


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
                                          <td colspan='2'>Regular Class : <span>";
                                          if($row[2]=="Professor" || $row[2]=="Associate Professor"){
                                             echo " 4";
                                             
                                          }
                                          else{
                                             echo "5";
                                          }

                                           echo "Course & No Of Class is </span><span class='regular-class'> ";
                                          if($row[2]=="Professor" || $row[2]=="Associate Professor"){
                                             echo " 168";
                                             
                                          }
                                          else{
                                             echo "210";
                                          }
                                          echo"
                                          </span></td>
                                       <td colspan='1'>Total: <span class='total-class'></span></td>
                                       <td colspan='3'>Extra :  <span class='extra-class'></span></td>
                                    </tr>";
                                       
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

      <!--pdf downlood-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
         integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
      <!--main js file-->
      <!-- <script src="../assets/js/script.js"></script> -->
      <script>

 
/*Download pdf*/
$(document).ready(function(){
	$('#downloadPDF').click(function () {
domtoimage.toPng(document.getElementById('all_teacher_table'))
.then(function (blob) {
	var pdf = new jsPDF('l', 'pt', [$('#all_teacher_table').width(), $('#all_teacher_table').height()]);

	pdf.addImage(blob, 'PNG', 0, 0, $('#all_teacher_table').width(), $('#all_teacher_table').height());
	pdf.save("teacher-course-distribuition.pdf");
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
credit = credit + parseFloat(tableList[i].rows[j].cells[3].innerHTML);
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