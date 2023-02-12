<?php
    include '../config.php';
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $batch = $_POST['batch'];
    $section = $_POST['section'];


     $insertQuery = "INSERT INTO `advisor`(`name`,`designation`,`email`,`phone`,`batch`,`section`) VALUES ('$name','$designation','$email','$phone','$batch','$section')";

     if(mysqli_query($conn,$insertQuery)){
        echo "<script>location.href='advisor_list.php'</script>";
     }