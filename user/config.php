<?php
    $serverName="localhost";
    $username="root";
    $password="";
    $dbName="finalyear_project";

    $conn = mysqli_connect($serverName,$username,$password,$dbName);

    if(!$conn){
        die("Connection faild : " .mysqli_connect_error());
    }
    else{
        // echo "<script>alert('DBConnect!!')</script>";
    }

?>