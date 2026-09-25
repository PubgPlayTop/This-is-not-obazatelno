<?php
$numbers = [10, 20, 30, 40];
$numbers[1] = 200;
$numbers[] = 50;
$numbers[] = 60;
foreach ($numbers as $number) {
    echo $number . "\n";
}