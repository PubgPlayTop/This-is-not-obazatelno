<?php
$names = [
    "Иван",
    "Анна",
    "Пётр",
    "Мария",
    "Алексей"
];

$inputName = "Володя";
if (in_array($inputName, $names)) {
    echo "пользователь найден\n";
} else {
    echo "пользователь не найден\n";
}