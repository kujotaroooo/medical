<?php
function insertProgram($conn, $programCode, $programName) {
    $sql = "INSERT INTO program (program_code, program_name) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        return "Prepare failed: " . $conn->error;
    }

    $stmt->bind_param("ss", $programCode, $programName);

    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $error = $stmt->error;
        $stmt->close();
        return "Error: " . $error;
    }
}

function insertStudent($conn, $id, $fname, $lname, $mname, $bday, $sex, $cont, $email) {
    $sql = "INSERT INTO students (student_number, first_name, last_name, middle_name, birth_date, sex, contact_number, stud_email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        return "Prepare failed: " . $conn->error;
    }

    $stmt->bind_param("ssssssss", $id, $fname, $lname, $mname, $bday, $sex, $cont, $email);

    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $error = $stmt->error;
        $stmt->close();
        return "Error: " . $error;
    }
}
