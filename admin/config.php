<?php
    $serverName="localhost";
    $username="root";
    $password="";
    $dbName="finalyear_project";
    $conn= mysqli_connect($serverName,$username,$password,$dbName);

    if(!$conn){
        die("Connection Failed :".mysqli_connect_error());
    }
    else{
        //echo "<script>alert('DB Connected!!')</script>";
    }