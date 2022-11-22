<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor Add</title>
    <!-- font awesom -->
    <link rel="stylesheet" href="assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--magnific css-->
    <link rel="stylesheet" href="assets/css/magnific.css">
    <!--owl-carosol-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/main.css">
    
</head>
<body>
    <section class="header-area">
        <div class="container">
            <div class="header d-flex justify-content-between">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="logo"></a> 
                    <span><h2>Admin Panel</h2><a href="https://www.lus.ac.bd/">www.lus.ac.bd</a></span>
                </div>
                <div class="right">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                        <li><a href="#">Hello Admin | </a></li>
                        <li><a href="logout.php" style="color: #C3D136;;">Logout</a></li>
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
                                <li><a class="submenuitem">Batch 50</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch50_add.php">Add Course</a> </li>
                                        <li><a href="batch50_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Batch 51</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch51_add.php">Add Course</a> </li>
                                        <li><a href="batch51_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem">Batch 52</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch52_add.php">Add Course</a> </li>
                                        <li><a href="batch52_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem">Batch 53</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch53_add.php">Add Course</a> </li>
                                        <li><a href="batch53_list.php">Course List</a> </li>
                                    </ul>
                                </li>    
                                <li><a class="submenuitem">Batch 54</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch54_add.php">Add Course</a> </li>
                                        <li><a href="batch54_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem">Batch 55</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch55_add.php">Add Course</a> </li>
                                        <li><a href="batch55_list.php">Course List</a> </li>
                                    </ul>
                                </li>   
                                <li><a class="submenuitem">Batch 56</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch56_add.php">Add Course</a> </li>
                                        <li><a href="batch56_list.php">Course List</a> </li>
                                    </ul>
                                </li>  
                                <li><a class="submenuitem">Batch 57</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch57_add.php">Add Course</a> </li>
                                        <li><a href="batch57_list.php">Course List</a> </li>
                                    </ul>
                                </li> 
                                <li><a class="submenuitem">Batch 58</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch58_add.php">Add Course</a> </li>
                                        <li><a href="batch58_list.php">Course List</a> </li>
                                    </ul>
                                </li>
                                <li><a class="submenuitem">Batch 59</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch59_add.php">Add Course</a> </li>
                                        <li><a href="batch59_list.php">Course List</a> </li>
                                    </ul>
                                </li>
                                <li><a class="submenuitem">Batch 60</a>
                                    <ul class="submenuitem-child">
                                        <li><a href="batch60_add.php">Add Course</a> </li>
                                        <li><a href="batch60_list.php">Course List</a> </li>
                                    </ul>
                                </li> 
                             </ul>
                         </li> 
                        <li><a class="menuitem">Assign Course Teacher</a></li> 
                        <li><a class="menuitem">Previous Question</a></li> 
                        <li><a class="menuitem">Notes</a></li>
                        <li><a class="menuitem">Advisor</a>
                            <ul class="submenu">
                                <li><a class="submenuitem" href="advisor_add.php">Add Advisor</a></li>
                                <li><a class="submenuitem" href="advisor_list.php">Advisor List</a></li>
                            </ul>
                        </li>
                     </ul>
                </div>
                <div class="body col-xl-9 p0">
                    <h2>Hello Admin</h2>
                    <form action="advisorInsert.php" method="POST" enctype="multipart/form-data">
                                <!-- <div class="mb-3">
                                    <label>Advisor Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div> -->
                                <div class="mb-3">
                                    <label>Advisor Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Faculty Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Batch</label>
                                    <input type="text" name="batch" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Section</label>
                                    <input type="text" name="section" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="save_student" class="btn btn-dark">Add Member</button>
                                </div>
                            </form>
               </div>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="container">
            <p>&copy;Copyright <span>TFT.</span>All Rights Reserved</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>