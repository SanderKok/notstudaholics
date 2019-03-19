<?php
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
?>