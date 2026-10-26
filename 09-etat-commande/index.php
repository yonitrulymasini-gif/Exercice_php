<?php
declare(strict_types=1);
enum statut: string
{
    case brouillon = "b";
    case payée = "p"; 
    case expédiée = "e";
}

$h = statut::tryFrom('b');
var_dump($h);

foreach (['paid', 'lost'] as $raw) {
    $etiquette = match ($raw) {
    "paid" => 'Succès',
    "lost" => 'Introuvable',
    default => 'Autre réponse',
    };
    echo $etiquette,"\n";
}

