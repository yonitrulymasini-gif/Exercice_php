<?php
declare(strict_types=1);
$products = [
    ['name' => 'Clavier', 'price' => 59, 'available' => true],
    ['name' => 'Tapis', 'price' => 12, 'available' => false],
    ['name' => 'Souris', 'price' => 30, 'available' => true],
];
// TODO : filter, map, reduce.
$available = array_values(array_filter($products, fn (array $product): bool => $product['available']));
$names = array_map(fn (array $product): string => $product['name'], $available);
$total = array_reduce($available, fn (int $sum, array $product): int => $sum + $product['price'], 0);
echo implode(', ', $names), "
Total : $total €\n";