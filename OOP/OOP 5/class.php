<?php
#class which creates classes for the students
class FromClass extends Student {
    #create variables
    private $percentageSignedUp;
    private $pecentagePaid;
    public static $totalPaidClass;
    private $className;

    #set value
    public function setClass($className){
        $this->className = $className;
    }

    #calculates the percentage of the students who've signed up
    public function calculatePercentageSignedUp() {
        $total = 0;
        $yes = 0;
        foreach ($this->signedUpArray as $goes) {
            if ($goes == "yes") {
                $yes += 1;
            }
            $total += 1;
        }
        $this->percentageSignedUp = 100/$total*$yes;
    }

    #calculates the percentage of the students who've signed up has paid and the total
    public function calculatePaid() {
        $total = 0;
        $hasPaid = 0;
        $totalPaidClass = 0;
        foreach ($this->paidArray as $paid) {
            $totalPaidClass += $paid;
            if ($paid > 0) {
                $hasPaid += 1;
            }
            $total += 1;
        }
        self::$totalPaidClass = $totalPaidClass;
        $this->hasPaidPercentage = 100/$total*$hasPaid;
    }

    #returns the class name
    public function getClassName(){
        print "<h1>Class: ".$this->className."</h1>";
    }

    #returns the information for every student
    public function getClass(){
        print $this->name."<br>";
        print "Goes? ".$this->signedUp."<br>";
        if ($this->signedUp == "yes") {
            print "Paid: $".$this->paid."<br>";
        }
        print "<br>";
    }

    #returns the information for the class
    public function getClassStatus(){
        print "<h2>percentage signed up: ".$this->percentageSignedUp."% </h2>";
        print "<h2>Percentage paid: ".$this->hasPaidPercentage."% </h2>";
        print "<h2>Total paid: $".self::$totalPaidClass."</h2><br>";
    }
}
?>