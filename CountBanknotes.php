<?php
/**
 * Description of CountBanknotes
 *
 * @author Jevgenija
 */
class CountBanknotes {
    
    private $banknotes = array(100, 50, 20, 10, 5, 1);
    
    protected function __construct() 
    {
       
    }

    /**
     * Method for creating an object
     * 
     * @return CountBanknotes
     */
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null){
            $inst = new CountBanknotes();
        }
        return $inst;
    }
    
        
    /**
     * Count minimum quantities of banknotes 
     * 
     * @param int $price
     * 
     * @return int
     */
    public function count($price)
    {
        $tempPrice = $price;
        $countBanknotes = 0;
        
        if(in_array($tempPrice, $this->banknotes)){
            return 1;
        }
        
        foreach($this->banknotes as $banknote){            
            $count = floor($tempPrice/$banknote);
            if($count < 1){
                continue;
            }
            $countBanknotes += $count;
            $tempPrice -= $banknote*$count;    
        }
        return (int)$countBanknotes;
    }
}
