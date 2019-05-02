
<?php
require_once "interface/Hastax.php";
class CountTax implements HasTax
{
    /** @var float */
    public $taxAmount;
    
    public function __construct($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        
    }
    public function taxAmount()
    {
        return $this->taxAmount;
    }
    
    public function add(float $taxAmount)
    {
        $this->taxAmount = $this->taxAmount + $taxAmount;
        
    }
    public function subtract(float $taxAmount)
    {
        $this->taxAmount = $this->taxAmount - $taxAmount;
        
    }
       
}
?>
