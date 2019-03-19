<?php
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
?>