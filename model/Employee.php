
<?php
require ("interface/Person.php"); 
class Employee implements Person
{
    public $name;
    public $old;
    public $child;
    public $salary;  

    
    function __construct($name, $old, $child,  $hascar, $salary){
        $this->name = $name;
        $this->old = $old;
        $this->child = $child;
        $this->hascar = $hascar;
        $this->salary = $salary;
    }
    public function name(){
        return $this->name;
    }  
    public function old(){
      return $this->old;
    }
    public function child(){
      return $this->child;
    }
    public function salary(){
      return $this->salary;
    }
    public function hascar(){
      return $this->hascar;
    }

}
?>
