<?php
require("Room.php");

$houses =  [
    new House(46, 34, 20, 2, 4),
    new House(40, 20, 15, 2, 4),
    new House(20, 14, 55, 2, 4)
];

foreach ($houses as $rooms) {
    $rooms->addRoom(5, 6, 7);
    $rooms->addRoom(5, 3, 1);
    $rooms->addRoom(1, 7, 9);
}

foreach ($houses as $house) {
    $house->getPriceTotal();
}

require('index.view.php');