<?php
    include '../config.php';
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `allTeacher` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:allTeacher.php');
    ?>