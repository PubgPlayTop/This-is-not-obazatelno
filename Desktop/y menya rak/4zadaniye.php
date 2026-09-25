<?php
$numbers = [12, 7, 24, 15, 8, 31, 40, 55];
foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        echo $number . "\n";
    }
}