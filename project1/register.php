<?php 
include("conn.php");

$nm=$_POST['name'];
$em=$_POST['email'];
$ps=$_POST['password'];
$cps=$_POST['Cpassword'];

$sql = "insert into task (Name,Email,Password,ConfirmPassword) values('$nm','$em','$ps','$cps')";
$qry = mysqli_query($conn, $sql);
// if($qry)
// // {
//     echo $qry;
 header("Location:loginform.php");
?>