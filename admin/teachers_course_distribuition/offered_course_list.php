<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>offered Course List</title>

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
    <style>

a{
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
table {
    caption-side: bottom;
    border-collapse: collapse;
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
    font-size: 14px;
    text-align: center;
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
        <div class="container">
            <div class="header d-flex justify-content-between">
                <div class="logo">
                    <a href="../home.php"><img src="../assets/img/logo.png" alt="logo"></a> 
                    <span><h2>Admin Panel</h2><a href="https://www.lus.ac.bd/">www.lus.ac.bd</a></span>
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
                <div class="body col-xl-12 p0">
                    <h2 style="text-align: center;">Department of Computer Science & Engineering <br>
                    List of Offered Courses for Spring 2023</h2>     
                    <table id="example" class="display nowrap order-column">
            <thead>
                <tr>
                    <th>Id</th>
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
                <?php
                $connect = mysqli_connect("localhost", "root", "", "finalyear_project");
                    $query = "SELECT * FROM list_of_offered_course2";
                    $result = mysqli_query($connect, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo '
                            <tr>
                                <td>'.$row["id"].'</td>
                                <td>'.$row["batch_section"].'</td>
                                <td>'.$row["course_code"].'</td>
                                <td>'.$row["course_title"].'</td>
                                <td>'.$row["credit"].'</td>
                                <td>'.$row["prerequisite"].'</td>
                                <td>'.$row["conducting_department"].'</td>	
                                
                                <td>'.$row["no_of_students"].'</td>
                                <td>'.$row["teacher"].'</td>
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