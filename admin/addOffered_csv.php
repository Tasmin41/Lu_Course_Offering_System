
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Offered Course using csv</title>
    <link rel="stylesheet" href="css/data-table.css">
    <!-- bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--data table checkbox(jquery plug-in)-->
    <link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="datatable.min.css"/>
    <!--main style-->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>   
<div class="container">
<h3 align="center">Import course sheet from CSV File</h3><br />
<?php  
$connect2 = mysqli_connect("localhost", "root", "", "finalyear_project");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename2 = explode(".", $_FILES['file']['name']);
  if($filename2[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data2 = fgetcsv($handle))
   {
    $batch_section = mysqli_real_escape_string($connect2, $data2[0]);  
    $course_code = mysqli_real_escape_string($connect2, $data2[1]);
    $course_title = mysqli_real_escape_string($connect2, $data2[2]);  
    $credit = mysqli_real_escape_string($connect2, $data2[3]); 

    $department = mysqli_real_escape_string($connect2, $data2[4]);
    $no_of_students = mysqli_real_escape_string($connect2, $data2[5]);


    $no_of_class = mysqli_real_escape_string($connect2, $data2[6]);//
    $duration = mysqli_real_escape_string($connect2, $data2[7]);
    $week_class = mysqli_real_escape_string($connect2, $data2[8]);

    $query2 = "INSERT into list_of_offered_course2(batch_section,course_code,course_title,credit,conducting_department,no_of_students,no_of_class,duration,class_week)
     values('$batch_section','$course_code','$course_title','$credit','$department','$no_of_students','$no_of_class','$duration','$week_class')";//
    mysqli_query($connect2, $query2);
   }
   fclose($handle);
   echo "<script>location.href='offered_course_list.php'</script>";

  }
 }
}
?> 
  <form method="post" enctype="multipart/form-data">
   <div align="center">  
    <label>Select CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="submit" class="btn btn-info" />
   </div>
  </form>
</div>

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <!--bootstrap js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--jquery plugin for slide-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--data table-->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <!--checkbox-->
    <script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    <!--main script-->
    <script src="assets/js/script.js"></script>
</body>
</html>