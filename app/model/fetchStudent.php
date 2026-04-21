<?php
    require_once '../../config/config.php';
    function getAllStudents(){
        global $conn;
        $sql = "SELECT * FROM students";
        $stmt = $conn->prepare($sql); // prepare ini for statement
        $stmt->execute();          // tapos ig execute
        $result = $stmt->get_result(); // ngan ig get an result
        $students = $result->fetch_all(MYSQLI_ASSOC); // tapos ig fetch all as associative array
        return $students;
    }

    function getStudentsRecord($search){

    }