<?php
$name='"Coding Technology",2nd day';
echo "this is".$name."<br>";
?>
<?php
echo "my roll num is 30"."<br>";
$name_1 ="coding technology"."<br>";
$Day=" 2nd day of class"."<br>";
// $1="variable shluld't start with number"."<br>";

echo "i am in " .$name_1;
echo "it's a" .$Day."<br>";

?>

<?php
//VARIABLE TYPES 
define ("MSG" ,"php program",false);
echo MSG."<br>";

?>
<?php
#magic cosntant
/*dpuble
line */
echo "my line no is".__LINE__."<br> ";
echo "file name" .__FILE__."<br>";
echo "directory" .__DIR__."<br>";
?>

<?php
//date 
$dt1 =date ('d/m/y');
$dt2 =date ('D/M/Y');
echo $dt1."<br>";
echo $dt2."<br>";


?>
<?php
//to print default time 
date_default_timezone_set("asia/kathmandu");
echo "The time is " . date("H:i:sA")."<br>";
// echo '<td>' . date('Y-m-d H:i:s') . '</td>'; // example of current datetime
?>

<?php
$m=25;
if($m<=25){

echo"have a cup of tea";
}
else{
    echo("not sufficient money" );
}


?>
<!-- to print the if or else conditon in table --> 




<?php
  $value = 30; // example value
  
  if ($value >30) {
    $output = 'have a cup of tea';
  } else {
    $output = 'not sufficient money';
  }
  ?>
 


<table width=50% border=5>
  <tr>
    <th>money</th>
    <th>tea</th>
  </tr>
  <tr>
    <td><?php echo $value;?> </td>
    <td><?php echo $output;?> </td>
  </tr>
</table>


















