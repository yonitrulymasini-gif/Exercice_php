<?php
declare(strict_types=1);
$artiste = 'Neon Pulse';
$numero = 23;
$prix = 35.0;
// TODO : produire trois affichages distincts.
echo ("Le numéro est $numero \n");
echo ("l'artiste est ". $artiste . "\n");
echo sprintf('%.2f', $prix);