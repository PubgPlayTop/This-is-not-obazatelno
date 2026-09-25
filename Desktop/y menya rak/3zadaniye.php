<?php
$products = [
        "Ноутбук",
        "Мышь",
        "Клавиатура",
        "Монитор",
        "Наушники"
];
echo "Кол-во товаров: " . count($products) . "\n";
foreach ($products as $product) {
    echo $product . "\n";
}