

<?php
    include '../config.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $batch= $_POST['batch'];
    $section = $_POST['section'];
   


     $updateQuery = "UPDATE `advisor` SET `name`='$name',`designation`='$designation',`email`='$email',`phone`='$phone',`batch`='$batch',`section`='$section' WHERE id='$id'";

     if(mysqli_query($conn,$updateQuery)){
      //   echo "<script>alert('Updated!!! !!')</script>";
        echo "<script>location.href='advisor_list.php'</script>";
     }else{
        echo "<script>alert('not Updated!!! !!')</script>";
     }
			
	

