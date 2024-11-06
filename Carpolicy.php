<?php
class Carpolicy 
{
    private $policyNumber ="";
    private $yearlyPremium = "";
    private $dateofLastClaim =""; 

    public function __construct($pNumber, $yPremium)
    {   $this->policyNumber = $pNumber;
        $this->yearlyPremium = $yPremium;
        
    }
       
    public function setDateofLastClaim($pNumber)
    {
        $this->dateofLastClaim = $pNumber;
        
    }
       
    public function getTotalYearsNoClaims()
    {
        $currentDate = new DateTime();
        $lastDate= new DateTime($this->dateofLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }
        
    
    public function __toString() 
    {
        return "PN:1234 " . $this->policyNumber;
            

    }
    
    
}

?>