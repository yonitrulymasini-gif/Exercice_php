<?php
declare(strict_types=1);
$profile = ['name' => 'Mira', 'nickname' => null];
$lastLogin = new DateTime("2007-08-18");
// TODO
echo $profile["nickname"] ?? $profile["name"];
echo "\n";
var_dump(isset($profile["nickname"]));
var_dump(array_key_exists("nickname", $profile));
echo $lastLogin?->format("Y/m/d") ?? "jamais";
echo "\n";