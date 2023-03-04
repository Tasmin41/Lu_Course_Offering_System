<?php
    session_start();
    if(isset($_SESSION['email'])){
        session_unset(); //session_unset just remove all session variables.
        session_destroy(); //destroys all of the data associated with the current session
        echo "<script>location.href='login.php'</script>";

   }else{

        echo "<script>location.href='login.php'</script>";
   }



?>