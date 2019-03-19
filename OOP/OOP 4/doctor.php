<?php
#class that creates the information for an doctor needs staff to work
class Doctor extends Staff {
    #create variable
    public static $hourlyWage;

    #sets the values
    public function setDoctor($hourlyWage) {
        self::$hourlyWage = $hourlyWage;
        $this->function = "doctor";
    }

    #returns the funtion
    public function getFunction(){
        return $this->function;
    }
}
?>