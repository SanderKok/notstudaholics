<?php
#abstract class with values every person has
abstract class Person {
    #creates variables
    public static $name;
    private $eyes;
    private $hair;
    private $length;
    private $weight;

    #sets values
    public function setPerson($name, $eyes, $hair, $length, $weight) {
        self::$name = $name;
        $this->eyes = $eyes;
        $this->hair = $hair;
        $this->length = $length;
        $this->weight = $weight;
    }

    #prints all the information for a specifik person
    public function getPerson(){
        print "Name: ".self::$name."<br>";
        print "Eyecolor: ".$this->eyes."<br>";
        print "Haircolor: ".$this->hair."<br>";
        print "Length: ".$this->length." M <br>";
        print "Weight: ".$this->weight." KG <br>";
        print "Function: ".$this->function."<br>";
        #if function of the person is doctor gets the value from the doctor class
        if ($this->function == "doctor"){
            print "Hourly Wage: ".Doctor::$hourlyWage."<br>";
        #if function of the person is nurse gets the value from the nurse class
        } else if ($this->function == "nurse"){
            print "Hourly Wage: ".Nurse::$hourlyWage."<br>";
            print "Income weekly: $".Nurse::$startingWage."<br>";
        }
        print "<br>";
    }
}
?>