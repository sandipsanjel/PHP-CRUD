<!-- 7th day -->
<?php 
$fruits=array("apple","orange","banana");
$fruits[3]="mango";
$c=count($fruits);

echo $c."<br>";
$d1=$fruits[0];
$d2=$fruits[1];

for($i=0; $i<$c; $i++){
    echo $fruits[$i]."<br>";
}
?>

<?php 
$s=0;
$num=array(1,3,5,6);
$c=count($num);

echo $c."<br>";
$d1=$num[0];
$d2=$num[1];

for($i=0; $i<$c; $i++){
    $s=$s+ $num[$i];
}
echo $s;
?>
<br>
<?php 
$fruits=array("apple","orange","banana");
$c=count($fruits);

 unset($fruits[0]);
 print_r($fruits);

 $fruits[0]="mango";
 sort($fruits);
 print_r($fruits);//displays value with index like apple=>[0]
 
echo $c."<br>";
$d1=$fruits[0];
$d2=$fruits[1];

for($i=0; $i<$c; $i++){
    echo $fruits[$i]."<br>";
}
?>
<br>
<?php 
$fruits=array("apple","orange","banana");

//foreach loop 
foreach($fruits as $f){
    echo "$f"."<br>";
    
}
?>
<br>
<?php

$d=array("name"=>"coding tech ","city"=>"ktm",'ph'=>98234823);
echo $d["name"] ."\t".$d["city"] ."\t".$d["ph"]."<br>"; //\t white space

foreach($d as $k=>$v){
echo $k .$v;
}
?>
<br>

<?php

$d=array("onion"=>"200 per kg","Apple"=>"150 per kg");
// echo $d["onion"] ."\t".$d["apple"] ."<br>"; //\t white space

foreach($d as $k=>$v){
echo $k ."=>".$v."<br>";
}
?>



<!-- ///////////////////8th day -->

<?php
$fruits = array("apple", "orange", "banana");
print_r($fruits); //gives the elemensts in array with index

print_r(array_reverse($fruits));
echo "<br>";
array_push($fruits, "onion");
print_r($fruits);
// array_pop($fruits,[0]);
// print_r($fruits);
?>
<br>
<?php
$f1 = array("apple", "orange", "banana");
$f2 = array("apple", "suntala", "kera");
$f3 = array_intersect($f1, $f2);
print_r($f3);
?>
<br>


<!-- //////////multidimensional array -->
<?php
        $sum=0;
$n = array(
    array(1, 2, 3),
    array(3, 4, 5),
    array(6, 7, 8),
);
for ($i = 0; $i < 3; $i++) {
    $arry_sum=0;
    for ($j = 0; $j < 3; $j++) {
        echo $n[$i][$j] . " ";
        $sum = $sum + $n[$i][$j];
        $arry_sum +=$n[$i][$j];

    }

    echo "<br>";
echo "sum of the array $i :".$arry_sum ."<br>";
}
echo"total sum of the array is ". $sum;
echo "<br>";




//
?>
<br>
<!-- store all loop data in array and display that using for each and for loop -->
<?php
$d = array();

for ($i = 1; $i <= 5; $i++) {
    $d[] = "Item " . $i;
}

foreach ($d as $item) {
    echo $item . "<br>";
}


?>
