<?php
// we take variable(properties) in class public(Access modifiers) .
class employee{
  public $name;
  public $age;
  public $salary;

//   then store value in construct fun.
  function __construct($n,$a,$s){
    $this->name=$n;
    $this->age=$a;
    $this->salary=$s;
  }
//   call the value of employee class in this function(method).
  function info (){
    echo "<h3>Employee Profile </h3>";
    echo "Employee Name : " .$this->name . "<br>";
    echo "Employee age : " .$this->age . "<br>";
    echo "Employee salary : " .$this->salary . "<br>";
  }
}

// we call all the (properties and method ) in manager class by using extends keyword.That's this called as inheritance.
class manager extends employee{
    public $ta=1100;
    public $pf=3000;
    public $totalsalary;

    function info (){
        $this->totalsalary=$this->salary + $this->ta +$this->pf;
        echo "<h3>Manager Profile </h3>";
        echo "Employee Name : " .$this->name . "<br>";
        echo "Employee age : " .$this->age . "<br>";
        echo "Employee salary : " . $this->totalsalary . "<br>";
    } 
}

$e1= new employee("Nitesh",22,5000);
$e2= new manager("Abhimanyu",20,15000);
$e1->info();
$e2->info();
?>