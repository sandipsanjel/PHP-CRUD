<?php
include("conn.php");

$name=$_POST['name'];
$em=$_POST['email'];
$sub=$_POST['subject'];
$m=$_POST['message'];


$sql="insert into form(Name,Email,Subject,Message)values('$name','$em','$sub','$m')";
$qry=mysqli_query ($conn,$sql);
include("list.php")
?>