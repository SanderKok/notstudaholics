<?php
#class that creates nurse information needs staff to work
class Nurse extends Staff {
    #creates variables
    public static $hourlyWage;
    public static $startingWage;

    #sets the values
    public function setNurse($hourlyWage) {
        self::$hourlyWage = $hourlyWage;
        $this->function = "nurse";
        self::$startingWage = $hourlyWage * 40;
    }

    #returns the function
    public function getFunction(){
        return $this->function;
    }
}
?>