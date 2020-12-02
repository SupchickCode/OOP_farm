<?php

/**
 * Import all classes in one file;
 */
require_once("Stable.php");
require_once("Animal.php");
require_once("Cow.php");
require_once("Chicken.php");


$stable = new Stable();

/**
 * Method `get_all_animals` returns `array` 
 * i use `foreach statement` to display it on the screen
 */
foreach ($stable->get_all_animals() as $key => $animal) {
    echo $animal;
};

/**
 * Display sum
 */
echo $stable->get_products_sum();
