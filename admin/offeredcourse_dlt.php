<?php
include 'config.php';
$id = $_GET['id'];
$deleteQuery = "DELETE FROM `list_of_offered_course2` WHERE id='$id'";
mysqli_query($conn,$deleteQuery);
header('location:offered_course_list.php');

?>