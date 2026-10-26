<?php
declare(strict_types=1);
function discountedPrice(int $price, string $code): int {
    if ($price < 0) {
        throw new InvalidArgumentException('Prix négatif');
    }
    if ($code !== 'BON10') {
        throw new InvalidArgumentException('Code inconnu');
    }
    return intdiv($price * 90, 100);
}
foreach (['BON10', 'INCONNU'] as $code) {
    try { echo discountedPrice(100, $code), "\n"; }
    catch (InvalidArgumentException $error) { echo $error->getMessage(), "\n"; }
    finally { echo "Vérification terminée\n"; }
}