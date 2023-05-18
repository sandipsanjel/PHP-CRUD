<?php
include("conn.php");
$n = $_POST['name'];
$P = $_POST['phone'];
$em = $_POST['email'];


$sql = "insert into contact(Name,Phone,Email)values('$n','$P','$em')";
$qry = mysqli_query($conn, $sql);
header("location:contact.php");
?>
