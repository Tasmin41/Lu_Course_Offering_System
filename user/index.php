<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-area {

    height: 100vh;

}
    </style>
</head>
<body>


    <section class="login-area" style="background-image:url('./assets/img/jess-bailey-l3N9Q27zULw-unsplash.jpg') ">
        <div class="container">
            <div class="login-wrapper">
                <div class="login-left" style="background-image: url('./assets/img/nick-fewings-_f-iqDS9k-U-unsplash.jpg');">
                    <div class="content">
                        <h3>Welcome Back</h3>
                        <p>Login to Leading University & get going with your hunt</p>
                    </div>
                </div>
                <div class="login-form">
                    <h3>Login</h3>
                    <form action="loginAction.php" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="l_email">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="l_pass">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn" name ="login">Login</button>
                        <a>Forget Password?</a>
                        <span><p>Do not have account yet?</p> <a href ="registration.php"class="btn register-btn">Register</a></span>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <!--data table js-->
    <script src="assets/js/dataTables.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>