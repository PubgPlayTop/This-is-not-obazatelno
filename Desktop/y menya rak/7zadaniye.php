<?php
$names  = [
    "Иван",
    "Пётр",
    "Анна",
    "Мария"
];
array_pop($names); // удаляет марию
array_unshift($names, "DJ Володя"); // добавляет меня
array_shift($names); // удаляет меня
foreach ($names as $name) {
    echo $name . "\n";
}