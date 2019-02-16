<?php
require('House.php');

$houses = [
    new House(4, 4, 7, 4, 3),
    new House(2, 7, 5, 7, 2),
    new House(7, 2, 4, 1, 5)
];

foreach ($houses as $house) {
    $house->calcPrice();
}

require('index.view.php');