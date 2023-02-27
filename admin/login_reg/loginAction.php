<?php
        include '../config.php';

        if(isset($_POST['login'])){
            $l_email=$_POST['l_email'];
            $l_pass=$_POST['l_pass'];

            $result = mysqli_query($conn ,"SELECT * FROM `teacher_registration` WHERE r_email='$l_email' And r_pass='$l_pass'");

            if(mysqli_num_rows($result)>0){
                session_start();
                $_SESSION['r_email']=$l_email;
                echo "<script>location.href='../home.php'</script>";

            }
            else{
                echo "<script>alert('Incorrect Username And Password!!')</script>";
                echo "<script>location.href='login.php'</script>";
            }
        }else{
            echo "no";
        }
    ?>