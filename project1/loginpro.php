<?php
// Assuming you have a database connection established
include("conn.php");
session_start();
$un = $_POST["name"];
$pass = $_POST["password"];
$cpass = $_POST["Cpassword"];


// Perform necessary sanitization and validation of input

// Query the database to check if the username and password match
$query = "SELECT * FROM task WHERE Name = '$un' && Password = '$pass' ";
$result = mysqli_query($conn, $query);
// echo $query;

if (mysqli_num_rows($result) == 1) {
    // Username and password match, allow access
    $_SESSION["sun"] = $un;

    // echo "You are logged in";
    header("location:main.php");
} else {
    echo "Invalid username or password";
}

// Close the database connection
// mysqli_close($conn);
?>
