<?php
include("conn.php");
session_start();
$sun= $_SESSION["sun"];
$name=$_POST['name'];
$em=$_POST['email'];
$sub=$_POST['subject'];
$m=$_POST['message'];

// echo $name;
// echo $em;
// echo $sub;
// echo $m;


$sql="insert into form(Name,Email,Subject,Message) values('$name','$em','$sub','$m')";
$qry=mysqli_query ($conn,$sql);
include("list.php")
?>