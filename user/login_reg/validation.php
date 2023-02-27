<?php
include '../config.php';
    $r_username = $_POST['r_username'];
    $r_email = $_POST['r_email'];
    $r_pass = $_POST['r_pass'];
    $r_cpass = $_POST['r_cpass'];
    $r_mobile = $_POST['r_mobile'];

    $emailPattern = "/(cse|eee|law)_\d{10}@lus\.ac\.bd/";
    // $passPattern =  "/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" ;
    $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
    


    if(strlen($r_username<3 || strlen($r_username) > 20)){
        echo "<script>alert('Must be between 3 and 20 characters long.')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($emailPattern  , $r_email)){
        echo "<script>alert('LU email required')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if($r_pass!==$r_cpass){
        echo "<script>alert('Password and confirm password doesnt match')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($mobilePattern , $r_mobile)){
        echo "<script>alert('**Only BD phone number is allowed!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else{
        $insert_query = "INSERT INTO `student_registration`(`username`, `email`, `pass`, `mobile`) VALUES ('$r_username','$r_email','$r_pass','$r_mobile')";
        if(!mysqli_query($conn,$insert_query)){
            die("Sorry!! Try Again");
        }
        else{
            echo "<script>alert('Thanks for filling out our form!')</script>";
            echo "<script>location.href='login.php'</script>";
        }
    }

?>