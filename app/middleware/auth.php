<?php
session_start();

function login(){
    if (!isset($_SESSION['user'])) {
    header("Location: authentication.php");
    exit();
}
}