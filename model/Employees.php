<?php
require_once "Collection.php";
require ("model/Employee.php"); 

class Employees
{

    function getList($arr){
        $c = new Collection();
        foreach ($arr as $user) {
            $c->addItem(new Employee($user[0],$user[1],$user[2], $user[3],$user[4]));
        }
       return $c;
    }
    
}


?>