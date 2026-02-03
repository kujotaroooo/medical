<?php
session_start();
require_once '../model/loginAuth.php';


if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    if (isset($_POST["login"])) {

        $username = $_POST["UserName"];
        $pwd = $_POST["Password"];

        $user = getUser($username);

     if( $user && $user['pwd'] === $pwd){
    $_SESSION['user'] = $user;
    header("Location: ../view/dashboard.php");
    exit();
} else {
    $_SESSION['error'] = "Wrong Credentials";
    header("Location: ../view/login.php");
    exit();
}

    }
}
?>