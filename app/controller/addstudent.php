<?php
session_start();
require_once '../../config/config.php';
include('../model/cruds.php');

if (isset($_POST['add'])) {
    if (empty($_POST['stud_number']) || empty($_POST['stud_email']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['middle_name']) || empty($_POST['birth_date']) || empty($_POST['sex']) || empty($_POST['contact_number'])) {

    $_SESSION['error'] = "All fields are required.";
            header("Location: ../view/addstudent.php");
        exit();
    }
    $id = $_POST['stud_number'];
    $email = $_POST['stud_email'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $mname = $_POST['middle_name'];
    $bday = $_POST['birth_date'];
    $sex = $_POST['sex'];
    $cont = $_POST['contact_number'];

    $result = insertStudent($conn, $id, $fname, $lname, $mname, $bday, $sex, $cont, $email);

    if ($result) {
        
        $_SESSION['success'] = "Student Added Succesfully.";
            header("Location: ../view/addstudent.php");
        exit();
    
    } else {
    
        echo $result;
    }

    $conn->close();
}
