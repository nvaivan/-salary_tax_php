
<?php
require_once "Counttax.php";
class TaxCalculator
{
   
   function output($emps, $count){
    
    for($i=0; $i< $count; $i++)
      {
        $empl = $emps->getItem($i);
        $tax = $this->tax_to_money($empl, $empl->salary);
        $total = $this->salary($empl, $tax);

        echo " - " .$empl->name . " has salary is: ". $empl->salary .".";
        echo " Total tax is: ". $tax. " After deduct tax, Total is: <b>$". $total. "</b>";
        echo "<br> ";
      }
  }

  function child_tax($tax, $number){
    
    if($number >= 2){
      $tax->subtract(CHILD_TAX);
    }
  }

  function Old_tax($tax, $number){
    
    if($number > 50){
      $tax->add(OLD_TAX);
    } 
     
  }

  function call_all_tax_percent($empl){
    $tax = new CountTax(COUTRY_TAX);
    $this->child_tax($tax, $empl->child);
    $this->Old_tax($tax, $empl->old);
    return $tax->taxAmount;
  }

  function tax_to_money($empl, $salary){
    $int = $this->toInt($salary); 
    $percent = $this->call_all_tax_percent($empl);
    if($empl->hascar)
      $tax = $int * $percent / 100 + CAR_TAX;
    else $tax = $int * $percent / 100;  
    return $tax;
  }

  //change Money to Int
  function toInt($str)
  {
      return (int)preg_replace("/\..+$/i", "", preg_replace("/[^0-9\.]/i", "", $str));
  }  

  function calculator($salary, $tax){
    return $salary * $tax;
  }

  function salary($emp1, $tax){
    $int = $this->toInt($emp1->salary); 
    return $int - $tax;
  }
  
}
?>
