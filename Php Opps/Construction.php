<?php
class Per{
    public $name;

  function show (){
    echo "Your Name " . $this->name;
  }
}
$p1=new Per ();
$p1->name="Abhi ";
$p1->show();
?>

<br>
<!-- Construction Function -->

<?php
class person{
    // we set Default value in name = no name and age=0
    public $name ;
    public $age ;
    
    function __construct($name = "No name",$age = 0){
    $this->name= $name;
    $this->age=$age;
    }
    function myshow (){
    echo "Your Name " . $this->name . " and Your age : " . $this->age . " . <br>" ;
    }
}
$p1=new person ();
$p2=new person ("Abhimanyu Yadav" , 20);
$p3=new person ("Rahul" , 23);
// $p1->name="Abhimnu Yadav ";
// $p1->age="22";
$p1->myshow();
$p2->myshow();
$p3->myshow();
?>