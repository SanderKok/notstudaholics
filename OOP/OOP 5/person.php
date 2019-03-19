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
?>