<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect("localhost", "root", "", "coffee_db");
// $conn = mysqli_connect("ServerNeme", "UserName", "password", "DBName");

?>
