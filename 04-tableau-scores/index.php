<?php
declare(strict_types=1);
$scores = [45, 0, 72, 120, 140];
// TODO : foreach, for, while ; vérifiez la terminaison des boucles.
foreach ($scores as $index => $score) {
    if ($score === 0) continue;
    echo "Manche ", $index + 1, " : $score, \n";
    if ($score > 100) {
        echo "Score Exceptionnels :  $score \n";
        break;
    }
}

for ($essai = 1; $essai <= 3; $essai++) echo "Essai $essai\n";
$secondes = 3;
while ($secondes > 0) echo $secondes--, "\n";
