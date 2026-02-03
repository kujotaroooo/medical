
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['logout'])){
    session_destroy(); // destroy session
    header("location:../view/login.php"); 
    exit(); // MUST add exit after header
  }
}
?>
