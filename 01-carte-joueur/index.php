<?php
declare(strict_types=1);
$pseudo = 'Nova';
$niveau = 7;
$energie = 84.5;
$actif = true;

echo ("Le pseudo est $pseudo et le type est ");
echo get_debug_type($pseudo,);
echo ("\n");

echo ("Le niveau est $niveau et le type est ");
echo get_debug_type($niveau);
echo ("\n");
$niveauTexte = "10";
var_dump ($niveau === $niveauTexte);

echo ("L'energie est $energie et le type est ");
echo get_debug_type($energie);
echo ("\n");

echo ("L'actif est $actif et le type est ");
echo get_debug_type($actif);
echo ("\n");