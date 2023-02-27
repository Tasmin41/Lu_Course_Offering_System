<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Login</title>
    <!-- font awesom -->
    <link rel="stylesheet" href="../assets/css/font-awesom/css/all.min.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--Custom style-->
    <link rel="stylesheet" href="../assets/css/main.css">

</head>
<body>
    <section class="login-area" style="background-image:url('../assets/img/jess-bailey-l3N9Q27zULw-unsplash.jpg') ">
        <div class="container">
            <div class="login-wrapper">
                <div class="login-left" style="background-image: url('../assets/img/bg.jpg');">
                    <div class="content">
                        <h3>Deparment Of  CSE</h3>
                        <p>Login to Leading University & get going with your hunt</p>
                    </div>
                </div>
                <div class="login-form">
                    <h3>Student Login</h3>
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

                        <span><p>Do not have account yet?</p> <a href ="registration.php"class="btn register-btn">Register</a></span>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <!--jquery cd-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--bootstrap js-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--custom scripts-->
    <script src="../assets/js/script.js"></script>
</body>
</html>