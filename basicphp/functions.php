
<!-- 6th day -->


<?php
function hi()
{
    echo "hi how are you" . "<br>";
    echo "i am fine";
}
hi();
?>
<br>
<?php

function area($l, $b)
{ //define function
    $a = $l * $b;
    return $a;
}
$v = area(2, 4); //passing arg 
echo "Area is" . $v . "<br>";
$h = 2;
$vol = $v * $h;
echo "volume is " . $vol;
?>

<br>

<?php
//function 

function dt($c = "ct", $q = 32)
{
    echo $c . "<br>" . "roll num " . $q;
}
dt();
"<br>";
dt("coding", 10);
?>
<br>
<?php

//passing multiple variable and args

function info(...$data)
{
    echo count($data);
    $c = count($data);
    for ($i = 0; $i < $c; $i++) {
        echo $data[$i] . "<br>";
    }
}
info("CT", 30, "KTM");
?>
<br>
<hr />
<?php

//passing multiple variable and args

function num(...$data)
{
    $s = 0;
    echo count($data) . "<br>"; //this prints the number of parameter present in function
    $c = count($data);
    for ($i = 0; $i < $c; $i++) {
        // $data[$i];
        $s = $s + $data[$i];
    }
    return $s;
}
$t = num(2, 2, 3);//function call and passing multiple parameters
echo $t;
?>
<br>
<?php
function fact($n)
{
    if ($n == 0) {
        return 0;
    }
    if ($n == 1) {
        return 1;
    }

    return $n * fact($n - 1);
}
echo fact(2);
?>

<!-- ///////9th day -->

<!-- //different string functions -->
<?php
$a=abs(-5);
echo $a;
$c=ceil(5.6);
echo $c;
$c=floor(5.6);
echo $c;
$c=pow(2,3);
echo $c;
$c=round(5.1);
echo $c;

echo "<br>";

$s="Tis is coDing Technology";
$l=strtolower($s);
echo $l;
echo "<br>";

$l=strtoupper($s);
echo $l;

echo "<br>";
//to make first letter upper case
$s="this is coDing Technology";
$l=ucfirst($s);
echo $l;
echo "<br>";
//to reverse 
$s="This is coDing Technology";
$rv=strrev($s);
echo $rv;
echo "<br>";

$rv=ucwords($s);
echo $rv;
echo "<br>";

$s="this is coding technology";
$l=strlen($s);// also counts the white space 
echo $l;

echo "<br>";

$s="  this is coding technology  ";
$l=trim($s);//removes the white spaces of front and back
echo $l;

echo "<br>";
$s="coding tech";
$l=substr($s,0,6);//to display the certain character inside string
echo $l;
echo "<br>";

$s="this is coding technology";
$exp=explode(" ",$s);//to explode we need the same char that separate the string
print_r($exp);
echo "<br>";

foreach ($exp as $k => $v) {
echo $k .$v."<br>";//usig foreach loop
}
?>



