<!-- 11th day -->
<?php
function test() {
    try {
        $val = 10/1;

        echo "<br/>Value after division is... ". $val;
        throw new Exception('<br/>Arithmetic Exception Thrown');
    } catch(Exception $e) {//eception in parent class
        echo $e->getMessage();
        echo $e->getLine(); // to show which line have the error
        // echo "exmessage";// dont give user defined catch block msg
    } finally {
        echo '<br/>finally';
  }    
    echo "<br/>Last line...";
}
echo test();

?>
<!-- 12th day -->
<?php
function ex($x, $y)
{
    $div = 0;           //loccal variable it works only inside curly bracket 
    try {
        $div = $x / $y;
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "finally<br/>";
    }
    return $div;
}
$v = ex(5, 1);//passing arguments to the function ex
echo "value is: ".$v;    //variable call
?>

<?php

function divide_numbers($n,$d){
    try{
        if ($d==0){
            throw new Exception("dividon by zero.");
        }
return $n/$d;
    }
    catch(Exception $e){
    echo $e->getMessage();

    }
    finally {
        echo "finally<br/>";
    }
}
echo divide_numbers(5,6);
// echo divide_numbers(5,0);
?>


