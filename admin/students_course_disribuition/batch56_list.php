<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch 56 Course List</title>

    <!--bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
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
                    <a href="../index.php"><img src="../assets/img/logo.png" alt="logo"></a> 
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
                        <li><a href="#"><?php echo $_SESSION['r_email'] ?>  | </a></li>
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
                <div class="body col-xl-9 p0">
                    <h2>Batch 56 course List</h2>  
                    <?php
                  include '../config.php';

                    if(isset($_POST['deleteData'])){

                        $deleteQuery = "TRUNCATE TABLE batch_56";
                        mysqli_query($conn,$deleteQuery);
                    }
                ?>
               <form  method="post" class="deleteForm">
                    <input type="submit" name="deleteData" value="deleteData" class="deleteBtn">
                </form>   
                    <table id="example" class="display nowrap order-column">
                    <p id="val"></p>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>credit</th>
                    <th>Offered</th>
                    <th>Semester</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "finalyear_project");
                    $query = "SELECT * FROM batch_56";
                    $result = mysqli_query($connect, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo '
                            <tr>
                                <td>'.$row["id"].'</td>
                                <td>'.$row["course_code"].'</td>
                                <td>'.$row["course_title"].'</td>
                                <td>'.$row["credit"].'</td>
                                <td>'.$row["offer"].'</td>
                                <td>'.$row["semester"].'</td>					
                                <td><a href="batch55_edit.php?id='. $row['id'].'">Edit</a></td>
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
	<script type="text/javascript">
var noOfrow = document.querySelector('table').rows.length;

var sumVal=0;
	sumVal =parseInt(sumVal); 

	for(var i = 1; i <noOfrow; i++)
	{
		if(document.querySelector('table').rows[i].cells[4].innerHTML == ""){
			continue;
		}
		else if(document.querySelector('table').rows[i].cells[4].innerHTML == "1" )
        {
			sumVal = sumVal + parseInt(document.querySelector('table').rows[i].cells[3].innerHTML);
		} 
        
       
	}
	
	document.getElementById("val").innerHTML = "Total Credits Offered = " + sumVal;
    </script>
    <!--jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <!--data table js-->
    <script src="../assets/js/datatable.min.js"></script>
    <!--main js file-->
    <script src="../assets/js/script.js"></script>
</body>
</html>