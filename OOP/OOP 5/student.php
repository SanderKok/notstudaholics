<?php
#class to create student
class Student extends Person {
    #create variables
    private static $signedUp;
    private static $paid;
    public static $studentArray = [];
    private static $signedUpArray = [];
    private static $paidArray = [];

    #sets value
    public function setStudentSignedUp($signedUp){
        $this->signedUp = $signedUp;
    }

    #sets value
    public function setStudentPaid($paid){
        $this->paid = $paid;
    }
    
    #adds value to an array
    public function addSignedUp(){
        $this->signedUpArray[] = $this->signedUp;
    }

    #adds value to an array
    public function addPaid(){
        $this->paidArray[] = $this->paid;
    }

    #adds value to an array
    public function addStudent(){
        self::$studentArray[] = $this->name;
    }
}
?>