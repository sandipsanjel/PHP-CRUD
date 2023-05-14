<!-- 10th day -->
<!-- inheritance -->
<?php
class Country
{
    public $sname = "bagmati";

    public $cname = "nepal";
    // public $cproviance = "bagmati";
    function cinfo()
    {
        echo $this->cname."<br>";
    }
}

class state extends country
{

    public function sinfo()
    {
        echo "state name is " . $this->sname ."<br>";
    }
    public function cinfo(){
        echo "state info".$this->sname."<br>";
    }//overridding example
}
class distric extends state{
    public $dname="lalitpur";

    public function dinfo()
    {
        echo "distric name is ".$this->dname."<br>";
    }
}
$s=new distric();
$s->cinfo();
$s->sinfo();
$s->dinfo();
?>
<br>
<!-- overloading example -->
<?php
class cal{

    function __call($fn,$p){
        if ($fn =="add"){
            $c=count($p);
            switch($c){
                case 2:
                    echo "add 2 parameter".($p[0]+$p[1]);
                    break;
                    case 3:
                        echo "add 3 parameter".($p[0]+$p[1]+$p[2]);
            }
        }
    }
}
$c=new cal();
$c->add(4,6);
$c-> add(5,6,1);

?>
<br>
<!-- interface example -->

<?php
interface Animal{
    public function makesound();
}
class Dog implements Animal{
    public function makesound()
    {
    
     
        echo "dog vows ";
    }

}

class Tiger implements Animal{
    public function makesound()
    {
    
     
        echo "tiger roars";
    }
}

$i= new Tiger();
$i->makesound();
echo "<br>";
$t= new Dog();
$t->makesound();
