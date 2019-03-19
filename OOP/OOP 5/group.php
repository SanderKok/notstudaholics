<?php
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
?>