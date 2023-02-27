<?php
include '../config.php';
    $r_username = $_POST['r_username'];
    $r_email = $_POST['r_email'];
    $r_pass = $_POST['r_pass'];
    $r_cpass = $_POST['r_cpass'];

    if(strlen($r_username<3 || strlen($r_username) > 20)){
        echo "<script>alert('Must be between 3 and 20 characters long.')</script>";
        echo "<script>location.href='registration.php'</script>";
    }

    else if($r_pass!==$r_cpass){
        echo "<script>alert('Password and confirm password doesnt match')</script>";
        echo "<script>location.href='registration.php'</script>";
    }

    else{
        $insert_query = "INSERT INTO `teacher_registration`(`r_username`, `r_email`, `r_pass`) VALUES ('$r_username','$r_email','$r_pass')";
        if(!mysqli_query($conn,$insert_query)){
            die("Sorry!! Try Again");
        }
        else{
            echo "<script>alert('Thanks for filling out our form!')</script>";
            echo "<script>location.href='login.php'</script>";
        }
    }

?>