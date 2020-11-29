<?php

/**
 * Import all classes in one file;
 */
require_once("Stable.php");
require_once("Animal.php");
require_once("Cow.php");
require_once("Chicken.php");


$stable = new Stable();

foreach ($stable->get_all_animals() as $key => $animal) {
    echo $animal . "<br>";
};

echo $stable->get_all_products();
