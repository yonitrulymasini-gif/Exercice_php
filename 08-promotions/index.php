<?php
declare(strict_types=1);
$prices = [10, 40, 100];
$discount = 15;
// TODO : closure puis fonction fléchée.
$calcule = function(int $prices) use ($discount): int{
    return max(0,$prices - $discount);
};
$prixavecreduction = array_map($calcule, $prices);
echo "Prix initiaux : " . implode(', ', $prices) . "\n";
echo "Après remise : " . implode(', ', $prixavecreduction) . "\n";
