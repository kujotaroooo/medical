<?php
include('../../config/config.php');  
include('../model/insertProgram.php');

if (isset($_POST['add'])) {
    $programCode = $_POST['code'];
    $programName = $_POST['program'];

    $result = insertProgram($conn, $programCode, $programName);

    if ($result) {
        
        header("Location: ../view/addprogram.php?success=1");
        exit(); 
    } else {
     
        echo $result;
    }

    $conn->close();
}
