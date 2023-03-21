
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor List</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  


<link rel="stylesheet" href="../assets/css/datatable.min.css"/>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <!-- font awesom -->
    <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
<link rel="stylesheet" href="../assets/css/main.css">

<script src="../assets/js/datatable.min.js"></script>
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>

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
body h2{
    display: flex;
    justify-content: space-between !important;
}
label {
	display: inline-block;
	margin-left: 10px;
	margin-bottom: 10px;
}
.dataTables_wrapper .dataTables_paginate {
	margin-bottom: 21px;
}
.btn-primary{
    background-color: #C3D136 !important;
    color: #fff !important;
    border: none;
}
.dataTables_wrapper .dataTables_filter {
	float: right;
	text-align: left;
	padding-right: 20px;
	margin-bottom: 10px;
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

                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 co-12">
                    <div class="body">
                    <h2>Advisor List <a href="index.php"><i class="fa-solid fa-angles-left"></i></a></h2>   
                    <table id="example" class="display nowrap order-column">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Batch</th>
                    <th>Section</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
            <?php
                           include '../config.php';
                           $allData = mysqli_query($conn,"SELECT * FROM `advisor`");
                           while($row=mysqli_fetch_array($allData)){
                               echo "<tr>    
                                   <td>$row[name]</td>
                                   <td>$row[designation]</td>
                                   <td>$row[email]</td>
                                   <td>$row[phone]</td>
                                   <td>$row[batch]</td>
                                   <td>$row[section]</td>
                                   <td><a class='btn btn-primary' href='advisorEdit.php?id=$row[id]'>Update</a></td>
                                   <td><a class='btn btn-primary' href='advisorDelete.php?id=$row[id]'>Delete</a></td>
                               </tr>";     
                           }
                           ?>
            </tbody>
        </table>
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
    <script src="../assets/js/script.js"></script>
</body>
</html>