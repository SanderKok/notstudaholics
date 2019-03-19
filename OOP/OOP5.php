<?php
#abstract class with values every person has
abstract class Person {
    #create variables
    private static $name;
    
    #sets value
    public function setPerson($name){
        $this->name = $name;
    }
}
#class to create teachers
class Teacher extends Person {
    #create variables
    public static $teacherArray = [];

    #adds the teacher name to the array
    public function addTeacher(){
        self::$teacherArray[] = $this->name;
    }

    #gets the teacher header
    public function getTeacherHeader(){
        print "<h1>Teachers</h1>";
    }

    #gets the teacher name
    public function getTeacher(){
        print $this->name."<br>";
    }
}
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
#class which creates groups for the trip
class Group extends Person{
    #creates variables
    public static $groupsArray = [];
    private $groupArray = [];

    #creates every group within an array and is pushed inside another array
    public function addGroup(){
        $a = 0;
        $array = count(Student::$studentArray);
        foreach (Teacher::$teacherArray as $teacher) {
            if ($a < $array) {
                $this->groupArray = [];
                $groupTeacher = "<h2>".$teacher."</h2>";
                $this->groupArray[] = $groupTeacher;
                for ($x = 0; $a < $array and $x < 25; $x++) {
                    $student = Student::$studentArray[$a];
                    $this->groupArray[] = $student;
                    $a += 1;
                }
                self::$groupsArray[] = $this->groupArray;
            }
        }
    }
}
#class for the trip information
class Trip extends Person{
    #creates variables
    private static $totalPaid;

    #calculates the total paid from every class
    public function calculateTotalPaid(){
        self::$totalPaid += FromClass::$totalPaidClass;
    }

    #returns all the groups
    public function getGroups() {
        $x = 1;
        foreach (Group::$groupsArray as $group) {
            print "<h1>Group ".$x."</br>";
            foreach ($group as $member) {
                print $member;
                print "<br>";
            }
            $x += 1;
        }
    }

    #returns the total paid
    public function getTotalPaid(){
        print "<h1>Total paid: $".self::$totalPaid."</h1>";
    }
}


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