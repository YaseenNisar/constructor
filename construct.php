<?php
class person{
/*here we can also set default values for name and age
if u don't give a value, it will read default ones

public $name= "yaseen";
public $age=24;*/ 

  public $name, $age;


/* "comment A" to use default values, 
  function __construct($n="yaseen", $a=25)*/ 
function __construct($n,$a){
  $this->name=$n;
  $this->age=$a;
}

function show(){
  echo $this->name ."<br>and<br>". $this->age ."<br>";
}

}
/* here we have to assign these value in order to avoid uncaught error.
and if we don't it will not either take default value for construtor function. 
to use default values, there's an option for constructor fuction(see comment "A")*/
$p1= new person("yaseen",26);
$p2= new person("Abdullah",25);
$p3= new person("Haris",24);
/*$p1->name= "yaseen";
$p1->age= 25;
*/
$p1->show();
$p2->show();

?>