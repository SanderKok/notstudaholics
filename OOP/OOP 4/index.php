<?php
include "person.php";
include "patient.php";
include "staff.php";
include "doctor.php";
include "nurse.php";
include "appointment.php";

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