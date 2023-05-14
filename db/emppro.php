<?php
session_start();
$sun= $_SESSION["sun"];
include("conn.php");
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$s = $_POST['salary'];
$ag = $_POST['age'];
$em = $_POST['email'];


// echo "$fname";
// echo "$lname";
// echo "$s";
// echo "$ag";
// echo "$em";

$sql = "insert into employee(firstName,SecondName,Salary,Age,Email, entryBy)values('$fname','$lname','$s','$ag','$em','$sun')";
$qry = mysqli_query($conn, $sql);
// echo "data saved successfully";
header("location:emp.php");  //this is done to get into same page after submutting infos 
