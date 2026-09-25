<?php
$numbers = [45, 12, 78, 3, 25, 9, 100];
echo "исходный массив: " . implode(", ", $numbers) . "\n";
sort($numbers);
echo "по возрастанию: " .implode(", ", $numbers) . "\n"; 
rsort($numbers);
echo "по убыванию: " . implode(", ", $numbers) . "\n";