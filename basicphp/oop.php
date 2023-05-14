<!-- .//////9th day -->
<?php
class book
{
    public $title = "php";
    private $price = 1500;
    public $auther = "ABC";
    function binfo()
    {
        echo $this->title . "<br>";
    }
    function binfo1()
    {

        $c = "book name is " . $this->title . "<br>"
            . "price of the book " . $this->price . "<br>" .
            "auther of the book" . $this->auther . "<br>";
        echo $c;
    }
    function discount()
    {
        $p = 500;
        $d = "discounted price is" . $this->price - $p;
        echo $d;
        echo "<br>";
    }
    function bdetail($city, $country)
    { //to acces parameter use $ only not $this->
        echo "book title is " . $this->title . "<br>";
        echo " city is " . $city . "<br>";
        echo "country" . $country . "<br>";
    }
    function adds()
    {
        $x = 5;
        $y = 3;
        $z = $x + $y;
        echo $z;
    }
    function alldetail()//we can call another function like this
    {
        echo "detail msg" . "<br>";
        $this->adds();
        echo "<br>";
        $this->bdetail("ktm", "Nepal");
    }
}

$b = new book();
$b->binfo(); //function call of first function
$b->binfo1(); //we have to call all function individually
$b->discount();
// $b->bdetail("ktm","Nepal");
$b->alldetail();

// echo $b->price;
//echo $b->auther;

?>

<!-- constructor concepet -->
<?php
 class Bike{
   private $color;
    private $model;

function __construct($color,$model){
    echo "constructer is first called here "."<br>";
    $this->color=$color;
    $this->model=$model;
}

function binfo(){
    echo $this->color."<br>";
}
function binfo1(){
    echo $this->model;
}
 }
$b=new Bike("blue","MT-15N"); //function calls here and we use same variable name 
$b->binfo();
$b->binfo1();
?>

<?php
 class student{
    public $name;
    public $faculty;
    public $Roll_num;

function __construct($name,$faculty,$Roll_num){
    $this->name=$name;
    $this->faculty=$faculty;
    $this->Roll_num=$Roll_num;
}

function sinfo(){
    echo $this->name."<br>";
}
function sinfo1(){
    echo $this->faculty;
}
function sinfo2(){
    echo $this->Roll_num;
}
 }
$b=new student("sandip","BSC CSIT","31"); 
$b->sinfo();
$b->sinfo1();
$b->sinfo2()
?>


