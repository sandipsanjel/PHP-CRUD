<?php
session_start();
$un = $_POST["username"];
$pass = $_POST["password"];

if ($un == "coding" && $pass == "tech") {
    $_SESSION["sun"] = $un;
    // echo $un;
    header("location:menu.php");
} else {
    echo "invalid id password";
}
