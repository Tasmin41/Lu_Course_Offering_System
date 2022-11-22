<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor</title>
    <!-- font awesom -->
    <link rel="stylesheet" href="assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--magnific css-->
    <link rel="stylesheet" href="assets/css/magnific.css">
    <!--owl-carosol-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--data table css-->
    <link rel="stylesheet" href="assets/css/data-table.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .row{
            justify-content: center !important;
        }
    </style>
</head>
<body>
    <!--Header area-->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="header-wrap">
                    <ul class="list-left">
                        <li><a href="https://www.lus.ac.bd/" target="_blank"><i class="fa-solid fa-envelope-open"></i> lus.ac.bd</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone"></i> +1-3435-2356-222</a></li>
                    </ul>
                    <ul class="list-right">
                        <li><a href="https://www.facebook.com/leadinguniversity2001" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="headBottom-wrap">
                    <div class="logo">
                        <img src="./image/logo.png" alt="logo">
                        <a href="#"><span>Leading</span> University</a>
                     </div>
                    <div class="navigation">
                     <ul class="menu-main"> 
                            <li><a href="home.php">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Faculty Member <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="#">Department Of CSE</a></li>
                                        <li><a href="#">Department Of EEE</a></li>
                                        <li><a href="#">Department of English</a></li>
                                        <li><a href="#">Department Of BBA</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Courses <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="batch50.php">Batch 50</a></li>
                                        <li><a href="batch51.php">Batch 51</a></li>
                                        <li><a href="batch52.php">Batch 52</a></li>
                                        <li><a href="batch53.php">Batch 53</a></li>
                                        <li><a href="batch54.php">Batch 54</a></li>
                                        <li><a href="batch55.php">Batch 55</a></li>
                                        <li><a href="batch56.php">Batch 56</a></li>
                                        <li><a href="batch57.php">Batch 57</a></li>
                                        <li><a href="batch58.php">Batch 58</a></li>
                                        <li><a href="batch59.php">Batch 59</a></li>
                                        <li><a href="batch60.php">Batch 60</a></li>
        
                                    </ul>
                                </div>
                            </li>
                            <li><a href="advisor.php">Advisor</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="logout.php" class="btn logout">Logout</a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div> 
    </header>
    <!--banner area starts-->
    <section class="fsingle-banner col-xl-12" style="background-image: url('./assets/img/teaher.jpg');">
        <div class="container">
            <div class="banner-content contnt2">
                <h3 style="color: #C3D136;">I express my sincere gratitude to all my students and send my best wishes for their future endeavors!</h3>
                <h2>Advisor</h2>
            </div>
        </div>
    </section>
    <!--banner area ends-->
    <!--courses offer starts-->

    <section class="table mb-50">
        <div class="container">
            <h3 class="table-title"> Advisor List</h3>
            <div class="row">
                <div class="col-xl-12">
                <div class="cart-table">
                <table id="example" class="display nowrap order-column">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Phpne</th>
                    <th>Batch</th>
                    <th>Section</th>

                </tr>
            </thead>
            <tbody>
            <?php
                           include 'config.php';
                           $allData = mysqli_query($conn,"SELECT * FROM `advisor`");
                           while($row=mysqli_fetch_array($allData)){
                               echo "<tr>
                             
                                   <td>$row[name]</td>
                                   <td>$row[designation]</td>
                                   <td>$row[email]</td>
                                   <td>$row[phone]</td>
                                   <td>$row[batch]</td>
                                   <td>$row[section]</td>
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

    <!--courses offer ends-->
    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="footer-logo">
                            <a href="#">  <img src="assets/img/logo.png" alt="logo"></a>
                            <ul class="top">
                                <li>Box 35300</li>
                                <li>1810 Campus Way NE</li>
                                <li>Bothell, WA 98011-8246</li>
                            </ul>
                            <ul class="bottom">
                                <li><a href="#">+1-2534-4456-345</a></li>
                                <li><a href="#">admin@kingsteruni.edu</a></li>
                            </ul>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="campus">
                            <h4>Our Campus</h4>
                            <span class="line"></span>
                            <ul class="bottom">
                                <li><a href="#">Acedemic</a></li>
                                <li><a href="#">Planning & Administration</a></li>
                                <li><a href="#">Campus Safety</a></li>
                                <li><a href="#">Office of the Chancellor</a></li>
                                <li><a href="#">Facility Services</a></li>
                                <li><a href="#">Human Resources</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="campus">
                            <h4>Campus Life</h4>
                            <span class="line"></span>
                            <ul class="bottom">
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Financial Aid</a></li>
                                <li><a href="#">Food Services</a></li>
                                <li><a href="#">Housing</a></li>
                                <li><a href="#">Information Technologies</a></li>
                                <li><a href="#">Student Life</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="campus">
                            <h4>Academics</h4>
                            <span class="line"></span>
                            <ul class="bottom">
                                <li><a href="#">Canvas</a></li>
                                <li><a href="#">Catalyst</a></li>
                                <li><a href="#">Library</a></li>
                                <li><a href="#">Time Schedule</a></li>
                                <li><a href="#">Apply For Admissions</a></li>
                                <li><a href="#">Pay My Tuition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-wrapper">
                    <div class="row">
                        <div class="col-xl-6">
                            <p>Copyright All Right Reserved 2022, Team TFT</p>
                        </div>
                        <div class="col-xl-6">
                            <ul class="footer-icon">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--about area ends-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <!--data table js-->
    <script src="assets/js/dataTables.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>