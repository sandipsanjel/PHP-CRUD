<!-- switch case-->
<?php
$day=6;
switch($day){
    case 1:
        echo "sunday";
        break;
        case 2:
            echo "monday";
            break;
            case 3:
                echo "tuesday";
                break;
                case 4:
                    echo "wednesday";
                    break;
                    case 5:
                        echo "thusday";
                        break;
                        case 6:
                            echo "friday";
                            break;
                            case 7:
                                echo "saturday";
                                break;
                                default:
                                echo "invalid number";
                                

}
echo "<br>";
?>
<?php

$fruit="apple";
switch($fruit){
    case 'apple':
        echo "200 rupees per kg ";
        break;
        case 'mango':
            echo "300 rupees per kg ";
            break;
            case 'orange':
                echo "400 rupees per kg ";
                break;
                case 'banana':
                    echo "500 rupees per kg ";
                    break;
                   
                                default:
                                echo "invalid enter ";

}
echo "<br>";
?>
 <!-- ternary operator  -->
<?php
$age=20;
$result=($age<18)? "Invalid for voting":"valid for voting";
echo $result;
 
?>
<br>
<?php
$sum=0;
for($i=0; $i<10 ;$i++){
 echo $i ;
 $sum=$sum+$i;

}
echo "sum is" .$sum;
?>
<br>
<!-- while displaying the numbers from 5-20 find the count  -->
<?php
$count = 0;
for ($i = 5; $i <= 20; $i++) {
  echo $i ;
  $count++;
}
echo 'Count: ' . $count;
?>
<br>

<?php
$evensum=0;
$oddsum=0;
for ($i = 1; $i <= 10; $i++){
// echo $i;
// echo "<br>";

    if ($i % 2 == 0) {
      echo $i . " is even<br>";
      $evenSum  =$i+$evenSum;  // Add even number to even sum
    } else {
      echo $i . " is odd<br>";
      $oddSum =  $i+ $oddSum;  // Add odd number to odd sum
    }
  }
  
  // Display sums
  echo "Sum of even numbers: " . $evenSum . "<br>";
  echo "Sum of odd numbers: " . $oddSum;
  
//   ?>
   <div style="line-height:0.5">
<?php
for ($y = 0; $y < 10; $y++) {
	for ($x = 0; $x < 10; $x++) {
		echo '1';
	}
	echo '<br>';
}
?> 
</div>
  
  
  

