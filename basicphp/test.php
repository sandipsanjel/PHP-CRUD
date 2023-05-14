<?php
// function name($fn,$ln){
//  $d=$fn."".$ln;
//  return $d;   
// }
?>
<?php
function EvenOddSum($arr, $n)
{
    $even = 0;
    $odd = 0;
    for ($i = 0; $i < $n; $i++)
    {
         
        if ($i % 2 == 0)
            $even += $arr[$i];
        else
            $odd += $arr[$i];
    }
 
    echo("Even index positions sum " . $even);
    echo("\nOdd index positions sum " . $odd);
}
 
// Driver Code
$arr = array( 1, 2, 3, 4, 5, 6 );
$n = sizeof($arr);
 echo $n;
EvenOddSum($arr, $n);
 
// This code is contributed by Ajit.
?>