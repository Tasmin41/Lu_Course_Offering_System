<?php
include 'config.php';
    $r_username = $_POST['r_username'];
    $r_email = $_POST['r_email'];
    $r_pass = $_POST['r_pass'];
    $r_cpass = $_POST['r_cpass'];
    $r_mobile = $_POST['r_mobile'];

    $emailPattern = "/(cse|eee|law)_\d{10}@lus\.ac\.bd/";
    // $passPattern =  "/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" ;
    $mobilePattern = "/(\+88)?-?01[3-9]\d{8}/";
    


    if(strlen($r_username<3 || strlen($r_username) > 20)){
        echo "<script>alert('3-20 char username is allowed')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($emailPattern  , $r_email)){
        echo "<script>alert('LU email required')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if($r_pass!==$r_cpass){
        echo "<script>alert('Pass and confirm pass is not matching')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($mobilePattern , $r_mobile)){
        echo "<script>alert('**Only BD phone number is allowed!!')</script>";
        echo "<script>location.href='registration.php'</script>";
    }
    else{
        $insert_query = "INSERT INTO `register`(`username`, `email`, `pass`, `mobile`) VALUES ('$r_username','$r_email','$r_pass','$r_mobile')";
        if(!mysqli_query($conn,$insert_query)){
            die("not inserted");
        }
        else{
            echo "<script>alert('inserted!!')</script>";
            echo "<script>location.href='index.php'</script>";
        }
    }

?>