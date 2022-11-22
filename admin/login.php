<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <style>
        body{
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding: 30px 0 50px 0;
    height: 100vh;
    height: 100%;
}

          form{
              background : #455A64;
              padding: 15px;
              box-shadow:0px 0px 10px 0px #000;
              border-radius: 10px;

          }
          .btn-primary{
            background-color: #C3D136;
            color: #fff;
            border: none;
          }
          p{
            font-weight: bold;
          
            color: #fff;
          }
     </style>
    <title>login</title>
  </head>
  <body style="background-image:url('./assets/img/jess-bailey-l3N9Q27zULw-unsplash.jpg') ">
    <div class="container-fluid">
            <div class="row justify-content-center mt-5">
               <div class="col-lg-4 col-md-6 col-sm-12">
               <form action="index.php" method="post">
               <div class="mb-3">
                <h3 class="text-center" style="color: #C3D136;">Admin Login</h3>
            </div>
            <div class="mb-3">
                <p>Username : admin & Password:12345678</p>
            </div>
            <div class="mb-3">
             <input type="text" class="form-control" name="l_username" placeholder="username" required>
            </div>
            <div class="mb-3">
            <input type="password" class="form-control" name="l_pass"  placeholder="password" required>
            </div>
            <input type="submit" class="btn btn-primary" class="form-control" name="login" value="login"><br><br>
        
             </form>
               </div>
            </div>  
     </div>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>