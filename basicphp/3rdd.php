<?php
$course="science";


if ($course="science"){
echo "join engineering";
}
elseif ($course=="management"){
echo " join BBA ";
}
elseif ($course=="biology"){
echo " join MBBS";
}
else{
    echo "join any course" ;
}
echo "<br>";
?>


<?php
$course="mnt";
$marks="40%";

if ($course =="science" && $marks>="60%"){
echo "join engineering";
}

elseif($course=="mnt" && $marks>="40%"&& $marks<"60%"){
    echo "join BBA ";
}
else 
echo "can't  join any class";
echo "<br>";
?>

<?php
$course="mnt";
$marks="65";

if(($course=="mnt"|| $course=="science") && ($marks>="60"|| $marks=="70"))
{
    echo "join pulchowk";
}
    else
    echo "can't join";
    echo "<br>";
?>

<?php

$marks="81";

    if($marks>=81 && $marks=100){
    echo "1st div";
} 
elseif($marks>= 61 && $marks<=80){
    echo "2nd div";

}
elseif($marks>= 46&& $marks<=60){
    echo "3rd div";
}
elseif($marks>=31 && $marks<=45){
    echo "4th div";
}
elseif($marks>= 0 && $marks<=30){
    echo "fail!";
}


else
echo "enter correct value ";
?>
<?php

?>