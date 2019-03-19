<?php
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
?>