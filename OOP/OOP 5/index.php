<?php
include "person.php";
include "teacher.php";
include "student.php";
include "class.php";
include "group.php";
include "trip.php";

$trip = new Trip();

$teachers = new Teacher();
$teachers->getTeacherHeader();
$names = ["Mr. Owens", "Ms. Whitehouse", "Mr. Hammond", "Ms. Solis", "Mr. Rodgers", "Ms. Molina"];
foreach ($names as $name){
    $teachers->setPerson($name);
    $teachers->addTeacher();
    $teachers->getTeacher();
}

$class = new FromClass();
$class->setClass("AAAAA");
$class->getClassName();
$names = ["Carla", "Nina", "Jo", "Henny", "Lisa", "Caroline", "Elah", "Linda", "Janna", "Milan", "Rina", "Eva", "Sara", "Jeanette", "Francisca", "Febe", "Georgina", "Alexandra", "Lonikie", "Roos"];
foreach ($names as $name) {
    $class->setPerson($name);
    $signedUp = rand(1, 10);
    if ($signedUp > 4) {
        $signedUp = "yes";
    } else {
        $signedUp = "no";
    }
    $class->setStudentSignedUp($signedUp);
    $class->addSignedUp();
    if ($signedUp == "yes") {
        $paid = rand(1, 10);
        if ($paid > 3) {
            $paid = rand(20, 40);
            $class->addStudent();
        } else {
            $paid = 0;
        }
        $class->setStudentPaid($paid);
        $class->addPaid();
    }
    $class->getClass();
}
$class->calculatePercentageSignedUp();
$class->calculatePaid();
$trip->calculateTotalPaid();
$class->getClassStatus();

$class = new FromClass();
$class->setClass("BBBBB");
$class->getClassName();
$names = ["Calvin", "Luis", "Jonathan", "Tristan", "Brendan", "Abdul", "Mae", "Jessie", "Eden", "Aadam", "Gethin", "Leon", "Charlie", "Carmen", "Paul", "Jake", "Cain", "Sara", "Georgie", "Mark"];
foreach ($names as $name) {
    $class->setPerson($name);
    $signedUp = rand(1, 10);
    if ($signedUp > 4) {
        $signedUp = "yes";
    } else {
        $signedUp = "no";
    }
    $class->setStudentSignedUp($signedUp);
    $class->addSignedUp();
    if ($signedUp == "yes") {
        $paid = rand(1, 10);
        if ($paid > 3) {
            $paid = rand(20, 40);
            $class->addStudent();
        } else {
            $paid = 0;
        }
        $class->setStudentPaid($paid);
        $class->addPaid();
    }
    $class->getClass();
}
$class->calculatePercentageSignedUp();
$class->calculatePaid();
$trip->calculateTotalPaid();
$class->getClassStatus();

$class = new FromClass();
$class->setClass("CCCCC");
$class->getClassName();
$names = ["Elsie", "Jay", "Niamh", "Cora", "Kimberly", "Esther", "Gemma", "Demi", "Iqra", "Dorothy", "Ray", "Marie", "Aidan", "Isabelle", "Gloria", "Robin", "Nora", "Cory", "Sonny", "Owen"];
foreach ($names as $name) {
    $class->setPerson($name);
    $signedUp = rand(1, 10);
    if ($signedUp > 4) {
        $signedUp = "yes";
    } else {
        $signedUp = "no";
    }
    $class->setStudentSignedUp($signedUp);
    $class->addSignedUp();
    if ($signedUp == "yes") {
        $paid = rand(1, 10);
        if ($paid > 3) {
            $paid = rand(20, 40);
            $class->addStudent();
        } else {
            $paid = 0;
        }
        $class->setStudentPaid($paid);
        $class->addPaid();
    }
    $class->getClass();
}
$class->calculatePercentageSignedUp();
$class->calculatePaid();
$trip->calculateTotalPaid();
$class->getClassStatus();

$class = new FromClass();
$class->setClass("DDDDD");
$class->getClassName();
$names = ["Alex", "Angus", "Eric", "Aiden", "Abdul", "Freddy", "Charles", "Marco", "Ciaran", "Oskar", "Hussain", "Jakob", "Donald", "Theo", "Musa", "Mollie", "Pearl", "Alfie", "Ava"];
foreach ($names as $name) {
    $class->setPerson($name);
    $signedUp = rand(1, 10);
    if ($signedUp > 4) {
        $signedUp = "yes";
    } else {
        $signedUp = "no";
    }
    $class->setStudentSignedUp($signedUp);
    $class->addSignedUp();
    if ($signedUp == "yes") {
        $paid = rand(1, 10);
        if ($paid > 3) {
            $paid = rand(20, 40);
            $class->addStudent();
        } else {
            $paid = 0;
        }
        $class->setStudentPaid($paid);
        $class->addPaid();
    }
    $class->getClass();
}
$class->calculatePercentageSignedUp();
$class->calculatePaid();
$trip->calculateTotalPaid();
$class->getClassStatus();

$class = new FromClass();
$class->setClass("EEEEE");
$class->getClassName();
$names = ["Rosa", "Polly", "Ella", "Caitlin", "Erica", "Morgan", "Pearl", "Isobel", "Amber", "Tanya", "Bryan", "Saif", "Jamal", "Wayne", "Malachi", "Jose", "Leonard", "Owen", "Terry"];
foreach ($names as $name) {
    $class->setPerson($name);
    $signedUp = rand(1, 10);
    if ($signedUp > 4) {
        $signedUp = "yes";
    } else {
        $signedUp = "no";
    }
    $class->setStudentSignedUp($signedUp);
    $class->addSignedUp();
    if ($signedUp == "yes") {
        $paid = rand(1, 10);
        if ($paid > 3) {
            $paid = rand(20, 40);
            $class->addStudent();
        } else {
            $paid = 0;
        }
        $class->setStudentPaid($paid);
        $class->addPaid();
    }
    $class->getClass();
}
$class->calculatePercentageSignedUp();
$class->calculatePaid();
$trip->calculateTotalPaid();
$class->getClassStatus();

$group = new Group();
$group->addGroup();

$trip->getGroups();
$trip->getTotalPaid();
?>