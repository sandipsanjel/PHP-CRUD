<?php
include("conn.php");
include("menu.php");

$id=$_POST["id"];
$fn=$_POST["firstname"];
$ln=$_POST["lastname"];
$s=$_POST["salary"];
$ag=$_POST["age"];
$em=$_POST["email"];


$s="update employee set FirstName='$fn',SecondName='$ln',Salary='$s',Age='$ag',Email='$em' where id='$id'";
$qry=mysqli_query($conn,$s);
header("location:list.php");  //this is done to get into same page after submutting infos 


?>