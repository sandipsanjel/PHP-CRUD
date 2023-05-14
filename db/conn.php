
<?php
$servername="localhost";
$username="root";
$password="";
$databasename="dbemp";
$conn=mysqli_connect("$servername","$username","$password","$databasename");//default database username dbemp
if($conn){
    // echo "database connected sucesfully";
} 
else {
    echo "connection error";
    
}
?>