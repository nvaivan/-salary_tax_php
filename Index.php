<?php
require ("model/Employees.php"); 
require ("model/Tax_calculator.php"); 
const COUTRY_TAX = 20; 
const CHILD_TAX = 2;
const OLD_TAX = 7;
const CAR_TAX = 500;


function read_file(){
    $filename = 'input.txt';

    if (!file_exists($filename)) {
        echo "The file $filename does not exist";
        exit;
    } 

    $read = file($filename);
    $i = 0;
    $arr = [];
    foreach ($read as $line) {
        if ($i >= 1){
            $arr[] = explode(" ",$line);
        }
        $i++;
    }
    return $arr;
}

$arr = read_file();
if(is_array($arr )){
    $emp = new Employees();
    $listEmp = $emp->getList($arr);

    $tax = new TaxCalculator();
    $tax->output($listEmp, count($arr));
}
else {
    echo "Data is wrong";
    exit;
}


?> 