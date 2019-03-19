<?php
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
?>