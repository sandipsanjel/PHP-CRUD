
<?php
$conn=mysqli_connect("localhost","root","","registerdb");
if($conn){
    echo "conected";
}
else{
    echo "error";
}