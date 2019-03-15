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
#class that creates a patient needs person to work
class Patient extends Person {
    #sets standard values for an patient
    public function setPatient(){
        $this->function = "patient";
        $this->staff = "no";
    }

    #returns the function of the patient
    public function getFunction(){
        return $this->function;
    }

    #returns the value if staff or not
    public function getStaff(){
        return $this->staff;
    }
}
#class that creates the staff needs person to work
abstract class Staff extends Person {
    #sets the staff variable to yes
    public function setStaff() {
        $this->staff = "yes";
    }
    #returns the value
    public function getStaff() {
        return $this->staff;
    }
}
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
#class that creates appointments needs person to work
class Appointment extends Person {
    #create variables
    private static $time;
    private static $patient;
    private static $doctor;
    private static $nurse;
    private static $doctorWage;
    private static $nurseWage;

    #sets the time value
    public function setTime($time) {
        self::$time = $time;
    }

    #sets the values for an patient
    public static function setPatient(){
        self::$patient = parent::$name;
    }

    #sets the values for an doctor
    public static function setDoctor(){
        self::$doctor = parent::$name;
        self::$doctorWage = Doctor::$hourlyWage;
    }

    #sets the values for an nurse
    public static function setNurse(){
        self::$nurse = parent::$name;
        self::$nurseWage = Nurse::$hourlyWage;
    }

    #prints the appointment information
    public static function getAppointment(){
        print "APPOINTMENT <br>";
        print "Patient: ".self::$patient."<br>";
        print "Doctor: ".self::$doctor."<br>";
        #if nurse is present the information will be changed for the nurse else not
        if (self::$nurse != null){
            print "Nurse: ".self::$nurse."<br>";
            print "Appointment cost: ";
            print (self::$doctorWage + self::$nurseWage) * self::$time;
            print "<br>";
        } else {
            print "Appointment cost: ";
            print self::$doctorWage * self::$time;
            print "<br>";
        }
    }
}

#calls the appointment class
$appointment = new Appointment();
#sets the time for the appointment
$appointment->setTime(3);

#calls the patient class
$person = new Patient();
#the values
$person->setPerson("Bob", "green", "brown", 1.76, 64);
#send the needed values to the appointment
$appointment->setPatient();
#returns standard values for the patient
$person->setPatient();
$person->getStaff();
$person->getFunction();
#prints the person information
echo $person->getPerson();

#calls the doctor class
$person = new Doctor();
#person values
$person->setPerson("Henk", "blue", "blond", 1.20, 90);
$person->setStaff();
$person->getStaff();
#doctor values
$person->setDoctor(20);
#sends doctor information to the appointment
$appointment->setDoctor();
$person->getFunction();
#prints the person information
echo $person->getPerson();

#calls the nurse class
$person = new Nurse();
#person values
$person->setPerson("Bella", "blue", "blond", 1.75, 70);
$person->setStaff();
$person->getStaff();
#nurse values
$person->setNurse(9);

#send nurse information to appointment
//add a # in front of this line to remove the nurse from the appointment
//since nurses are optional for an appointment
$appointment->setNurse();

$person->getFunction();
#print the person information
echo $person->getPerson();

#print the appointment information
echo $appointment->getAppointment();
?>