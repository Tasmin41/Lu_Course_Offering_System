<?php
    include 'config.php';
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `advisor` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:advisor_list.php');