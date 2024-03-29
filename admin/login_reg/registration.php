<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
        <!-- font awesom -->
        <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
        <!-- bootsrap -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <!--magnific css-->
        <link rel="stylesheet" href="../assets/css/magnific.css">
        <!--owl-carosol-->
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    
        <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <section class="registration-area" style="background-image:url('../assets/img/jess-bailey-l3N9Q27zULw-unsplash.jpg');">
        <div class="container">
            <div class="form admin-form">
                <form action="validation.php" method="post">
                    <h2>Admin Registration</h2>
                    <div class="form-inner">
                        <div class="input-wrap mb-3">
                            <label for="username">Enter Your username : </label>
                            <input class="form-control" type="text" name="r_username">
                        </div>
                        <div class="input-wrap mb-3">
                            <label for="email">Enter Your Email : </label>
                            <input class="form-control" type="email" name="r_email">
                        </div>
                        <div class="input-wrap mb-3">
                            <label for="pass">Password : </label>
                            <input class="form-control" type="password" name="r_pass">
                        </div>
                        <div class="input-wrap mb-3">
                            <label for="cpass">Confirm Password: </label>
                            <input class="form-control" type="password" name="r_cpass">
                        </div>

                        <button class="btn" type="submit">Register</button>
                        <a class="btn" href="login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--jQuery cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--boootstrap js-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--custom js-->
    <script src="../assets/js/script.js"></script>
</body>
</html>