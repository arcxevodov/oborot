<?php
require_once "Garden.php";
$garden = new Garden($argv[1], $argv[2], $argv[3], $argv[4]);
$total = $garden->collect();
echo "Total:\n";
echo "Apples: " . $total["Apple"]["Sum"] . "\n";
echo "Pears: " . $total["Pear"]["Sum"] . "\n";
echo "Weights:" . "\n";
echo "Apples: " . $total["Apple"]["Weight"] / 1000 . "kg" . "\n";
echo "Pears: " . $total["Pear"]["Weight"] / 1000 . "kg" . "\n";